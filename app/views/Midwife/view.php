<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-12 tab mother-view" id="detail" style="padding-bottom: 80px;">
    <div class="card border-dark mb-3" style="min-height: 500px">
        <div class="row no-gutters">
            <div class="col-md-2">
                <img src="<?= PROOT ?>img/user7.png" class="rounded-circle float-left mt-5 ml-5" style="height: 150px; width:150px;" >
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="card-title mt-4" style="font-size: 35px;"><?= $this->mother->name; ?></h5>
                        <hr class="mr-4" style="height:0.5px; color:rgb(158, 158, 158);">
                        <hr class="mr-4" style="height:0.5px; color:rgb(158, 158, 158);">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-id-card-o" style="color: #0899DB;"></i> <?= $this->mother->idcardnum; ?></li>
                            <li class="list-group-item"><i class="fa fa-phone" style="color: #5cb85c;"></i> <?= $this->mother->phone; ?></li>
                            <li class="list-group-item"><i class="fa fa-envelope" style="color: #E03533;"></i> <?= $this->mother->email; ?></li>
                            <li class="list-group-item"><img src="<?= PROOT ?>img/height1.png" width="25" height="25" class="d-inline-block align-top" alt="Midwife" style="color: red;">  <?= $this->motherExtra->height; ?> cm</li>
                            <li class="list-group-item"><i class=""></i></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-birthday-cake" style="color: #CD958C;"></i> <?= $this->mother->birthday; ?></li>
                            <li class="list-group-item"><i class="fa fa-home" style="color: #F8B811;"></i> <?= $this->mother->address; ?></li>
                            <li class="list-group-item"><i class="fa fa-tint" style="color: red;"></i> <?= $this->motherExtra->blood_group; ?></li>
                            <li class="list-group-item"><img src="<?= PROOT ?>img/bmi1.png" width="25" height="25" class="d-inline-block align-top" alt="Midwife"> <?= $this->motherExtra->mass_index; ?> kg/m<sup>2</sup></li>
                            <li class="list-group-item"><i class=""></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mother-view-allergy"><img src="<?= PROOT ?>img/allergy1.png" width="25" height="25" class="d-inline-block align-top" alt="Midwife">
            Allergies : 
        </i> <?= $this->motherExtra->allergies; ?></div>
    </div>
    <a href="<?=PROOT?>midwife/changePage/<?=$this->mother->idcardnum; ?>" class="btn btn-primary btn-block active" role="button" aria-pressed="true" style="font-size: 20px;">Change Details</a>
</div>
<a href="<?= PROOT ?>midwife/mother" class="btn btn-success btn-lg active" role="button" aria-pressed="true" style="margin-bottom:20px; margin-left: 20px">Back</a>
<?php $this->end(); ?>