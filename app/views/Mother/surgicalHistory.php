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
            <div class="reginfo" style="margin-top: 50px; border: solid black; padding: 40px; margin: 40px;">
                <div>
                    <h3> 4. කායික / ශල්‍ය ඉතිහාසය</h3>
                    <?php if(!$this->editMode){ ?>
                              <form action="<?=PROOT?><?=$this->controller;?>/edit/surgicalHistory" method="post">
                                  <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                              </form>
                    <?php }?>
                    <form action="<?=PROOT?><?=$this->controller;?>/save/surgicalHistory" method="post" style="margin: 30px;">
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
                                    <div class="col-sm-12">
                                        <table class="table tb table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="2">රෝගී තත්වය</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> දියවැඩියාව</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="1" value="<?=$this->Mother->{'1'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'1'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> අධි රුධිර පීඩනය</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="2" value="<?=$this->Mother->{'2'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'2'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> හදවත් රෝගී තත්ව</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="3" value="<?=$this->Mother->{'3'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'3'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> වකුගඩු රෝගී තත්ව</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="4" value="<?=$this->Mother->{'4'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'4'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> අක්මා රෝගී තත්ව</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="5" value="<?=$this->Mother->{'5'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'5'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> මානසික රෝගී තත්ව</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="6" value="<?=$this->Mother->{'6'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'6'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <table class="table tb table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="2">රෝගී තත්වය</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> අපස්මාරය</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="7" value="<?=$this->Mother->{'7'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'7'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> පිළිකා රෝගී තත්ව</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="8" value="<?=$this->Mother->{'8'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'8'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> රුධිරය අශ්‍රිත රෝගී තත්ව</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="9" value="<?=$this->Mother->{'9'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'9'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> ක්ෂය රෝගය</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="10" value="<?=$this->Mother->{'10'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'10'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> තයිරොයිඩ් ග්‍රන්ථිය අශ්‍රිත රෝගී තත්ව</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="11" value="<?=$this->Mother->{'11'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'11'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> ඇදුම</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="12" value="<?=$this->Mother->{'12'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'12'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <table class="table tb table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="2">රෝගී තත්වය</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> පෙර ගැඹුරු ශිරා ශ්‍යනි තත්ව</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="13" value="<?=$this->Mother->{'13'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'13'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> සිසේරියන් සැත්කම හැරුණු විට කර ඇති අනෙක් සැත්කම්</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="14" value="<?=$this->Mother->{'14'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'14'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> වෙනත් (සදහන් කරන්න)</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="15" value="<?=$this->Mother->{'15'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'15'}?></p></td>
                                                    <?php  } ?>
                                                </tr>
                                                <tr>
                                                    <td> සමාජීය කේත අංකය</td>
                                                    <?php if($this->editMode){?>
                                                      <td><input type="text" class="form-control" name="16" value="<?=$this->Mother->{'16'}?>"></td>
                                                    <?php } else{ ?>
                                                      <td><p><?=$this->Mother->{'16'}?></p></td>
                                                    <?php  } ?>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
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