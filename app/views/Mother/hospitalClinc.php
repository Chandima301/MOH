<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>


<main role="main">
    <div class="marketing mb-5" style="border: solid black; margin-top: 50px; padding:15px">
        <div class="head">
            <h1 style="text-align: center; padding: 20px;">ගර්භනී සටහන් පොත</h1>

            <ul class="list-group tb list-group-horizontal-lg">
                <li class="list-group-item">රුධිර ඝනය</li>
                <li class="list-group-item col-sm-2">
                    <p><?= $this->MotherTable->blood_group ?></p>
                </li>
                <li class="list-group-item">ශරීර ස්කන්ධ දර්ශකය</li>
                <li class="list-group-item col-sm-2">
                    <p><?= $this->MotherTable->mass_index ?></p>
                </li>
                <li class="list-group-item">උස (සෙ.මි)</li>
                <li class="list-group-item col-sm-2">
                    <p><?= $this->MotherTable->height ?></p>
                </li>
                <li class="list-group-item">අසාත්මිකතා</li>
                <li class="list-group-item col-sm-2">
                    <p><?= $this->MotherTable->allergies ?></p>
                </li>
            </ul>
        </div>
        <div class="reginfo" style="margin-top: 50px; border: solid black; padding: 40px; margin: 40px;">
            <div>
                <h3> 13. රෝහල් සායනික සං‍රක්ෂණය</h3>
            </div>

            <?php if (!$this->editMode) : ?>
                <form action="<?= PROOT ?><?= $this->controller; ?>/hospitalClinc" method="post" class="pb-5">
                    <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                </form>
            <?php endif; ?>



            <form action="<?= PROOT ?><?= $this->controller; ?>/hospitalClinc" style="margin: 30px;" method="post">
                <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                    <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
                </div>
                <div class='col-sm-6 alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                    <?= $this->displayErrors; ?>
                </div>

                <div class="form-group row" style="font-weight: bold;">
                    <div class="col-sm-8">
                        <table class="table tb table-bordered">
                            <tbody>
                                <tr>
                                    <th>Date</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`1`" value="<?= $this->columns[$i]->{1} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{1} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>POA</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`2`" value="<?= $this->columns[$i]->{2} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{2} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`3`" value="<?= $this->columns[$i]->{3} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{3} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Urine</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`4`" value="<?= $this->columns[$i]->{4} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{4} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Oedema</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`5`" value="<?= $this->columns[$i]->{5} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{5} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>

                                    <th rowspan="2">BP</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`6`" value="<?= $this->columns[$i]->{6} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{6} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`7`" value="<?= $this->columns[$i]->{7} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{7} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Fundal Height</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`8`" value="<?= $this->columns[$i]->{8} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{8} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Lie</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`9`" value="<?= $this->columns[$i]->{9} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{9} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Presentation</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`10`" value="<?= $this->columns[$i]->{10} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{10} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>

                                    <th rowspan="2">FM/FHS</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`11`" value="<?= $this->columns[$i]->{11} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{11} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`12`" value="<?= $this->columns[$i]->{12} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{12} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Signature</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`13`" value="<?= $this->columns[$i]->{13} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{13} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`14`" value="<?= $this->columns[$i]->{14} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{14} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Date of next visit</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`15`" value="<?= $this->columns[$i]->{15} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{15} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group row">
                            <label for="code">Clinic No/Bar Code :</label>
                            <div class="col-sm-6">
                                <?php if ($this->editMode) : ?>
                                    <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`1`" value="<?= $this->columns[7]->{1} ?>"></td>
                                <?php else : ?>
                                    <td colspan="1">
                                        <p><?= $this->columns[7]->{1} ?></p>
                                    </td>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <table class="table tb table-bordered">
                                <thead>
                                    <tr>
                                        <th>Heart</th>
                                        <th>Lungs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`2`" value="<?= $this->columns[7]->{2} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[7]->{2} ?></p>
                                            </td>
                                        <?php endif; ?>

                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`3`" value="<?= $this->columns[7]->{3} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[7]->{3} ?></p>
                                            </td>
                                        <?php endif; ?>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group row">
                            <h5>Risk Factors Identified</h5>
                        </div>
                        <div class="form-group row">
                            <?php if ($this->editMode) : ?>
                                <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`4`" value="<?= $this->columns[7]->{4} ?>"></td>
                            <?php else : ?>
                                <td colspan="1">
                                    <p><?= $this->columns[7]->{4} ?></p>
                                </td>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                    <h4>US scan</h4>
                </div>
                <div class="form-group row" style="font-weight: bold;">
                    <div class="col-sm-8">
                        <table class="table tb table-bordered">
                            <tbody>
                                <tr>
                                    <th>Date</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`16`" value="<?= $this->columns[$i]->{16} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{16} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>POA</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`17`" value="<?= $this->columns[$i]->{17} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{17} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>EBW</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`18`" value="<?= $this->columns[$i]->{18} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{18} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>CRL</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`19`" value="<?= $this->columns[$i]->{19} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{19} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Gest.Sac</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`20`" value="<?= $this->columns[$i]->{20} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{20} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>BPD</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`21`" value="<?= $this->columns[$i]->{21} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{21} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>HC</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`22`" value="<?= $this->columns[$i]->{22} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{22} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>AC</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`23`" value="<?= $this->columns[$i]->{23} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{23} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>FL</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`24`" value="<?= $this->columns[$i]->{24} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{24} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Liqour</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`25`" value="<?= $this->columns[$i]->{25} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{25} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Placenta</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`26`" value="<?= $this->columns[$i]->{26} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{26} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Average POA</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`27`" value="<?= $this->columns[$i]->{27} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{27} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Any other</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`28`" value="<?= $this->columns[$i]->{28} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{28} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Signature</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`29`" value="<?= $this->columns[$i]->{29} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{29} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <?php for ($i = 0; $i < 7; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`30`" value="<?= $this->columns[$i]->{30} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{30} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div></div>
                    <div class="col-sm-4">
                        <div class="form-group row">
                            <h5>Plan of Management</h5>
                        </div>
                        <div class="form-group row">
                            <?php if ($this->editMode) : ?>
                                <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`5`" value="<?= $this->columns[7]->{5} ?>"></td>
                            <?php else : ?>
                                <td colspan="1">
                                    <p><?= $this->columns[7]->{5} ?></p>
                                </td>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if ($this->editMode) : ?>
                    <button type="submit" name="saveButton" class="btn btn-primary save ">save</button>
                <?php endif; ?>
            </form>
        </div>
    </div>
</main>
<?php $this->end(); ?>