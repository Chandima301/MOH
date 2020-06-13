<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-10 tab" id="Approve">
    <div class="tab-heading">
        ඉදිරි කාලසටහන් අනුමත කිරීම.
    </div>
    <hr>
    <div class='alert alert-success mx-auto' id='approvesuccess' style="display: none;">
        <p>Workplan approved successfull</p>
    </div>
    <div class='alert alert-danger mx-auto' id='approveerror' style="display: none;">
        <p>Workplan approved unsuccessfull</p>
    </div>
    <div class="sub">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-dark mb-3">
                    <img src="<?= PROOT ?>img/nouser.gif" class="rounded-circle float-left m-3" style="height: 80px; width:80px;" alt="no user">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 20px"><?= $this->timetable->name; ?></h5>
                        <p class="card-text"><?= $this->timetable->address; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-id-card-o"></i> <?= $this->timetable->idcardnum; ?></li>
                        <li class="list-group-item"><i class="fa fa-phone"></i> <?= $this->timetable->phone; ?></li>
                        <li class="list-group-item"><i class="fa fa-envelope"></i> <?= $this->timetable->email; ?></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-6">
                <?php $approval = '<p class="card-text text-success"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Approved</p>' ?>
                <?php if ($this->timetable->approved == 0) : ?>
                    <?php $approval = '<p class="card-text text-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Not approved yet</p>' ?>
                <?php endif; ?>
                <div class="card border-dark mb-3">
                    <div class="card-header">ඉදිරි කාලසටහන</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title" style="font-weight:bold;"><?= $this->timetable->area ?></h5>
                        <p class="card-text">අදාල මාසය: <?= $this->timetable->month ?></p>
                        <P class="card-text mt-3"><?= $approval ?></P>
                        <?php if ($this->timetable->approvedby != "") : ?>
                            <p class="mt-2">Approved by : <?= $this->timetable->approvedby ?></p>
                        <?php endif; ?>
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
        <a href="<?= PROOT ?>medicalofficer/timetabledetails/<?= $this->id; ?>/approve" class="btn btn-primary ml-5 mb-3">Approve</a>

    </div>
</div>
<?php $this->end(); ?>