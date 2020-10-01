<?php

class Emailmediator{
    private $users;
    public function __construct()
    {
        $this->users = [];
        
    }

    public function sendMessage($msg, $senduser){
        $log = [];
        foreach($this->users as $user){
            if($senduser !== $user){   
                $log[] = $user->receive($msg);
            }
        }
        return $log;
    }

    public function addUser($user){
        $this->users[] = $user; 
    }
}