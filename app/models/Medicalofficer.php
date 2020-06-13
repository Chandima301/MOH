<?php

class Medicalofficer extends User{
    public function __construct($user = ''){
        parent::__construct($user);
    }
    
    public function getAllMidwifes(){
        return $this->find(['conditions'=>"user_type = ?", 'bind' =>['MI']]);
    }

    public function getMidwifeByID($id){
        return $this->find(['conditions'=>["idcardnum = ?", "user_type = ?"], 'bind' =>[$id, 'MI']]);
    }

    public function findByID($id){
        return $this->findFirst(['conditions'=>"idcardnum = ?", 'bind' =>[$id]]);
    }

}