<?php $this->start("body"); ?>
<div class="container-fluid">
    <div class="row mt-4 justify-content-center">
        <center>
            <h1>ඉදිරි කාල සටහන<?=$this->month?></h1>
        </center>
    </div>
    <div class="col-11">

        <button type="button" class="btn btn-warning" style="margin:0 10px;"><a href="<?=PROOT?>dwreport/index"
                style="all:unset;text-decoration: none;">පෙර පිටුවට</a></button>

    </div>
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
                    <?php  $date=explode('-', $this->month); $numOfDates=cal_days_in_month(CAL_GREGORIAN,$date[1],$date[0]); for($x=1; $x<=$numOfDates; $x++){ ?>
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
                            <?php $numOfDates=cal_days_in_month(CAL_GREGORIAN,$date[1],$date[0]); for($x=1; $x<=$numOfDates; $x++){
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



<?php $this->end("body"); ?>