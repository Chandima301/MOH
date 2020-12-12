<?php

class TimeTable extends Report{
    public function __construct(){
        $table = 'time_table';
        parent::__construct($table);

    }

    public function getPendingTimeTables(){
        return $this->find(['conditions'=>'approved = ?',
        'bind'=>['0'],
        'columns'=>'time_table.id,time_table.idcardnum,time_table.area,time_table.month,time_table.date, user.name',
        'join' => 'INNER JOIN user ON user.idcardnum = time_table.idcardnum']);
    }

    public function getPendingTimeTablesCount(){
        return count($this->find(['conditions'=>'approved = ?',
        'bind'=>['0']]));
    }


    public function findByID($id){
        return $this->findfirst(['conditions'=>['time_table.id = ?'],
        'bind'=>[$id],
        'join'=>'INNER JOIN user ON user.idcardnum = time_table.idcardnum']);
    }

    public function findByIDcardnum($id){
        return $this->find(['conditions'=>'idcardnum = ?','bind'=>[$id],'columns'=>'id,idcardnum,area,month,date,approved']);
    }
    
    public function getTimeTableSlotsByDay($month, $day){
        return $this->find(['conditions' => ['approved = ?', 'month = ?'], 
        'bind' => ['1',$month],
        'columns'=>'time_table.idcardnum,'.'`'.$day.'`'.',user.email,user.phone,user.name',
        'join'=>'INNER JOIN user ON user.idcardnum = time_table.idcardnum']);

    }

    public function getRecentApprovedTimeTables(){
        return $this->find(['conditions'=>'approved = ?',
        'bind'=>['1'],
        'columns'=>'time_table.id,time_table.idcardnum,time_table.area,time_table.month,time_table.date,approveddate,approvedby, user.name',
        'join' => 'INNER JOIN user ON user.idcardnum = time_table.idcardnum',
        'order' => 'approveddate DESC',
        'limit' => 5]);
    }

    public function updateApproval($id,$name){
        return $this->update(['approved' => '1', 'approvedby' => $name, 'approveddate' => date("Y-m-d H:i:s")],'id',$id);
    }

}