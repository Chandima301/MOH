<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->siteTitle(); ?></title>
    <link rel="icon" type="image/png" href="<?= PROOT ?>img/National.png" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= PROOT ?>bootstrap/css/bootstrap.css">
    <!-- icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- main stylesheet -->
    <link rel="stylesheet" href="<?= PROOT ?>css/medicalofficer.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/reset-stylesheet.css">

    <!-- JS -->
    <script src="<?= PROOT ?>js/jquery-3.4.1.js"></script>
    <script src="<?= PROOT ?>js/popper.min.js"></script>
    <script src="<?= PROOT ?>bootstrap/js/bootstrap.js"></script>

    <?= $this->content('head'); ?>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="<?= PROOT ?>medicalofficer/index">
            <img src="<?= PROOT ?>img/National.png" width="40" height="40" class="d-inline-block align-top" alt="">
        </a>
        <a class="navbar-brand" href="<?= PROOT ?>medicalofficer/index">MOH Office Kelaniya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav pl-4">
                <li class="nav-item active pl-2">
                    <a class="nav-link" href="<?= PROOT ?>medicalofficer/index">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-2">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item pl-2">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
            <a href="<?= PROOT ?>medicalofficer/message" class="notification <?= $this->btn_state['messages'] ?> mr-3">
                <p class="text-center"><span><i class="fa fa-comments fa-2x" aria-hidden="true"></i></span></p>
                <span class="badge"><?= $this->newMsgCount; ?></span>
            </a>
            <a class="btn-logout" href="<?= PROOT ?>login/logout">Log out</a>
        </div>

    </nav>

    <div class="container-fluid" style="padding-top: 65px;">

        <div class="row">
            <div class="col-md-2 sidebar">
                <img src="<?= PROOT ?>img/Midwife-icon5.png" alt="profile-pic" class="profile-img">
                <div class="name-tag">
                    <?php if (User::currentUser()) : ?>
                        <span style="font-size: 18px; text-shadow: 0px 5px 10px rgba(0, 0, 0, 1);"><?= User::currentUser()->name; ?></span>
                    <?php endif; ?>

                    <br>
                    <span style="font-size: 11px; text-shadow: 0px 5px 10px rgba(0, 0, 0, 1);">(ම. සෞ. හෙද සොයුරිය)</span>
                </div>
                <hr>

                <ul class="sidebar-btn">
                    <li class="side-tab <?= $this->btn_state['area'] ?>">
                        <a href="<?= PROOT ?>medicalofficer/area">නිලධාරිනියන්ගෙ රාජකාරි ප්‍රදේශ</a>
                    </li>
                    <li class="side-tab <?= $this->btn_state['approve'] ?>">
                        <a href="<?= PROOT ?>medicalofficer/approve">ඉදිරි කාලසටහන් අනුමත කිරීම</a>
                    </li>
                    <li class="side-tab <?= $this->btn_state['cancel'] ?>">
                        <a href="<?= PROOT ?>medicalofficer/cancel">සායන අවලංගු කිරීම් දැනුම් දිම</a>
                    </li>
                    <li class="side-tab <?= $this->btn_state['details'] ?>">
                        <a href="<?= PROOT ?>medicalofficer/details">පවුල් සෞඛ්‍ය සේවා නිලධාරිනියන්</a>
                    </li>

                </ul>
            </div>

            <?= $this->content('body'); ?>

        </div>




        <div class="row justify-content-between" style="background-color: #3d3d3d;">
            <div class="col-md-6 footer-text ">
                <h1>Medical Officer of Health</h1>
                Medical officer of health or MOH is the leader of Medical Officer Of Health (MOOH) offices and under his
                guidance Public Health Nurses, Public Health Mid-wives and Public Health Inspectors distribute preventive
                services at the rural levels.
            </div>
            <div class="col-md-2 footer-icon">
                <a href="#" class="fa fa-facebook icon"></a>
                <a href="#" class="fa fa-twitter icon"></a>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 footer-dashboard">

                <center>Designed by <span style="color: aliceblue;">University of Moratuwa</span> | 2020 All Rights Reserved
                </center>

            </div>

        </div>
    </div>



    <script src="<?= PROOT ?>js/medicalofficer.js"></script>
    <?= $this->script ?>

</body>

</html>