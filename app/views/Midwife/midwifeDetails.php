<?php $this->setSiteTitle('MidwifeDashboard'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="container-fluid dashboard">
    <div class="row">
        <div class="col-md-3 sidebar" style="height: 700px; margin-top: -15px; padding: 0px;">
            <div class="name-tag">
                <div class="sidebar-header" style="padding-top: 50px; color: white; text-align: justify;">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="<?= PROOT ?>img/Midwife-icon4.png" alt="User picture">
                    </div>
                    <div class="user-info">
                        <?php if (User::currentUser()) : ?>
                            <span class="user-name" style="font-size: 20px;">
                                <strong>
                                    <?= User::currentUser()->name; ?>
                                </strong>
                            </span>
                        <?php endif; ?>
                        <span class="user-role text-muted" style="font-size: 15px;">(Midwife)</span>
                        <span class="user-status">
                            <i class="fa fa-circle fa-lg"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
            </div>
            <ul class="sidebar-btn" style="padding-top: 150px;">
                <li class="side-tab active">
                    <a href="<?= PROOT ?>midwife/midwifeDetails">තොරතුරු යාවත්කාලීන කිරීම</a>
                </li>
                <li class="side-tab">
                    <a href="<?= PROOT ?>midwife/midwifePassword">Password වෙනස් කිරීම</a>
                </li>
            </ul>
        </div>

        <!--Update Form -->
        <div class="col-md-9">
            <div class="update-midwife">
                <div class="update-midwife-form">
                    <div class='alert alert-success mx-auto' id='success' style="display: none;">
                        <p>Successfully updated the details</p>
                    </div>
                    <form class="needs-validation" novalidate action="<?= PROOT ?>midwife/updateMidwifeDetails" method="POST">
                        <div class='alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                            <?= $this->displayErrors; ?>
                        </div>
                        <div class="form-row">
                            <div class="col-md-9 mb-3">
                                <label for="name">සම්පූර්ණ නම</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full name with initials" value="<?= $this->name ?>" required>
                                <div class="invalid-feedback">
                                    කරුණාකර සම්පූර්ණ නම ඇතුලත් කරන්න.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="birthday">උපන් දිනය</label>
                                <input type="text" class="form-control" id="birthday" name="birthday" placeholder="yyyy/mm/dd" value="<?= $this->user->birthday ?>" required>
                                <div class="invalid-feedback">
                                    කරුණාකර උපන් දිනය ඇතුලත් කරන්න.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="email">විද්‍යුත් තැපැල් ලිපිනය</label>
                                <input type="text" class="form-control" placeholder="E-mail Address" id="email" name="email" value="<?= $this->user->email ?>" required>
                                <div class="invalid-feedback">
                                    කරුණාකර විද්‍යුත් තැපැල් ලිපිනය ඇතුලත් කරන්න.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="idcardnum">ජාතික හැදුනුම්පත් අංකය</label>
                                <input type="text" class="form-control" placeholder="ID Card Number" id="idcardnum" name="idcardnum" value="<?= $this->user->idcardnum ?>" required>
                                <div class="invalid-feedback">
                                    කරුණාකර ජාතික හැදුනුම්පත් අංකය ඇතුලත් කරන්න.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="phone">දුරකතන අංකය</label>
                                <input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone" value="<?= $this->user->phone ?>" required>
                                <div class="invalid-feedback">
                                    කරුණාකර දුරකතන අංකය ඇතුලත් කරන්න.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="address">ලිපිනය</label>
                                <input type="text" class="form-control" placeholder="E-mail Address" id="address" name="address" value="<?= $this->user->address ?>" required>
                                <div class="invalid-feedback">
                                    කරුණාකර ලිපිනය ඇතුලත් කරන්න.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="pwd">මුරපදය</label>
                                <input type="password" class="form-control" placeholder="Current Password" id="pwd" name="pwd" required>
                                <div class="invalid-feedback">
                                    කරුණාකර වර්තමානයේ පවතින මුරපදය ඇතුලත් කරන්න.
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-3 was-validated">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                            <label class="custom-control-label" for="customControlValidation1">
                                තහවුරු කරන්න
                            </label>
                            <div class="invalid-feedback">
                                Update කිරීමට පෙර තහවුරු කරන්න.
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
<?php $this->end(); ?>