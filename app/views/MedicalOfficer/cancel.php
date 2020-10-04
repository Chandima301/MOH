<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-10 tab" id="cancel">
    <div class="tab-heading">
        සායන අවලංගුකිරීමේ නිවේදන නිකුත්කිරීම.
    </div>
    <hr>
    <div class="sub mb-4">

        <form class="needs-validation" novalidate style="font-size: small;" action="<?= PROOT ?>medicalofficer/cancel" method="POST">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="date">දිනය</label>
                    <input type="text" class="form-control" id="date" name="date" placeholder="yyyy/mm/dd" required>
                    <div class="invalid-feedback">
                        කරුනාකර දිනය ඇතුලත් කරන්න.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="message">හේතුව</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    <div class="invalid-feedback">
                        කරුනාකර හේතුව කෙටියෙන් සදහන් කරන්න.
                    </div>
                </div>

            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>

    </div>

    <div id="logs" style="display: none;">
        <?php foreach ($this->logs as $log) : ?>
            <div class='alert alert-success mx-auto'>
                <p><?= $log ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php $this->end(); ?>