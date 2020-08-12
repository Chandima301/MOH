<?php

class User extends Model{
    private $_isLoggedIn, $_sessionName, $_cookieName, $user;
    public static $currentLoggedInUser;

    public function __construct($user=''){ //$user can be id or email address
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


    public static function currentUser(){
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
            $this->_db->query("DELETE FROM user_session WHERE user_id = ? AND user_agent = ?",[$this->id, $user_agent]);
            $this->_db->insert('user_session', $fields);
        }
    }

    public static function loginUserFromCookie(){
        $userSession = UserSession::getFromCookie();
        if($userSession->user_id != ''){
            $user = new self((int)$userSession->user_id);
        }
        if($user)$user->login();
        return $user;
    }

    public function logout(){
        $userSession = UserSession::getFromCookie();
        $userSession->delete();
        Session::delete(CURRENT_USER_SESSION_NAME);
        if(Cookie::exsits(REMEMBER_ME_COOKIE_NAME)){
            Cookie::delete(REMEMBER_ME_COOKIE_NAME);
        }
        self::$currentLoggedInUser = null;
        return true;
           
    }

    public function registerNewUser($params){
        $this->assign($params);
        $this->deleted = 0;
        $this->pwd = password_hash($this->pwd,PASSWORD_DEFAULT);
        $this->save();
    }

    public function acls(){
        if(empty($this->acl))return [];
        return json_decode($this->acl, true);
    }
    public function getAllusers(){
        
        return $this->find(['conditions'=>"user_type = ?", 'bind' =>['MI']]);
    }

}