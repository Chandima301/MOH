<?php

class Login extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }

    public function indexAction(){
        $db = DB::getInstance();
        $sql = "SELECT * FROM mothers";
        $mothers = $db->query($sql);
        dnd($mothers);
        $this->view->render('login/index');
    }
}