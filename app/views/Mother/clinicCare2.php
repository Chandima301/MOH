<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>


<main role="main">
        <div class="marketing mb-5" style="border: solid black; margin-top: 50px; padding:15px">
            <div class="head">
                <h1 style="text-align: center; padding: 20px;">ගර්භනී සටහන් පොත</h1>

                <ul class="list-group tb list-group-horizontal-lg">
                    <li class="list-group-item">රුධිර ඝනය</li>
                    <li class="list-group-item"><input type="text" class="form-control" id="presentData5" value=""></li>
                    <li class="list-group-item">ශරීර ස්කන්ධ දර්ශකය</li>
                    <li class="list-group-item"><input type="text" class="form-control" id="presentData5" value=""></li>
                    <li class="list-group-item">උස (සෙ.මි)</li>
                    <li class="list-group-item"><input type="text" class="form-control" id="presentData5" value=""></li>
                    <li class="list-group-item">අසාත්මිකතා</li>
                    <li class="list-group-item"><input type="text" class="form-control" id="presentData5" value=""></li>
                </ul>
            </div>
            <div class="presentinfo" style="margin-top: 50px; border: solid black; padding: 40px; margin: 40px;">
                <div>
                    <h3> 7. සායනික සං‍රක්ෂණය 2</h3>
                    <?php if(!$this->editMode){ ?>
                              <form action="<?=PROOT?>mother/edit/clinicCare2" method="post">
                                  <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                              </form>
                    <?php }?>
                    <form action="<?=PROOT?>mother/save/clinicCare2" method="post" style="margin: 30px;">
                      <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                          <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
                      </div>
                      <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                          <?= $this->displayErrors; ?>
                      </div>
                        <div class="form-group row" style="font-weight: bold;">
                          <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <table class="table tb table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="6">හෘද පරීක්ෂාව</th>
                                                <th colspan="6">මානසික සෞඛ්‍ය පරීක්ෂාව</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th colspan="1">T1</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="5"><input type="text" class="form-control" name="1" value="<?=$this->Mother->{'1'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="5"><p><?=$this->Mother->{'1'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td colspan="5"><input type="text" class="form-control" name="2" value="<?=$this->Mother->{'2'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="5"><p><?=$this->Mother->{'2'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="1">T2</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="5"><input type="text" class="form-control" name="3" value="<?=$this->Mother->{'3'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="5"><p><?=$this->Mother->{'3'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td colspan="5"><input type="text" class="form-control" name="4" value="<?=$this->Mother->{'4'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="5"><p><?=$this->Mother->{'4'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="1">T3</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="5"><input type="text" class="form-control" name="5" value="<?=$this->Mother->{'5'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="5"><p><?=$this->Mother->{'5'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td colspan="5"><input type="text" class="form-control" name="6" value="<?=$this->Mother->{'6'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="5"><p><?=$this->Mother->{'6'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-3">
                                <table class="table tb table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>ශ්වසන පද්ධතිය</th>
                                            <?php if($this->editMode){?>
                                              <td ><input type="text" class="form-control" name="7" value="<?=$this->Mother->{'7'}?>"></td>
                                            <?php } else{ ?>
                                              <td ><p><?=$this->Mother->{'7'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                        <tr>
                                            <th>පියවුරු පරීක්ෂාව</th>
                                            <?php if($this->editMode){?>
                                              <td ><input type="text" class="form-control" name="8" value="<?=$this->Mother->{'8'}?>"></td>
                                            <?php } else{ ?>
                                              <td ><p><?=$this->Mother->{'8'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-3">
                                <h4>දන්ත සං‍රක්ෂණය</h4>
                                <table class="table tb table-bordered">
                                    <thead>
                                        <tr>
                                            <th>යොමුකළ දිනය</th>
                                            <th>පරීක්ෂා කළ දිනය</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <?php if($this->editMode){?>
                                            <td ><input type="text" class="form-control" name="9" value="<?=$this->Mother->{'9'}?>"></td>
                                          <?php } else{ ?>
                                            <td ><p><?=$this->Mother->{'9'}?></p></td>
                                          <?php  } ?>
                                          <?php if($this->editMode){?>
                                            <td ><input type="text" class="form-control" name="10" value="<?=$this->Mother->{'10'}?>"></td>
                                          <?php } else{ ?>
                                            <td ><p><?=$this->Mother->{'10'}?></p></td>
                                          <?php  } ?>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label for="risk">ප්‍රතිකාරය</label>
                                              <?php if($this->editMode){?>
                                                <textarea class="form-control" id="risk" rows="3"  name="11"><?=$this->Mother->{'11'}?></textarea>
                                              <?php } else{ ?>
                                                <p><?=$this->Mother->{'11'}?></p>
                                              <?php  } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="form-group row" style="font-weight: bold;">
                            <div class="col-sm-4">
                                <h4> පරීක්ෂණ</h4>
                                <div class="form-group row">
                                    <table class="table tb table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="8"></th>
                                                <th colspan="2">සති ගණන</th>
                                                <th colspan="2">ප්‍රතිඵලය</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th colspan="8" rowspan="2">රුධිරයේ සීනි</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="2"><input type="text" class="form-control" name="12" value="<?=$this->Mother->{'12'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="2"><p><?=$this->Mother->{'12'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td colspan="2"><input type="text" class="form-control" name="13" value="<?=$this->Mother->{'13'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="2"><p><?=$this->Mother->{'13'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                              <?php if($this->editMode){?>
                                                <td colspan="2"><input type="text" class="form-control" name="14" value="<?=$this->Mother->{'14'}?>"></td>
                                              <?php } else{ ?>
                                                <td colspan="2"><p><?=$this->Mother->{'14'}?></p></td>
                                              <?php  } ?>
                                              <?php if($this->editMode){?>
                                                <td colspan="2"><input type="text" class="form-control" name="15" value="<?=$this->Mother->{'15'}?>"></td>
                                              <?php } else{ ?>
                                                <td colspan="2"><p><?=$this->Mother->{'15'}?></p></td>
                                              <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="8" rowspan="2">හිමොග්ලොබින්</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="2"><input type="text" class="form-control" name="16" value="<?=$this->Mother->{'16'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="2"><p><?=$this->Mother->{'16'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td colspan="2"><input type="text" class="form-control" name="17" value="<?=$this->Mother->{'17'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="2"><p><?=$this->Mother->{'17'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                              <?php if($this->editMode){?>
                                                <td colspan="2"><input type="text" class="form-control" name="18" value="<?=$this->Mother->{'18'}?>"></td>
                                              <?php } else{ ?>
                                                <td colspan="2"><p><?=$this->Mother->{'18'}?></p></td>
                                              <?php  } ?>
                                              <?php if($this->editMode){?>
                                                <td colspan="2"><input type="text" class="form-control" name="19" value="<?=$this->Mother->{'19'}?>"></td>
                                              <?php } else{ ?>
                                                <td colspan="2"><p><?=$this->Mother->{'19'}?></p></td>
                                              <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="8">වෙනත් පරීක්ෂණ</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="6"><input type="text" class="form-control" name="20" value="<?=$this->Mother->{'20'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="6"><p><?=$this->Mother->{'20'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="8">පණු ප්‍රතිකාර</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="6"><input type="text" class="form-control" name="21" value="<?=$this->Mother->{'21'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="6"><p><?=$this->Mother->{'21'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="8">භ්‍රෑණ චලන සටහන්පත් ලබාදුන් දිනය</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="6"><input type="text" class="form-control" name="22" value="<?=$this->Mother->{'22'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="6"><p><?=$this->Mother->{'22'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-7">
                                <h4> උපදංශය සදහා පූර්ව පරීක්ෂාව</h4>
                                <div class="form-group row">
                                    <table class="table tb table-bordered">
                                        <tbody>
                                            <tr>
                                                <th colspan="8">රුධිර සාම්පල ගන්නා විට ගර්භයට සති</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="4"><input type="text" class="form-control" name="23" value="<?=$this->Mother->{'23'}?>"></td>
                                                <?php } else{ ?>
                                                  <td ><p><?=$this->Mother->{'23'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="8">රුධිර සාම්පල ගත් දිනය </th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="4"><input type="text" class="form-control" name="24" value="<?=$this->Mother->{'24'}?>"></td>
                                                <?php } else{ ?>
                                                  <td ><p><?=$this->Mother->{'24'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="8">ප්‍රතිඵලය පැමිණි දිනය</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="4"><input type="text" class="form-control" name="25" value="<?=$this->Mother->{'25'}?>"></td>
                                                <?php } else{ ?>
                                                  <td ><p><?=$this->Mother->{'25'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="8">ප්‍රතිඵලය</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="2"><input type="text" class="form-control" placeholder="NR" name="26" value="<?=$this->Mother->{'26'}?>"></td>
                                                <?php } else{ ?>
                                                  <td ><p><?=$this->Mother->{'26'}?></p></td>
                                                <?php  } ?>

                                            </tr>
                                            <tr>
                                                <th colspan="8">ප්‍රතිඵලය(R) නම් ප්‍රතිකාර සදහා යොමුකළ දිනය</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="4"><input type="text" class="form-control" name="28" value="<?=$this->Mother->{'28'}?>"></td>
                                                <?php } else{ ?>
                                                  <td ><p><?=$this->Mother->{'28'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <table class="table tb table-bordered">
                                        <tbody>
                                            <tr>
                                                <th colspan="8">HIV පූර්ව පරීක්ෂාව සදහා රුධිර සාම්පල ලබාගත් දිනය </th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="4"><input type="text" class="form-control" name="29" value="<?=$this->Mother->{'29'}?>"></td>
                                                <?php } else{ ?>
                                                  <td ><p><?=$this->Mother->{'29'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <th colspan="8">ප්‍රතිඵලය මවට දැනුම්දුන් දිනය</th>
                                                <?php if($this->editMode){?>
                                                  <td colspan="4"><input type="text" class="form-control" name="30" value="<?=$this->Mother->{'30'}?>"></td>
                                                <?php } else{ ?>
                                                  <td ><p><?=$this->Mother->{'30'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                        <?php if($this->editMode) {?>
                          <button type="submit" name="saveButton" class="btn btn-primary save ">save</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php $this->end(); ?>