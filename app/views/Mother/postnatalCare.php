<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<main role="main">
  <div class="marketing mb-5" style="border: solid black; margin-top: 50px; padding:15px">
          <?php if(!$this->editMode){ ?>
                    <form action="<?= PROOT ?><?= $this->controller; ?>/edit/postnatalCare" method="post">
                        <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                    </form>
          <?php }?>

            <form action="<?= PROOT ?><?= $this->controller; ?>/save/postnatalCare" method="post" style="margin: 30px;">
              <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                  <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
              </div>
              <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                  <?= $this->displayErrors; ?>
              </div>
                <div class="form-group row" style="font-weight: bold; ">
                  <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                    <div class="col-sm-8">
                        <h3> 14. ප්‍රසව සහ පසුප්‍රසව සං‍රක්ෂණය</h3>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group row">
                            <label for="">Hospital:</label>
                            <div class="col-sm-6">
                              <?php if($this->editMode){?>
                                <td><input type="text" class="form-control" name="1" value="<?=$this->Mother->{'1'}?>"></td>
                              <?php } else{ ?>
                                <td><p><?=$this->Mother->{'1'}?></p></td>
                              <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="font-weight: bold; ">
                    <h4>හෙද නිලදාරිනිය/ පවුල් සෞඛ්‍ය සේවා නිලදාරිනිය විසින් රෝහලින් මුදාහරින අවස්ථාවේදී සම්පූර්ණ කළ
                        යුතුය.</h4>
                </div>
                <div class="form-group row" style="font-weight: bold; ">
                    <table class="table tb table-bordered">
                        <tbody>
                            <tr>
                                <th>උපත් බර</th>
                                <?php if($this->editMode){?>
                                  <td><input type="text" class="form-control" name="2" value="<?=$this->Mother->{'2'}?>"></td>
                                <?php } else{ ?>
                                  <td><p><?=$this->Mother->{'2'}?></p></td>
                                <?php  } ?>
                                <th>ගර්භයට සති ගණන</th>
                                <?php if($this->editMode){?>
                                  <td><input type="text" class="form-control" name="3" value="<?=$this->Mother->{'3'}?>"></td>
                                <?php } else{ ?>
                                  <td><p><?=$this->Mother->{'3'}?></p></td>
                                <?php  } ?>
                                <th>සජීවී උපත්</th>
                                <?php if($this->editMode){?>
                                  <td><input type="text" class="form-control" name="4" value="<?=$this->Mother->{'4'}?>"></td>
                                <?php } else{ ?>
                                  <td><p><?=$this->Mother->{'4'}?></p></td>
                                <?php  } ?>
                                <th>මළ දරු උපත්</th>
                                <?php if($this->editMode){?>
                                  <td><input type="text" class="form-control" name="5" value="<?=$this->Mother->{'5'}?>"></td>
                                <?php } else{ ?>
                                  <td><p><?=$this->Mother->{'5'}?></p></td>
                                <?php  } ?>
                            </tr>
                            <tr>
                                <th colspan="2">දරුවාගේ හදුනාගත් අසාමාන්‍යතා</th>
                                <?php if($this->editMode){?>
                                  <td colspan="6"><input type="text" class="form-control" name="6" value="<?=$this->Mother->{'6'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="6"><p><?=$this->Mother->{'6'}?></p></td>
                                <?php  } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group row" style="font-weight: bold; ">
                    <table class="table tb table-bordered">
                        <tbody>
                            <tr>
                                <th colspan="2">ප්‍රසූතිය සිදුකළ දිනය</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="7" value="<?=$this->Mother->{'7'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'7'}?></p></td>
                                <?php  } ?>
                                <th colspan="1">ස්ත්‍රි/පුරුෂ</th>
                                <?php if($this->editMode){?>
                                  <td colspan="1"><input type="text" class="form-control" name="8" value="<?=$this->Mother->{'8'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="1"><p><?=$this->Mother->{'8'}?></p></td>
                                <?php  } ?>
                                <th colspan="4">රෝහලින් මුදාහරින විට රුධිර පීඩනය</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="9" value="<?=$this->Mother->{'9'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'9'}?></p></td>
                                <?php  } ?>
                            </tr>
                            <tr>
                                <th colspan="2">ප්‍රසූතිය සිදු කළ ආකරය</th>
                                <?php if($this->editMode){?>
                                  <td colspan="4"><input type="text" class="form-control" name="10" value="<?=$this->Mother->{'10'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="4"><p><?=$this->Mother->{'10'}?></p></td>
                                <?php  } ?>
                                <th colspan="4">විටමින් ඒ අධිමාත්‍රාව දුන්නේද</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="11" value="<?=$this->Mother->{'11'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'11'}?></p></td>
                                <?php  } ?>
                            </tr>
                            <tr>
                                <th colspan="4">චිටපිය කැපුම</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="12" value="<?=$this->Mother->{'12'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'12'}?></p></td>
                                <?php  } ?>
                                <th colspan="4">රුබෙල්ලා ප්‍රතිශක්තිකරණය ලබා දුන්නේද</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="13" value="<?=$this->Mother->{'13'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'13'}?></p></td>
                                <?php  } ?>
                            </tr>
                            <tr>
                                <th colspan="4">පසුගිය දින දෙක ඇතුලත ශරීර උෂ්ණත්වය සාමාන්‍යව පැවතියේද</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="14" value="<?=$this->Mother->{'14'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'14'}?></p></td>
                                <?php  } ?>
                                <th colspan="4">එන්නත් දුන්නේද</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="15" value="<?=$this->Mother->{'15'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'15'}?></p></td>
                                <?php  } ?>
                            </tr>
                            <tr>
                                <th colspan="4">සැරහුම් ද්‍රව්‍ය සදහා යෝනි පරීක්ෂාව සිදුකළේද යන්න </th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="16" value="<?=$this->Mother->{'16'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'16'}?></p></td>
                                <?php  } ?>
                                <th colspan="4">රෝග විනිශ්චය කාඩ්පතක් දුන්නේද</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="17" value="<?=$this->Mother->{'17'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'17'}?></p></td>
                                <?php  } ?>
                            </tr>
                            <tr>
                                <th colspan="4">ඕනෑම මාතෘ සංකුලතාවයක් තිබුණේ නම් සදහන් කරන්න</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="18" value="<?=$this->Mother->{'18'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'18'}?></p></td>
                                <?php  } ?>
                                <th colspan="4">ළමා සෞඛ්‍ය වර්ධන සටහන් පත සම්පූර්ණ කර මවට ලබා දුන්නේද යන්න</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="19" value="<?=$this->Mother->{'19'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'19'}?></p></td>
                                <?php  } ?>
                            </tr>
                            <tr>
                                <th colspan="4">විටපිය කැපුම/ඉරීම්/සිසේරියන් තුවාලයේ ආසාදන</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="20" value="<?=$this->Mother->{'20'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'20'}?></p></td>
                                <?php  } ?>
                                <th colspan="4">අවශ්‍ය නම් ප්‍රතිකාර දුන්නේද යන්න</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="21" value="<?=$this->Mother->{'21'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'21'}?></p></td>
                                <?php  } ?>
                            </tr>
                            <tr>
                                <th colspan="4">පසු ප්‍රසූව අනතුරු සං පහදා දුන්නේද යන්න</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="22" value="<?=$this->Mother->{'22'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'22'}?></p></td>
                                <?php  } ?>
                                <th colspan="4">ක්ෂේත්‍ර පවුල් සෞඛ්‍ය සේවා නිලදාරිනියට යොමු කළේද යන්න</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="23" value="<?=$this->Mother->{'23'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'23'}?></p></td>
                                <?php  } ?>
                            </tr>
                            <tr>
                                <th colspan="4">මව්කිරි දීම ස්ථාපිත කලේද යන්න</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="24" value="<?=$this->Mother->{'24'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'24'}?></p></td>
                                <?php  } ?>
                                <th colspan="1">මුදාහල දිනය</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="25" value="<?=$this->Mother->{'25'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'25'}?></p></td>
                                <?php  } ?>
                                <th colspan="1">අත්සන</th>
                                <?php if($this->editMode){?>
                                  <td colspan="2"><input type="text" class="form-control" name="26" value="<?=$this->Mother->{'26'}?>"></td>
                                <?php } else{ ?>
                                  <td colspan="2"><p><?=$this->Mother->{'26'}?></p></td>
                                <?php  } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php if($this->editMode) {?>
                  <button type="submit" name="saveButton" class="btn btn-primary">save</button>
                <?php } ?>
            </form>
          </div>
        </div>
    </main>
    <?php $this->end(); ?>
