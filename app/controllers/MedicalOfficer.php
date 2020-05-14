<?php

class MedicalOfficer extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('User');
        $this->view->setLayout('mediofficer_layout');
    }

    public function indexAction(){
        $this->view->render('MedicalOfficer/index');
    }



}