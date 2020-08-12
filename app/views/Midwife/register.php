<?php $this->setSiteTitle('Registration'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="registration">
    <div class="registration-heading">
        ලියාපදිංචි කිරීම
    </div>
    <div class="registration-form">
    <div class='alert alert-success mx-auto' id='success' style="display: none;">
            <p>Registration was Successfully done</p>
        </div>
        <form class="needs-validation" novalidate action="<?= PROOT ?>midwife/registerMother" method="POST" >
            <div class='alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                <?= $this->displayErrors; ?>
            </div>
            <div class="form-row">
                <div class="col-md-8 mb-3">
                    <label for="name">සම්පූර්ණ නම</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full name with initials" value="<?= $this->post['name'] ?>" required>
                    <div class="invalid-feedback">
                        කරුණාකර සම්පූර්ණ නම ඇතුලත් කරන්න.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="birthday">උපන් දිනය</label>
                    <input type="text" class="form-control" id="birthday" name="birthday" placeholder="yyyy/mm/dd" value="<?= $this->post['birthday'] ?>" required>
                    <div class="invalid-feedback">
                        කරුණාකර උපන් දිනය ඇතුලත් කරන්න.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="email">විද්‍යුත් තැපැල් ලිපිනය</label>
                    <input type="text" class="form-control" placeholder="E-mail Address" id="email" name="email" value="<?= $this->post['email'] ?>" required>
                    <div class="invalid-feedback">
                        කරුණාකර විද්‍යුත් තැපැල් ලිපිනය ඇතුලත් කරන්න.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="idcardnum">ජාතික හැදුනුම්පත් අංකය</label>
                    <input type="text" class="form-control" placeholder="ID Card Number" id="idcardnum" name="idcardnum" value="<?= $this->post['idcardnum'] ?>" required>
                    <div class="invalid-feedback">
                        කරුණාකර ජාතික හැදුනුම්පත් අංකය ඇතුලත් කරන්න.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="phone">දුරකතන අංකය</label>
                    <input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone" value="<?= $this->post['phone'] ?>" required>
                    <div class="invalid-feedback">
                        කරුණාකර දුරකතන අංකය ඇතුලත් කරන්න.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="address">ලිපිනය</label>
                    <input type="text" class="form-control" placeholder="E-mail Address" id="address" name="address" value="<?= $this->post['address'] ?>" required>
                    <div class="invalid-feedback">
                        කරුණාකර ලිපිනය ඇතුලත් කරන්න.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="blood_group">රුධිර ඝනය</label>
                    <input type="text" class="form-control" placeholder="Blood Group" id="blood_group" name="blood_group" value="<?= $this->post['blood_group'] ?>" required>
                    <div class="invalid-feedback">
                        කරුණාකර රුධිර ඝනය ඇතුලත් කරන්න.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="height">උස (සෙ.මී)</label>
                    <input type="text" class="form-control" placeholder="Height in Centimetres" id="height" name="height" value="<?= $this->post['height'] ?>" required>
                    <div class="invalid-feedback">
                        කරුණාකර උස සෙන්ටිමීටර්වලින් ඇතුලත් කරන්න.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="mass_index">ශරීර ස්කන්ධ දර්ශකය (kg/m<sup>2</sup>)</label>
                    <input type="text" class="form-control" placeholder="Body Mass Index" id="mass_index" name="mass_index" value="<?= $this->post['mass_index'] ?>" required>
                    <div class="invalid-feedback">
                        කරුණාකර ශරීර ස්කන්ධ දර්ශකය ඇතුලත් කරන්න.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="allergies">ආසාත්මිකතා</label>
                    <input type="text" class="form-control" placeholder="Allergies" id="allergies" name="allergies" value="<?= $this->post['allergies'] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="pwd">මුරපදය</label>
                    <input type="password" class="form-control" placeholder="Password" id="pwd" name="pwd" required>
                    <small id="passwordHelpInline" class="text-muted">
                        Must be 8-15 characters long.
                    </small>
                    <div class="invalid-feedback">
                        කරුණාකර මුරපදය ඇතුලත් කරන්න.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="confirm">මුරපදය නැවත ඇතුලත් කරන්න</label>
                    <input type="password" class="form-control" placeholder="Re-enter Password" name="confirm" id="confirm" required>
                    <div class="invalid-feedback">
                        කරුණාකර මුරපදය නැවත ඇතුලත් කරන්න.
                    </div>
                </div>
            </div>
            <div class="custom-control custom-checkbox mb-3 was-validated">
                 <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                <label class="custom-control-label" for="customControlValidation1">
                    තහවුරු කරන්න
                </label>
                <div class="invalid-feedback">
                    Register කිරීමට පෙර තහවුරු කරන්න.
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Register</button>

        </form>
    </div>
</div>



<?php $this->end(); ?>