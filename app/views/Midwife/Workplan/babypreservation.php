<?php
$this->start('body'); ?>


<!--end of the side bar-->

<div class='col-md-10'>
    <div class="row mt-5">
        <div class="col-md-9">
            <center>
                <h1>දින වැඩ වාර්තාව <?= $this->period; ?></h1>
            </center>
        </div>
        <div class="col-md-3">

            <form action="<?= PROOT ?>Workplan/seeMonthReports/babypreservation" method="post">
                <label for="bdaymonth">පසු ගිය මාස වල වාර්තා බලන්න</label>
                <input type="month" class="form-control" id="" name="period" style="width:60%;float:left" value="<?= $this->period ?>">
                <button type="submit" class="btn btn-primary" style="width:30%;float:right">submit</button>
            </form>

        </div>

    </div>
    <form action="<?= PROOT ?>Workplan/saveMode/babypreservation" method="post" style="display:block;width:100%">
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
                                    <p>7. ළඳරු සං‍රක්ෂණය</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ලියාපදිංචි කරන ලද ළදරුවන් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ලේඛනයෙන් ඉවත් කරන ලද ළදරුවන් ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 not-heading-multi" style="padding-top: 15px;">
                                    <p>ළදරුවන් සඳහා ගෘහ ඇවිදීම දින 42 ට පසු</p>
                                </div>
                                <div class="col-8">
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
                                <div class="col-4 not-heading-multi" style="padding-top: 35px;">
                                    <p>ළඳරු සායනික පැමිණීම්</p>
                                </div>

                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-6 not-heading-multi" style="padding-top: 20px;">
                                            <p>අලුත්</p>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-12 not-heading">
                                                    <p>මාසයේදී</p>
                                                </div>
                                                <div class="col-12 not-heading">
                                                    <p>මාසයකට පසු</p>
                                                </div>
                                            </div>
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
                                <div class="col-4 not-heading-multi" style="padding-top: 15px;">
                                    <p>බර කිරන ලඳ ළදරුවන් ගණන</p>
                                </div>
                                <div class="col-8">
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
                                <div class="col-12 not-heading">
                                    <p>මධ්‍යස්ථ අඩු බර සහිත ළදරුවන් ගණන(&#60-2SD to -3SD)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>උග්‍ර අඩු බර සහිත ළදරුවන් ගණන(&#60-3SD)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>අධ් බර සහිත ළදරුවන් ගණන(&#62+ 2SD)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 not-heading-multi" style="padding-top: 15px;">
                                    <p>විටමින් A අධි මාත්‍රාව ලබාදුන් ගණන</p>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>මාස 6 දී</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>මාස 12 දී</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 not-heading-multi" style="padding-top: 35px;">
                                    <p>ප. සෞ. සේ. නි. වාර්තා කළ ළදරු මරණ ගණන</p>
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>නව ජන්ම දින 1-7 දක්වා</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>දින 8-28 දක්වා</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>පශ්චාත් නව ජන්ම (දින 28ට පසු)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>විමර්ශණය කළ මුළු ළඳරු මරණ ගණන</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 not-heading-multi" style="padding-top: 85px;">
                                    <p>ළඳරු මරණ සඳහා හේතූන්</p>
                                </div>

                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>නිෂ්පූර්ණය</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>නව ජන්ම ආසාදනය</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>සංජානනීය ආබාධ</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>නොමේරූ</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 not-heading-multi" style="padding-top: 20px;">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-8">
                            <input type="hidden" name="id" value="<?= User::currentUser()->id ?>">
                            <input type="hidden" name="period" value="<?= date("Y-m-j") ?>">

                            <div class="row">
                                <?php $numOfDates = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));
                                $x = 1;
                                foreach ($this->dates as $date) {
                                    if ($x == date("j") && $this->editMode) { ?>

                                        <div class="tab-val" style="width: calc(100% / <?= $numOfDates + 1 ?>);">
                                            <div class="row">
                                                <div class="col-12 heading-val">
                                                    <p><?= $x ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 heading-val">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="1" value="<?= $date->{'1'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="2" value="<?= $date->{'2'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="3" value="<?= $date->{'3'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="4" value="<?= $date->{'4'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="5" value="<?= $date->{'5'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="6" value="<?= $date->{'6'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="7" value="<?= $date->{'7'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="8" value="<?= $date->{'8'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="9" value="<?= $date->{'9'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="10" value="<?= $date->{'10'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="11" value="<?= $date->{'11'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="12" value="<?= $date->{'12'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="13" value="<?= $date->{'13'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="14" value="<?= $date->{'14'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="15" value="<?= $date->{'15'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="16" value="<?= $date->{'16'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="17" value="<?= $date->{'17'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="18" value="<?= $date->{'18'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="19" value="<?= $date->{'19'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="20" value="<?= $date->{'20'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="21" value="<?= $date->{'21'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="22" value="<?= $date->{'22'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="23" value="<?= $date->{'23'} ?>"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 not-heading-val" style="padding: 0px"><input style="width: 100%; color:red; padding-left:20px; background-color:lightblue" type="number" name="24" value="<?= $date->{'24'} ?>"></div>
                                            </div>



                                        </div>

                                    <?php $x++;
                                        continue;
                                    } ?>
                                    <div class="tab-val" style="width: calc(100% / <?= $numOfDates + 1 ?>);">
                                        <div class="row">
                                            <div class="col-12 heading-val">
                                                <p><?= $x ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 heading-val">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'1'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'2'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'3'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'4'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'5'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'6'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'7'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'8'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'9'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'10'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'11'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'12'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'13'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'14'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'15'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'16'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'17'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'18'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'19'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'20'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'21'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'22'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'23'} ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 not-heading-val">
                                                <p><?= $date->{'24'} ?></p>
                                            </div>
                                        </div>

                                    </div> <?php $x++;
                                        } ?>

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
                                            <p><?= $this->month_sum->{'1'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'2'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'3'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'4'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'5'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'6'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'7'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'8'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'9'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'10'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'11'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'12'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'13'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'14'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'15'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'16'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'17'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'18'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'19'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'20'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'21'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'22'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'23'} ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?= $this->month_sum->{'24'} ?></p>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>





                    </div>


                </div>
            </div>

        </div>

        <?php if ($this->editMode) { ?>
            <button type="submit" name="saveButton" class="btn btn-primary" style="position: sticky;">Save</button>
        <?php } ?>


    </form>


    <?php if (!$this->editMode & ($this->period == date('Y-m'))) {

    ?>
        <form action="<?= PROOT ?>Workplan/editMode/babypreservation" method="post">
            <button type="submit" name="editButton" class="btn btn-primary" style="position:sticky;">Edit</button>
        </form>
    <?php } ?>





</div>
</div>
</div>

<?php $this->end('body'); ?>