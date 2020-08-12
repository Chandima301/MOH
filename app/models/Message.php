<?php

class Message extends Model{
    public function __construct(){
        $table = 'message';
        parent::__construct($table);

    }

    public function sendMessage($reciver, $message_body){
        return $this->insert(['idcardnum'=>$reciver, 'sender'=>User::currentUser()->idcardnum,'status'=>'sent','date'=>date("Y-m-d H:i:s"),'message'=>$message_body]);
    }

    public function getRecivedMessages(){
        return $this->find(['conditions'=>'msg.idcardnum = ? OR msg.sender = ?',
        'bind'=>[User::currentUser()->idcardnum,User::currentUser()->idcardnum],
        'columns'=>'msg.*,send.name AS sender_name, recive.name AS reciver_name',
        'join'=>'AS msg 
        INNER JOIN 
        user AS send 
        ON msg.idcardnum = send.idcardnum 
        INNER JOIN 
        user AS recive 
        ON msg.sender = recive.idcardnum',
        'order' => 'date DESC']);
    }

    public function getMessagesFromSender($id){
        $this->update1(['status'=> 'read'],['idcardnum' => User::currentUser()->idcardnum , 'sender' => $id]);
        return $this->find(['conditions'=>'(message.idcardnum = ? AND message.sender = ?) OR (message.idcardnum = ? AND message.sender = ?)',
        'bind'=>[User::currentUser()->idcardnum,$id,$id,User::currentUser()->idcardnum],
        'columns'=>'message.*,user.name',
        'join'=>'INNER JOIN user on user.idcardnum = message.sender',
        'order' => 'date ASC']);
    }

    public function getNewMsgCount(){
        return count($this->find(['conditions'=>['message.idcardnum = ?','status = ?'],
        'bind'=>[User::currentUser()->idcardnum,'sent'],
        'columns'=>'message.idcardnum']));
    }



}

