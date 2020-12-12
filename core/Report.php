<?php


class Report extends Model{
    public function __construct($param){
        $table =$param;
        parent::__construct($table);
    }
    public function getFromDatabase($id){
        return $this->findFirst(['conditions'=>"id = ?", 'bind' =>[$id]]);

    }
    public function updateDatabase($params){ // update database with parameters
        $this->assign($params);
        $this->save1($params);

    }
    public function updateDatabase2($params,$conditions){ //update data which has specific conditions 
        $this->assign($params);
        $this->save1($params,$conditions);
    }

    
    


}
