<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>


<div class="col-md-10 tab" style="display: block;" id="Area">
    <div class="tab-heading">
        නිලධාරිනියන්ගෙ රාජකාරි ප්‍රදේශ
    </div>
    <hr>
    <p class="pb-4" style="font-size: 20px;">Today is <?=date("Y/m/d")?></p>
    <div class="sub">
        <div class="row">
            <?php foreach($this->slots as $slot):?>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?=$slot->name?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-envelope"></i> <?=$slot->email?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-phone"></i> <?=$slot->phone?></h6>
                        <div class="indicator">
                            <div class="dot-active"></div> රාජකාරියට වාර්ථාකර ඇත
                        </div>
                        <p class="card-text pb-4"><?=$slot->{$this->day}?></p>
                        <a href="<?= PROOT ?>medicalofficer/midwifedetails/<?= $slot->idcardnum; ?>" class="card-link">View details</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

        </div>

    </div>
</div>
<?php $this->end(); ?>