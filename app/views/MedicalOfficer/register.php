<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-10 tab" id="detail">
    <div class="tab-heading">
        <?php if ($this->page_state == "register") : ?>
            පවුල් සෞඛ්‍ය සේවා නිලධාරිනියන් ලියාපදිංචි කිරීම් හා තොරතුරු
        <?php else : ?>
            තොරතුරු යාවත්කාලීන කිරීම
        <?php endif; ?>
    </div>
    <hr>

    <?php if ($this->page_state == "register") : ?>
        <div class="btn-group" id="tab-btn" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary <?= $this->btn_state['details-tab'] ?>" onclick="document.location = '<?= PROOT ?>medicalofficer/details'">තොරතුරු</button>
            <button type="button" class="btn btn-secondary <?= $this->btn_state['register-tab'] ?>" onclick="document.location = '<?= PROOT ?>medicalofficer/register'">ලියාපදිංචි කිරිම්</button>
        </div>

    <?php endif; ?>



    <div class="sub-tab" id="midwiferegister" style="font-size: small;">
        <div class='alert alert-success mx-auto' id='success' style="display: none;">
            <?php if ($this->page_state == "register") : ?>
                <p>Registration Sucsessfull</p>
            <?php else : ?>
                <p>Updated sucsessfully</p>
            <?php endif; ?>

        </div>


        <form class="needs-validation" novalidate action="<?= PROOT ?>medicalofficer/registermidwife" method="POST">
            <div class='alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                <?= $this->displayErrors; ?>
            </div>
            <div class="form-row">
                <div class="col-md-8 mb-3">
                    <label for="name">සම්පූර්ණ නම</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= $this->post['name'] ?>" required>
                    <div class="invalid-feedback">
                        කරුනාකර සම්පූර්ණ නම ඇතුලත් කරන්න.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="birthday">උපන් දිනය</label>
                    <input type="text" class="form-control" id="birthday" name="birthday" placeholder="yyyy/mm/dd" value="<?= $this->post['birthday'] ?>" required>
                    <div class="invalid-feedback">
                        කරුනාකර උපන්දිනය ඇතුලත් කරන්න.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="birthday">විද්‍යුත් තැපැල් ලිපිනය</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail address" value="<?= $this->post['email'] ?>" required>
                    <div class="invalid-feedback">
                        කරුනාකර විද්‍යුත් තැපැල් ලිපිනය ඇතුලත් කරන්න.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="idcardnum">ජාතික හැදුනුම්පත් අංකය</label>
                    <input type="text" class="form-control" id="idcardnum" name="idcardnum" placeholder="Id number" value="<?= $this->post['idcardnum'] ?>" required>
                    <div class="invalid-feedback">
                        කරුනාකර හැදුනුම්පත් අංකය ඇතුලත් කරන්න.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="birthday">දුරකතන අංකය</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" value="<?= $this->post['phone'] ?>" required>
                    <div class="invalid-feedback">
                        කරුනාකර දුරකතන අංකය ඇතුලත් කරන්න.
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
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">මුරපදය</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" value="<?= $this->post['pwd'] ?>" required>
                    <div class="invalid-feedback">
                        කරුනාකර මුරපදයක් ඇතුලත් කරන්න.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">මුරපදය නැවත ඇතුලත් කරන්න</label>
                    <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Repeat-Password" value="<?= $this->post['confirm'] ?>" required>
                    <div class="invalid-feedback">
                        කරුනාකර මුරපදය නැවත ඇතුලත් කරන්න.
                    </div>
                </div>
            </div>  
            <input type="hidden" class="form-control" id="page_state" name="page_state" value="<?= $this->page_state ?>">
            
            <?php if ($this->page_state == "update") : ?>
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $this->id ?>">
            <?php endif; ?>


            <?php if ($this->page_state == "register") : ?>
                <button class="btn btn-primary" type="submit">Submit form</button>
            <?php else : ?>
                <button class="btn btn-primary" type="submit">Update</button>
            <?php endif; ?>
            <?php $_POST["page_state"] = $this->page_state;?>

        </form>
    </div>


</div>

<?php $this->end(); ?>