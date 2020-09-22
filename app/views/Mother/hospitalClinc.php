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
            <div class="reginfo" style="margin-top: 50px; border: solid black; padding: 40px; margin: 40px;">
                <div>
                    <h3> 13. රෝහල් සායනික සං‍රක්ෂණය</h3>
                </div>
                <form action="#" style="margin: 30px;">
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
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>POA</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Urine</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Oedema</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>

                                        <th rowspan="2">BP</th>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>

                                    </tr>
                                    <tr>
                                        <th><input type="text" class="form-control" id="presentData5" value=""></th>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>

                                    </tr>
                                    <tr>
                                        <th>Fundal Height</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Lie</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Presentation</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>

                                        <th rowspan="2">FM/FHS</th>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>

                                    </tr>
                                    <tr>
                                        <th><input type="text" class="form-control" id="presentData5" value=""></th>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>
                                        <td><input type="text" class="form-control" id="presentData5" value=""></td>

                                    </tr>
                                    <tr>
                                        <th>Signature</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Date of next visit</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div></div>
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="code">Clinic No/Bar Code :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputAge" value="">
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
                                            <td><textarea name="" id="" cols="15" rows="3"></textarea></td>
                                            <td><textarea name="" id="" cols="15" rows="3"></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group row">
                                <h5>Risk Factors Identified</h5>
                            </div>
                            <div class="form-group row">
                                <textarea name="" id="" cols="50" rows="25"></textarea>
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
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>POA</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>EBW</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>CRL</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Gest.Sac</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>BPD</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>HC</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>AC</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>FL</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Liqour</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Placenta</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Average POA</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Any other</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Signature</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
                                        <td><input type="text" class="form-control" id="inputname" value=""></td>
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
                                <textarea name="" id="" cols="50" rows="25"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary save ">save</button>
                </form>
            </div>
        </div>
    </main>
    <?php $this->end(); ?>
