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
    <link rel="stylesheet" href="<?= PROOT ?>css/midwife.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/medicalofficer.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/reset-stylesheet.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/pregnancyReport.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/background.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/DailyWorkReport.css">

    

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- JS -->
    <script src="<?= PROOT ?>js/jquery-3.4.1.js"></script>
    <script src="<?= PROOT ?>bootstrap/js/bootstrap.js"></script>
    <script src="<?= PROOT ?>bootstrap/js/main.js"></script>



</head>

<body>
  
    <!--navigation bar-->
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
    <div class="container"></div>
    <script src="/js/jquery-3.4.1.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <!--end of the menu bar-->




    <?= $this->content("body"); ?>






















</body>

</html>