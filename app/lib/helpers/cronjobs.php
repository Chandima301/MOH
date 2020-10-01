<?php
require 'E:\Program Files\xammp\htdocs\MOH\core\Model.php';
require 'E:\Program Files\xammp\htdocs\MOH\core\Report.php';
require 'E:\Program Files\xammp\htdocs\MOH\app\models\dailyworkReport.php';
require 'E:\Program Files\xammp\htdocs\MOH\config\config.php';
require 'E:\Program Files\xammp\htdocs\MOH\core\DB.php';
require 'E:\Program Files\xammp\htdocs\MOH\app\models\User.php';
require 'E:\Program Files\xammp\htdocs\MOH\app\models\ICEmaterial.php';

use PHPMailer\PHPMailer\PHPMailer;

/* Exception class. */

require 'PHPMailer\src\Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer\src\SMTP.php';

function sendMail($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Host = "smtp.gmail.com";
    $mail->Username = "udayangana98@gmail.com";
    $mail->Password = "40715493";

    $mail->IsHTML(true);
    $mail->AddAddress($to);
    $mail->SetFrom("udayangana98@gmail.com");
    $mail->AddReplyTo("udayangana98@gmail.com");
    $mail->Subject = $subject;
    $content = "<b>" . $msg . "</b>";

    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Error while sending Email.";
    } else {
        echo "Email sent successfully";
    }
}

function noticeArea()
{
    $users = new User();
    $users = $users->getAllusers("MI");
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

function notifyMother()
{
    $users = new User();
    $users = $users->getAllusers("M");
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
notifyMother();
