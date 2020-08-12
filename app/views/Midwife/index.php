<?php $this->setSiteTitle('Midwife'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<!--Selection menu-->
<div class="background-home" style="padding-bottom: 300px;"> <!--increase the size of the picture-->
<div class="selection-menu">
    <div class="Services mt-5">
        <h1>Midwife Area</h1>
        <h2> &emsp; <br> &emsp;</h2>
    </div>
    <div class="row">
        <a href="<?=PROOT?>midwife/mother">
            <div class="col-md-3 text-center">
                <div class="icon icon-hover">
                    <i class="fa fa-address-card"></i>
                </div>
                <a href="<?=PROOT?>midwife/mother" class="main-item">
                    <h3>ගැබිනි මාතාවන්</h3>
                </a>
            </div>
        </a>
        <a href="<?=PROOT?>midwife/workplan">
            <div class="col-md-3 text-center">
                <div class="icon icon-hover">
                    <i class="fa fa-desktop"></i>
                </div>
                <a href="<?=PROOT?>midwife/workplan" class="main-item">
                    <h3>මගේ සැලැස්ම</h3>
                </a>
            </div>
        </a>
        <a href="<?=PROOT?>midwife/pregnancyReport">
            <div class="col-md-3 text-center">
                <div class="icon icon-hover">
                    <i class="fa fa-barcode"></i>
                </div>
                <a href="<?=PROOT?>midwife/pregnancyReport" class="main-item">
                    <h3>ගර්භනී වාර්තාව</h3>
                </a>
            </div>
        </a>
        <a href="<?=PROOT?>midwife/dailyworkReport">
            <div class="col-md-3 text-center">
                <div class="icon icon-hover">
                    <i class="fa fa-tablet"></i>
                </div>
                <a href="<?=PROOT?>midwife/dailyworkReport" class="main-item">
                    <h3>දින වැඩ වාර්තාව</h3>
                </a>
            </div>
        </a>
    </div>
</div>
</div>
<!--//Selection menu-->



<?php $this->end(); ?>