<?php $this->start("body"); ?>
<div class="container-fluid">
    <center>
        <h1>දින වැඩ වාර්තාව <?=$this->period?></h1>
    </center>
    <div class="col-11">

        <button type="button" class="btn btn-warning" style="margin:0 10px;"><a href="<?=PROOT?>dwreport/index"
                style="all:unset;text-decoration: none;">පෙර පිටුවට</a></button>

    </div>
    <?php if(!isset($this->report->id)){ ?>
    <div class="col-11 alert alert-danger" style="width: 80%; text-align:center; margin:30px auto 0">
        <h2><strong>Info!</strong> මෙම මස වාර්තාවක් සකස් කර නොමැත.</h2>
    </div>

    <?php }
        else{ ?>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 mt-5 page-content">
            <?php  foreach($this->report as $key => $value){          
                            if($key=="id" || $key=="period" || $key=="submit_to_approval" || $key=="approved" ) continue; 
                            if($key=="comments" && !$this->report->{"approved"}) continue;
                            if($key=="comments" && $this->report->{"approved"}) {?> <div class="row"
                style="padding: 0 20px;">
                <div class="col-2 not-heading"><?=str_replace('_', ' ', $key);?></div>
                <div class="col-10 not-heading" style="background-color:lightcoral;"><?=$value?></div>
            </div>

            <?php continue;}
                    ?>
            <div class="row" style="padding: 0 20px;">
                <div class="col-2 not-heading"><?=str_replace('_', ' ', $key);?></div>
                <div class="col-10 not-heading"><?=$value?></div>
            </div>


            <?php
        } }?>
        </div>
    </div>
</div>



<?php $this->end("body"); ?>