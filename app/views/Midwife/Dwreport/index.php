<?php
$this->start("body"); ?>


<div class="container-fluid">

    <div class="row mt-5">

        <div class="col-md-4">
            <form action="<?=PROOT?>Dwreport/seeMonthReports/lastmonth" method="post">
                <label for="bdaymonth">පසු ගිය මාස වල වාර්තා බලන්න</label>
                <input type="month" class="form-control" id="" name="period" style="width:50%">
                <button type="submit" class="btn btn-primary">submit</button>
            </form>

        </div>
        <div class="col-sm-6 col-md-4">
            <form action="<?=PROOT?>Dwreport/seeMonthReports/lastmonth" method="post">
                <button type="submit" class="btn btn-primary btn-lg" name="period"
                    value="<?=date('Y-m',strtotime("first day of previous month")); ?>">පෙර මාසයේ වාර්තාව</button>
            </form>

        </div>
        <div class="col-sm-6 col-md-4">
            <form action="<?=PROOT?>Dwreport/seeMonthReports/nextmonth" method="post">
                <button type="submit" class="btn btn-primary btn-lg" name="period"
                    value="<?=date('Y-m',strtotime("first day of next month")); ?>">ඊලග මාසයේ වාර්තාව සකස්
                    කරන්න</button>
            </form>

        </div>
    </div>

    <center>
        <h1>දින වැඩ වාර්තාව <?=date('M Y'); ?></h1>
    </center>

    <div class="row justify-content-center">
        <?php if($this->report->id){ ?>
        <div class="col-sm-12 col-md-10 mt-5 page-content">
            <?php 
                    foreach($this->report as $key => $value){ 
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
            <?php   }
                    ?>


        </div> <?php }else{ ?>
        <div class="alert alert-danger" style="width: 80%; text-align:center; margin:30px auto 0">
            <h2><strong>Info!</strong> මෙම මස වාර්තාවක් සකස් කර නොමැත.</h2>
        </div>

        <?php   } ?>

    </div>








</div>


<?php $this->end("body") ?>