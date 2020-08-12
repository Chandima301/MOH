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
    <link rel="stylesheet" href="<?= PROOT ?>css/DailyWorkReport.css">


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



    <!--satrt report section-->
    <div class="container-fluid">


        <div class="row" style="height:100vh">
            <!-- slide bar -->
            <div class="col-md-2 sidebar">


                <ul class="sidebar-btn">
                    <li class="side-tab <?=$this->btn_state['familiesWkp'];?>">
                        <a href="<?=PROOT?>Workplan/reportView">1.මවගේ ලියාපදිංචි තොරතුරු</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['maternitypreservation'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/maternitypreservation">2.මාතෲ සං‍රක්ෂණය ලියාපදිංචි කරන
                            අවස්ථාවේදී</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['mtpr'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/mtpr">3. මාතෘ සං‍රක්ෂනය ප්‍රසූත වාර්ථාකරණයේදී</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['mtfpj'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/mtfpj">4. මාතෘ සං‍රක්ෂනය(ප්‍රථම පසු ප්‍රසව ගමනේදී)</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['preganacyResult'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/preganacyResult">5. ගර්භණීභාවයේ ප්‍රතිපල</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['latepreganacypreservation'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/latepreganacypreservation">6. පසු ප්‍රසව සං‍රක්ෂණය</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['babypreservation'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/babypreservation"> 7. ළඳරු සං‍රක්ෂණය</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['babypreservation1to5'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/babypreservation1to5">8. ළමා සං‍රක්ෂණය(අවු 1-5)</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['babyandteenpreservation'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/babyandteenpreservation"> 9. ළමා (අවු. 5-10) හා නව යෞවන
                            (අවු. 10-19) සං‍රක්ෂණය</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['familyplan'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/familyplan"> 10. පවුල් සැලසුම</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['genderhelth'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/genderhelth"> 11. ස්ත්‍රී පුරුෂ සමාජභාවය සහ සෞඛ්‍ය</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['otheractivities'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/otheractivities"> 12. වෙනත් ක්‍රියාකාරකම්</a>
                    </li>
                    <li class="side-tab <?=$this->btn_state['supervisionattendance'];?>">
                        <a href="<?=PROOT?>Workplan/reportView/supervisionattendance"> 13. අධික්ෂන සඳහා පැමිණීම</a>
                    </li>





                </ul>
            </div>

            <?= $this->content("body"); ?>






















</body>

</html>