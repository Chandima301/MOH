<?php

class DwreportController extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('dailyworkReport_layout');
        $this->user =User::currentUser();
        $this->view->name = $this->user->name;
        $this->view->editMode= isset($_SESSION['editMode_dw']) ? $_SESSION['editMode_dw'] : 0 ;

        $this->load_model('User');

        $this->load_model('Message');
        $this->view->newMsgCount = $this->MessageModel->getNewMsgCount();


    }
    public function indexAction(){ //show the this month dailywork report
        $mohid= $this->user->idcardnum;
        $newDwReport =new TimeTable();
        $this->view->report =$newDwReport->findFirst(["conditions"=>["idcardnum =?", "month=?"],"bind"=>[$mohid,date('Y-m')]]);
        $this->view->render('Midwife/Dwreport/index');
    }
    public function seeMonthReportsAction($param){ //show the any monht daily work reports
    if($_POST["month"]){
        $mohid= $this->user->idcardnum;
        $this->view->month=$_POST["month"];
        $newDwReport =new TimeTable();
        $this->view->report =$newDwReport->findFirst(["conditions"=>["idcardnum =?", "month=?"],"bind"=>[$mohid,Helper::posted_values($_POST)["month"]]]);
        $this->view->render('Midwife/Dwreport/'.$param);
    }
    }

    public function createReportsAction($sh){ // create new report for next month
        $newDwReport =new TimeTable();
        $_POST["idcardnum"] = $this->user->idcardnum;
        $newDwReport->updateDatabase2(Helper::posted_values($_POST),["idcardnum"=>$this->user->idcardnum,"month"=>date('Y-m',strtotime("first day of next month"))]);
        $this->view->report =$newDwReport;
        $this->view->render('Midwife/Dwreport/nextmonth');
    }

    public function editModeAction($param=null){ // edit status of the dw report
        if(isset($_POST["editButton"])){
            $_SESSION["editMode_dw"]=1;
            $this->view->editMode=1;
            
        }
    
        $this->seeMonthReportsAction($param="nextmonth");

    }

    public function saveModeAction($param=null){ //save status for dw report
        if(isset($_POST["saveButton"])){
            $_SESSION["editMode_dw"]=0;
            $this->view->editMode=0;
            $new_data =new TimeTable();
            $new_data=$new_data->findFirst(["conditions"=>["idcardnum =?", "month=?"],"bind"=>[ $this->user->idcardnum,Helper::posted_values($_POST)["month"]]]); //find the corresponding table to get the id number
            $new_data->updateDatabase2(Helper::posted_values($_POST),["id"=>$new_data->id,"idcardnum"=>$this->user->idcardnum,"month"=>date('Y-m',strtotime("first day of next month"))]);
            
        }
        $this->seeMonthReportsAction($param="nextmonth");
    }

    public function submitToApprovedAction(){   // submit for aapprove the report
        if(isset($_POST["submitToApprovedButton"])){
          $new_data =new TimeTable();
          $new_data=$new_data->findFirst(["conditions"=>["idcardnum =?", "month=?"],"bind"=>[ $this->user->idcardnum,Helper::posted_values($_POST)["month"]]]);
          //$new_data->lockANDfindFirst(["conditions"=>["id =?", "month=?"],"bind"=>[$new_data->id,date('Y-m',strtotime("first day of next month"))]]);
          $new_data->updateDatabase2(["id"=>$new_data->id,"month"=>date('Y-m',strtotime("first day of next month")),"submit_to_approval"=>'1'],["month"=>date('Y-m',strtotime("first day of next month"))]);

            
        }
        $this->seeMonthReportsAction($param="nextmonth");
    }



}