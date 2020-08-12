<?php

class Mother extends Model {
    public function __construct() {
        $table = 'mother';
        parent::__construct($table);
    }

    public function addNewMother($params){
        $this->assign($params);
        $this->confirmation = 1;
        $this->save();
    }

    public function registerMother($params) {
        $this->insert($params);
    }

    public function getByID($id) {
        return $this->findFirst(['conditions' => 'idcardnum = ?', 'bind' => [$id]]);
    }

}