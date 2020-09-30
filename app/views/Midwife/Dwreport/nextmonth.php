<?php $this->start("body"); ?>
<div class="container-fluid">
    <center>
        <h1>දින වැඩ වාර්තාව <?=date('M Y',strtotime("first day of next month")); ?></h1>
    </center>
    <div class="col-11">

        <button type="button" class="btn btn-warning" style="margin:0 10px;"><a href="<?=PROOT?>dwreport/index"
                style="all:unset;text-decoration: none;">පෙර පිටුවට</a></button>

    </div>
    <div class="row">
        <?php if($this->report->submit_to_approval){ ?>

        <div class="alert alert-success" role="alert" style="width:70% ; margin:auto">
            <h4 class="alert-heading">success!</h4>
            <hr>
            <h4 class="mb-0">සෞ.වෛ.නි තුමියගේ අනුමැතිය සදහා යවන ලදී</h4>
        </div>

        <?php } ?>
    </div>
    <?php if(!isset($this->report->id)){ ?>
    <div class="row">
        <div class="alert alert-danger" style="width: 80%; text-align:center; margin:30px auto 0">
            <h2><strong>Info!</strong> මෙම මස වාර්තාවක් තවම සකස් කර නොමැත.</h2>
        </div>
        <div class="col-12" style="margin: 30px auto;">
            <form action="<?=PROOT?>Dwreport/createReports/nextmonth" method="post">
                <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                <button type="submit" class="btn btn-primary btn-lg" name="period"
                    value="<?=date('Y-m',strtotime("first day of next month")); ?>">අලුත් වාර්තාව සකස් කරන්න</button>
            </form>

        </div>
    </div>
    <?php }else{ ?>
    <form action="<?=PROOT?>Dwreport/saveMode" method="post" style="display:block;width:100%">
    <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
    <input type="hidden" name="period" value="<?=date('Y-m',strtotime("first day of next month"));?>">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-9 mt-5 page-content" style="padding: 5px 20px;">
                <div class="row">
                    <div class="col-2 tab-text">
                        <div class="row" >
                            <div class="col-12 not-heading" style=" height:45px; background-color: rgb(177, 174, 174);">
                               <h3>මාසයේ දින</h3>
                            </div>
                        </div>
                        
                        <?php $numOfDates=cal_days_in_month(CAL_GREGORIAN,date('m',strtotime("first day of next month")),date('Y',strtotime("first day of next month"))); for($x=1; $x<=$numOfDates; $x++){ ?> 
                        <div class="row" >
                            <div class="col-12 not-heading" style="text-align:center; background-color: rgb(177, 174, 174);">
                               දිනය <?=$x;?>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>



                    <div class="col-10">
                        <div class="row">
                        <div class="col-12 tab-sum">
                                <div class="row" >
                                    <div class="col-12 not-heading" style="text-align:center; height:45px; background-color: rgb(177, 174, 174);">
                                        <h3>සායන පැවැත්වෙන ස්ථානය</h3>
                                    </div>
                                </div>
                                <?php $numOfDates=cal_days_in_month(CAL_GREGORIAN,date('m',strtotime("first day of next month")),date('Y',strtotime("first day of next month"))); for($x=1; $x<=$numOfDates; $x++){
                                    if(!$this->editMode) {?> 
                                    <div class="row" >
                                        <div class="col-12 not-heading" style="text-align:center;">
                                            <?= $this->report->{$x};?>
                                        </div>
                                    </div>
                                <?php } else{ ?>
                                    <div class="row" >
                                        <div class="col-12 not-heading" style="text-align:center;padding: 0px">
                                        <input style="width: 100%; height:100%; color:red; padding-left:20px" type="text" name="<?=$x;?>"value="<?=$this->report->{$x}?>">
                                        </div>
                                    </div> 
                              <?php  }} ?>


                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
      <?php  }?>

           

        
        <?php
        
        if($this->editMode) {?>

        <div class="row justify-content-center mt-5">
            <button type="submit" name="saveButton" class="btn btn-primary">save</button>
        </div>
        <?php } ?>

    </form>

    <div class="row justify-content-center mt-5">
        <?php if(!$this->editMode && isset($this->report->id)){
                   
                   ?>

        <form action="<?=PROOT?>Dwreport/editMode" method="post">
            <input type="hidden" name="period" value="<?=date('Y-m',strtotime("first day of next month")); ?>">
            <button type="submit" name="editButton" class="btn btn-primary mr-2 mb-3">Edit</button>
        </form>

        <?php }?>



        <?php if(!$this->editMode && !$this->report->submit_to_approval && isset($this->report->id)){
        
        ?>

        <form action="<?=PROOT?>Dwreport/submitToApproved" method="post">
            <input type="hidden" name="period" value="<?=date('Y-m',strtotime("first day of next month")); ?>">
            <button type="submit" name="submitToApprovedButton" class="btn btn-primary">අනුමැතිය සදහා ඉදිරිපත්
                කරන්න</button>
        </form>


        <?php }?>
    </div>




</div>
<?php $this->end("body"); ?>