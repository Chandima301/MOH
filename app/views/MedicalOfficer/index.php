<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>


<div class="col-md-10 tab" id="Area">
    <div class="tab-heading">
        <h5>MOH(Medical Officer Of Health) Office Kelaniya</h5>
    </div>
    <hr>

    <div class="list-group">
        <?php foreach ($this->notifications as $notification) : ?>
            <a href="<?= PROOT ?>medicalofficer/approve" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?=$notification["content"]?></h5>
                    <small><?= Helper::time_elapsed_string($notification["date"]); ?></small>
                </div>
            
            </a>
        <?php endforeach; ?>
        
    </div>

    

</div>

<?php $this->end(); ?>