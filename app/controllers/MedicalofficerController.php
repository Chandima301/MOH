<?php

class MedicalofficerController extends Controller
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->view->setLayout('mediofficer_layout');
        $this->view->btn_state = ['area' => '', 'approve' => '', 'cancel' => '', 'details' => '', 'details-tab' => '', 'register-tab' => '', 'messages' => '', 'notifications' => ''];
        $this->load_model('Medicalofficer');
        $this->load_model('TimeTable');
        $this->load_model('Message');
        $this->load_model('Mother');
        $this->view->newMsgCount = $this->MessageModel->getNewMsgCount();
    }

    public function indexAction()
    {
        $notifications = [];
        $PendingTimeTablesCount = (string)$this->TimeTableModel->getPendingTimeTablesCount();

        //pending approval notifications
        if ($PendingTimeTablesCount > 0) {
            $pendingApproval = ["content" => "අනුමැතිය සදහා කාලසටහන් " . $PendingTimeTablesCount . " ක් ඉදිරිපත් කර ඇත.", "date" => date("Y-m-d H:i:s")];
            array_push($notifications, $pendingApproval);
        }

        $this->view->notifications = $notifications;
        if (!$notifications) {
            $this->view->script = "<script>view('nonotifications');</script>";
        }

        $this->view->monthlydata = $this->MotherModel->getApprovedMothersCountMonthly();
        //Helper::dnd($this->view->monthlydata);
        $this->view->render('medicalOfficer/index');
    }

    public function messageAction($id = '')
    {
        $selectedChat = [];
        $message = ["message" => ''];
        if ($_POST and $id != '') {
            $message = Helper::posted_values($_POST);
            if ($this->MessageModel->sendMessage($id, $_POST['message'])) {
                $message = ["message" => ''];
            }
        }

        if ($id != '') {
            $selectedChat = $this->MessageModel->getMessagesFromSender($id);
        }
        $chats = $this->MessageModel->getRecivedMessages();
        $this->view->search_text = ["idcardnum" => ""];
        $this->view->activeChat = $id;
        $this->view->message = $message;
        $this->view->selectedChat = $selectedChat;
        $this->view->chats = $chats;
        $this->view->users = [];
        $this->view->btn_state['messages'] = 'active';
        $this->view->render('medicalOfficer/messages');
    }
    public function notificationAction($id = '')
    {
        $this->view->btn_state['notifications'] = 'active';
        $this->view->render('medicalOfficer/notifications');
    }

    public function searchForMessageAction()
    {
        $this->view->users = [];
        $search_text = ["idcardnum" => ""];
        if ($_POST) {
            $search_text = Helper::posted_values($_POST);
            $users = $this->MedicalofficerModel->getUserByID($_POST['idcardnum']);
            if ($users) {
                $search_text = ['idcardnum' => ''];
                $this->view->users = $users;
            } else {
                $this->view->script = "<script>view('notfound');</script>";
            }
        }
        $this->view->message = ["message" => ""];
        $this->view->search_text = $search_text;
        $this->view->selectedChat = [];
        $this->view->chats = [];
        $this->view->users = $users;
        $this->view->btn_state['messages'] = 'active';
        $this->view->render('medicalOfficer/messages');
    }

    public function areaAction()
    {
        $date = explode('/', date('Y/m/d'));
        $month = $date[0] . '/' . $date[1];
        $day = (string)(int)$date[2];
        $slots = $this->TimeTableModel->getTimeTableSlotsByDay($month, $day);
        $this->view->slots = $slots;
        $this->view->day = $day;
        $this->view->btn_state['area'] = 'active';
        $this->view->render('medicalOfficer/area');
    }
    public function approveAction()
    {
        $this->view->btn_state['approve'] = 'active';
        $timetables = $this->TimeTableModel->getPendingTimeTables();
        $approvedRecently = $this->TimeTableModel->getRecentApprovedTimeTables();
        if (!$timetables) {
            $this->view->script = "<script>view('nothingtoapprove');</script>";
        }
        $this->view->approvedRecently = $approvedRecently;
        $this->view->timetables = $timetables;
        $this->view->render('medicalOfficer/approve');
    }

    public function timetabledetailsAction($id, $approval = '')
    {
        $this->view->btn_state['approve'] = 'active';
        if ($approval == 'approve') {
            if ($this->TimeTableModel->updateApproval($id, User::currentUser()->name)) {
                $this->view->script = "<script>view('approvesuccess');</script>";
            } else {
                $this->view->script = "<script>view('approveerror');</script>";
            }
        }
        $timetable = $this->TimeTableModel->findByID($id);
        if (!$timetable) {
        }


        $this->view->id = $id;
        $this->view->timetable = $timetable;
        $this->view->render('medicalOfficer/timetablepreview');
    }

    public function midwifedetailsAction($id)
    {
        $this->view->btn_state['details'] = 'active';
        $timetables = $this->TimeTableModel->findByIDcardnum($id);
        $midwife = $this->MedicalofficerModel->findByID($id);
        if (!$timetables) {
            $this->view->script = "<script>view('notimetables');</script>";
        }
        $this->view->timetables = $timetables;
        $this->view->midwife = $midwife;
        $this->view->render('medicalOfficer/midwifepreview');
    }

    public function cancelAction()
    {
        $logs = [];
        $posted_values = ['date' => '', 'message' => ''];
        if ($_POST) {
            $posted_values = Helper::posted_values($_POST);
            $mediator = new Emailmediator();
            $mothers = $this->MedicalofficerModel->getMothersForGivenClinicDate($_POST['date']);
            foreach ($mothers as $mother) {
                $mother->setMediator($mediator);
                $mediator->addUser($mother);
            }
            User::currentUser()->setMediator($mediator);
            $mediator->addUser(User::currentUser());

            $logs = User::currentUser()->send($_POST['message']);
            if ($logs) {
                $this->view->script = "<script>view('logs');</script>";
            }
        }

        $this->view->logs = $logs;
        $this->posted_values = $posted_values;

        $this->view->btn_state['cancel'] = 'active';
        $this->view->render('medicalOfficer/cancel');
    }

    public function detailsAction()
    {
        $this->view->btn_state['details'] = 'active';
        $this->view->btn_state['details-tab'] = 'active';
        $this->view->search_text = ['idcardnum' => ''];
        $this->view->midwifes = $this->MedicalofficerModel->getAllMidwifes();
        $this->view->render('medicalOfficer/details');
    }

    public function registerAction()
    {
        $this->view->btn_state['details'] = 'active';
        $this->view->btn_state['register-tab'] = 'active';
        $this->view->page_state = 'register';
        $this->view->post = ['name' => '', 'idcardnum' => '', 'birthday' => '', 'address' => '', 'phone' => '', 'email' => '', 'pwd' => '', 'confirm' => ''];
        $this->view->render('medicalOfficer/register');
    }

    public function updateAction($idcardnum = "")
    {
        $this->view->btn_state['details'] = 'active';
        $this->view->btn_state['register-tab'] = 'active';
        $this->view->page_state = 'update';
        $post = ['name' => '', 'idcardnum' => '', 'birthday' => '', 'address' => '', 'phone' => '', 'email' => ''];
        $this->view->post = $post;
        if ($idcardnum != "") {
            $midwife = $this->MedicalofficerModel->findByID($idcardnum);
            foreach ($post as $p => $s) {
                $this->view->post[$p] = $midwife->$p;
            }
            $this->view->id = $midwife->id;
            $this->view->post["pwd"] = "";
            $this->view->post["confirm"] = "";
        }
        $this->view->render('medicalOfficer/register');
    }


    public function searchmidwifeAction()
    {
        $this->view->btn_state['details'] = 'active';
        $this->view->btn_state['details-tab'] = 'active';
        $this->view->midwifes = $this->MedicalofficerModel->getAllMidwifes();
        $search_text = ['idcardnum' => ''];
        if ($_POST) {
            $search_text = Helper::posted_values($_POST);
            $midwife = $this->MedicalofficerModel->getMidwifeByID($_POST['idcardnum']);
            if ($midwife) {
                $search_text = ['idcardnum' => ''];
                $this->view->midwifes = $midwife;
            } else {
                $this->view->script = "<script>view('notfound');</script>";
            }
        }

        $this->view->search_text = $search_text;
        $this->view->render('medicalOfficer/details');
    }




    public function registermidwifeAction()
    {   
        $this->view->page_state = 'register';
        $this->view->btn_state['details'] = 'active';
        $this->view->btn_state['register-tab'] = 'active';
        $validation = new Validate();
        $posted_values = ['name' => '', 'idcardnum' => '', 'birthday' => '', 'address' => '', 'phone' => '', 'email' => '', 'pwd' => '', 'confirm' => ''];
        if ($_POST) {
            $this->view->page_state = $_POST["page_state"];
            $posted_values = Helper::posted_values($_POST);
            if ($_POST["page_state"] == "register") {
                $validate = [
                    'name' => [
                        'display' => 'Name',
                        'required' => true,
                        'max' => 100
                    ],
                    'idcardnum' => [
                        'display' => 'ID card number',
                        'required' => true,
                        'min' => 10,
                        'unique' => 'user'

                    ],
                    'birthday' => [
                        'display' => 'Birthday',
                        'required' => true,
                        'max' => 10
                    ],
                    'address' => [
                        'display' => 'address',
                        'required' => true,
                        'max' => 250
                    ],
                    'phone' => [
                        'display' => 'Phone number',
                        'required' => true,
                        'max' => 10,
                        'is_numeric' => true
                    ],
                    'email' => [
                        'display' => 'Email address',
                        'required' => true,
                        'max' => 150,
                        'valid_email' => true,
                        'unique' => 'user'
                    ],
                    'pwd' => [
                        'display' => 'Password',
                        'required' => true,
                        'min' => 8
                    ],
                    'confirm' => [
                        'display' => 'Repeat-password',
                        'required' => true,
                        'matches' => 'pwd'
                    ],
                ];
                $validation->check($_POST, $validate);
            } else {
                $validate["idcardnum"] = [
                    'display' => 'ID card number',
                    'required' => true,
                    'min' => 10
                ];
                $validate["email"] = [
                    'display' => 'Email address',
                    'required' => true,
                    'max' => 150,
                    'valid_email' => true
                ];
                $validation->check($_POST, $validate);
            }

            if ($validation->passed()) {
                $newUser = new User();
                $newUser->user_type = 'MI';
                $newUser->registerNewUser($_POST);
                $this->view->btn_state['details'] = 'active';
                if ($_POST["page_state"] == "register")$posted_values = ['name' => '', 'idcardnum' => '', 'birthday' => '', 'address' => '', 'phone' => '', 'email' => '', 'pwd' => '', 'confirm' => ''];
                $this->view->script = "<script>view('success');</script>";
            }
        }


        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('medicalofficer/register');
    }
}
