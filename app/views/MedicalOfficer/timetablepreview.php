<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-10 tab" id="Approve">
    <div class="tab-heading">
        ඉදිරි කාලසටහන් අනුමත කිරීම.
    </div>
    <hr>

    <div class="sub">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-dark mb-3">
                    <img src="<?= PROOT ?>img/nouser.gif" class="rounded-circle float-left m-3" style="height: 80px; width:80px;" alt="no user">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 20px"><?=$this->midwife->name;?></h5>
                        <p class="card-text"><?=$this->midwife->address;?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-id-card-o"></i> <?=$this->midwife->idcardnum;?></li>
                        <li class="list-group-item"><i class="fa fa-phone"></i> <?=$this->midwife->phone;?></li>
                        <li class="list-group-item"><i class="fa fa-envelope"></i> <?=$this->midwife->email;?></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-dark mb-3">
                    <div class="card-header">ඉදිරි කාලසටහන</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title" style="font-weight:bold;"><?= $this->timetable->area ?></h5>
                        <p class="card-text">අදාල මාසය: <?= $this->timetable->month ?></p>
                    </div>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">දිනය</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php for ($x = 1; $x <= 31; $x++) : ?>
                    <tr>
                        <th scope="row"><?= $x; ?></th>
                        <td><?= $this->timetable->$x; ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->end(); ?>