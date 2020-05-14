<?php

class Login extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('User');
        $this->view->setLayout('login_layout');
    }

    public function indexAction(){
        $this->displayErrors = '';
        $this->view->render('login/index');

    }

    public function loginAction(){
        $validation = new Validate();
        if($_POST){
            $validation -> check($_POST,[
                'idcardnum'=>[
                    'display' => 'ID card number',
                    'required' => true
                ],
                'password' =>[
                    'display' => 'Password',
                    'required' => true,
                    'min' => 8
                ]
            ]);    
            if($validation->passed()){
                $user = $this->UserModel->findByID($_POST['idcardnum']);
                if($user && password_verify(Input::get('password'),$user->pwd)){
                    $remember = (isset($_POST['remember_me']) && Input::get('remember_me')) ? true :false;
                    $user->login($remember);
                    Router::redirect('medicalofficer/index');
                }
                else{
                    $validation->addError("ID card number or password is incorrect");
                }
            }
        }
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->script = '<script>view("error","btn-base-login")</script>';
        $this->view->render('login/index');
    }

    public function registerAction(){
        $this->view->render('login/register');
    }

    public function logoutAction(){
        currentUser()->logout();
        Router::redirect('login/index');
    }
}