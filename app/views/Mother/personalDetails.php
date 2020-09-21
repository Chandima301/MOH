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
                    <h3> 2. පෞද්ගලික / පවුල් තොරතුරු</h3>
                </div>
                  <?php if(!$this->editMode){ ?>
                            <form action="<?=PROOT?><?=$this->controller;?>/edit/personalDetails" method="post">
                                <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                            </form>
                  <?php }?>

                <form action="<?=PROOT?><?=$this->controller;?>/save/personalDetails" method="post" style="margin: 30px;">
                  <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                      <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
                  </div>
                  <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                      <?= $this->displayErrors; ?>
                  </div>
                    <div class="form-group row" style="font-weight: bold;">
                        <div class="col-sm-5">
                            <div class="form-group row">
                                <table class="table tb table-bordered">
                                  <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                                    <tbody>
                                        <tr>
                                            <td>ලේ ඥාතින් අතර විවාහය</td>
                                            <?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="1" required value="<?=$this->Mother->{'1'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'1'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                        <tr>
                                            <td>රුබෙල්ලා ප්‍රතිශක්තිකරණය</td>
                                            <?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="2" required value="<?=$this->Mother->{'2'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'2'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                        <tr>
                                            <td> පෙර ගර්භ සුව පිරික්සුම කළේද යනවග</td><?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="3" required value="<?=$this->Mother->{'3'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'3'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                        <tr>
                                            <td>ගර්භනී බව දැනගැනීමට පෙර ෆෝමික් අම්ල ප්‍රමණය</td><?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="4" required value="<?=$this->Mother->{'4'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'4'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                        <tr>
                                            <td>මදසරුභාවය පිළිබද ඉතිහාසය</td><?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="5" required value="<?=$this->Mother->{'5'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'5'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                        <tr>
                                            <td>සැලසුම් කල ගර්භනීභාවයක්ද යනවග</td><?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="6" required value="<?=$this->Mother->{'6'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'6'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                        <tr>
                                            <td> අවසාන වරට භාවිතා කළ පවුල් සැලසුම් ක්‍රමය</td><?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="7" required value="<?=$this->Mother->{'7'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'7'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <br>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group row">
                                <table class="table tb table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">භාර්යාව</th>
                                            <th scope="col">ස්වාමිපුරුෂයා</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>වයස</td>
                                            <?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="8" required value="<?=$this->Mother->{'8'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'8'}?></p></td>
                                            <?php  } ?>
                                            <?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="9" required value="<?=$this->Mother->{'9'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'9'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                        <tr>
                                            <td>අධ්‍යාපනය මට්ටම</td>
                                            <?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="10" required value="<?=$this->Mother->{'10'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'10'}?></p></td>
                                            <?php  } ?>
                                            <?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="11" required value="<?=$this->Mother->{'11'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'11'}?></p></td>
                                            <?php  } ?>
                                        </tr>
                                        <tr>
                                            <td>රැකියාව</td>
                                            <?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="12" required value="<?=$this->Mother->{'12'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'12'}?></p></td>
                                            <?php  } ?>
                                            <?php if($this->editMode){?>
                                              <td><input type="text" class="form-control" name="13" required value="<?=$this->Mother->{'13'}?>"></td>
                                            <?php } else{ ?>
                                              <td><p><?=$this->Mother->{'13'}?></p></td>
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
    </main>
    <?php $this->end(); ?>