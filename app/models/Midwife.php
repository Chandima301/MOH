<?php

class Midwife extends User {

    public function __construct() {
        parent::__construct();
    }

    public function getConfirmedMothers() {
        return $this->find([
            'conditions' => ['user_type = ?', 'confirmation = ?'], 
            'bind' => ['M', 1], 
            'columns' => 'user.*,mother.confirmation',
            'join' => 'LEFT JOIN mother ON mother.idcardnum = user.idcardnum'
            ]);
    }

    public function getUnconfirmedMothers() {
        return $this->find([
            'conditions' => ['user_type = ?', 'confirmation = ?'], 
            'bind' => ['M', 0], 
            'columns' => 'user.*,mother.confirmation',
            'join' => 'LEFT JOIN mother ON mother.idcardnum = user.idcardnum'
            ]);//Join types 
                // RIGHT , LEFT, INNER
    }
    
    public function getMotherByID($id) {
        return $this->find(['conditions' => ['idcardnum = ?', 'user_type = ?'], 
        'bind' => [$id, 'M']
        ]);
    }

    public function getByID($id) { 
        return $this->findFirst(['conditions' => 'idcardnum = ?', 'bind' => [$id]]);
    }
    public function getMO() {
        return $this->findFirst(['conditions' => 'user_type = ?', 'bind' => ['MO']]);
    }

}