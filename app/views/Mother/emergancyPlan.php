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
                    <h3> 10. හදිසි අවස්ථාවන් සදහා සැලසුම්</h3>
                </div>
                <?php if(!$this->editMode){ ?>
                          <form action="<?=PROOT?>mother/edit/emergancyPlan" method="post">
                              <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                          </form>
                <?php }?>
                <form action="<?=PROOT?>mother/save/emergancyPlan" method="post" style="margin: 30px;">
                  <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                      <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
                  </div>
                  <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                      <?= $this->displayErrors; ?>
                  </div>
                    <div class="form-group row" style="font-weight: bold;">
                      <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                        <div class="form-group row">
                            <table class="table tb table-bordered">
                                <thead>
                                    <tr>
                                        <th>උපත සහ හදිසි අවස්ථාවන් සදහා සූදානම්වීමේ සැලැස්ම</th>
                                        <th colspan="3">ප්‍රසූතියෙදී</th>
                                        <th colspan="3">හදිසි අවස්ථාවකදී</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>යෑමට බලපොරොත්තු වන රෝහල</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="1" value="<?=$this->Mother->{'1'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'1'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="2" value="<?=$this->Mother->{'2'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'2'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th>ප්‍රවහන ආකාරය</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="3" value="<?=$this->Mother->{'3'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'3'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="4" value="<?=$this->Mother->{'4'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'4'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th>ඒ සදහා දළ වියදම</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="5" value="<?=$this->Mother->{'5'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'5'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="6" value="<?=$this->Mother->{'6'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'6'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th>නිවසේ සිට ඇති දුර</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="7" value="<?=$this->Mother->{'7'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'7'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="8" value="<?=$this->Mother->{'8'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'8'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                    <tr>
                                        <th>ළගා වීමට ගතවන කාලය</th>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="9" value="<?=$this->Mother->{'9'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'9'}?></p></td>
                                        <?php  } ?>
                                        <?php if($this->editMode){?>
                                          <td colspan="3"><input type="text" class="form-control" name="10" value="<?=$this->Mother->{'10'}?>"></td>
                                        <?php } else{ ?>
                                          <td colspan="3"><p><?=$this->Mother->{'10'}?></p></td>
                                        <?php  } ?>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <?php if($this->editMode) {?>
                      <button type="submit" name="saveButton" class="btn btn-primary save ">save</button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </main>
    <?php $this->end(); ?>