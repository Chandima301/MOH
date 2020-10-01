<?php

use PHPMailer\PHPMailer\PHPMailer;

class MidwifeController extends Controller
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->view->setLayout('midwife_layout');
        $this->view->btn_state = ['area' => '', 'approve' => '', 'cancel' => '', 'details' => '', 'details-tab' => '', 'register-tab' => ''];
        $this->load_model('Midwife'); //We have MidwifeModel object of midwife model class
        $this->load_model('Mother');
    }
    /**Home page actions*/
    public function indexAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->render('midwife/index');
    }
    public function contactOfficerAction() {
        $user = User::currentUser();
        $MO = $this->MidwifeModel->getMO(); //get medical officer
        $posted_values = Helper::posted_values($_POST);
        $this->view->post = $posted_values;
        $this->view->setLayout('midwife_layout_msg');
        $this->view->name = $user->name;
        //Send an email to medical officer
        $name = "Midwife => ".$user->name;
        //Helper::dnd($mother->email);
        $email = $MO->email;
        $subject = "";
        $body = "Dear Midwife," . "<br>" .
            "<br>" .
            $posted_values['message']
            ."<br>". 
             "<br>" . "Thank you!";

        require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'PHPMailer' . DS . 'src' . DS . 'PHPMailer.php');
        require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'PHPMailer' . DS . 'src' . DS . 'SMTP.php');
        require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'PHPMailer' . DS . 'src' . DS . 'Exception.php');
        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "medicalofficerofhealthkelaniya@gmail.com"; //enter your sending email address
        $mail->Password = '@Password123'; //enter your sending email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($MO->email); //enter corresponding mother's email address
        $mail->Subject = ($posted_values['reason']); //Subject
        $mail->Body = $body;
        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        $this->view->render('midwife/index');
    }

    public function messageAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->render('midwife/message');
    }

    public function dashboardAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->midwife = $user;
        $this->view->render('midwife/dashboard');
    }

    /**Mother page actions*/

    //mother page
    public function motherAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->search_text = ['idcardnum' => ''];
        $confirmedMothers = $this->MidwifeModel->getConfirmedMothers();
        $this->view->confirmedMothers = $confirmedMothers;
        $unconfirmedMothers = $this->MidwifeModel->getUnconfirmedMothers();
        $this->view->unconfirmedMothers = $unconfirmedMothers;
        $this->view->render('midwife/mother');
    }

    public function searchConfirmedMotherAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $search_text = ['idcardnum' => ''];
        if ($_POST) {
            $search_text = Helper::posted_values($_POST); // return array after cleaned using sanatize
            /***Helper::dnd($_POST);
            array(1) {
                ["idcardnum"]=>
                string(10) "990590897V"
              }**/
            $mother = $this->MidwifeModel->getMotherByID($_POST['idcardnum']);
            if ($mother) {
                $search_text = ['idcardnum' => ''];
                $this->view->confirmedMothers = $mother;
                $unconfirmedMothers = $this->MidwifeModel->getUnconfirmedMothers();
                $this->view->unconfirmedMothers = $unconfirmedMothers;
            } else {
                $this->view->script = "<script>view('notfound');</script>";
                $this->view->confirmedMothers = $this->MidwifeModel->getConfirmedMothers();
                $this->view->unconfirmedMothers = $this->MidwifeModel->getUnconfirmedMothers();
            }
        }

        $this->view->search_text = $search_text;
        $this->view->render('midwife/mother');
    }

    //requests table in mother page
    public function requestAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->search_text = ['idcardnum' => ''];
        $confirmedMothers = $this->MidwifeModel->getConfirmedMothers();
        $this->view->confirmedMothers = $confirmedMothers;
        $unconfirmedMothers = $this->MidwifeModel->getUnconfirmedMothers();
        $this->view->unconfirmedMothers = $unconfirmedMothers;
        $this->view->render('midwife/request');
    }

    public function searchUnconfirmedMotherAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $search_text = ['idcardnum' => ''];
        if ($_POST) {
            $search_text = Helper::posted_values($_POST); // return array after cleaned using sanatize
            /***Helper::dnd($_POST);
            array(1) {
                ["idcardnum"]=>
                string(10) "990590897V"
              }**/
            $mother = $this->MidwifeModel->getMotherByID($_POST['idcardnum']);
            if ($mother) {
                $search_text = ['idcardnum' => ''];
                $this->view->unconfirmedMothers = $mother;
                $confirmedMothers = $this->MidwifeModel->getConfirmedMothers();
                $this->view->confirmedMothers = $confirmedMothers;
            } else {
                $this->view->script = "<script>view('notfound');</script>";
                $this->view->confirmedMothers = $this->MidwifeModel->getConfirmedMothers();
                $this->view->unconfirmedMothers = $this->MidwifeModel->getUnconfirmedMothers();
            }
        }

        $this->view->search_text = $search_text;
        $this->view->render('midwife/request');
    }

    public function registerMotherAction()
    {
        $validation = new Validate();
        $posted_values = ['name' => '', 'birthday' => '', 'email' => '', 'idcardnum' => '', 'phone' => '', 'address' => '', 'blood_group' => '', 'height' => '', 'mass_index' => '', 'allergies' => '', 'pwd' => '', 'confirm' => ''];
        if ($_POST) {
            $posted_values = Helper::posted_values($_POST);
            $validation->check($_POST, [
                'name' => [
                    'display' => 'Full Name',
                    'required' => true
                ],
                'birthday' => [
                    'display' => 'Birthday',
                    'required' => true
                ],
                'email' => [
                    'display' => 'E-mail',
                    'required' => true,
                    'valid_email' => true,
                    'unique' => 'user'
                ],
                'idcardnum' => [
                    'display' => 'ID Card Number',
                    'required' => true,
                    'unique' => 'user',
                    'exact_value' => 10
                ],
                'phone' => [
                    'display' => 'Phone Number',
                    'required' => true,
                    'min' => 10,
                    'max' => 15,
                    'is_numeric' => true
                ],
                'address' => [
                    'display' => 'Address',
                    'required' => true,
                    'max' => 200
                ],
                'blood_group' => [
                    'display' => 'Blood Group',
                    'required' => true
                ],
                'height' => [
                    'display' => 'Height',
                    'required' => true,
                    'is_numeric' => true,
                    'max' => 3,
                    'min' => 2
                ],
                'mass_index' => [
                    'display' => 'Body mass Index',
                    'required' => true
                ],
                'pwd' => [
                    'display' => 'Password',
                    'required' => true,
                    'min' => 8,
                    'max' => 15
                ],
                'confirm' => [
                    'display' => 'Confirm Password',
                    'required' => true,
                    'matches' => 'pwd'
                ]
            ]);
        }

        if ($validation->passed()) {
            $newUser = new User();
            $newUser->user_type = 'M';
            $newUser->registerNewUser($_POST);
            $newMother = new Mother();
            if ($_POST['allergies'] == '') {
                $_POST['allergies'] = 'No';
            }
            $newMother->addNewMother($_POST);
            $posted_values = ['name' => '', 'birthday' => '', 'email' => '', 'idcardnum' => '', 'phone' => '', 'address' => '', 'blood_group' => '', 'height' => '', 'mass_index' => '', 'allergies' => '', 'pwd' => '', 'confirm' => ''];
            $this->view->script = "<script>view('success');</script>";
            //Router::redirect('midwife/index');

        }
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();

        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->render('midwife/register');
    }

    //view details link in the 1st table in mother page
    public function viewDetailsAction($id)
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $mother = $this->MidwifeModel->getByID($id);
        $this->view->mother = $mother;
        $motherExtra = $this->MotherModel->getById($id);
        $this->view->motherExtra = $motherExtra; //Extra details about mother in the mother table in database
        $this->view->render('midwife/view');
    }

    //change details button in the view details page
    public function changePageAction($id)
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $mother = $this->MidwifeModel->getByID($id);
        $motherExtra = $this->MotherModel->getById($id);
        $databaseValues = [
            'name' => $mother->name, 'birthday' => $mother->birthday, 'idcardnum' => $mother->idcardnum, 'phone' => $mother->phone,
            'address' => $mother->address, 'email' => $mother->email, 'blood_group' => $motherExtra->blood_group,
            'height' => $motherExtra->height, 'mass_index' => $motherExtra->mass_index, 'allergies' => $motherExtra->allergies
        ];
        $databaseValues = Helper::posted_values($databaseValues);
        $this->view->post = $databaseValues;
        if ($motherExtra->confirmation == 1) {
            $this->view->header = 'තොරතුරු වෙනස් කිරීම';
            $this->view->button = 'Update';
            $this->view->render('midwife/update');
        } else {
            $this->view->header = 'තොරතුරු සහතික කිර්‍රිම';
            $this->view->button = 'Confirm';
            $this->view->render('midwife/confirm');
        }
    }

    //update button in the change page... Update mother details
    public function updateDetailsAction($id)
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $motherExtra = $this->MotherModel->getById($id);
        $mother = $this->MidwifeModel->getByID($id);
        $this->view->msg = 'updated';
        $validation = new Validate();
        $posted_values = ['id' => '', 'name' => '', 'birthday' => '', 'email' => '', 'idcardnum' => '', 'phone' => '', 'address' => '', 'blood_group' => '', 'height' => '', 'mass_index' => '', 'allergies' => '', 'pwd' => '', 'confirm' => ''];
        if ($_POST) {
            $posted_values = Helper::posted_values($_POST);
            $validation->check($_POST, [
                'name' => [
                    'display' => 'Full Name'
                ],
                'birthday' => [
                    'display' => 'Birthday'
                ],
                'email' => [
                    'display' => 'E-mail',
                    'valid_email' => true,
                    'unique_update' => 'user,' . strval($mother->id)
                ],
                'idcardnum' => [
                    'display' => 'ID Card Number',
                    'exact_value' => 10,
                    'unique_update' => 'user,' . strval($mother->id)
                ],
                'phone' => [
                    'display' => 'Phone Number',
                    'min' => 10,
                    'max' => 15,
                    'is_numeric' => true
                ],
                'address' => [
                    'display' => 'Address',
                    'max' => 200
                ],
                'blood_group' => [
                    'display' => 'Blood Group',
                ],
                'height' => [
                    'display' => 'Height',
                    'is_numeric' => true,
                    'max' => 3,
                    'min' => 2
                ],
                'mass_index' => [
                    'display' => 'Body mass Index',
                ],
                'pwd' => [
                    'display' => 'Password',
                    'min' => 8,
                    'max' => 15
                ],
                'confirm' => [
                    'display' => 'Confirm Password',
                    'matches' => 'pwd'
                ]
            ]);
            //Helper::dnd($id);
        }
        if ($validation->passed()) {
            $newUser = new User();
            $newUser->user_type = 'M';
            $_POST['id'] = $mother->id; //want user table id of mother to update the user
            $newUser->registerNewUser($_POST);
            $newMother = new Mother();
            if ($_POST['allergies'] == '') {
                $_POST['allergies'] = 'No';
            }
            $_POST['id'] = $motherExtra->id; //Id of mother in the mother table
            $newMother->addNewMother($_POST);
            $posted_values = ['id' => '', 'name' => '', 'birthday' => '', 'email' => '', 'idcardnum' => '', 'phone' => '', 'address' => '', 'blood_group' => '', 'height' => '', 'mass_index' => '', 'allergies' => '', 'pwd' => '', 'confirm' => ''];
            $this->view->script = "<script>view('success');</script>";
            $this->view->mother = $mother;
            $this->view->motherExtra = $motherExtra;
            $databaseValues = [
                'name' => $mother->name, 'birthday' => $mother->birthday, 'idcardnum' => $mother->idcardnum, 'phone' => $mother->phone,
                'address' => $mother->address, 'email' => $mother->email, 'blood_group' => $motherExtra->blood_group,
                'height' => $motherExtra->height, 'mass_index' => $motherExtra->mass_index, 'allergies' => $motherExtra->allergies, 'pwd' => $_POST['pwd']
            ];
            $databaseValues = Helper::posted_values($databaseValues);
            $this->view->post = $databaseValues;
            $this->view->render('midwife/afterUpdate');
        } else {
            $this->view->header = 'තොරතුරු වෙනස් කිරීම';
            $this->view->displayErrors = $validation->displayErrors();
            $this->view->button = 'Update';
            $databaseValues = [
                'name' => $mother->name, 'birthday' => $mother->birthday, 'idcardnum' => $mother->idcardnum, 'phone' => $mother->phone,
                'address' => $mother->address, 'email' => $mother->email, 'blood_group' => $motherExtra->blood_group,
                'height' => $motherExtra->height, 'mass_index' => $motherExtra->mass_index, 'allergies' => $motherExtra->allergies, 'pwd' => $_POST['pwd']
            ];
            $databaseValues = Helper::posted_values($databaseValues);
            $this->view->post = $databaseValues;
            $this->view->render('midwife/update');
        }
    }

    //confirm button in the confirmation page
    public function confirmDetailsAction($id)
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $motherExtra = $this->MotherModel->getById($id);
        $mother = $this->MidwifeModel->getByID($id);
        $this->view->msg = 'confirmed';
        $validation = new Validate();
        if ($_POST) {
            $posted_values = Helper::posted_values($_POST);
            $validation->check($_POST, [
                'name' => [
                    'display' => 'Full Name'
                ],
                'birthday' => [
                    'display' => 'Birthday'
                ],
                'email' => [
                    'display' => 'E-mail',
                    'valid_email' => true,
                    'unique_update' => 'user,' . strval($mother->id)
                ],
                'idcardnum' => [
                    'display' => 'ID Card Number',
                    'exact_value' => 10,
                    'unique_update' => 'user,' . strval($mother->id)
                ],
                'phone' => [
                    'display' => 'Phone Number',
                    'min' => 10,
                    'max' => 15,
                    'is_numeric' => true
                ],
                'address' => [
                    'display' => 'Address',
                    'max' => 200
                ],
                'blood_group' => [
                    'display' => 'Blood Group',
                ],
                'height' => [
                    'display' => 'Height',
                    'is_numeric' => true,
                    'max' => 3,
                    'min' => 2
                ],
                'mass_index' => [
                    'display' => 'Body mass Index'
                ]
            ]);
        }
        $this->view->displayErrors = $validation->displayErrors();
        if ($validation->passed()) {
            $newUser = new User();
            $newUser->user_type = 'M';
            $_POST['id'] = $mother->id; //want user table id of mother to update the user
            $newUser->registerNewUser($_POST);
            $newMother = new Mother();
            if ($_POST['allergies'] == '') {
                $_POST['allergies'] = 'No';
            }
            $_POST['id'] = $motherExtra->id; //Id of mother in the mother table
            $newMother->addNewMother($_POST);
            $this->view->script = "<script>view('success');</script>";
            $this->view->mother = $mother;
            $this->view->motherExtra = $motherExtra;
            $databaseValues = [
                'name' => $mother->name, 'birthday' => $mother->birthday, 'idcardnum' => $mother->idcardnum, 'phone' => $mother->phone,
                'address' => $mother->address, 'email' => $mother->email, 'blood_group' => $motherExtra->blood_group,
                'height' => $motherExtra->height, 'mass_index' => $motherExtra->mass_index, 'allergies' => $motherExtra->allergies
            ];
            $databaseValues = Helper::posted_values($databaseValues);
            $this->view->post = $databaseValues;

            //Send an email to mother after confirming
            $name = "MOHOfficeKelaniya";
            $email = $mother->email;
            $subject = "";
            $body = "Dear Mother," . "<br>" .
                "<br>" .
                "We are happy to say that you have been confirmed successfully. Now, you can log in to your account and enjoy new features."
                ."<br>"."Your Name :- ".$mother->name
                ."<br>" 
                ."<br>" . "Thank you!";

            require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'PHPMailer' . DS . 'src' . DS . 'PHPMailer.php');
            require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'PHPMailer' . DS . 'src' . DS . 'SMTP.php');
            require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'PHPMailer' . DS . 'src' . DS . 'Exception.php');
            $mail = new PHPMailer();

            //SMTP Settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "medicalofficerofhealthkelaniya@gmail.com"; //enter your sending email address
            $mail->Password = '@Password123'; //enter your sending email password
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";

            //Email Settings
            $mail->isHTML(true);
            $mail->setFrom($email, $name);
            $mail->addAddress($mother->email); //enter corresponding mother's email address
            $mail->Subject = ("You are Confirmed Successfully"); //Subject
            $mail->Body = $body;
            if ($mail->send()) {
                $status = "success";
                $response = "Email is sent!";
            } else {
                $status = "failed";
                $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
            }

            $this->view->render('midwife/afterUpdate');
        } else {
            $this->view->header = 'තොරතුරු සහතික කිර්‍රිම';
            $this->view->displayErrors = $validation->displayErrors();
            $this->view->button = 'Confirm';
            $databaseValues = [
                'name' => $mother->name, 'birthday' => $mother->birthday, 'idcardnum' => $mother->idcardnum, 'phone' => $mother->phone,
                'address' => $mother->address, 'email' => $mother->email, 'blood_group' => $motherExtra->blood_group,
                'height' => $motherExtra->height, 'mass_index' => $motherExtra->mass_index, 'allergies' => $motherExtra->allergies
            ];
            $databaseValues = Helper::posted_values($databaseValues);
            $this->view->post = $databaseValues;
            $this->view->render('midwife/confirm');
        }
    }

    /**Dashboard */
    public function midwifePasswordAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->midwife = $user;
        $this->view->render('midwife/password');
    }

    public function midwifeDetailsAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->user = $user;
        $this->view->render('midwife/midwifeDetails');
    }

    public function updateMidwifeDetailsAction()
    {
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->user = $user;
        $validation = new Validate();
        if ($_POST) {
            $posted_values = Helper::posted_values($_POST);
            $validation->check($_POST, [
                'name' => [
                    'display' => 'Full Name',
                    'required' => true
                ],
                'birthday' => [
                    'display' => 'Birthday',
                    'required' => true
                ],
                'email' => [
                    'display' => 'E-mail',
                    'required' => true,
                    'valid_email' => true,
                    'unique_update' => 'user,' . strval($user->id)
                ],
                'idcardnum' => [
                    'display' => 'ID Card Number',
                    'required' => true,
                    'exact_value' => 10,
                    'unique_update' => 'user,' . strval($user->id)
                ],
                'phone' => [
                    'display' => 'Phone Number',
                    'required' => true,
                    'min' => 10,
                    'max' => 15,
                    'is_numeric' => true
                ],
                'address' => [
                    'display' => 'Address',
                    'required' => true,
                    'max' => 200
                ],
                'pwd' => [
                    'display' => 'Password',
                    'required' => true,
                    'min' => 8,
                    'max' => 15
                ],
            ]);
        }
        if (password_verify($_POST['pwd'], $user->pwd)) {
            if ($validation->passed()) {
                $_POST['id'] = $user->id;
                $user->registerNewUser($_POST);
                $user = User::currentUser();
                $this->view->name = $user->name;
                $this->view->script = "<script>view('success');</script>";
            }
        } else {
            $validation->addError(["Password is incorrect. Please enter the current password", 'pwd']);
        }

        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('midwife/midwifeDetails');
    }

    public function updateMidwifePasswordAction()
    {
        $validation = new Validate();
        if ($_POST) {
            $posted_values = Helper::posted_values($_POST);
            $validation->check($_POST, [
                'pwd' => [
                    'display' => 'New Password',
                    'min' => 8,
                    'max' => 15
                ],
                'confirm' => [
                    'display' => 'New Re-typed Password',
                    'matches' => 'pwd',
                    'min' => 8,
                    'max' => 15
                ]
            ]);
        }
        $user = User::currentUser();
        if (password_verify($_POST['current_pwd'], $user->pwd)) {
            if ($_POST['current_pwd'] != $_POST['pwd']) {
                if ($validation->passed()) {
                    $_POST['id'] = $user->id;
                    $user->registerNewUser($_POST);
                    $user = User::currentUser();
                    $this->view->name = $user->name;
                    $this->view->script = "<script>view('success');</script>";
                }
            } else {
                $validation->addError(["Your new password is same as the current password. Please choose another password", 'pwd']);
            }
        } else {
            $validation->addError(["Current password is incorrect. Please enter the correct one", 'current_pwd']);
        }
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('midwife/password');
    }



    public function pregnancyReportAction($param = null)
    {
        Router::redirect('preport/index');
    }
    public function dailyworkReportAction($param = null)
    {
        Router::redirect('dwreport/index');
    }
    public function workplanAction()
    {
        Router::redirect('Workplan/index');
    }
}
