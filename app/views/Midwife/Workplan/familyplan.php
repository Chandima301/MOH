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

            <form action="<?=PROOT?>Workplan/seeMonthReports/familyplan" method="post">
                <label for="bdaymonth">පසු ගිය මාස වල වාර්තා බලන්න</label>
                <input type="month" class="form-control" id="" name="period" style="width:60%;float:left"
                    value="<?=$this->period?>">
                <button type="submit" class="btn btn-primary" style="width:30%;float:right">submit</button>
            </form>

        </div>

    </div>
    <form action="<?=PROOT?>Workplan/saveMode/familyplan" method="post" style="display:block;width:100%">
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
                                    <p>10. පවුල් සැලසුම</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>ගිලින පෙති</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ක්‍රමය අත් හරින ලද / පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>බෙදා දෙන ලද පෙති පැකට් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>නික්ෂේපන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ක්‍රමය අත් හරින ලද / පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>අන්ත: ගර්භාෂිත උපකරණ</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ක්‍රමය අත් හරින ලද / පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>හෝමෝන තැන්පතු</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ක්‍රමය අත් හරින ලද / පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>රබර් කොපු</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ක්‍රමය අත් හරින ලද / පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>බෙදා දෙන ලද රබර් කොපු ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>ස්ත්‍රී වන්ධ්‍යාකරණය</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>පුරුෂ වන්ධ්‍යාකරණය</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>ස්වාභාවික / සම්ප්‍රදායික පවුල් සැලසුම් ක්‍රම භාවිතා කරන යුවල් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>නවීන පවුල් සැලසුම් ක්‍රම පිළිගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>පවුල් සැලසුම් ක්‍රම භාවිතා කළ යුතු නමුත් නොකරන යුවල්</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>පවුල් සැලසුම් ක්‍රම පිළිගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>මඳ සරු භාවය සහිත යුවල් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අලුතින් හදුනාගත් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 sub-heading">
                                    <p>මාසය තුළ ගර්භණීභාවයට පත්වූ ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>පළාත හැර ගිය / වයස වැඩි ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>යොමු කළ ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 not-heading-multi" style="padding-top: 30px;">
                                    <p>පවුල් සැලසුම් ක්‍රම අසාර්ථක වූ යුවල් ගණන(ක්‍රමය සඳහන් කරන්න)</p>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>1</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>2</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 not-heading-multi" style="padding-top: 20px;">
                                    <p>උග්‍ර සංකූලතා ඇතිවූ ගණන(සංකූලතාවය සහ ක්‍රමය සඳහන් කරන්න)</p>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>1</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>නවීන පවුල් සැලසුම් ක්‍රම පිළිපදින්නන් සඳහා කළ මුළු ගෘහ ඇවිදීම් ගණන</p>
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
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="36" value="<?=$date->{'36'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="27" value="<?=$date->{'37'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="28" value="<?=$date->{'38'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="29" value="<?=$date->{'39'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="30" value="<?=$date->{'40'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="31" value="<?=$date->{'41'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width:61px; float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="number" name="32" value="<?=$date->{'42'}?>"></div>
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
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'36'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'37'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'38'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'39'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'40'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'41'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'42'}?></p>
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
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$this->month_sum->{'36'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$this->month_sum->{'37'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$this->month_sum->{'38'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$this->month_sum->{'39'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$this->month_sum->{'40'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$this->month_sum->{'41'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$this->month_sum->{'42'}?></p>
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
    <form action="<?=PROOT?>Workplan/editMode/familyplan" method="post">
        <button type="submit" name="editButton" class="btn btn-primary" style="position:sticky;">Edit</button>
    </form>
    <?php }?>





</div>
</div>
</div>
<?php $this->end('body');?>