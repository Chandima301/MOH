<?php $this->setSiteTitle('MidwifeDashboard'); ?>

<?php $this->start('head'); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" >

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php $this->end(); ?>

<?php $this->start('body'); ?>
<!--sidebar -->
<div class="container-fluid dashboard">
    <div class="row">
        <div class="col-md-3 sidebar" style="height: 800px; margin-top: -15px; padding: 0px;">
            <div class="name-tag">
                <div class="sidebar-header" style="padding-top: 50px; color: white; text-align: justify;">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="<?= PROOT ?>img/Midwife-icon10.png" alt="User picture">
                    </div>
                    <div class="user-info">
                        <?php if (User::currentUser()) : ?>
                            <span class="user-name" style="font-size: 20px;">
                                <strong>
                                    <?= User::currentUser()->name; ?>
                                </strong>
                            </span>
                        <?php endif; ?>
                        <span class="user-role text-muted" style="font-size: 15px;">(Midwife)</span>
                        <span class="user-status">
                            <i class="fa fa-circle fa-lg"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
            </div>
            <ul class="sidebar-btn" style="padding-top: 150px;">
                <li class="side-tab">
                    <a href="<?= PROOT ?>midwife/midwifeDetails">තොරතුරු යාවත්කාලීන කිරීම</a>
                </li>
                <li class="side-tab">
                    <a href="<?= PROOT ?>midwife/midwifePassword">Password වෙනස් කිරීම</a>
                </li>
            </ul>
        </div>

        <!--box -->
        <div class="col-md-9" id="detail">
            <div class="card border-dark mb-6" style="margin: 10px 0px 10px 0px; min-height: 750px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <img src="<?= PROOT ?>img/Midwife-icon4.png" class="rounded-circle float-left mt-5 ml-3" style="height: 150px; width:150px;">
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12" style="padding-left: 20px;">
                                <h5 class="card-title mt-4" style="font-size: 35px;"><?= $this->midwife->name; ?></h5>
                                <hr class="mr-2" style="height:0.5px; color:rgb(158, 158, 158);">
                                <hr class="mr-2" style="height:0.5px; color:rgb(158, 158, 158);">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-id-card-o" style="color: #0899DB;"></i> <?= $this->midwife->idcardnum; ?></li>
                                    <li class="list-group-item"><i class="fa fa-phone" style="color: #5cb85c;"></i> <?= $this->midwife->phone; ?></li>
                                    <li class="list-group-item"><i class="fa fa-envelope" style="color: #E03533;"></i> <?= $this->midwife->email; ?></li>
                                    <li class="list-group-item"><i class=""></i></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-birthday-cake" style="color: #CD958C;"></i> <?= $this->midwife->birthday; ?></li>
                                    <li class="list-group-item"><i class="fa fa-home" style="color: #F8B811;"></i> <?= $this->midwife->address; ?></li>
                                    <li class="list-group-item"><i class=""></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Responsive quote carousel-->
                    <div class="container" style="padding-bottom: 110px;">
                        <div class="row">
                            <div class='col-md-10 offset-md-1 text-center mb-5 mt-5'>
                                <h2>Quotes</h2>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-10 offset-md-1'>
                                <div class="carousel slide sq-crousal4" data-ride="carousel" id="sq-crousal4">
                                    <!-- Bottom Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#sq-crousal4" data-slide-to="0" class="active"></li>
                                        <li data-target="#sq-crousal4" data-slide-to="1"></li>
                                        <li data-target="#sq-crousal4" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Carousel Slides / Quotes -->
                                    <div class="carousel-inner">

                                        <!-- Quote 1 -->
                                        <div class="carousel-item active">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-md-10 offset-md-1 d-md-flex d-block text-center text-lg-left">
                                                        <img class="rounded-circle" src = "<?= PROOT ?>img/plato2.png" style="width: 100px;height:100px;">
                                                        <div class="feedback-text pl-3">
                                                            <p>The greatest privilege of a human life is to become a midwife to the awakening of the Soul in another person!</p>
                                                            <small>-Plato-</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 2 -->
                                        <div class="carousel-item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-md-10 offset-md-1 d-md-flex d-block text-center text-lg-left">
                                                        <img class="rounded-circle" src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg" style="width: 100px;height:100px;">
                                                        <div class="feedback-text pl-3">
                                                            <p style="color: #696969;">The listener is the midwife in the difficult birth of the word!</p>
                                                            <small>-Mesa Selimovic-</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 3 -->
                                        <div class="carousel-item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-md-10 offset-md-1 d-md-flex d-block text-center text-lg-left">
                                                        <img class="rounded-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" style="width: 100px;height:100px;">
                                                        <div class="feedback-text pl-3">
                                                            <p>Force is the midwife of every old society pregnant with a new one!</p>
                                                            <small>-Karl Marx-</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>

                                    <!-- Carousel Buttons Next/Prev -->
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#sq-crousal4" data-slide="prev">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#sq-crousal4" data-slide="next">
                                    <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div style="padding-left: 20px;" class="col-md-5">
                            <img src="<?= PROOT ?>img/midwife-dashboard6.jfif" style="width: 350px; height: 350px;">
                            </div>
                        
                        <div class="dashboard-text col-md-7">
                            In all cultures, the midwife's place is on the 
                            threshold of life, where intense human emotions, 
                            fear, hope, longing, triumph, and incredible physical 
                            power-enable a new human being to emerge. Her vocation is unique.
                        </div>
                        
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>