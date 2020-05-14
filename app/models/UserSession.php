<?php

class UserSession extends Model{
    public function __construct(){
        $table = 'user_session';
        parent::__construct($table);

    }

    public static function getFromCookie(){
        if(Cookie::exsits(REMEMBER_ME_COOKIE_NAME)){
            $userSession = (new self())->findFirst([
                'conditions' => ['user_agent=?','session=?'],
                'bind' => [Session::uagent_no_version(),Cookie::get(REMEMBER_ME_COOKIE_NAME)]
            ]);
        }
       
    }
}