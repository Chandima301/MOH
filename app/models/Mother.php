<?php

class Mother extends Model{
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public static $currentLoggedInUser;

    public function __construct($user){ //$user can be idcardnumber or email address
        $table = 'mothers';
        parent::__construct($table);
        $this->_sessionName = CURRENT_USER_SESSION_NAME;
        $this->_cookieName = REMEMBER_ME_COOKIE_NAME;
        $this->_softDelete =true;

        if($user != ''){
            if(is_int($user)){
                $u = $this->_db->findFirst($table, ['conditions'=> 'idcardnum = ?', 'bind'=>[$user]]);
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

    public function findByName($name){
        return $this->findFirst(['conditions'=>"name = ?", 'bind' =>[$name]]);
    }

    public function login($rememberMe = false){
        Session::set($this->_sessionName, $this->id);
        if($rememberMe){
            $hash = md5(uniqid()+rand(0,100));
            $user_agent = Session::uagent_no_version();
            Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
            $fields = ['session'=>$hash, 'user_agent'=>$user_agent, 'mother_id'];
            $this->_db->query("DELETE FROM mother_sessions WHERE user_id = ? AND user_agent = ?",[$this->id, $user_agent]);
            $this->_db-insert('user_sessions', $fields);
        }
    }

}