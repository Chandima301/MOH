<?php

class Login extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }

    public function indexAction($name){
        $this->view->render('login/index');
    }
}