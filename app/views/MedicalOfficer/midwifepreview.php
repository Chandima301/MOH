<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-10 tab" id="detail">
    <div class="tab-heading">
        පවුල් සෞඛ්‍ය සේවා නිලධාරිනියන් ලියාපදිංචි කිරීම් හා තොරතුරු
    </div>
    <hr>
    <div class="card border-dark mb-3">
        <div class="row no-gutters">
            <div class="col-md-2">
                <img src="<?= PROOT ?>img/Midwife-icon7.png" class="rounded-circle float-left mt-5 ml-5" style="height: 100px; width:100px;" alt="no user">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="card-title mt-3" style="font-size: 25px;"><?= $this->midwife->name; ?></h5>
                        <hr class="mr-4" style="height:0.5px; color:rgb(158, 158, 158);">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-id-card-o"></i> <?= $this->midwife->idcardnum; ?></li>
                            <li class="list-group-item"><i class="fa fa-phone"></i> <?= $this->midwife->phone; ?></li>
                            <li class="list-group-item"><i class="fa fa-envelope"></i> <?= $this->midwife->email; ?></li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-birthday-cake"></i> <?= $this->midwife->birthday; ?></li>
                            <li class="list-group-item"><i class="fa fa-home"></i> <?= $this->midwife->address; ?></li>
                            <li class="list-group-item"><a href="<?= PROOT ?>medicalofficer/update/<?= $this->midwife->idcardnum; ?>" class="btn btn-primary mt-3">Update details</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <div class="row mt-4 mr-4 ml-4">
            <div class="col-md-12">
                <h5 class="card-title" style="font-size: 18px;">ඉදිරිපත් කර ඇති ඉදිරි කාලසටහන්</h5>
                <hr style="height:0.5px; color:rgb(158, 158, 158);">
                <div class='alert alert-danger mx-auto' id='notimetables' style="display: none;">
                    <p>No time tables yet</p>
                </div>
            </div>

        </div>

        
        <div class="row ml-4 mr-4">
            

            <div class="col-md-12">
                <div class="row row-cols-1 row-cols-md-4">
                    <?php foreach ($this->timetables as $timetable) : ?>
                        <?php $type = 'success' ?>
                        <?php $approval = '<p class="card-text"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Approved</p>' ?>
                        <?php if ($timetable->approved == 0) : ?>
                            <?php $type = 'danger'; ?>
                            <?php $approval = '<p class="card-text"><i class="fa fa-window-close" aria-hidden="true"></i> Not approved yet</p>' ?>
                        <?php endif; ?>
                        <div class="col mb-4">
                            <div class="card h-100 border-<?= $type ?> mb-3" style="max-width: 18rem;">
                                <div class="card-header" style="font-size: 14px; font-weight:bold;"><?= $timetable->area ?></div>
                                <div class="card-body text-<?= $type ?>">
                                    <h5 class="card-title">අදාල මාසය: <?= $timetable->month ?></h5>
                                    <?= $approval ?>
                                    <p class="card-text mt-3" style="font-size: 12px;">දිනය: <?= $timetable->date ?></p>
                                    <a href="<?= PROOT ?>medicalofficer/timetabledetails/<?= $timetable->id; ?>" class="btn btn-primary mt-3">View details</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

    </div>
</div>
<?php $this->end(); ?>