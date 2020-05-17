<?php

class Medicalofficer extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('mediofficer_layout');
    }

    public function indexAction(){
        $user = currentUser();
        $this->view->name = $user->name;
        $posted_values = ['name'=>'', 'idcardnum'=>'', 'birthday'=>'','address'=>'', 'phone'=>'', 'email'=>'', 'pwd'=>'', 'confirm'=>''];
        $this->view->post = $posted_values;
        $this->view->render('medicalOfficer/index');
    }

    public function registerAction(){
        $user = currentUser();
        $this->view->name = $user->name;
        
        $validation = new Validate();
        $posted_values = ['name'=>'', 'idcardnum'=>'', 'birthday'=>'','address'=>'', 'phone'=>'', 'email'=>'', 'pwd'=>'', 'confirm'=>''];
        if($_POST){
            $posted_values = posted_values($_POST);
            $validation->check($_POST, [
                'name'=> [
                    'display'=>'Name',
                    'required'=>true,
                    'max'=>100
                ],
                'idcardnum'=> [
                    'display'=>'ID card number',
                    'required'=>true,
                    'min'=>10,
                    'unique'=>'user'

                ],
                'birthday'=> [
                    'display'=>'Birthday',
                    'required'=>true,
                    'max'=>10
                ],
                'address' =>[
                    'display'=>'address',
                    'required'=>true,
                    'max'=>250
                ],
                'phone'=>[
                    'display'=>'Phone number',
                    'required'=>true,
                    'max'=>10,
                    'is_numeric'=>true
                ],
                'email'=>[
                    'display'=>'Email address',
                    'required'=>true,
                    'max'=>150,
                    'valid_email'=>true,
                    'unique'=>'user'
                ],
                'pwd' =>[
                    'display'=>'Password',
                    'required'=>true,
                    'min'=>8
                ],
                'confirm'=>[
                    'display'=>'Repeat-password',
                    'required'=>true,
                    'matches'=>'pwd'
                ],
            ]);
            if($validation->passed()){
                $newUser = new User();
                $newUser->user_type = 'MI';
                $newUser->registerNewUser($_POST);
                Router::redirect('');

            }
        }
        $this->view->script = "<script>toggleTab('detail',event,'side-tab', 'tab');</script><script>toggleTab('midwiferegister',event, 'btn btn-secondary', 'sub-tab');</script>";
        
        
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('medicalofficer/index');
    }



}