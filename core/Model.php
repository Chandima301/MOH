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
            $columnName = $column->Field;
            $this->_columnNames[] = $columnName;
            $this->{$columnName} = null;
        }
    }

    public function get_columns(){
        return $this->_db->get_columns($this->_table);
    }

    protected function _softDeleteParamsAdding($params){
        if($this->_softDelete){
            if(array_key_exists('conditions',$params)){
                if(is_array($params['conditions'])){
                    $params['conditions'][] = "deleted != 1";
                }else{
                    $params['conditions'] .= " AND deleted != 1";
                }
            }else{
                $params['conditions'] = "deleted != 1";
            }
        }
        return $params;
    }

    public function find($params = []){
        $params = $this->_softDeleteParamsAdding($params);
        $results = [];
        $resultsQuery = $this->_db->find($this->_table, $params);
        if(!$resultsQuery) return [];
        foreach($resultsQuery as $result){
            $obj = new $this->_modelName($this->_table);
            $obj->populateObjData($result);
            $results[] = $obj;
        }
        return $results;
    }

    public function findFirst($params = []){
        $params = $this->_softDeleteParamsAdding($params);
        $resultsQuery = $this->_db->findFirst($this->_table, $params);
        $result = new $this->_modelName($this->_table);
        if($resultsQuery)$result->populateObjData($resultsQuery);
        return $result;
    }

    public function populateObjData($result){
        foreach($result as $key => $val){
            $this->$key = $val;
            
        }
    }

    public function save(){
        $fields = [];
        foreach($this->_columnNames as $column){
            $fields[$column] = $this->$column;
        }
        //detemine whether to update or insert

        if(property_exists($this, 'id') && $this->id != ''){
            return $this->update($fields, 'id', $this->id);
        }else{
            return $this->insert($fields);
        }
    }

    public function save1($params=[],$conditons=[]){
        //Helper::dnd($params);
        $fields = [];
        foreach($params as $param =>$value){
            if(in_array($param, $this->_columnNames)){
            $fields[$param] =$value;
            }
        }

        //detemine whether to update or insert
        $arr=["conditions"=>["id=?"],"bind"=>[$this->id]];
        if(!empty($conditons)){
            foreach($conditons as $conditon => $value){
                $arr["conditions"][] =$conditon."=?";
                $arr["bind"][] =$value;
            }
        }

        if(property_exists($this, 'id') && $this->id != ''){
            //Helper::dnd($arr);
            if(!empty( $this->_db->findFirst($this->_table,$arr))){ //dnd($conditons);
                  //Helper::dnd($this->id);
                 return $this->update2($fields, 'id', $this->id, $conditons);

            }
            else{
              //Helper::dnd($fields);
                return  $this->insert($fields);

            }
        }else{
            //Helper::dnd($fields);
            return $this->insert($fields);

        }
    }

    public function insert($fields){
        if(!$fields)return false;
        return $this->_db->insert($this->_table, $fields);
    }

    public function update($fields, $key, $keyvalue){
        if(empty($fields) || $key == '' || $keyvalue == '') return false;
        return $this->_db->update($this->_table, $fields, $key, $keyvalue);
    }

    public function update1($fields, $conditions){
        if(empty($fields) || empty($conditions)) return false;
        return $this->_db->update1($this->_table, $fields, $conditions);
    }

    public function update2($fields, $key, $keyvalue, $params=[]){
        
        if(empty($fields) || $key == '' || $keyvalue=='') return false;
        return $this->_db->update2($this->_table, $fields, $key, $keyvalue,$params);
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
                    $this->$key = Helper::sanitize($val);
                }
            }
            return true;
        }
        return false;
    }

    public function query($sql, $bind){
        return $this->_db->query($sql, $bind);
    }

    public function delete($id =''){
        if($id == '' && $this->id == '')return false;
        $id = ($id == '')? $this->id :$id;
        if($this->_softDelete){
            return $this->update(['deleted'=>1],'id',$id);
        }
        return $this->_db->delete($this->_table, 'id', $id);
    }

    public function lockANDfindFirst($params = []){
        $params = $this->_softDeleteParamsAdding($params);
        $resultsQuery = $this->_db->lockANDfindFirst($this->_table, $params);
        $result = new $this->_modelName($this->_table);
        if($resultsQuery)$result->populateObjData($resultsQuery);
        return $result;
    }

}



