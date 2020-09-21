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
                    <h3> 3. පවුලේ රෝග ඉතිහාසය</h3>
                </div>
                <?php if(!$this->editMode){ ?>
                          <form action="<?=PROOT?><?=$this->controller;?>/edit/familyHistory" method="post">
                              <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                          </form>
                <?php }?>
                    <form action="<?=PROOT?><?=$this->controller;?>/save/familyHistory" method="post" style="margin: 30px;">
                      <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                          <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
                      </div>
                      <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                          <?= $this->displayErrors; ?>
                      </div>
                        <div class="form-group row" style="font-weight: bold;">
                          <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                            <table class="table tb table-bordered">
                                <tbody>
                                    <tr>
                                        <th colspan="6">රෝග තත්වය</th>
                                        <?php if($this->editMode){?>
                                          <td><input type="text" class="form-control" name="1" value="<?=$this->Mother->{'1'}?>"></td>
                                        <?php } else{ ?>
                                          <td><p><?=$this->Mother->{'1'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="6">දියවැඩියාව</th>
                                        <?php if($this->editMode){?>
                                          <td><input type="text" class="form-control" name="2" value="<?=$this->Mother->{'2'}?>"></td>
                                        <?php } else{ ?>
                                          <td><p><?=$this->Mother->{'2'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="6">අධික රුධිර පීඩනය</th>
                                        <?php if($this->editMode){?>
                                          <td><input type="text" class="form-control" name="3" value="<?=$this->Mother->{'3'}?>"></td>
                                        <?php } else{ ?>
                                          <td><p><?=$this->Mother->{'3'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="6">රුධිරය ආශ්‍රිත රෝග තත්ව</th>
                                        <?php if($this->editMode){?>
                                          <td><input type="text" class="form-control" name="4" value="<?=$this->Mother->{'4'}?>"></td>
                                        <?php } else{ ?>
                                          <td><p><?=$this->Mother->{'4'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="6">බහු දරු උපත්</th>
                                        <?php if($this->editMode){?>
                                          <td><input type="text" class="form-control" name="5" value="<?=$this->Mother->{'5'}?>"></td>
                                        <?php } else{ ?>
                                          <td><p><?=$this->Mother->{'5'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th colspan="6">වෙනත්(සදහන් කරන්න)</th>
                                        <?php if($this->editMode){?>
                                          <td><input type="text" class="form-control" name="6" value="<?=$this->Mother->{'6'}?>"></td>
                                        <?php } else{ ?>
                                          <td><p><?=$this->Mother->{'6'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                </tbody>
                            </table>
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