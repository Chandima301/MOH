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

            <form action="<?=PROOT?>Workplan/seeMonthReports/babypreservation1to5" method="post">
                <label for="bdaymonth">පසු ගිය මාස වල වාර්තා බලන්න</label>
                <input type="month" class="form-control" id="" name="period" style="width:60%;float:left"
                    value="<?=$this->period?>">
                <button type="submit" class="btn btn-primary" style="width:30%;float:right">submit</button>
            </form>

        </div>

    </div>
    <form action="<?=PROOT?>Workplan/saveMode/babypreservation1to5" method="post" style="display:block;width:100%">
        <div class='col-sm-12' style="overflow-x: scroll;overflow-y:hidden">
            <div class="row justify-content-center" style="width: 3000px; ">
                <div class="col-md-12 mt-5 page-content" style="padding: 5px 20px;">

                    <div class="row">
                        <div class="col-4 tab-text">
                            <div class="row">
                                <div class="col-12 heading">
                                    <p>කාර්යයන් සහ දිනයන්</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 heading">
                                    <p>8. ළමා සං‍රක්ෂණය(අවු 1-5)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 not-heading-multi" style="padding-top: 20px;">
                                    <p>කුඩා දරුවන් සඳහා කරන ලද ගෘහ ඇවිදීම් ගණන(අවු 1-2)</p>
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
                                <div class="col-8 not-heading-multi" style="padding-top: 20px;">
                                    <p>අවු. 2-5 දරුවන් සඳහා කරන ලද ගෘහ ඇවිදීම ගණන</p>
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
                                <div class="col-6 not-heading-multi" style="padding-top: 20px;">
                                    <p>බර කිරන ලද කුඩා දරුවන් (අවු. 1-2) මුළු ගණන</p>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>සායනය</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>බර කිරන මධ්‍යස්ථානය</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 not-heading-multi" style="padding-top: 35px;">
                                    <p>කුඩා දරුවන්ගේ (අවු. 1-2) පෝෂණ තත්ත්වය</p>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>මධ්‍යස්ථ බර අඩු</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>උග්‍ර බර අඩු</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අධි බර</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 not-heading-multi" style="padding-top: 15px;">
                                    <p>බර කිරන ලද පෙර පාසල් දරුවන්ගේ (අවු. 2-5) මුළු ගණන</p>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>සායනය</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>බර කිරණ මධ්‍යස්ථානය</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 not-heading-multi" style="padding-top: 35px;">
                                    <p>පෙර පාසල් දරුවන්ගේ (අවු. 2-5) පෝෂණ තත්ත්වය</p>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>මධ්‍යස්ථ බර අඩු</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>උග්‍ර බර අඩු</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අධි බර</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 not-heading-multi" style="padding-top: 55px;">
                                    <p>විටමින් A අධි මාත්‍රාව ලබාදුන් ගණන</p>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>මාස 18</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 2</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 3</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 not-heading-multi" style="padding-top: 55px;">
                                    <p>පණු ප්‍රතිකාර ලබා දුන් ගණන</p>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>මාස 18</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 2</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 3</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 not-heading-multi" style="padding-top: 55px;">
                                    <p>සායනයට පැමිණි ගණන</p>
                                </div>

                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6 not-heading-multi" style="padding-top: 20px;">
                                            <p>අවු. 1-2</p>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-12 not-heading">
                                                    <p>අලුත්</p>
                                                </div>
                                                <div class="col-12 not-heading">
                                                    <p>පරණ</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6 not-heading-multi" style="padding-top: 20px;">
                                            <p>අවු. 2-5</p>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-12 not-heading">
                                                    <p>අලුත්</p>
                                                </div>
                                                <div class="col-12 not-heading">
                                                    <p>පරණ</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ළමා මරණ ගණන (අවු. 1 සිට 5 දක්වා)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 not-heading-multi" style="padding-top: 85px;">
                                    <p>ළමා මරණ වලට හේතු</p>
                                </div>

                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>හදිසි අනතුරු</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>සංජානනීය ආබාධ</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>පාචන රෝග</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>ශ්වසන රෝග</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 not-heading-multi" style="padding-top: 35px;">
                                            <p>වෙනත්(සඳහන් කරන්න)</p>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-12 not-heading">
                                                    <p>1</p>
                                                </div>
                                                <div class="col-12 not-heading">
                                                    <p>2</p>
                                                </div>
                                                <div class="col-12 not-heading">
                                                    <p>2</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ප්‍රතිශක්තිකරණයෙන් පසු අතුරු ආබාධ(AEFI) ඇති වූ ළමයින් ගණන</p>
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
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="6" value="<?=$date->{'6'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="7" value="<?=$date->{'7'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="8" value="<?=$date->{'8'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="9" value="<?=$date->{'9'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="10" value="<?=$date->{'10'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="11" value="<?=$date->{'11'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="12" value="<?=$date->{'12'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="13" value="<?=$date->{'13'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="14" value="<?=$date->{'14'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="15" value="<?=$date->{'15'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="16" value="<?=$date->{'16'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="17" value="<?=$date->{'17'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="18" value="<?=$date->{'18'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="19" value="<?=$date->{'19'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="20" value="<?=$date->{'20'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="21" value="<?=$date->{'21'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="22" value="<?=$date->{'22'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="23" value="<?=$date->{'23'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="24" value="<?=$date->{'24'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="25" value="<?=$date->{'25'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="26" value="<?=$date->{'26'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="27" value="<?=$date->{'27'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="28" value="<?=$date->{'28'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="29" value="<?=$date->{'29'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="30" value="<?=$date->{'30'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="31" value="<?=$date->{'31'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="32" value="<?=$date->{'32'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="33" value="<?=$date->{'33'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="34" value="<?=$date->{'34'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="35" value="<?=$date->{'35'}?>"></div>
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
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'6'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'7'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'8'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'9'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'10'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'11'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'12'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'13'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'14'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'15'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'16'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'17'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'18'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'19'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'20'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'21'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'22'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'23'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'24'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'25'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'26'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'27'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'28'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'29'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'30'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'31'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'32'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'33'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'34'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'35'}?></p>
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
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'6'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'7'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'8'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'9'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'10'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'11'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'12'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'13'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'14'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'15'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'16'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'17'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'18'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'19'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'20'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'21'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'22'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'23'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'24'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'25'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'26'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'27'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'28'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'29'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'30'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'31'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'32'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'33'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'34'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                           <p><?=$this->month_sum->{'35'}?></p>
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
    <form action="<?=PROOT?>Workplan/editMode/babypreservation1to5" method="post">
        <button type="submit" name="editButton" class="btn btn-primary" style="position:sticky;">Edit</button>
    </form>
    <?php }?>





</div>
</div>
</div>
<?php $this->end('body');?>