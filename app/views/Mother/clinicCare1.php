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
        <div class="presentinfo" style="margin-top: 50px; border: solid black; padding: 40px; margin: 40px;">
            <div>
                <h3> 7. සායනික සං‍රක්ෂණය 1</h3>
                <?php if (!$this->editMode) : ?>
                    <form action="<?= PROOT ?><?= $this->controller; ?>/clinicCare1" method="post">
                        <button type="submit" name="editButton" class="btn btn-primary edit">Edit</button>
                    </form>
                <?php endif; ?>
                <form action="<?= PROOT ?><?= $this->controller; ?>/clinicCare1" method="post" style="margin: 30px;">
                    <div class='col-sm-6 alert alert-success mx-auto' id='success' style="display: none;">
                        <p>තොරතුරු සටහන්කිරීම සාර්ථකයි.</p>
                    </div>
                    <div class="form-group row" style="font-weight: bold;">
                        <table class="table tb table-bordered">
                            <tbody>
                                <tr>
                                    <th colspan="2">සායනයට පැමිණී දිනය</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th colspan="2">ගර්භයට සති</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th rowspan="2">මුත්‍රා</th>
                                    <th rowspan="2">සීනී / ඇල්බියුමින්</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th colspan="2">සුදුමැලි බව</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th rowspan="2">ඉදිමුම</th>
                                    <th rowspan="2">වළලුකර / මුහුණ</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th rowspan="1" colspan="2">රුධිර පීඩනය</th>

                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th colspan="2">බුධිනයේ උස</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th colspan="2">භ්‍රෑණයේ ලීලාව</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th colspan="2">භ්‍රෑණයේ පිහිටීම</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th colspan="2">ප්‍රමුඛ කොටස ශ්‍රෝණි කුහරය තුළ පිහිටීම</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th rowspan="2" colspan="2">වළලුකර / මුහුණ </th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th rowspan="2" colspan="2">යකඩ / ෆෝලේට් </th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`15`" value="<?= $this->columns[$i]->{15} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{15} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                                <tr>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th rowspan="2" colspan="2">කැල්සියම් / විටමින් C </th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th colspan="2">පෝෂක අතිරේකය</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
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
                                    <th colspan="2">නිල නාමය</th>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <?php if ($this->editMode) : ?>
                                            <td colspan="1"><input type="text" class="form-control" name="<?= $i ?>_`20`" value="<?= $this->columns[$i]->{20} ?>"></td>
                                        <?php else : ?>
                                            <td colspan="1">
                                                <p><?= $this->columns[$i]->{20} ?></p>
                                            </td>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>




                            </tbody>
                        </table>
                    </div>
                    <?php if ($this->editMode) : ?>
                        <button type="submit" name="saveButton" class="btn btn-primary save ">save</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</main>

<?php $this->end(); ?>