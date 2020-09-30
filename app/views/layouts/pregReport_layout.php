<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->siteTitle(); ?></title>
    <link rel="icon" type="image/png" href="<?= PROOT ?>img/National.png" />

    <script src="<?= PROOT ?>js/jquery-3.4.1.js"></script>
    <script src="<?= PROOT ?>bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="<?= PROOT ?>/bootstrap/js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="<?= PROOT ?>css/reset-stylesheet.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?= PROOT ?>/bootstrap/css/bootstrap.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= PROOT ?>/css/Mother_css.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color:rgb(43, 51, 71) ;">
            <a class="navbar-brand" href="#">
                <img src="<?= PROOT ?>/img/National.png" width="40" height="40" class="d-inline-block align-top" alt="">
            </a>
            <a class="navbar-brand" href="#">MOH Kelaniya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= PROOT ?>/mother/index">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <a class="btn-logout" href="<?= PROOT ?>login/logout">Log out</a>
            </div>
        </nav>
    </header>

    <div class="container-fluid">


        <div class="row">
            <div class="col-md-2 sidebar p-1">
                <div class="name-tag pt-3">
                    <span style="font-size: 25px;">ගර්භනී සටහන් පොත</span>
                    <br>
                </div>
                <hr>

                <div class="accordion" id="accordionExample">
                    <div class="card text-center" style="background-color: rgb(43, 51, 71); border:1px solid #999595;">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" style="color: #c9b499; font-size:18px" type="button"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    පෞද්ගලික තොරතුරු
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse <?= $this->btn_state['1'] ?>" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body" style="padding: 0px;">
                                <ul class="sidebar-btn">
                                    <li class="side-tab <?= $this->btn_state['1-1'] ?>">
                                        <a href="<?= PROOT ?>mother/registerDetails">1. ලියාපදිංචි තොරතුරු</a>
                                    </li>
                                    <li class="side-tab <?= $this->btn_state['1-2'] ?>">
                                        <a href="<?= PROOT ?>mother/personalDetails">2. පෞද්ගලික / පවුල් තොරතුරු</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center" style="background-color: rgb(43, 51, 71); border:1px solid #999595;">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" style="color: #c9b499; font-size:18px"
                                    type="button" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    රෝග ඉතිහාසය
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse <?= $this->btn_state['2'] ?>" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body" style="padding: 0px;">
                                <ul class="sidebar-btn">
                                    <li class="side-tab <?= $this->btn_state['2-1'] ?>">
                                        <a href="<?= PROOT ?>mother/familyHistory">3. පවුලේ රෝග ඉතිහාසය</a>
                                    </li>
                                    <li class="side-tab <?= $this->btn_state['2-2'] ?>">
                                        <a href="<?= PROOT ?>mother/surgicalHistory">4. කායික / ශල්‍ය ඉතිහාසය</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center" style="background-color: rgb(43, 51, 71); border:1px solid #999595;">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" style="color: #c9b499; font-size:18px"
                                    type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    ගර්භනී ඉතිහාසය
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse <?= $this->btn_state['3'] ?>"
                            aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body" style="padding: 0px;">
                                <ul class="sidebar-btn">
                                    <li class="side-tab <?= $this->btn_state['3-1'] ?>">
                                        <a href="<?= PROOT ?>mother/presentObsHistory">5. වර්තමාන ගර්භ ඉතිහාසය</a>
                                    </li>
                                    <li class="side-tab <?= $this->btn_state['3-2'] ?>">
                                        <a href="<?= PROOT ?>mother/pastObsHistory">6. පෙර ගර්භ ඉතිහාසය</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center" style="background-color: rgb(43, 51, 71); border:1px solid #999595;">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" style="color: #c9b499; font-size:18px;"
                                    type="button" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    සායනික සං‍රක්ෂණය
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse <?= $this->btn_state['4'] ?>"
                            aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body" style="padding: 0px;">
                                <ul class="sidebar-btn">
                                    <li class="side-tab <?= $this->btn_state['4-1'] ?>">
                                        <a href="<?= PROOT ?>mother/clinicCare1">7-1. සායනික සං‍රක්ෂණය 1</a>
                                    </li>
                                    <li class="side-tab <?= $this->btn_state['4-2'] ?>">
                                        <a href="<?= PROOT ?>mother/clinicCare2">7-2. සායනික සං‍රක්ෂණය 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center" style="background-color: rgb(43, 51, 71); border:1px solid #999595;">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" style="color: #c9b499; font-size:18px"
                                    type="button" data-toggle="collapse" data-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    ප්‍රතිශක්තිකරණය හා බර සටහන
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse <?= $this->btn_state['5'] ?>"
                            aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body" style="padding: 0px;">
                                <ul class="sidebar-btn">
                                    <li class="side-tab <?= $this->btn_state['5-1'] ?>">
                                        <a href="<?= PROOT ?>mother/immunization">8. ප්‍රතිශක්තිකරණය</a>
                                    </li>
                                    <li class="side-tab <?= $this->btn_state['5-2'] ?>">
                                        <a href="<?= PROOT ?>mother/weightChart">9. බර වැඩිවීමේ සටහන</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center" style="background-color: rgb(43, 51, 71); border:1px solid #999595;">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" style="color: #c9b499; font-size:18px"
                                    type="button" data-toggle="collapse" data-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    තොරතුරු හා පවුල් සැලසුම්
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse <?= $this->btn_state['6'] ?>" aria-labelledby="headingSix"
                            data-parent="#accordionExample">
                            <div class="card-body" style="padding: 0px;">
                                <ul class="sidebar-btn">
                                    <li class="side-tab <?= $this->btn_state['6-1'] ?>">
                                        <a href="<?= PROOT ?>mother/emergancyPlan">10. හදිසි අවස්ථාවන් සදහා සැලසුම්</a>
                                    </li>
                                    <li class="side-tab <?= $this->btn_state['6-2'] ?>">
                                        <a href="<?= PROOT ?>mother/iCEmaterial">11. පවුල් සැලසුම්</a>
                                    </li>
                                    <li class="side-tab <?= $this->btn_state['6-3'] ?>">
                                        <a href="<?= PROOT ?>mother/preClinic">12. පූර්ව ප්‍රසව සැසි සදහා පැමිණීම.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center" style="background-color: rgb(43, 51, 71); border:1px solid #999595;">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" style="color: #c9b499; font-size:18px"
                                    type="button" data-toggle="collapse" data-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">
                                    රෝහල් සායනික සං‍රක්ෂණය
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse <?= $this->btn_state['7'] ?>"
                            aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <div class="card-body" style="padding: 0px;">
                                <ul class="sidebar-btn">
                                    <li class="side-tab <?= $this->btn_state['7-1'] ?>">
                                        <a href="<?= PROOT ?>mother/hospitalClinc">13. රෝහල් සායනික සං‍රක්ෂණය</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center" style="background-color: rgb(43, 51, 71); border:1px solid #999595;">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" style="color: #c9b499; font-size:18px"
                                    type="button" data-toggle="collapse" data-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">
                                    ප්‍රසව හා පසුප්‍රසව සං‍රක්ෂණය
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse <?= $this->btn_state['8'] ?>"
                            aria-labelledby="headingEight" data-parent="#accordionExample">
                            <div class="card-body" style="padding: 0px;">
                                <ul class="sidebar-btn">
                                    <li class="side-tab <?= $this->btn_state['8-1'] ?>">
                                        <a href="<?= PROOT ?>mother/postnatalCare">14. ප්‍රසව හා පසුප්‍රසව සං‍රක්ෂණය</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center" style="background-color: rgb(43, 51, 71); border:1px solid #999595;">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" style="color: #c9b499; font-size:18px"
                                    type="button" data-toggle="collapse" data-target="#collapseNine"
                                    aria-expanded="false" aria-controls="collapseNine">
                                    පසුප්‍රසව ක්ෂේත්‍ර් සං‍රක්ෂණය
                                </button>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse <?= $this->btn_state['9'] ?>"
                            aria-labelledby="headingNine" data-parent="#accordionExample">
                            <div class="card-body" style="padding: 0px;">
                                <ul class="sidebar-btn">
                                    <li class="side-tab <?= $this->btn_state['9-1'] ?>">
                                        <a href="<?= PROOT ?>mother/postpatumCare">15. පසුප්‍රසව ක්ෂේත්‍ර් සං‍රක්ෂණය</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-10">
                <?= $this->content('body'); ?>
            </div>


        </div>
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
