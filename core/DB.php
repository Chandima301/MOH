<?php
class DB{
    private static $_instance = null;
    private $_pdo, $_query, $_error = false, $_result, $_count = 0, $_lastInsertID = null;

    private function __construct(){
        try{
            $this->_pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->_pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        } catch(PDOException $e){
            die($e->getMessage());
        }

    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function query($sql, $params = []){
        $this->_error = false;
        if($this->_query = $this->_pdo->prepare($sql)){
            $x = 1;
            if(count($params)){
                foreach($params as $params){
                    $this->_query->bindValue($x, $params);
                    $x++;
                }
            }
            if($this->_query->execute()){
                $this->_result = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
                $this->_lastInsertID = $this->_pdo->lastInsertID();
            }else{
                $this->_error = true;
            }
        }
        return $this; 
    }
    
    public function insert($table, $fields = []){
        $fieldString = '';
        $valueString = '';
        $values = [];

        foreach($fields as $field => $value){
            $fieldString .= '`' . $field . '`,';
            $valueString .= '?,';
            $values[] = $value;
            
        }

        $fieldString = rtrim($fieldString, ',');
        $valueString = rtrim($valueString, ',');
        $sql = "INSERT INTO {$table} ({$fieldString}) VALUES ({$valueString})";
        if(!$this->query($sql, $values)->error()){
            return true;
        }
        return false;
    }

    public function update($table, $fields = [], $key, $keyvalue){
        $fieldString = '';
        $values = [];
        foreach($fields as $field => $value){
            $fieldString .= ' ' . $field . ' = ?,';
            $values[] = $value; 
        }
        $values[] = $keyvalue; 
        $fieldString = trim($fieldString);
        $fieldString = rtrim($fieldString, ',');
        
        $sql = "UPDATE {$table} SET {$fieldString} WHERE {$key} = ?";

        if(!$this->query($sql, $values)->error()){
            return true;
        }
        return false;

    }

    public function delete($table, $key, $keyvalue){
        $sql = "DELETE FROM {$table} WHERE {$key} = {$keyvalue}";
        if(!$this->query($sql)->error()){
            return true;
        }
        return false;
    }

    protected function _read($table, $params=[]){

        $conditionString = '';
        $bind = [];
        $order = '';
        $limit = '';
        $columns = '*';
        $join = '';
        
        //conditions
        if (isset($params['conditions'])) {
            if (is_array($params['conditions'])) {
                foreach ($params['conditions'] as $condition) {
                    $conditionString .= ' ' . $condition . ' AND';
                }
                $conditionString = trim($conditionString);
                $conditionString = rtrim($conditionString , ' AND');
            } else {
                $conditionString = $params['conditions'];
            }
            if ($conditionString != '') {
                $conditionString = ' WHERE ' . $conditionString;
            }				
        }

        //bind
        if (array_key_exists('bind', $params)) {
            $bind = $params['bind'];
        }

        //order
        if (array_key_exists('order', $params)) {
            $order = ' ORDER BY ' . $params['order'];
        }

        //limit
        if (array_key_exists('limit', $params)) {
            $limit = ' LIMIT ' . $params['limit'];
        }

        //columns
        if (array_key_exists('columns', $params)) {
            $columns = $params['columns'];
        }

        if(array_key_exists('join',$params)){
            $join = ' '.$params['join'];
        }


        $sql = "SELECT {$columns} FROM {$table}{$join}{$conditionString}{$order}{$limit}";
       // Helper::dnd($sql);
        if ($this->query($sql, $bind)) {
            if (!count($this->_result)) {
                return false;
            }
            return true;
        }
        return false;
    }

    public function find($table, $params){
        if($this->_read($table, $params)){
            return $this->results();
        }
        return false;
    }

    public function findFirst($table, $params){
        if($this->_read($table, $params)){
            return $this->first();
        }
        return false;
    }

    public function first(){
        return (!empty($this->_result))? $this->_result[0] : [];
    }


    public function error(){
        return $this->_error;
    }

    public function results(){
        return $this->_result;
    }

    public function count(){
        return $this->_count;
    }

    public function get_columns($table){
        return $this->query("SHOW COLUMNS FROM {$table}")->results();
    }

    public function lastID(){
        return $this->_lastInsertID;
    }

    public function update1($table, $fields = [], $conditions){
        $fieldString = '';
        $values = [];
        $conditionString = '';
        foreach($fields as $field => $value){
            $fieldString .= ' ' . $field . ' = ?,';
            $values[] = $value; 
        }
        foreach($conditions as $condition => $val){
            $conditionString .= $condition . ' = ? AND ';
            $values[] = $val;
        }
        $fieldString = trim($fieldString);
        $fieldString = rtrim($fieldString, ',');

        $conditionString = trim($conditionString);
        $conditionString = rtrim($conditionString, ' AND');

        $sql = "UPDATE {$table} SET {$fieldString} WHERE {$conditionString}";
        if(!$this->query($sql, $values)->error()){
            return true;
        }
        return false;

    }

    public function update2($table, $fields = [], $key, $keyvalue,$params=[]){
        $fieldString = '';
        $values = [];
        foreach($fields as $field => $value){
            if(is_numeric($field)){
                $fieldString .= ' `' . $field . '` = ?,';
            }else{
            $fieldString .= ' ' . $field . ' = ?,';
            }
            $values[] = $value;
        }
        $fieldString = trim($fieldString);
        $fieldString = rtrim($fieldString, ',');
        $sql = "UPDATE {$table} SET {$fieldString} WHERE {$key} = {$keyvalue}";
        if(!empty($params)){
            foreach($params as $param =>$value){
                $sql.=" AND {$param} = "."'".$value."'";
            }
        }
        if(!$this->query($sql, $values)->error()){
            return true;
        }
        return false;

    }
    protected function _lockANDread($table, $params=[]){

        $conditionString = '';
        $bind = [];
        $order = '';
        $limit = '';
        $columns = '*';
        $join = '';
        
        //conditions
        if (isset($params['conditions'])) {
            if (is_array($params['conditions'])) {
                foreach ($params['conditions'] as $condition) {
                    $conditionString .= ' ' . $condition . ' AND';
                }
                $conditionString = trim($conditionString);
                $conditionString = rtrim($conditionString , ' AND');
            } else {
                $conditionString = $params['conditions'];
            }
            if ($conditionString != '') {
                $conditionString = ' WHERE ' . $conditionString;
            }				
        }

        //bind
        if (array_key_exists('bind', $params)) {
            $bind = $params['bind'];
        }

        //order
        if (array_key_exists('order', $params)) {
            $order = ' ORDER BY ' . $params['order'];
        }

        //limit
        if (array_key_exists('limit', $params)) {
            $limit = ' LIMIT ' . $params['limit'];
        }

        //columns
        if (array_key_exists('columns', $params)) {
            $columns = $params['columns'];
        }

        if(array_key_exists('join',$params)){
            $join = ' '.$params['join'];
        }


        $sql = "SELECT {$columns} FROM {$table}{$join}{$conditionString}{$order}{$limit} FOR UPDATE";
       // Helper::dnd($sql);
        if ($this->query($sql, $bind)) {
            if (!count($this->_result)) {
                return false;
            }
            return true;
        }
        return false;
    }

    public function lockANDfind($table, $params){
        if($this->_lockANDread($table, $params)){
            return $this->results();
        }
        return false;
    }


    public function lockANDfindFirst($table, $params){
        if($this->_lockANDread($table, $params)){
            return $this->first();
        }
        return false;
    }



}