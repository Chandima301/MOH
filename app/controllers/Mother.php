<?php

class Mother extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('mother_layout');
    }

    public function indexAction(){
        $user = currentUser();
        $this->view->name = $user->name;
        $this->view->render('mother/index');
    }

}