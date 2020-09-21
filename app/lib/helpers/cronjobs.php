<?php
require 'E:\Program Files\xammp\htdocs\MOH\core\Model.php';
require 'E:\Program Files\xammp\htdocs\MOH\core\Report.php';
require 'E:\Program Files\xammp\htdocs\MOH\app\models\dailyworkReport.php';
require 'E:\Program Files\xammp\htdocs\MOH\config\config.php';
require 'E:\Program Files\xammp\htdocs\MOH\core\DB.php';
require 'E:\Program Files\xammp\htdocs\MOH\app\models\User.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'PHPMailer\src\Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer\src\SMTP.php';


    function sendMail($to, $subject, $msg){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";


        $mail->SMTPDebug  = 1;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "udayangana98@gmail.com";
        $mail->Password   = "40715493";



        $mail->IsHTML(true);
        $mail->AddAddress($to);
        $mail->SetFrom("udayangana98@gmail.com");
        $mail->AddReplyTo("udayangana98@gmail.com");
        $mail->Subject = $subject;
        $content = "<b>".$msg."</b>";

        $mail->MsgHTML($content); 
        if(!$mail->Send()) {
        echo "Error while sending Email.";
        
        } else {
        echo "Email sent successfully";
        }
    }
    function noticeArea(){
        $users =new User();
        $users =$users->getAllusers();
        foreach( $users as $user){
            if($user->id){
                $newDailyworkReport =new dailyworkReport();
                $newDailyworkReport=$newDailyworkReport->findFirst(["conditions"=>["id =?", "period=?"],"bind"=>[$user->id,strtotime("first day of last month")]]);
                $coulmn="දිනය_".date('j');
                $msg="අද දින සායන පැවැත්වීමට නියමිත ප්‍රඩ්ගෙශය ".$newDailyworkReport->{$coulmn};
                sendMail($user->email, "දින වැඩ වාර්තාව",$msg);

            }
        }
    }

    noticeArea();