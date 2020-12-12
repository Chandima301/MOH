<?php

//import all the files which waant to crete corresponding models
require 'C:\xammp\htdocs\MOH\core\Model.php';
require 'C:\xammp\htdocs\MOH\core\Report.php';
require 'C:\xammp\htdocs\MOH\app\models\dailyworkReport.php';
require 'C:\xammp\htdocs\MOH\config\config.php';
require 'C:\xammp\htdocs\MOH\core\DB.php';
require 'C:\xammp\htdocs\MOH\app\models\User.php';
require 'C:\xammp\htdocs\MOH\app\models\ICEmaterial.php';



use PHPMailer\PHPMailer\PHPMailer;

/* Exception class. */

require 'PHPMailer\src\Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer\src\SMTP.php';

function sendMail($to, $subject, $msg) // email function to send emails
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Host = "smtp.gmail.com";
    $mail->Username = "medicalofficerofhealthkelaniya@gmail.com";
    $mail->Password = "@Password123";

    $mail->IsHTML(true);
    $mail->AddAddress($to);
    $mail->SetFrom("medicalofficerofhealthkelaniya@gmail.com");
    $mail->AddReplyTo("medicalofficerofhealthkelaniya@gmail.com");
    $mail->Subject = $subject;
    $content = "<b>" . $msg . "</b>";

    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Error while sending Email.";
    } else {
        echo "Email sent successfully";
    }
}

function noticeArea() //notify midwifes about their work area
{
    $users = new User();
    $users = $users->getAllusers("MI"); //get all the midwifws
    foreach ($users as $user) {
        if ($user->id) {
            var_dump($user->name);
            $newDailyworkReport = new dailyworkReport();
            $newDailyworkReport = $newDailyworkReport->findFirst(["conditions" => ["id =?", "period=?"], "bind" => [$user->id, strtotime("first day of last month")]]);
            $coulmn = date('j');
            if( $newDailyworkReport->{$coulmn}){
            $msg = "අද දින සායන පැවැත්වීමට නියමිත ප්‍රදේශය " . $newDailyworkReport->{$coulmn};
            sendMail($user->email, "Daily Work Report Announcement", $msg);
        }
     }
    }
}

function notifyMother()  //notify mother about the clinc dates which they should come to
{
    $users = new User();
    $users = $users->getAllusers("M"); //get all the mothers
    foreach ($users as $user) {
        if ($user->id) {
            $ICEreport = new ICEmaterial();

            $ICEreport = $ICEreport->findFirst(["conditions" => ["id =?"],"bind" =>[$user->id]]);
            $nextClinic = $ICEreport->{28};
            if(date_format($nextClinic,"Y/m/j")){
            if(isset($nextClinic)){
            // $nextClinic="2020/10/2";
            $nextDate = explode('/',$nextClinic);
            
            
          
            
            if(date("Y")==$nextDate[0]){
                if(date("m")==$nextDate[1]){
                    if(date("j")+1==$nextDate[2]){
                        $msg = "හෙට දින නියමිත මාතෲ සායනයක් පැවැත්වේ. එයට සහභාගි වන්න.";
                        sendMail($user->email, "Maternity Clinic Remainder", $msg);
                    }
                }
            }
        }
            

            }




























            
        }
    }
}

noticeArea();
//notifyMother();
