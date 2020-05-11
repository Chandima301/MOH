<?php

class Login extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('User');
        $this->view->setLayout('default');
    }

    public function indexAction(){
        $this->view->render('login/index');
    }

    public function loginAction(){
        if($_POST){
            $validation = true;
            if($validation === true){
                $user = $this->UserModel->findByName($_POST['idcardnum']);
                if($user && password_verify(Input::get('password'),$user->password)){
                    $remember = (isset($_POST['remember_me']) && Input::get('remember_me')) ? true :false;
                    $user->login($remember);
                    Router::redirect('');
                }
            }
        }
    }
}