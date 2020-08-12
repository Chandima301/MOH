<?php

class LoginController extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('User');
        $this->view->setLayout('login_layout');
    }

    public function indexAction(){
        if(Session::exists(CURRENT_USER_SESSION_NAME)){
            switch(User::currentUser()->user_type){
                case 'M':
                    Router::redirect('mother/index');
                    break;
                case 'MO':
                    Router::redirect('medicalofficer/index');
                    break;
                case 'MI':
                    Router::redirect('midwife/index');
                    break;
            }
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
                    switch($user->user_type){
                        case 'M':
                            Router::redirect('mother/index');
                            break;
                        case 'MO':
                            Router::redirect('medicalofficer/index');
                            break;
                        case 'MI':
                            Router::redirect('midwife/index');
                            break;
                    }
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
            $posted_values = Helper::posted_values($_POST);
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
                $newMother = new Mother();
                $newMother->registerMother(["idcardnum"=>$_POST["idcardnum"],"name"=>$_POST["name"],"confirmation"=>0]);
                $newUser->user_type = "M";
                $newUser->registerNewUser($_POST);
                Router::redirect('');

            }
        }
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('login/register');
    }

    public function logoutAction(){
        User::currentUser()->logout();
        Router::redirect('login/index');
    }
}