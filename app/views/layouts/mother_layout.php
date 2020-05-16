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
    <link rel="stylesheet" href="<?= PROOT ?>css/mother.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/reset-stylesheet.css">

    <!-- JS -->
    <script src="<?= PROOT ?>js/jquery-3.4.1.js"></script>
    <script src="<?= PROOT ?>bootstrap/js/bootstrap.js"></script>

    <?= $this->content('head'); ?>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="<?= PROOT ?>img/National.png" width="40" height="40" class="d-inline-block align-top" alt="">
        </a>
        <a class="navbar-brand" href="#">MOH Kelaniya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav pl-4">
                <li class="nav-item active pl-2">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-2">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item pl-2">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
            <span class="navbar-text pl-5">
                <i class="fa fa-user-circle-o fa-lg pr-3" style="font-size: 20px;" aria-hidden="true"></i>Hi, <?= $this->name; ?>
            </span>
            <a class="btn-logout" href="<?= PROOT ?>login/logout">Log out</a>
        </div>
    </nav>
    <div class="container-fluid" style="padding-top: 65px;">

        <?= $this->content('body'); ?>

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
</body>

</html>