<?php
$this->start("body"); ?>


<div class="container-fluid">

    <div class="row mt-5">

        <div class="col-md-4">
            <form action="<?=PROOT?>Dwreport/seeMonthReports/lastmonth" method="post">
                <label for="bdaymonth">පසු ගිය මාස වල වාර්තා බලන්න</label>
                <input type="month" class="form-control" value="<?=date('Y-m')?>" name="month" style="width:50%">
                <button type="submit" class="btn btn-primary">submit</button>
            </form>

        </div>
        <div class="col-sm-6 col-md-4">
            <form action="<?=PROOT?>Dwreport/seeMonthReports/lastmonth" method="post">
                <button type="submit" class="btn btn-primary btn-lg" name="month"
                    value="<?=date('Y-m',strtotime("first day of previous month")); ?>">පෙර මාසයේ වාර්තාව</button>
            </form>

        </div>
        <div class="col-sm-6 col-md-4">
            <form action="<?=PROOT?>Dwreport/seeMonthReports/nextmonth" method="post">
                <button type="submit" class="btn btn-primary btn-lg" name="month"
                    value="<?=date('Y-m',strtotime("first day of next month")); ?>">ඊලග මාසයේ වාර්තාව සකස්
                    කරන්න</button>
            </form>

        </div>
    </div>

    <center>
        <h1>ඉදිරි කාල සටහන <?=date('M Y'); ?></h1>
    </center>

    <div class="row justify-content-center">
        <?php if($this->report->id && $this->report->approved){ ?>
        <div class="col-sm-12 col-md-9 mt-5 page-content" style="padding: 5px 20px;">
            <div class="row">
                <div class="col-2 tab-text">
                    <div class="row">
                        <div class="col-12 not-heading" style=" height:45px; background-color: rgb(177, 174, 174);">
                            <h3>මාසයේ දින</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 not-heading"
                            style="text-align:center; background-color: rgb(177, 174, 174);">
                            ප්‍රදේශය
                        </div>
                    </div>
                    <?php $numOfDates=cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y')); for($x=1; $x<=$numOfDates; $x++){ ?>
                    <div class="row">
                        <div class="col-12 not-heading"
                            style="text-align:center; background-color: rgb(177, 174, 174);">
                            දිනය <?=$x;?>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-12 not-heading"
                            style="text-align:center; background-color: rgb(177, 174, 174);">
                            Comments
                        </div>
                    </div>
                </div>



                <div class="col-10">
                    <div class="row">
                        <div class="col-12 tab-sum">
                            <div class="row">
                                <div class="col-12 not-heading"
                                    style="text-align:center; height:45px; background-color: rgb(177, 174, 174);">
                                    <h3>සායන පැවැත්වෙන ස්ථානය</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading" style="text-align:center;">
                                    <?= $this->report->area?>
                                </div>
                            </div>
                            <?php $numOfDates=cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y')); for($x=1; $x<=$numOfDates; $x++){
                                ?>
                            <div class="row">
                                <div class="col-12 not-heading" style="text-align:center;">
                                    <?= $this->report->{$x};?>
                                </div>
                            </div>
                            <?php }?>
                            <div class="row">
                                <div class="col-12 not-heading" style="text-align:center;">
                                    <?= $this->report->{"comments"};?>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{ ?>
        <div class="alert alert-danger" style="width: 80%; text-align:center; margin:30px auto 0">
            <h2><strong>Info!</strong> මෙම මස වාර්තාවක් සකස් කර නොමැත.</h2>
        </div>

        <?php   } ?>

    </div>








</div>


<?php $this->end("body") ?>