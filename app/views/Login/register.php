<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="client-login" style="display:block;" id="registration-login">
  <h1>
    <center>Registration</center>
  </h1>
  <hr>
  <center style="font-size: small; margin-bottom: 20px;"><b>ඔබේ නිවැරදි තොරතුරු පමනක් ඇතුලත් කරන්න.</b></center>
  <div class='alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
    <?= $this->displayErrors; ?>
  </div>
  <form class="needs-validation foam" novalidate style="font-size: small;" action="<?=PROOT?>login/register" method="POST">
    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="name">සම්පූර්ණ නම</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= $this->post['name'] ?>" required>
        <div class="invalid-feedback">
          කරුනාකර සම්පූර්ණ නම ඇතුලත් කරන්න.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="idcardnum">හැදුනුම්පත් අංකය</label>
        <input type="text" class="form-control" id="idcardnum" name="idcardnum" placeholder="ID card number" value="<?= $this->post['idcardnum'] ?>" required>
        <div class="invalid-feedback">
          කරුනාකර හැදුනුම්පත් අංකය ඇතුලත් කරන්න.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="birthday">උපන්දිනය</label>
        <input type="text" class="form-control" id="birthday" name="birthday" placeholder="yyyy/mm/dd" value="<?= $this->post['birthday'] ?>" required>
        <div class="invalid-feedback">
          කරුනාකර උපන්දිනය ඇතුලත් කරන්න.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="address">ලිපිනය</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= $this->post['address'] ?>" required>
        <div class="invalid-feedback">
          කරුනාකර ලිපිනය ඇතුලත් කරන්න.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="birthday">දුරකතන අංකය</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" value="<?= $this->post['phone'] ?>" required>
        <div class="invalid-feedback">
          කරුනාකර දුරකතන අංකය ඇතුලත් කරන්න.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="birthday">විද්‍යුත් තැපැල් ලිපිනය</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail address" value="<?= $this->post['email'] ?>" required>
        <div class="invalid-feedback">
          කරුනාකර විද්‍යුත් තැපැල් ලිපිනය ඇතුලත් කරන්න.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="validationCustom02">මුරපදය</label>
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" value="<?= $this->post['pwd'] ?>" required>
        <div class="invalid-feedback">
          කරුනාකර මුරපදයක් ඇතුලත් කරන්න.
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="validationCustom02">මුරපදය නැවත ඇතුලත් කරන්න</label>
        <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Repeat-Password" value="<?= $this->post['confirm'] ?>" required>
        <div class="invalid-feedback">
          කරුනාකර මුරපදය නැවත ඇතුලත් කරන්න.
        </div>
      </div>
    </div>


    <button class="btn btn-primary btn-loginform" type="submit">Register</button>
  </form>
</div>

<?php $this->end(); ?>