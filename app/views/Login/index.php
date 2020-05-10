<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="background-login">
        <div class="header-login">
            <img class="national-bgd-login" src="<?=PROOT?>img/National.png" alt="National">
            <div>
                <h2><center>සෞඛ්‍ය වෛද්‍ය නිලධාරී කාර්යාලය-කැලණිය</center></h2>
                <h2><center>Office of the Medical Officer of Health-Kelaniya</center></h2>
            </div>
        </div>

        <div class="btn-base-login">
            <div class="btn-login" id="client" onclick="view('client-tab', 'btn-base-login')"><a href="#">Client</a></div>
            <div class="btn-login" id="staff" onclick="view('staff-tab', 'btn-base-login')"><a href="#">Staff</a></div>
        </div>

        <div class="client-login" id="client-tab">
            <h1><center>Welcome</center></h1>
            <hr>
            <form class="needs-validation foam" novalidate style="font-size: small;">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom01">හැදුනුම්පත් අංකය</label>
                    <input type="text" class="form-control" id="validationCustom01"  placeholder="ID card number"  required>
                    <div class="invalid-feedback">
                        කරුනාකර හැදුනුම්පත් අංකය ඇතුලත් කරන්න.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom02">මුරපදය</label>
                      <input type="text" class="form-control" id="validationCustom02"  placeholder="Password"  required>
                      <div class="invalid-feedback">
                          කරුනාකර මුරපදය ඇතුලත් කරන්න.
                      </div>
                    </div>
                </div>
                
                
                <button  class="btn btn-primary btn-loginform" type="submit" >Login</button>
            </form>

            <center><a class="foam" href="#" onclick="view('registration-login', 'client-login')">තවමත් ලියාපදිංචි වී නොමැතිද?</a></center>
            
        </div>

        <div class="client-login" id="staff-tab">
            <h1><center>Welcome back!</center></h1>
            <hr>
            <form class="needs-validation foam" novalidate style="font-size: small;">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom01">හැදුනුම්පත් අංකය</label>
                    <input type="text" class="form-control" id="validationCustom01"  placeholder="ID card number"  required>
                    <div class="invalid-feedback">
                        කරුනාකර හැදුනුම්පත් අංකය ඇතුලත් කරන්න.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom02">මුරපදය</label>
                      <input type="text" class="form-control" id="validationCustom02"  placeholder="Password"  required>
                      <div class="invalid-feedback">
                          කරුනාකර මුරපදය ඇතුලත් කරන්න.
                      </div>
                    </div>
                </div>
                
                
                <button  class="btn btn-primary btn-loginform" type="submit" >Login</button>
            </form>


        </div>

        <div class="client-login" id="registration-login">
            <h1><center>Registration</center></h1>
            <hr>
            <center style="font-size: small; margin-bottom: 20px;"><b>ඔබේ නිවැරදි තොරතුරු පමනක් ඇතුලත් කරන්න.</b></center>
            <form class="needs-validation foam" novalidate style="font-size: small;">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom01">සම්පූර්ණ නම</label>
                      <input type="text" class="form-control" id="validationCustom01"  placeholder="Full name"  required>
                      <div class="invalid-feedback">
                          කරුනාකර සම්පූර්ණ නම ඇතුලත් කරන්න.
                      </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom01">හැදුනුම්පත් අංකය</label>
                    <input type="text" class="form-control" id="validationCustom01"  placeholder="ID card number"  required>
                    <div class="invalid-feedback">
                        කරුනාකර හැදුනුම්පත් අංකය ඇතුලත් කරන්න.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom01">උපන්දිනය</label>
                      <input type="text" class="form-control" id="validationCustom01"  placeholder="yyyy/mm/dd"  required>
                      <div class="invalid-feedback">
                          කරුනාකර උපන්දිනය ඇතුලත් කරන්න.
                      </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom02">මුරපදය</label>
                      <input type="text" class="form-control" id="validationCustom02"  placeholder="Password"  required>
                      <div class="invalid-feedback">
                          කරුනාකර මුරපදයක් ඇතුලත් කරන්න.
                      </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom02">මුරපදය නැවත ඇතුලත් කරන්න</label>
                      <input type="text" class="form-control" id="validationCustom02"  placeholder="Repeat-Password"  required>
                      <div class="invalid-feedback">
                          කරුනාකර මුරපදය නැවත ඇතුලත් කරන්න.
                      </div>
                    </div>
                </div>
                
                
                <button  class="btn btn-primary btn-loginform" type="submit" >Register</button>
            </form>

            
        </div>

        <div class="footer-login">
            <center>Designed by <span style="color: aliceblue;">University of Moratuwa</span> | 2020 All Rights Reserved</center> 
        </div>

    </div>


<?php $this->end(); ?>