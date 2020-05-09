<?php
class Model { 

    protected $_db, $_table, $_modelName, $_softDelete = false, $_columnNames = [];

    public $id;

    public function __construct($table){
        $this->_db = DB::getInstance();
        $this->_table = $table;
        $this->_setTableColumns();
        $this->_modelName = str_replace(' ', '', ucwords(str_replace('_', ' ', $this->_table)));
    }

    protected function _setTableColumns(){
        $columns = $this->get_columns();
        foreach ($columns as $column) {
            $this->_columnNames[] = $column->Field;
            $this->{$columnName} = null;
        }
    }

    public function get_columns(){
        return $this->_db->get_columns($this->_table);
    }

    public function search($params = []){
        $results = [];
        $resultsQuery = $this_db->search($this->_table, $params);
        foreach($resultsQuery as $result){
            $obj = new $this->_modelName($this->_table);
            foreach($result as $key => $val){
                $obj->$key = $val;
            }
            $results[] = $obj;
        }

        return $results;
    }

    public function save(){
        $fields = [];
        foreach($this->_coloumNames as $column){
            $fields[$column] = $this->$column;
        }
        //detemine whether to update or insert

        if(property_exists($this, $id) && $this->id != ''){
            return $this->update($fields, 'id', $id);
        }else{
            return $this->insert($fields);
        }
    }

    public function insert($fields){
        if($fields)return false;
        return $this->_db->insert($this->_table, $fields);
    }

    public function update($fields, $key, $keyvalue){
        if(empty($fields) || $key == '' || $keyvalue) return false;
        return $this->_db->update($this->_table, $fields, $key, $keyvalue);
    }

    public function data(){
        $data = new stdClass();
        foreach($this->_columnNames as $column){
            $data->column = $this->column;
        }
        return $data;
    }

    public function assign($params){
        if(!empty($params)){
            foreach($params as $key => $val){
                if(in_array($key, $this->_columnNames)){
                    $this->$key = sanitize($val);
                }
            }
            return true;
        }
        return false;
    }

    public function query($sql, $bind){
        return $this->_db->query($sql, $bind);
    }

}



