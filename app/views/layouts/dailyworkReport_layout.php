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

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- JS -->
    <script src="<?= PROOT ?>js/jquery-3.4.1.js"></script>
    <script src="<?= PROOT ?>bootstrap/js/bootstrap.js"></script>



</head>

<body>
    <!--navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="<?= PROOT ?>img/National.png" width="40" height="40" class="d-inline-block align-top"
                alt="Sri Lanka National Symbol">
        </a>
        <a class="navbar-brand" href="#">Office Of The Medical Officer Of
            Health<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Kelaniya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <header>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav pl-4">
                    <li class="nav-item active pl-5">
                        <a class="nav-link" href="<?=PROOT?>/midwife">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="nav-link" href="#">
                            <img src="<?= PROOT ?>img/Language.png" width="40" height="40"
                                class="d-inline-block align-top" alt="Sri Lanka National Flag">
                            සිංහල</a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <i class="fa fa-user-circle"></i>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hello,<br><?= $this->name; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Dashboard.html" style="color: black;">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-link logout" href="<?=PROOT?>login/logout"
                                style="color: black;"> &emsp;Sign Out</a>
                        </div>
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