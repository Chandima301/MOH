<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>


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


            <div class="reginfo" style="margin-top: 50px; border: solid black; padding: 40px; margin: 40px;">
                <div>
                    <h3> 1. ලියාපදිංචි තොරතුරු</h3>
                </div>
                <?php if(!$this->editMode){ ?>
                          <form action="<?=PROOT?><?=$this->controller;?>/edit/registerDetails" method="post">
                              <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                          </form>
                <?php }?>
                <form action="<?=PROOT?><?=$this->controller;?>/save/registerDetails" method="post" style="margin: 30px;">
                  <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                      <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
                  </div>
                  <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                      <?= $this->displayErrors; ?>
                  </div>
                    <div class="form-group row" style="font-weight: bold;">
                      <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="motherName" class="col-sm-4 col-form-label">මවගේ නම :</label>
                                <div class="col-sm-8">
                                  <?php if($this->editMode){?>
                                    <td><input type="text" class="form-control" name="1" value="<?=$this->Mother->{'1'}?>"></td>
                                  <?php } else{ ?>
                                    <td><p><?=$this->Mother->{'1'}?></p></td>
                                  <?php  } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="age" class="col-sm-4 col-form-label">වයස :</label>
                                <div class="col-sm-8">
                                  <?php if($this->editMode){?>
                                    <td><input type="text" class="form-control" name="2" value="<?=$this->Mother->{'2'}?>"></td>
                                  <?php } else{ ?>
                                    <td><p><?=$this->Mother->{'2'}?></p></td>
                                  <?php  } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="MOHarea" class="col-sm-4 col-form-label">සෞ. වෛ. නි. කොට්ඨාශය : </label>
                                <div class="col-sm-8">
                                  <?php if($this->editMode){?>
                                    <td><input type="text" class="form-control" required name="3" value="<?=$this->Mother->{'3'}?>"></td>
                                  <?php } else{ ?>
                                    <td><p><?=$this->Mother->{'3'}?></p></td>
                                  <?php  } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="PHMarea" class="col-sm-4 col-form-label">පවුල් සෞඛ්‍ය සේවා නිලධාරි කොට්ඨාශය:</label>
                                <div class="col-sm-8">
                                  <?php if($this->editMode){?>
                                    <td><input type="text" class="form-control" required name="4" value="<?=$this->Mother->{'4'}?>"></td>
                                  <?php } else{ ?>
                                    <td><p><?=$this->Mother->{'4'}?></p></td>
                                  <?php  } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="FieldCline" class="col-sm-4 col-form-label">ක්ෂේත්‍ර සායනයේ නම :</label>
                                <div class="col-sm-8">
                                  <?php if($this->editMode){?>
                                    <td><input type="text" class="form-control" name="5" required value="<?=$this->Mother->{'5'}?>"></td>
                                  <?php } else{ ?>
                                    <td><p><?=$this->Mother->{'5'}?></p></td>
                                  <?php  } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="GramaNiladari" class="col-sm-4 col-form-label">ග්‍රාම නිලධාරිකොට්ඨාශය:</label>
                                <div class="col-sm-8">
                                  <?php if($this->editMode){?>
                                    <td><input type="text" class="form-control" name="6" required value="<?=$this->Mother->{'6'}?>"></td>
                                  <?php } else{ ?>
                                    <td><p><?=$this->Mother->{'6'}?></p></td>
                                  <?php  } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="regNo_Date" class="col-sm-4 col-form-label">ලියාපදිංචි අංකය හා දිනය:</label>
                                <div class="col-sm-8">
                                    <table class="table tb table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">යෝග්‍යතා පවුල් ලේඛනය</th>
                                                <th scope="col">ගර්භනී මව්වරුන්ගේ ලේඛනය</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <?php if($this->editMode){?>
                                                <td><input type="text" class="form-control" name="7" required value="<?=$this->Mother->{'7'}?>"></td>
                                              <?php } else{ ?>
                                                <td><p><?=$this->Mother->{'7'}?></p></td>
                                              <?php  } ?>
                                              <?php if($this->editMode){?>
                                                <td><input type="text" class="form-control" name="8" required value="<?=$this->Mother->{'8'}?>"></td>
                                              <?php } else{ ?>
                                                <td><p><?=$this->Mother->{'8'}?></p></td>
                                              <?php  } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="hospital" class="col-sm-4 col-form-label">රෝහල් සායනයේ නම :</label>
                                <div class="form-group col-md-8">
                                  <?php if($this->editMode){?>
                                    <td><input type="text" class="form-control" name="9" required value="<?=$this->Mother->{'9'}?>"></td>
                                  <?php } else{ ?>
                                    <td><p><?=$this->Mother->{'9'}?></p></td>
                                  <?php  } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="doctor" class="col-sm-4 col-form-label">ප්‍රසව හා නාරිවේද වෛද්‍යවරයාගේ නම :</label>
                                <div class="form-group col-md-8">
                                  <?php if($this->editMode){?>
                                    <td><input type="text" class="form-control" name="10" required value="<?=$this->Mother->{'10'}?>"></td>
                                  <?php } else{ ?>
                                    <td><p><?=$this->Mother->{'10'}?></p></td>
                                  <?php  } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-md-12">
                                    <label for="risk">හදුනාගත් පූර්ව ප්‍රසව අවදානම් තත්ව / රෝගී තත්ව</label>
                                    <?php if($this->editMode){?>
                                      <textarea class="form-control" id="risk" rows="10"  name="11"><?=$this->Mother->{'11'}?></textarea>
                                    <?php } else{ ?>
                                      <p><?=$this->Mother->{'11'}?></p>
                                    <?php  } ?>

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

        <?php $this->end(); ?>
