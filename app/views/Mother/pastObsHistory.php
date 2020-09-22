<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<main role="main">
<div class="marketing mb-5" style="border: solid black; margin-top: 50px; padding:15px">
            <div class="head">
                <h1 style="text-align: center; padding: 20px;">ගර්භනී සටහන් පොත</h1>

                            <ul class="list-group tb list-group-horizontal-lg">
                                <li class="list-group-item">රුධිර ඝනය</li>
                                <li class="list-group-item col-sm-2"><p><?=$this->MotherTable->blood_group?></p></li>
                                <li class="list-group-item">ශරීර ස්කන්ධ දර්ශකය</li>
                                <li class="list-group-item col-sm-2"><p><?=$this->MotherTable->mass_index?></p></li>
                                <li class="list-group-item">උස (සෙ.මි)</li>
                                <li class="list-group-item col-sm-2"><p><?=$this->MotherTable->height?></p></li>
                                <li class="list-group-item">අසාත්මිකතා</li>
                                <li class="list-group-item col-sm-2"><p><?=$this->MotherTable->allergies?></p></li>
                            </ul>
            </div>
            <div class="presentinfo" style="margin-top: 50px; border: solid black; padding: 40px; margin: 40px;">
                <div>
                    <h3> 6. පෙර ගර්භ ඉතිහාසය</h3>
                    <?php if(!$this->editMode){ ?>
                              <form action="<?=PROOT?><?=$this->controller;?>/edit/pastObsHistory" method="post">
                                  <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                              </form>
                    <?php }?>
                    <form action="<?=PROOT?><?=$this->controller;?>/save/pastObsHistory" method="post" style="margin: 30px;">
                      <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                          <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
                      </div>
                      <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                          <?= $this->displayErrors; ?>
                      </div>
                        <div class="form-group row" style="font-weight: bold;">
                          <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                            <table class="table tb table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="1">ගර්භනී භාවය</th>
                                        <th colspan="3">පූර්ව ප්‍රසව සංකූලතා</th>
                                        <th colspan="2">ප්‍රසූතිය සිදුවූ ස්ථානය සහ ආකාරය</th>
                                        <th colspan="2">ප්‍රථිඵලය</th>
                                        <th colspan="1">උපත් බර(ග්‍ර්‍ර්‍ර්‍ර්‍රෑම්)</th>
                                        <th colspan="2">පසු ප්‍රසව සංකූලතා</th>
                                        <th colspan="1">ස්ත්‍රි/පුරුෂ <br>භාවය සහ වයස</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th colspan="1">G1</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="1" value="<?=$this->Mother->{'1'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'1'}?></p></td>
                                        <?php  } ?>
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
                                          <td colspan="1"><input type="text" class="form-control" name="4" value="<?=$this->Mother->{'4'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'4'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="5" value="<?=$this->Mother->{'5'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'5'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="1"><input type="text" class="form-control" name="6" value="<?=$this->Mother->{'6'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'6'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="1">G2</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="7" value="<?=$this->Mother->{'7'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'7'}?></p></td>
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
                                          <td colspan="1"><input type="text" class="form-control" name="10" value="<?=$this->Mother->{'10'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'10'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="11" value="<?=$this->Mother->{'11'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'11'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="1"><input type="text" class="form-control" name="12" value="<?=$this->Mother->{'12'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'12'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="1">G3</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="13" value="<?=$this->Mother->{'13'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'13'}?></p></td>
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
                                          <td colspan="1"><input type="text" class="form-control" name="16" value="<?=$this->Mother->{'16'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'16'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="17" value="<?=$this->Mother->{'17'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'17'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="1"><input type="text" class="form-control" name="18" value="<?=$this->Mother->{'18'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'18'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="1">G4</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="19" value="<?=$this->Mother->{'19'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'19'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="20" value="<?=$this->Mother->{'20'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'20'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="21" value="<?=$this->Mother->{'21'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'21'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="1"><input type="text" class="form-control" name="22" value="<?=$this->Mother->{'22'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'22'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="23" value="<?=$this->Mother->{'23'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'23'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="1"><input type="text" class="form-control" name="24" value="<?=$this->Mother->{'24'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'24'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="1">G5</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="25" value="<?=$this->Mother->{'25'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'25'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="26" value="<?=$this->Mother->{'26'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'26'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="27" value="<?=$this->Mother->{'27'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'27'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="1"><input type="text" class="form-control" name="28" value="<?=$this->Mother->{'28'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'28'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="29" value="<?=$this->Mother->{'29'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'29'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="1"><input type="text" class="form-control" name="30" value="<?=$this->Mother->{'30'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'30'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="1">G6</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="31" value="<?=$this->Mother->{'31'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'31'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="32" value="<?=$this->Mother->{'32'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'32'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="33" value="<?=$this->Mother->{'33'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'33'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="1"><input type="text" class="form-control" name="34" value="<?=$this->Mother->{'34'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'34'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="2"><input type="text" class="form-control" name="35" value="<?=$this->Mother->{'35'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="2"><p><?=$this->Mother->{'35'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="1"><input type="text" class="form-control" name="36" value="<?=$this->Mother->{'36'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="1"><p><?=$this->Mother->{'36'}?></p></td>
                                        <?php  } ?>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="form-group row" style="font-weight: bold;">
                          <?php if($this->editMode){?>
                            <textarea class="form-control" id="risk" rows="12"  name="37"><?=$this->Mother->{'37'}?></textarea>
                          <?php } else{ ?>
                            <p><?=$this->Mother->{'37'}?></p>
                          <?php  } ?>
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
