<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>


<main role="main">
<div class="marketing mb-5" style="border: solid black; margin-top: 50px; padding:15px">
            <div class="form-group row" style="font-weight: bold; ">
                <h3> 15. පසු ප්‍රසව සානික සං‍රක්ෂණය</h3>
            </div>
            <?php if(!$this->editMode){ ?>
                      <form action="<?= PROOT ?><?= $this->controller; ?>/edit/postpatumCare" method="post">
                          <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                      </form>
            <?php }?>
            <form action="<?= PROOT ?><?= $this->controller; ?>/save/postpatumCare" method="post" style="margin: 30px;">
              <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                  <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
              </div>
              <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                  <?= $this->displayErrors; ?>
              </div>
                <div class="form-group row" style="font-weight: bold; ">
                  <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                    <label for="">හදුනාගත් පසුප්‍රසව රෝගී තත්ව සහ ගත් පියවර</label>
                    <?php if($this->editMode){?>
                      <textarea class="form-control" id="risk" rows="10" cols="150" name="1"><?=$this->Mother->{'1'}?></textarea>
                    <?php } else{ ?>
                      <p><?=$this->Mother->{'1'}?></p>
                    <?php  } ?>
                </div>
                <div class="form-group row" style="font-weight: bold; ">
                    <table class="table tb table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Z Score</th>
                                <th colspan="18">පවුල් සෞඛ්‍ය සේවා නිලධාරිනිය නිවසට පැමිණි දිනය</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="2" value="<?=$this->Mother->{'2'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'2'}?></p></td>
                              <?php  } ?>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="3" value="<?=$this->Mother->{'3'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'3'}?></p></td>
                              <?php  } ?>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="4" value="<?=$this->Mother->{'4'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'4'}?></p></td>
                              <?php  } ?>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="5" value="<?=$this->Mother->{'5'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'5'}?></p></td>
                              <?php  } ?>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="6" value="<?=$this->Mother->{'6'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'6'}?></p></td>
                              <?php  } ?>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="7" value="<?=$this->Mother->{'7'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'7'}?></p></td>
                              <?php  } ?>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="8" value="<?=$this->Mother->{'8'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'8'}?></p></td>
                              <?php  } ?>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="9" value="<?=$this->Mother->{'9'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'9'}?></p></td>
                              <?php  } ?>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="10" value="<?=$this->Mother->{'10'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'10'}?></p></td>
                              <?php  } ?>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group row" style="font-weight: bold; ">
                    <table class="table tb table-bordered">
                        <thead>
                            <tr>
                                <th colspan="18">ක්ෂුද්‍ර පෝෂක ලබාදුන් දිනය</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <?php if($this->editMode){?>
                                <td colspan="2"><input type="text" class="form-control" name="11" value="<?=$this->Mother->{'11'}?>"></td>
                              <?php } else{ ?>
                                <td colspan="2"><p><?=$this->Mother->{'11'}?></p></td>
                              <?php  } ?>
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
                        </tbody>
                    </table>
                </div>
                <div class="form-group row" style="font-weight: bold; ">
                    <table class="table tb table-bordered">
                        <tbody>
                            <tr>
                                <th colspan="8">පසු ප්‍රසව සායන දිනය සහ ස්ථානය</th>
                                <?php if($this->editMode){?>
                                  <td colspan="4"><input type="text" class="form-control" name="20" value="<?=$this->Mother->{'20'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="4"><p><?=$this->Mother->{'20'}?></p></td>
                                <?php  } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group row" style="font-weight: bold;">
                    <label for="">පසු ප්‍රසව සානික සං‍රක්ෂණය</label>
                    <div class="col-sm-6">
                      <?php if($this->editMode){?>
                        <td colspan="2"><input type="text" class="form-control" name="21" value="<?=$this->Mother->{'21'}?>"></td>
                      <?php } else{ ?>
                        <td colspan="2"><p><?=$this->Mother->{'21'}?></p></td>
                      <?php  } ?>
                    </div>
                </div>
                <div class="form-group row" style="font-weight: bold;">
                    <div class="col-sm-4">
                        <table class="table tb table-bordered">
                            <tbody>
                                <tr>
                                    <th colspan="6">පියයුරු ගැටලු</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="22" value="<?=$this->Mother->{'22'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'22'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">අසාමාන්‍ය යෝනි ස්‍රාව</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="23" value="<?=$this->Mother->{'23'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'23'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">අධික ලෙස යෝනි රුධිර වහනය</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="24" value="<?=$this->Mother->{'24'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'24'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">සුදුමැලි බව</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="25" value="<?=$this->Mother->{'25'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'25'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">කාමලාව</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="26" value="<?=$this->Mother->{'26'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'26'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">ඉදිමුම(වළලුකර / මුහුණ)</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="27" value="<?=$this->Mother->{'27'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'27'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">රුධිර පීඩනය</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="28" value="<?=$this->Mother->{'28'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'28'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">රුධිර වාහීනි පද්ධතිය</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="29" value="<?=$this->Mother->{'29'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'29'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">ශ්වසන පද්ධතිය</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="30" value="<?=$this->Mother->{'30'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'30'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">උදර පරීක්ෂාව</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="31" value="<?=$this->Mother->{'31'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'31'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">යෝනි පරීක්ෂාව</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="32" value="<?=$this->Mother->{'32'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'32'}?></p></td>
                                    <?php  } ?>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3">
                        <table class="table tb table-bordered">
                            <tbody>
                                <tr>
                                    <th colspan="6">පුර්ව පරීක්ෂණ මෙවලමට අනුව මානිසික තත්වය</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="33" value="<?=$this->Mother->{'33'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'33'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">වෙනත්</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="4"><input type="text" class="form-control" name="34" value="<?=$this->Mother->{'34'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="4"><p><?=$this->Mother->{'34'}?></p></td>
                                    <?php  } ?>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group row" style="font-weight: bold; ">
                            <label for="">මවගේ හදුනාගත් ගැටලු සහ ගත් පියවර</label>
                        </div>
                        <div class="form-group row" style="font-weight: bold; ">
                          <?php if($this->editMode){?>
                            <textarea class="form-control" id="risk" rows="10" cols="150" name="35"><?=$this->Mother->{'35'}?></textarea>
                          <?php } else{ ?>
                            <p><?=$this->Mother->{'35'}?></p>
                          <?php  } ?>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <table class="table tb table-bordered">
                            <tbody>
                                <tr>
                                    <th colspan="12">පවුල් සැලෂුම් ක්‍රමය</th>
                                </tr>
                                <tr>
                                    <th colspan="8">භාවිතා කරන</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="2"><input type="text" class="form-control" name="36" value="<?=$this->Mother->{'36'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="2"><p><?=$this->Mother->{'36'}?></p></td>
                                    <?php  } ?>
                                    <?php if($this->editMode){?>
                                      <td colspan="2"><input type="text" class="form-control" name="37" value="<?=$this->Mother->{'37'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="2"><p><?=$this->Mother->{'37'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="2">තෝරාගත්</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="2"><input type="text" class="form-control" name="38" value="<?=$this->Mother->{'38'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="2"><p><?=$this->Mother->{'38'}?></p></td>
                                    <?php  } ?>
                                    <?php if($this->editMode){?>
                                      <td colspan="2"><input type="text" class="form-control" name="39" value="<?=$this->Mother->{'39'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="2"><p><?=$this->Mother->{'39'}?></p></td>
                                    <?php  } ?>
                                    <?php if($this->editMode){?>
                                      <td colspan="2"><input type="text" class="form-control" name="40" value="<?=$this->Mother->{'40'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="2"><p><?=$this->Mother->{'40'}?></p></td>
                                    <?php  } ?>
                                    <?php if($this->editMode){?>
                                      <td colspan="2"><input type="text" class="form-control" name="41" value="<?=$this->Mother->{'41'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="2"><p><?=$this->Mother->{'41'}?></p></td>
                                    <?php  } ?>
                                    <?php if($this->editMode){?>
                                      <td colspan="2"><input type="text" class="form-control" name="42" value="<?=$this->Mother->{'42'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="2"><p><?=$this->Mother->{'42'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">නැතිනම් හේතුව</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="6"><input type="text" class="form-control" name="43" value="<?=$this->Mother->{'43'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="6"><p><?=$this->Mother->{'43'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="12">පවුල් සැලෂුම් සායනය</th>
                                </tr>
                                <tr>
                                    <th colspan="6">ස්ථානය</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="6"><input type="text" class="form-control" name="44" value="<?=$this->Mother->{'44'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="6"><p><?=$this->Mother->{'44'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">දිනය</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="6"><input type="text" class="form-control" name="45" value="<?=$this->Mother->{'45'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="6"><p><?=$this->Mother->{'45'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">වේලාව</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="6"><input type="text" class="form-control" name="46" value="<?=$this->Mother->{'46'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="6"><p><?=$this->Mother->{'46'}?></p></td>
                                    <?php  } ?>
                                </tr>
                                <tr>
                                    <th colspan="6">විශේෂ සටහන්</th>
                                    <?php if($this->editMode){?>
                                      <td colspan="6"><input type="text" class="form-control" name="47" value="<?=$this->Mother->{'47'}?>"></td>
                                    <?php } else{ ?>
                                      <td colspan="6"><p><?=$this->Mother->{'47'}?></p></td>
                                    <?php  } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php if($this->editMode) {?>
                  <button type="submit" name="saveButton" class="btn btn-primary">save</button>
                <?php } ?>
            </form>
        </div>
    </main>
    <?php $this->end(); ?>
