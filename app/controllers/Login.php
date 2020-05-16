<?php

class Login extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('User');
        $this->view->setLayout('login_layout');
    }

    public function indexAction(){
        if(Session::exists(CURRENT_USER_SESSION_NAME)){
            Router::redirect('medicalofficer/index');
        }
        $this->view->displayErrors = '';
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
                $newUser->registerNewUser($_POST);
                Router::redirect('');

            }
        }
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('login/register');
    }

    public function logoutAction(){
        currentUser()->logout();
        Router::redirect('login/index');
    }
}