<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class User extends Model
{
    private $_isLoggedIn, $_sessionName, $_cookieName, $user;
    public static $currentLoggedInUser;
    protected $mediator;

    public function __construct($user = '')
    { //$user can be id or email address
        $this->user = $user;
        $table = 'user';
        parent::__construct($table);
        $this->_sessionName = CURRENT_USER_SESSION_NAME;
        $this->_cookieName = REMEMBER_ME_COOKIE_NAME;
        $this->_softDelete = true;

        if ($user != '') {
            if (is_int($user)) {
                $u = $this->_db->findFirst($table, ['conditions' => 'id = ?', 'bind' => [$user]]);
            } else {
                $u = $this->_db->findFirst($table, ['conditions' => 'email = ?', 'bind' => [$user]]);
            }
            if ($u) {
                foreach ($u as $key => $val) {
                    $this->$key = $val;
                }
            }
        }
    }

    public function findByID($id)
    {
        return $this->findFirst(['conditions' => "idcardnum = ?", 'bind' => [$id]]);
    }

    public static function currentUser()
    {
        if (!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)) {
            self::$currentLoggedInUser = new User((int) Session::get(CURRENT_USER_SESSION_NAME));
        }
        return self::$currentLoggedInUser;
    }

    public function login($rememberMe = false)
    {
        Session::set($this->_sessionName, $this->id);
        self::$currentLoggedInUser = $this;
        if ($rememberMe) {
            $hash = md5(uniqid() + rand(0, 100));
            $user_agent = Session::uagent_no_version();
            Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
            $fields = ['session' => $hash, 'user_agent' => $user_agent, 'user_id' => $this->id];
            $this->_db->query("DELETE FROM user_session WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);
            $this->_db->insert('user_session', $fields);
        }
    }

    public static function loginUserFromCookie()
    {
        $userSession = UserSession::getFromCookie();
        if ($userSession->user_id != '') {
            $user = new self((int) $userSession->user_id);
        }
        if ($user) {
            $user->login();
        }

        return $user;
    }

    public function logout()
    {
        $userSession = UserSession::getFromCookie();
        $userSession->delete();
        Session::delete(CURRENT_USER_SESSION_NAME);
        if (Cookie::exsits(REMEMBER_ME_COOKIE_NAME)) {
            Cookie::delete(REMEMBER_ME_COOKIE_NAME);
        }
        self::$currentLoggedInUser = null;
        return true;
    }

    public function registerNewUser($params)
    {
        $this->assign($params);
        $this->deleted = 0;
        $this->pwd = password_hash($this->pwd, PASSWORD_DEFAULT);
        $this->save();
    }

    public function acls()
    {
        if (empty($this->acl)) {
            return [];
        }

        return json_decode($this->acl, true);
    }

    public function getAllusers($type)
    {

        return $this->find(['conditions' => "user_type = ?", 'bind' => [$type]]);
    }

    public function setMediator($mediator)
    {
        $this->mediator = $mediator;
    }

    public function send($msg)
    {
        return $this->mediator->sendMessage($msg, $this);
    }

    public function receive($msg)
    {
        $mail = new PHPMailer(true);
        

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output                     // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'medicalofficerofhealthkelaniya@gmail.com';                     // SMTP username
            $mail->Password   = '@Password123';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('medicalofficerofhealthkelaniya@gmail.com', 'Medical Officer');
            $mail->addAddress($this->email, $this->name);     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'MOH Office Kelaniya';
            $mail->Body    = $msg;
            $mail->AltBody = '';

            $mail->send();
            return "Message has been sent to $this->name";
        } catch (Exception $e) {
            echo "Message could not be sent to $this->name. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function getUserByID($id){
        return $this->find(['conditions'=>["idcardnum = ?"], 'bind' =>[$id]]);
    }
}
