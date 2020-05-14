<?php

class User extends Model{
    private $_isLoggedIn, $_sessionName, $_cookieName, $user;
    public static $currentLoggedInUser;

    public function __construct($user){ //$user can be idcardnumber or email address
        $this->user = $user;
        $table = 'user';
        parent::__construct($table);
        $this->_sessionName = CURRENT_USER_SESSION_NAME;
        $this->_cookieName = REMEMBER_ME_COOKIE_NAME;
        $this->_softDelete =true;

        if($user != ''){
            if(is_int($user)){
                $u = $this->_db->findFirst($table, ['conditions'=> 'id = ?', 'bind'=>[$user]]);
            }else{
                $u = $this->_db->findFirst($table, ['conditions'=> 'email = ?', 'bind'=>[$user]]);   
            }
            if($u){
                foreach($u as $key => $val){
                    $this->$key = $val;
                }
            }
        }       
    }

    public function findByID($id){
        return $this->findFirst(['conditions'=>"idcardnum = ?", 'bind' =>[$id]]);
    }


    public static function currentLoggedInUser(){
        if(!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)){
            self::$currentLoggedInUser = new User((int)Session::get(CURRENT_USER_SESSION_NAME));
        }
        return self::$currentLoggedInUser;
    }
    

    public function login($rememberMe = false){
        Session::set($this->_sessionName, $this->id);
        self::$currentLoggedInUser = $this;
        if($rememberMe){
            $hash = md5(uniqid()+rand(0,100));
            $user_agent = Session::uagent_no_version();
            Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
            $fields = ['session'=>$hash, 'user_agent'=>$user_agent, 'user_id' => $this->id];
            $this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?",[$this->id, $user_agent]);
            $this->_db->insert('user_sessions', $fields);
        }
    }

    public static function loginUserFromCookie(){
        $user_session_model = new UserSession();
        $user_session = $user_session_model->findFirst([
            'conditions' => ['user_agent=?','session=?'],
            'bind'=>[Session::uagent_no_version(), Cookie::get(REMEMBER_ME_COOKIE_NAME)]
        ]);
        
        if($user_session->user_id != ''){
            $user = new self((int)$user_session->user_id);
        }
        $user->login();
        return $user;
    }

    public function logout(){
        $user_agent = Session::uagent_no_version();
        $this->_db->query("DELETE FROM user_session WHERE user_id = ? AND user_agent = ?",[$this->id, $user_agent]);
        Session::delete(CURRENT_USER_SESSION_NAME);
        if(Cookie::exsits(REMEMBER_ME_COOKIE_NAME)){
            Cookie::delete(REMEMBER_ME_COOKIE_NAME);
        }
        self::$currentLoggedInUser = null;
        return true;
           
    }

}