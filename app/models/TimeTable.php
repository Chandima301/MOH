<?php

class TimeTable extends Model{
    public function __construct(){
        $table = 'time_table';
        parent::__construct($table);

    }

    public function getPendingTimeTables(){
        return $this->find(['conditions'=>'approved = ?','bind'=>['0'],'columns'=>'id,idcardnum,name,area,month,date']);
    }

    public function findByID($id){
        return $this->findfirst(['conditions'=>['id = ?','approved = ?'],'bind'=>[$id,'0']]);
    }

    public function findByIDcardnum($id){
        return $this->find(['conditions'=>'idcardnum = ?','bind'=>[$id],'columns'=>'id,idcardnum,name,area,month,date,approved']);
    }
    
    public function getTimeTableSlotsByDay($month, $day){
        return $this->find(['conditions' => ['approved = ?', 'month = ?'], 'bind' => ['1',$month],'columns'=>'idcardnum,'.'`'.$day.'`']);

    }

}