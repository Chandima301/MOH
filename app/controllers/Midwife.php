<?php

class Midwife extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('midwife_layout');
    }

    public function indexAction(){
        $this->view->render('midwife/index');
    }

    public function workplanAction(){
        $this->view->setLayout('workplan_layout');
        $this->view->render('midwife/workplan');
    }



}