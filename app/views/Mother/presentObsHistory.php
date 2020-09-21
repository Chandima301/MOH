<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<main role="main">
<div class="marketing mb-5" style="border: solid black; margin-top: 50px; padding:15px">
            <div class="head">
                <h1 style="text-align: center; padding: 20px;">ගර්භනී සටහන් පොත</h1>

                <ul class="list-group tb list-group-horizontal-lg">
                    <li class="list-group-item">රුධිර ඝනය</li>
                    <li class="list-group-item"><input type="email" class="form-control" id="inputEmail4"></li>
                    <li class="list-group-item">ශරීර ස්කන්ධ දර්ශකය</li>
                    <li class="list-group-item"><input type="email" class="form-control" id="inputEmail4"></li>
                    <li class="list-group-item">උස (සෙ.මි)</li>
                    <li class="list-group-item"><input type="email" class="form-control" id="inputEmail4"></li>
                    <li class="list-group-item">අසාත්මිකතා</li>
                    <li class="list-group-item"><input type="email" class="form-control" id="inputEmail4"></li>
                </ul>
            </div>
            <div class="presentinfo" style="margin-top: 50px; border: solid black; padding: 40px; margin: 40px;">
                <div>
                    <h3> 5. වර්තමාන ගර්භනී ඉතිහාසය</h3>
                    <?php if(!$this->editMode){ ?>
                              <form action="<?=PROOT?><?=$this->controller;?>/edit/presentObsHistory" method="post">
                                  <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                              </form>
                    <?php }?>
                    <form action="<?=PROOT?><?=$this->controller;?>/save/presentObsHistory" method="post" style="margin: 30px;">
                      <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                          <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
                      </div>
                      <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                          <?= $this->displayErrors; ?>
                      </div>
                        <div class="form-group row" style="font-weight: bold;">
                          <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <table class="table tb table-bordered">

                                        <tbody>
                                            <tr>
                                                <td rowspan="2">කීවෙනි ගර්භයද?</td>
                                                <td>G</td>
                                                <td>P</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                              <?php if($this->editMode){?>
                                                <td><input type="text" class="form-control" name="1" value="<?=$this->Mother->{'1'}?>"></td>
                                              <?php } else{ ?>
                                                <td><p><?=$this->Mother->{'1'}?></p></td>
                                              <?php  } ?>
                                              <?php if($this->editMode){?>
                                                <td><input type="text" class="form-control" name="2" value="<?=$this->Mother->{'2'}?>"></td>
                                              <?php } else{ ?>
                                                <td><p><?=$this->Mother->{'2'}?></p></td>
                                              <?php  } ?>
                                              <?php if($this->editMode){?>
                                                <td><input type="text" class="form-control" name="3" value="<?=$this->Mother->{'3'}?>"></td>
                                              <?php } else{ ?>
                                                <td><p><?=$this->Mother->{'3'}?></p></td>
                                              <?php  } ?>
                                            </tr>
                                            <tr>
                                                <td colspan="2">බාලම ළමයාගේ වයස</td>
                                                <?php if($this->editMode){?>
                                                  <td colspan="2"><input type="text" class="form-control" name="4" value="<?=$this->Mother->{'4'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="2"><p><?=$this->Mother->{'4'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <td>අන්තිමට ක්‍රමවත් ඔසප් වූ දිනය</td>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="5" value="<?=$this->Mother->{'5'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'5'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="6" value="<?=$this->Mother->{'6'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'6'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="7" value="<?=$this->Mother->{'7'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'7'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <td>බලාපොරොත්තු වූ ප්‍රසව දිනය (සති 40 සම්පූර්ණ වන දිනය)</td>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="8" placeholder="DD" value="<?=$this->Mother->{'8'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'8'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="9" placeholder="MM" value="<?=$this->Mother->{'9'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'9'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="10" placeholder="YY" value="<?=$this->Mother->{'10'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'10'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <td>US නිවැරදි කළ බලාපොරොත්තු ප්‍රසව දිනය</td>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="11" placeholder="DD" value="<?=$this->Mother->{'11'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'11'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="12" placeholder="MM" value="<?=$this->Mother->{'12'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'12'}?></p></td>
                                                <?php  } ?>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="13" placeholder="YY" value="<?=$this->Mother->{'13'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'13'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <td>POA at dating scan</td>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="14" value="<?=$this->Mother->{'14'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'14'}?></p></td>
                                                <?php  } ?>
                                                <td>අත්සන</td>
                                                <?php if($this->editMode){?>
                                                  <td><input type="text" class="form-control" name="15" value="<?=$this->Mother->{'15'}?>"></td>
                                                <?php } else{ ?>
                                                  <td><p><?=$this->Mother->{'15'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <td colspan="2">භ්‍රෑණ් චලන පළමුවෙන් දැණුනු දිනය</td>
                                                <?php if($this->editMode){?>
                                                  <td colspan="2"><input type="text" class="form-control" name="16" value="<?=$this->Mother->{'16'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="2"><p><?=$this->Mother->{'16'}?></p></td>
                                                <?php  } ?>
                                            </tr>
                                            <tr>
                                                <td colspan="2">ලියාපදිංචි කරන විට ගර්භයට සති ගණන</td>
                                                <?php if($this->editMode){?>
                                                  <td colspan="2"><input type="text" class="form-control" name="17" value="<?=$this->Mother->{'17'}?>"></td>
                                                <?php } else{ ?>
                                                  <td colspan="2"><p><?=$this->Mother->{'17'}?></p></td>
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