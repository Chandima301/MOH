<?php $this->setSiteTitle('Midwife'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<!--Selection menu-->
<div class="selection-menu">
    <div class="Services mt-5">
        <h1>Midwife Area</h1>
        <h2> &emsp; <br> &emsp;</h2>
    </div>
    <div class="row">
        <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fa fa-address-card"></i>
            </div>
            <a href="Mothers.html">
                <h3>Mothers</h3>
            </a>
        </div>
        <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fa fa-desktop"></i>
            </div>
            <a href="<?=PROOT?>midwife/workplan">
                <h3>My Plan</h3>
            </a>
        </div>
        <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fa fa-barcode"></i>
            </div>
            <a href="#">
                <h3>Pregnancy Report</h3>
            </a>
        </div>
        <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fa fa-tablet"></i>
            </div>
            <a href="#">
                <h3>Daily Work</h3>
            </a>
        </div>
    </div>
</div>
<!--//Selection menu-->



<?php $this->end(); ?>