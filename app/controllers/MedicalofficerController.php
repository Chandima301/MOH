<?php

class MedicalofficerController extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('mediofficer_layout');
        $this->view->btn_state = ['area'=>'','approve'=>'','cancel'=>'','details'=>'', 'details-tab'=>'', 'register-tab'=>''];
        $this->load_model('Medicalofficer');
        $this->load_model('TimeTable');
    }

    public function indexAction(){
        $this->view->render('medicalOfficer/index');
    }

    public function areaAction(){
        $date = explode('/', date('Y/m/d'));
        $month = $date[0].'/'.$date[1];
        $day = $date[2];
        $slots = $this->TimeTableModel->getTimeTableSlotsByDay($month,$day);
        $this->view->slots = $slots;
        $this->view->day = $day;
        $this->view->btn_state['area']= 'active';
        $this->view->render('medicalOfficer/area');
    }
    public function approveAction(){
        $this->view->btn_state['approve']= 'active';
        $timetables = $this->TimeTableModel->getPendingTimeTables();
        $approvedRecently = $this->TimeTableModel->getRecentApprovedTimeTables();
        if(!$timetables){
            $this->view->script = "<script>view('nothingtoapprove');</script>";
        }
        $this->view->approvedRecently = $approvedRecently;
        $this->view->timetables = $timetables;
        $this->view->render('medicalOfficer/approve');
    }

    public function timetabledetailsAction($id,$approval=''){
        $this->view->btn_state['approve']= 'active';
        if($approval == 'approve'){
            if($this->TimeTableModel->updateApproval($id,User::currentUser()->name)){
                $this->view->script = "<script>view('approvesuccess');</script>";
            }else{
                $this->view->script = "<script>view('approveerror');</script>";
            }
        }
        $timetable = $this->TimeTableModel->findByID($id);
        if(!$timetable){

        }
        
        
        $this->view->id = $id;
        $this->view->timetable = $timetable;
        $this->view->render('medicalOfficer/timetablepreview');
    }

    public function midwifedetailsAction($id){
        $this->view->btn_state['details']= 'active';
        $timetables = $this->TimeTableModel->findByIDcardnum($id);
        $midwife = $this->MedicalofficerModel->findByID($id);
        if(!$timetables){
            $this->view->script = "<script>view('notimetables');</script>";
        }
        $this->view->timetables = $timetables;
        $this->view->midwife = $midwife;
        $this->view->render('medicalOfficer/midwifepreview');
    }

    public function cancelAction(){
        $this->view->btn_state['cancel']= 'active';
        $this->view->render('medicalOfficer/cancel');
    }
    public function detailsAction(){
        $this->view->btn_state['details']= 'active';
        $this->view->btn_state['details-tab']= 'active';
        $this->view->search_text = ['idcardnum'=>''];
        $this->view->midwifes = $this->MedicalofficerModel->getAllMidwifes();
        $this->view->render('medicalOfficer/details');
    }

    public function registerAction(){
        $this->view->btn_state['details']= 'active';
        $this->view->btn_state['register-tab']= 'active';
        $this->view->post = ['name'=>'', 'idcardnum'=>'', 'birthday'=>'','address'=>'', 'phone'=>'', 'email'=>'', 'pwd'=>'', 'confirm'=>''];
        $this->view->render('medicalOfficer/register');
    }


    public function searchmidwifeAction(){
        $this->view->btn_state['details']= 'active';
        $this->view->btn_state['details-tab']= 'active';
        $this->view->midwifes = $this->MedicalofficerModel->getAllMidwifes();
        $search_text = ['idcardnum'=>''];
        if($_POST){
            $search_text = Helper::posted_values($_POST);
            $midwife = $this->MedicalofficerModel->getMidwifeByID($_POST['idcardnum']);
            if($midwife){
                $search_text = ['idcardnum'=>''];
                $this->view->midwifes = $midwife;
            }
            else{    
                $this->view->script = "<script>view('notfound');</script>";
            }
        }

        $this->view->search_text = $search_text;
        $this->view->render('medicalOfficer/details');
    }




    public function registermidwifeAction(){
        $this->view->btn_state['details']= 'active';
        $this->view->btn_state['register-tab']= 'active';
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
                $newUser->user_type = 'MI';
                $newUser->registerNewUser($_POST);
                $this->view->btn_state['details']= 'active';
                $posted_values = ['name'=>'', 'idcardnum'=>'', 'birthday'=>'','address'=>'', 'phone'=>'', 'email'=>'', 'pwd'=>'', 'confirm'=>''];
                $this->view->script = "<script>view('success');</script>";

            }
        }
        
        
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('medicalofficer/register');
    }

}