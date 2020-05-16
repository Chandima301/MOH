<?php

class Medicalofficer extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('mediofficer_layout');
    }

    public function indexAction(){
        $user = currentUser();
        $this->view->name = $user->name;
        $this->view->render('medicalOfficer/index');
    }



}