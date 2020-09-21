<?php
$this->start('body');?>


<!--end of the side bar-->

<div class='col-md-10'>
    <div class="row mt-5">
        <div class="col-md-9">
            <center>
                <h1>දින වැඩ වාර්තාව <?=$this->period; ?></h1>
            </center>
        </div>
        <div class="col-md-3">

            <form action="<?=PROOT?>Workplan/seeMonthReports/genderhelth" method="post">
                <label for="bdaymonth">පසු ගිය මාස වල වාර්තා බලන්න</label>
                <input type="month" class="form-control" id="" name="period" style="width:60%;float:left"
                    value="<?=$this->period?>">
                <button type="submit" class="btn btn-primary" style="width:30%;float:right">submit</button>
            </form>

        </div>

    </div>
    <div class="row justify-content-center">
        <form action="<?=PROOT?>Workplan/saveMode/genderhelth" method="post" style="display:block;width:100%">
            <div class='col-sm-12' style="overflow-x: scroll;overflow-y:hidden">
                <div class="row justify-content-center" style="width: 3000px; ">
                    <div class="col-12 mt-5 page-content" style="padding: 5px 20px;">

                        <div class="row">
                            <div class="col-4 tab-text">
                                <div class="row">
                                    <div class="col-12 heading">
                                        <p>කාර්යයන් සහ දිනයන්</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 heading">
                                        <p>11. ස්ත්‍රී පුරුෂ සමාජභාවය සහ සෞඛ්‍ය</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-9 not-heading-multi" style="padding-top: 20px;">
                                        <p>අළුතින් හදුනාගත් හිංසනයට ලක් වූ පුරුෂයන් හා කාන්තාවන් ගණන</p>
                                    </div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-12 not-heading">
                                                <p>පුරුෂයින්</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading">
                                                <p>කාන්තාවන්</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 not-heading-multi" style="padding-top: 20px;">
                                        <p>හිංසනයට ලක්වූවන්ගෙන් චිත්තවේගී සුරැකියාව(මානසික උපකාරය) සැපයූ ගණන</p>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-12 not-heading">
                                                <p>අලුත්</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading">
                                                <p>පරණ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 not-heading">
                                        <p>යොමු කළ ගණන</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                                <input type="hidden" name="period" value="<?=date("Y-m-j")?>">

                                <div class="row">
                                    <?php $numOfDates=cal_days_in_month(CAL_GREGORIAN,date("m"),date("Y")); $x=1;foreach($this->dates as $date){  if($x== date("j") && $this->editMode){?>

                                    <div class="tab-val" style="width: calc(100% / <?=$numOfDates+1?>);">
                                        <div class="row">
                                            <div class="col-12 heading-val">
                                                <p><?=$x?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 heading-val">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                    style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                    type="number" name="1" value="<?=$date->{'1'}?>"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                    style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                    type="number" name="2" value="<?=$date->{'2'}?>"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                    style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                    type="number" name="3" value="<?=$date->{'3'}?>"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                    style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                    type="number" name="4" value="<?=$date->{'4'}?>"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                    style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                    type="number" name="5" value="<?=$date->{'5'}?>"></div>
                                        </div>
                                    </div>

                                    <?php $x++; continue;} ?>
                                    <div class="tab-val" style="width: calc(100% / <?=$numOfDates+1?>);">
                                        <div class="row">
                                            <div class="col-12 heading-val">
                                                <p><?=$x?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 heading-val">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?=$date->{'1'}?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?=$date->{'2'}?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?=$date->{'3'}?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?=$date->{'4'}?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?=$date->{'5'}?></p>
                                            </div>
                                        </div>
                                    </div> <?php $x++; } ?>

                                    <div class="tab-sum" style="width: 45px; border: solid 1px">
                                        <div class="row">
                                            <div class="col-12 heading-val">
                                                <p>එකතුව</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 heading-val">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                               <p><?=$this->month_sum->{'1'}?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                               <p><?=$this->month_sum->{'2'}?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                               <p><?=$this->month_sum->{'3'}?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                               <p><?=$this->month_sum->{'4'}?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                               <p><?=$this->month_sum->{'5'}?></p>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>





                        </div>


                    </div>
                </div>
            </div>
    </div>

    <?php if($this->editMode) {?>
    <button type="submit" name="saveButton" class="btn btn-primary" style="position: sticky;">Save</button>
    <?php } ?>


    </form>


    <?php if(!$this->editMode & ($this->period ==date('Y-m'))){
                   
                   ?>
    <form action="<?=PROOT?>Workplan/editMode/genderhelth" method="post">
        <button type="submit" name="editButton" class="btn btn-primary" style="position:sticky;">Edit</button>
    </form>
    <?php }?>





</div>
</div>
</div>
<?php $this->end('body');?>