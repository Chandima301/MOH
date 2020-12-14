<?php

class WorkplanController extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('workplan_layout');
        $this->user = User::currentUser();
        $this->view->name = $this->user->name;
        $this->view->btn_state=['familiesWkp'=>'', 'maternitypreservation'=>'','mtpr'=>'','mtfpj'=>'','preganacyResult'=>'','latepreganacypreservation'=>'','babypreservation'=>'','babypreservation1to5'=>'','babyandteenpreservation1to5'=>'','familyplan'=>'','genderhelth'=>''];
        $this->view->editMode= isset($_SESSION['editMode_w']) ? $_SESSION['editMode_w'] : 0 ;
        $this->period= isset($_SESSION['period']) ? $_SESSION['period'] : date('Y-m') ;

        $this->view->period =$this->period;
        $this->load_model('Message');
        $this->view->newMsgCount = $this->MessageModel->getNewMsgCount();

    }

    public function indexAction(){
         $mohid= $this->user->id;
         $this->view->btn_state['familiesWkp']="active";
         $this->view->dates=$this->findDates($this->period,"familiesWkp");
         $month_sum =new familiesWkp(); // go to the first sub report of the report
         $this->view->month_sum =$month_sum->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);

         $this->view->render('Midwife/Workplan/familiesWkp');
     }

     public function reportViewAction($param="familiesWkp"){
        if(isset($param)){
            $this->view->btn_state[$param]='active';
            $this->view->dates=$this->findDates($this->period,$param); // find all the dates of the corresponding period
            $month_sum =new $param();
            $this->view->month_sum =$month_sum->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);

            $this->view->render('Midwife/Workplan/'.$param);
        }
       
    }

    public function findDates( $month,$param){
        $dates=[];
        $mohid= $this->user->id;
        $numOfDates=cal_days_in_month(CAL_GREGORIAN,date("m"),date("Y")); //num of dates of the month
        for($date=1; $date<=$numOfDates; $date++){
            $newDate =new $param();
            $dates[] =$newDate->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$mohid,$this->period."-".$date]]);

        }
        return $dates;

    }
    public function editModeAction($param=null){ // edit the report
        if(isset($_POST["editButton"])){
            $_SESSION["editMode_w"]=1;
            $this->view->editMode=1;
            
        }
       $this->reportViewAction($param);
    }
    public function saveModeAction($param){ // save the edited data
        if(isset($_POST["saveButton"])){
            $_SESSION["editMode_w"]=0;
            $this->view->editMode=0;
            $this->savetoSum($param);
            $newDate =new $param(); 
            $newDate->updateDatabase2(Helper::posted_values($_POST),["period"=>date('Y-m-j')]);
            
            
        }
        $this->reportViewAction($param);
    }
    public function seeMonthReportsAction($param){ // see previous months reports
        $_SESSION['editMode_w'] = 0 ;
        $this->view->editMode=0;
        if($_POST["period"]){
            $this->period=$_POST["period"];
            $_SESSION["period"]=$this->period;
            $this->view->period =$this->period;
            $this->reportViewAction($param);
        }
    }
    public function savetoSum($param){  //count the sum of the date from beginning the month to today
        $month_sum =new $param();
        $month_sum =$month_sum->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]); //get the sum row
        
        
        $today =new $param();
        $today =$today->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,date('Y-m-j')]]);
        $data=[];
    
        foreach($_POST as $key => $value){
            if(is_numeric($value)){
                if((int)$value!=$today->$key ){
                   if(!isset($today->$key)) {
                    $today->$key=0;
                   }
                   if(!isset($month_sum->$key)) {
                    $month_sum->$key=0;
                   }
                $data[$key]=((int)$value-$today->$key) + $month_sum->$key; // get the actuall difference and add to current month sum
        }
        }
        }
       
        $data["id"]=$this->user->id;
        $data["period"]=$this->period;
        $month_sum->updateDatabase2(Helper::posted_values($data),["period"=>$this->period]);

    
    }
    public function getMonthReportAction(){  //get month report summery
        $fwk =new familiesWkp();
        $fwk=$fwk->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->fwk=$fwk;
       

        $mp =new maternitypreservation();
        $mp =$mp->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->mp=$mp;

        $mtpr =new mtpr();
        $mtpr =$mtpr->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->mtpr=$mtpr;

        $mtfpj =new mtfpj();
        $mtfpj =$mtfpj->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->mtfpj=$mtfpj;

        $pR =new preganacyResult();
        $pR =$pR->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->pR=$pR;

        $lpp =new latepreganacypreservation();
        $lpp =$lpp->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->lpp=$lpp;

        $bp =new babypreservation();
        $bp =$bp->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->bp=$bp;

        $bp15 =new babypreservation1to5();
        $bp15 =$bp15->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->bp15=$bp15;

        $bct =new babyandteenpreservation();
        $bct =$bct->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->bct=$bct;

        $fpl =new familyplan();
        $fpl =$fpl->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->fpl=$fpl;

        $gh =new genderhelth();
        $gh =$gh->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->gh=$gh;

        $oacti =new otheractivities();
        $oacti =$oacti->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->oacti=$oacti;

        $supaten =new supervisionattendance();
        $supaten =$supaten->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$this->user->id,$this->period]]);
        $this->view->supaten=$supaten;
        
        $this->view->setLayout('monthlyplan');
        $this->view->render('Midwife/Workplan/workplan');

    }


}