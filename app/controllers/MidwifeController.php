<?php

class MidwifeController extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('midwife_layout');
    }

    public function indexAction(){
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->render('midwife/index');
    }

    public function workplanAction(){
        $user = User::currentUser();
        $this->view->name = $user->name;
        
        $this->view->setLayout('workplan_layout');
        $this->view->render('midwife/workplan');
    }



}