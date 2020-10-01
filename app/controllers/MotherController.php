<?php

class MotherController extends Controller{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('mother_layout');
        $user = User::currentUser();
        $this->view->name = $user->name;
        $this->view->editMode= isset($_SESSION['editMode']) ? $_SESSION['editMode'] : 0 ;
        //Helper::dnd($this->view->editMode);
        $this->view->controller = 'mother';
        $this->view->btn_state = ['1'=>'','1-1'=>'','1-2'=>'','2'=>'','2-1'=>'','2-2'=>'','3'=>'','3-1'=>'','3-2'=>'','4'=>'','4-1'=>'','4-2'=>'', '5'=>'', '5-1'=>'', '5-2'=>'', '6'=>'', '6-1'=>'', '6-2'=>'', '6-3'=>'', '7'=>'', '7-1'=>'', '8'=>'', '8-1'=>'','9'=>'','9-1'=>''];
    }

    public function indexAction(){
        $this->view->render('mother/index');
    }

    public function saveAction($param=null){

    if(isset($_POST["saveButton"])){

      if($param=="registerDetails"){

        $validation = new Validate();
        $posted_values = ['1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>'','7'=>'','8'=>'','9'=>'','10'=>'','11'=>'',];
        $posted_values = Helper::posted_values($_POST);
        $validation->check($_POST, [
          '1'=> ['display'=>'Name','required'=>true,'max'=>100],
          '2'=>['display'=>'Age','required'=>true,'max'=>3,'is_numeric'=>true],
          '3'=> ['display'=>'Data','required'=>true,'max'=>100],
          '4'=> ['display'=>'Data','required'=>true,'max'=>100],
          '5'=> ['display'=>'Data','required'=>true,'max'=>100],
          '6'=> ['display'=>'Data','required'=>true,'max'=>100],
          '7'=> ['display'=>'Registation Number','is_numeric'=>true,'max'=>100],
          '8'=> ['display'=>'Registation Number','is_numeric'=>true,'max'=>100],
          '9'=> ['display'=>'Data','required'=>true,'max'=>100],
          '10'=> ['display'=>'Data','required'=>true,'max'=>100],
          '11'=> ['display'=>'Data','required'=>true,'max'=>100],
          ]);
          if($validation->passed()){
            $posted_values = ['1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>'','7'=>'','8'=>'','9'=>'','10'=>'','11'=>'',];
            $this->view->script = "<script>view('success');</script>";
          }
          $this->view->post = $posted_values;
          $this->view->displayErrors = $validation->displayErrors();
        }
        elseif($param=="personalDetails"){
          $validation = new Validate();
          $posted_values = ['1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>'','7'=>'','8'=>'','9'=>'','10'=>'','11'=>'','12'=>'','13'=>''];
          $posted_values = Helper::posted_values($_POST);
          $validation->check($_POST, [
            '1'=> ['display'=>'Data','required'=>true,'max'=>100],
            '2'=> ['display'=>'Data','required'=>true,'max'=>100],
            '3'=> ['display'=>'Data','required'=>true,'max'=>100],
            '4'=> ['display'=>'Data','required'=>true,'max'=>100],
            '5'=> ['display'=>'Data','required'=>true,'max'=>100],
            '6'=> ['display'=>'Data','required'=>true,'max'=>100],
            '7'=> ['display'=>'Data','required'=>true,'max'=>100],
            '8'=> ['display'=>'Age','required'=>true,'is_numeric'=>true,'max'=>2],
            '9'=> ['display'=>'Age','required'=>true,'is_numeric'=>true,'max'=>2],
            '3'=> ['display'=>'Data','required'=>true,'max'=>100],
            '4'=> ['display'=>'Data','required'=>true,'max'=>100],
            '5'=> ['display'=>'Data','required'=>true,'max'=>100],
            '6'=> ['display'=>'Data','required'=>true,'max'=>100],
            ]);
        if($validation->passed()){
          $posted_values = ['1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>'','7'=>'','8'=>'','9'=>'','10'=>'','11'=>'','12'=>'','13'=>''];
          $this->view->script = "<script>view('success');</script>";
        }
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();
      }
      elseif($param=="familyHistory"){
        $validation = new Validate();
        $posted_values = ['1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>''];
        $posted_values = Helper::posted_values($_POST);
        $validation->check($_POST, [
          '1'=> ['display'=>'Data','required'=>true,'max'=>100],
          '2'=> ['display'=>'Data','required'=>true,'max'=>100],
          '3'=> ['display'=>'Data','required'=>true,'max'=>100],
          '4'=> ['display'=>'Data','required'=>true,'max'=>100],
          '5'=> ['display'=>'Data','required'=>true,'max'=>100],
          '6'=> ['display'=>'Data','required'=>true,'max'=>100],
          ]);
        if($validation->passed()){
          $posted_values = ['1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>''];
          $this->view->script = "<script>view('success');</script>";
        }
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();
      }
      elseif($param=="surgicalHistory"){
        $validation = new Validate();
        $posted_values = ['1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>'','7'=>'','8'=>'','9'=>'','10'=>'','11'=>'',
        '12'=>'','13'=>'','14'=>'','15'=>'','16'=>''];
        $posted_values = Helper::posted_values($_POST);
        $validation->check($_POST, [
          '1'=> ['display'=>'Data','required'=>true,'max'=>100],
          '2'=> ['display'=>'Data','required'=>true,'max'=>100],
          '3'=> ['display'=>'Data','required'=>true,'max'=>100],
          '4'=> ['display'=>'Data','required'=>true,'max'=>100],
          '5'=> ['display'=>'Data','required'=>true,'max'=>100],
          '6'=> ['display'=>'Data','required'=>true,'max'=>100],
          '7'=> ['display'=>'Data','required'=>true,'max'=>100],
          '8'=> ['display'=>'Data','required'=>true,'max'=>100],
          '9'=> ['display'=>'Data','required'=>true,'max'=>100],
          '10'=> ['display'=>'Data','required'=>true,'max'=>100],
          '11'=> ['display'=>'Data','required'=>true,'max'=>100],
          '12'=> ['display'=>'Data','required'=>true,'max'=>100],
          '13'=> ['display'=>'Data','required'=>true,'max'=>100],
          '14'=> ['display'=>'Data','required'=>true,'max'=>100],
          '15'=> ['display'=>'Data','required'=>true,'max'=>100],
          '16'=> ['display'=>'Data','required'=>true,'max'=>100],
          ]);
        if($validation->passed()){
          $posted_values = ['1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>'','7'=>'','8'=>'','9'=>'','10'=>'','11'=>'',
          '12'=>'','13'=>'','14'=>'','15'=>'','16'=>''];
          $this->view->script = "<script>view('success');</script>";
        }
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();
      }
      elseif($param=="presentObsHistory"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="pastObsHistory"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="clinicCare1"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="clinicCare2"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="immunization"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="emergancyPlan"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="iCEmaterial"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="preClinic"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="hospitalClinc"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="postnatalCare"){
        $this->view->script = "<script>view('success');</script>";
      }
      elseif($param=="postpatumCare"){
        $this->view->script = "<script>view('success');</script>";
      }
      $_SESSION["editMode"]=0;
      $this->view->editMode=0;
      $new_data =new $param($param);
      $new_data->updateDatabase(Helper::posted_values($_POST));
     }
     $this->reportViewAction($param);
    }

    public function editAction($param=null){
        if(isset($_POST["editButton"])){
            $_SESSION["editMode"]=1;
            $this->view->editMode=1;

        }
        $this->reportViewAction($param);

    }

    public function reportViewAction($param){
      if(isset($param)){
          if($param == "registerDetails"){
            $this->view->btn_state['1']= 'show';
            $this->view->btn_state['1-1']= 'active';
          }
          elseif ($param == "personalDetails") {
            $this->view->btn_state['1']= 'show';
            $this->view->btn_state['1-2']= 'active';
          }
          elseif ($param == "familyHistory") {
            $this->view->btn_state['2']= 'show';
            $this->view->btn_state['2-1']= 'active';
          }
          elseif ($param == "surgicalHistory") {
            $this->view->btn_state['2']= 'show';
            $this->view->btn_state['2-2']= 'active';
          }
          elseif ($param == "presentObsHistory") {
            $this->view->btn_state['3']= 'show';
            $this->view->btn_state['3-1']= 'active';
          }
          elseif ($param == "pastObsHistory") {
            $this->view->btn_state['3']= 'show';
            $this->view->btn_state['3-2']= 'active';
          }
          elseif ($param == "clinicCare1") {
            $this->view->btn_state['4']= 'show';
            $this->view->btn_state['4-1']= 'active';
          }
          elseif ($param == "clinicCare2") {
            $this->view->btn_state['4']= 'show';
            $this->view->btn_state['4-2']= 'active';
          }
          elseif ($param == "immunization") {
            $this->view->btn_state['5']= 'show';
            $this->view->btn_state['5-1']= 'active';
          }
          elseif ($param == "weightChart") {
            $this->view->btn_state['5']= 'show';
            $this->view->btn_state['5-2']= 'active';
          }
          elseif ($param == "emergancyPlan") {
            $this->view->btn_state['6']= 'show';
            $this->view->btn_state['6-1']= 'active';
          }
          elseif ($param == "iCEmaterial") {
            $this->view->btn_state['6']= 'show';
            $this->view->btn_state['6-2']= 'active';
          }
          elseif ($param == "preClinic") {
            $this->view->btn_state['6']= 'show';
            $this->view->btn_state['6-3']= 'active';
          }
          elseif ($param == "hospitalClinc") {
            $this->view->btn_state['7']= 'show';
            $this->view->btn_state['7-1']= 'active';
          }
          elseif ($param == "postnatalCare") {
            $this->view->btn_state['8']= 'show';
            $this->view->btn_state['8-1']= 'active';
          }
          elseif ($param == "postpatumCare") {
            $this->view->btn_state['9']= 'show';
            $this->view->btn_state['9-1']= 'active';
          }


          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          //Helper::dnd($this->view->MotherTable);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/'.$param);
        }
    }

    // 1
    public function registerDetailsAction($param="registerDetails"){
      $this->view->btn_state['1']= 'show';
      $this->view->btn_state['1-1']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/registerDetails');
        }
    }

    // 2
    public function personalDetailsAction($param="personalDetails"){
      $this->view->btn_state['1']= 'show';
      $this->view->btn_state['1-2']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/personalDetails');
        }
    }

    // 3
    public function familyHistoryAction($param="familyHistory"){
      $this->view->btn_state['2']= 'show';
      $this->view->btn_state['2-1']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/familyHistory');
        }
    }

    // 4
    public function surgicalHistoryAction($param="surgicalHistory"){
      $this->view->btn_state['2']= 'show';
      $this->view->btn_state['2-2']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/surgicalHistory');
        }
    }

    // 5
    public function presentObsHistoryAction($param="presentObsHistory"){
      $this->view->btn_state['3']= 'show';
      $this->view->btn_state['3-1']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/presentObsHistory');
        }
    }

    // 6
    public function pastObsHistoryAction($param="pastObsHistory"){
      $this->view->btn_state['3']= 'show';
      $this->view->btn_state['3-2']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/pastObsHistory');
        }
    }

    // 7-1
    public function clinicCare1Action($param = "clinicCare1")
  {
      $this->view->btn_state['4']= 'show';
      $this->view->btn_state['4-1']= 'active';
      if (isset($param)) {
      $MotherTable = new Mother();
      $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
      if (isset($_POST["editButton"])) {
        $_SESSION["editMode"] = 1;
        $this->view->editMode = 1;
      }
      else if (isset($_POST["saveButton"])) {
        $_SESSION["editMode"] = 0;
        $this->view->editMode = 0;
        unset($_POST["saveButton"]);
        $new_data = new $param($param);
        $new_data->updateMultipleRows(Helper::posted_values($_POST),["0","1","2","3","4","5","6","7","8","9"],['idcardnum'=>User::currentUser()->idcardnum]);
      }
      $columns = new $param($param);
      $this->view->columns = $columns->getFromDatabase(User::currentUser()->idcardnum);
      $this->view->setLayout('pregReport_layout');
      $this->view->render('mother/clinicCare1');
    }
  }


    // 7-2
    public function clinicCare2Action($param="clinicCare2"){
      $this->view->btn_state['4']= 'show';
      $this->view->btn_state['4-2']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/clinicCare2');
        }
    }

    // 8
    public function immunizationAction($param="immunization"){
      $this->view->btn_state['5']= 'show';
      $this->view->btn_state['5-1']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/immunization');
        }
    }

    // 9
    public function weightChartAction($param = "weightChart")
    {
      $this->view->btn_state['5']= 'show';
      $this->view->btn_state['5-2']= 'active';
      if (isset($param)) {
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
        if (isset($_POST["editButton"])) {
          $_SESSION["editMode"] = 1;
          $this->view->editMode = 1;
        }
        else if (isset($_POST["saveButton"])) {
          $_SESSION["editMode"] = 0;
          $this->view->editMode = 0;
          unset($_POST["saveButton"]);
          $new_data = new $param($param);
          $new_data->updateMultipleRows(Helper::posted_values($_POST),["weight","height","week"],['idcardnum'=>User::currentUser()->idcardnum]);
        }
        $weightChart = new $param($param);
        $this->view->charts = $weightChart->getFromDatabase(User::currentUser()->idcardnum);
        $this->view->setLayout('pregReport_layout');
        $this->view->render('mother/weightChart');
      }
    }
    // 10
    public function emergancyPlanAction($param="emergancyPlan"){
      $this->view->btn_state['6']= 'show';
      $this->view->btn_state['6-1']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/emergancyPlan');
        }
    }

    // 11
    public function iCEmaterialAction($param="iCEmaterial"){
      $this->view->btn_state['6']= 'show';
      $this->view->btn_state['6-2']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/iCEmaterial');
        }
    }

    // 12
    public function preClinicAction($param="preClinic"){
      $this->view->btn_state['6']= 'show';
      $this->view->btn_state['6-3']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/preClinic');
        }
    }

    // 13
    public function hospitalClincAction($param="hospitalClinc"){
      $this->view->btn_state['7']= 'show';
      $this->view->btn_state['7-1']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/hospitalClinc');
        }
    }

    // 14
    public function postnatalCareAction($param="postnatalCare"){
      $this->view->btn_state['8']= 'show';
      $this->view->btn_state['8-1']= 'active';
      if(isset($param)){
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/postnatalCare');
        }
    }

    // 15
    public function postpatumCareAction($param="postpatumCare"){
      $this->view->btn_state['9']= 'show';
      $this->view->btn_state['9-1']= 'active';
      if(isset($param)){
          $MotherTable = new Mother();
          $this->view->MotherTable = $MotherTable->getByID(User::currentUser()->idcardnum);
          $Mother = new $param($param);
          $this->view->Mother = $Mother->getFromDatabase(User::currentUser()->id);
          $this->view->setLayout('pregReport_layout');
          $this->view->render('mother/postpatumCare');
        }
    }



}
