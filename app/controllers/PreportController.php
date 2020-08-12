<?php

class PreportController extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('pregnancyReport_layout');
        $this->user = User::currentUser();
        $this->view->name = $this->user->name;
        $this->view->btn_state=['registerDetails'=>'', 'personalDetails'=>'','familyHistory'=>'','surgicalHistory'=>'','presentObsHistory'=>'','pastObsHistory'=>'','clinicCare1'=>'','clinicCare2'=>'','immunization'=>'','weightgraph'=>'','emergancyPlan'=>'','iCEmaterial'=>'','preClinic'=>''];
        $this->view->editMode= isset($_SESSION['editMode']) ? $_SESSION['editMode'] : 0 ;
        $this->view->controller = 'preport';
    
    }
    public function indexAction(){
        $this->view->allData =(new User('user'))->getAllusers(); 
        $this->view->render('Midwife/Preport/index');
    }
    public function selectedDataShowAction(){
        if($_POST){
            $id=$_POST["idcardnum"];
            if(isset($id)){
            $findMother =new User();
            $findMother =$findMother->findFirst(["conditions"=>["idcardnum = ?", "user_type = ?"] , "bind"=>[$id, "MI"]]);
            $this->view->allData =[$findMother];
            
            }
            else{
                $this->view->allData =[new User()];
            }
        }
        $this->view->render('Midwife/Preport/index');
    }
    public function reportViewAction($param="RegisterDetails"){
        $this->view->setLayout('pregnancyReport_layout2');
        if(isset($param)){
            $this->view->btn_state[$param]='active';
            $Mother = new $param($param);
            $this->view->Mother = $Mother->getFromDatabase($_SESSION['motherid']);
            $this->view->render('Mother/'.$param);

        }
       
    }

    public function editAction($param=null){
        if(isset($_POST["editButton"])){
            $_SESSION["editMode"]=1;
            $this->view->editMode=1;
            
        }
        $this->reportViewAction($param);

    }
    public function saveAction($param=null){
        if(isset($_POST["saveButton"])){
            $_SESSION["editMode"]=0;
            $this->view->editMode=0;
            $new_data =new $param($param);
            $new_data->updateDatabase(Helper::posted_values($_POST));
            
        }
        $this->reportViewAction($param);
    }

    public function viewDetailsAction($param){
        $_SESSION["motherid"]=$param;
        $this->reportViewAction();
    }






}