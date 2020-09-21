<?php

class DwreportController extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('dailyworkReport_layout');
        $this->user =User::currentUser();
        $this->view->name = $this->user->name;
        $this->view->editMode= isset($_SESSION['editMode']) ? $_SESSION['editMode'] : 0 ;


    }
    public function indexAction(){
       // $this->view->allData =(new User('user'))->getAllusers(); 
        $mohid= $this->user->id;
        $newDwReport =new dailyworkReport();
        $this->view->report =$newDwReport->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$mohid,date('Y-m')]]);
        $this->view->render('Midwife/Dwreport/index');
    }
    public function seeMonthReportsAction($param){
    if($_POST["period"]){
        $mohid= $this->user->id;
        $this->view->period=$_POST["period"];
        $newDwReport =new dailyworkReport();
        $this->view->report =$newDwReport->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$mohid,Helper::posted_values($_POST)["period"]]]);
        $this->view->render('Midwife/Dwreport/'.$param);
    }
    }

    public function createReportsAction($sh){
        $newDwReport =new dailyworkReport();
        $newDwReport->updateDatabase2(Helper::posted_values($_POST),["id"=>$this->user->id,"period"=>date('Y-m',strtotime("first day of next month"))]);
        //helper::dnd($newDwReport);
        $this->view->report =$newDwReport;
        $this->view->render('Midwife/Dwreport/nextmonth');
    }

    public function editModeAction($param=null){
        if(isset($_POST["editButton"])){
            $_SESSION["editMode"]=1;
            $this->view->editMode=1;
            $newDwReport =new dailyworkReport();
            $newDwReport->updateDatabase2(["id"=>$this->user->id,"period"=>date('Y-m',strtotime("first day of next month")),"submit_to_approval"=>'0'],["period"=>date('Y-m',strtotime("first day of next month"))]);
        }
    
        $this->seeMonthReportsAction($param="nextmonth");

    }

    public function saveModeAction($param=null){
        if(isset($_POST["saveButton"])){
            $_SESSION["editMode"]=0;
            $this->view->editMode=0;
            $new_data =new dailyworkReport();
            $new_data->updateDatabase2(Helper::posted_values($_POST),["period"=>date('Y-m',strtotime("first day of next month"))]);
            
        }
        $this->seeMonthReportsAction($param="nextmonth");
    }

    public function submitToApprovedAction(){
        if(isset($_POST["submitToApprovedButton"])){
          $new_data =new dailyworkReport();
          $new_data->lockANDfindFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,strtotime("first day of next month")]]);
          $new_data->updateDatabase2(["id"=>$this->user->id,"period"=>date('Y-m',strtotime("first day of next month")),"submit_to_approval"=>'1'],["period"=>date('Y-m',strtotime("first day of next month"))]);

            
        }
        $this->seeMonthReportsAction($param="nextmonth");
    }



}