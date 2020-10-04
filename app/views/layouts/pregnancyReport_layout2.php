<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->siteTitle(); ?></title>
    <link rel="icon" type="image/png" href="<?= PROOT ?>img/National.png" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= PROOT ?>bootstrap/css/bootstrap.css">
    <!-- icons-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- main stylesheet -->

    <link rel="stylesheet" href="<?= PROOT ?>css/medicalofficer.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/reset-stylesheet.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/pregnancy.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/message.css">


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- JS -->
    <script src="<?= PROOT ?>js/jquery-3.4.1.js"></script>
    <script src="<?= PROOT ?>bootstrap/js/bootstrap.js"></script>



</head>

<body>
    <!--navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="<?= PROOT ?>img/National.png" width="40" height="40" class="d-inline-block align-top" alt="Sri Lanka National Symbol">
        </a>
        <a class="navbar-brand" href="#">MOH OFFICE<br>&emsp;Kelaniya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <header>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav pl-2">
                    <li class="nav-item active pl-2">
                        <a class="nav-link nav-box" href="<?= PROOT ?>midwife/index">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-2">
                        <a class="nav-link nav-box" href="<?= PROOT ?>midwife/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item pl-2">
                        <a class="nav-link nav-box" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item pl-2">
                        <a href="<?= PROOT ?>midwife/message">
                            <button type="button" class="btn btn-primary btn-msg">
                                <i class="fa fa-comments fa-lg"></i>
                                <span class="badge badge-danger">40</span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item pl-5 user-image">
                        <!--<img src="<?= PROOT ?>img/Midwife-icon7.png" width="40" height="40" class="d-inline-block align-top" alt="Sri Lanka National Flag"></a>-->
                    </li>
                    <li class="nav-item pl-2">
                        <a class="nav-link active disabled btn-name" href="#"><i class="fa fa-user-circle"></i> Hello,<br><?= $this->name; ?></a>
                    </li>
                    <li class="nav-item pl-2">
                        <a href="<?= PROOT ?>login/logout" class="btn btn-danger btn-logout btn-lg active nav-boxlogout" role="button" aria-pressed="true">Log Out</a>
                    </li>
                </ul>
            </div>
        </header>
    </nav>
    <!--end of the menu bar-->


    <!--satrt report section-->
    <div class="container-fluid">


        <div class="row" style="height:100vh">
            <!-- slide bar -->
            <div class="col-md-2 sidebar">
                <button type="button" class="btn btn-warning" style="margin:10px 10px;"><a
                        href="<?=PROOT?>preport" style="all:unset;text-decoration: none;">තේරීමේ පිටුවට
                        පිවිසෙන්න</a></button>

                <ul class="sidebar-btn" style="margin:10px 10px 0px 10px">
                    <li class="side-tab <?=$this->btn_state['registerDetails'];?>">
                        <a href="<?=PROOT?>preport/reportView/registerDetails">1.ලියාපදිංචි තොරතුරු</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['personalDetails'];?>">
                        <a href="<?=PROOT?>preport/reportView/personalDetails">2.පෞද්ගලික / පවුල් තොරතුර</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['familyHistory'];?>">
                        <a href="<?=PROOT?>preport/reportView/familyHistory">3.පවුලේ රෝග ඉතිහාසය</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['surgicalHistory'];?>">
                        <a href="<?=PROOT?>preport/reportView/surgicalHistory">4.කායික / ශල්‍ය ඉතිහාසය</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['presentObsHistory'];?>">
                        <a href="<?=PROOT?>preport/reportView/presentObsHistory">5.වර්තමාන ගර්භ ඉතිහාසය</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['pastObsHistory'];?>">
                        <a href="<?=PROOT?>preport/reportView/pastObsHistory">6.පෙර ගර්භ ඉතිහාසය</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['clinicCare1'];?>">
                        <a href="<?=PROOT?>preport/clinicCare1/clinicCare1">7.සායනික සං‍රක්ෂණය 1</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['clinicCare2'];?>">
                        <a href="<?=PROOT?>preport/reportView/clinicCare2">8.සායනික සං‍රක්ෂණය 2</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['immunization'];?>">
                        <a href="<?=PROOT?>preport/reportView/immunization">9.ප්‍රතිශක්තිකරණය</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['weightChart'];?>">
                        <a href="<?=PROOT?>preport/weightChart/weightChart">10.බර වැඩිවීමේ සටහන</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['emergancyPlan'];?>">
                        <a href="<?=PROOT?>preport/reportView/emergancyPlan">11.හදිසි අවස්ථාවන් සදහා සැලසුම්</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['iCEmaterial'];?>">
                        <a href="<?=PROOT?>preport/reportView/iCEmaterial">12.පවුල් සැලසුම්</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['preClinic'];?>">
                        <a href="<?=PROOT?>preport/reportView/preClinic">13.පූර්ව ප්‍රසව සැසි සදහා පැමිණීම</a>
                    </li>

                </ul>
            </div>
            <div class="col-md-10">
                <?= $this->content("body"); ?>
            </div>
        </div>
    </div>

    <script src="/js/jquery-3.4.1.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>
