<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-10 tab" id="Approve">
    <div class="tab-heading">
        ඉදිරි කාලසටහන් අනුමත කිරීම.
    </div>
    <hr>

    <div class="sub">
        <h3 style="padding-bottom: 10px;">අනුමැතිය සදහා ඉදිරිපත් කර ඇති කාලසටහන්</h3>
        <div class='alert alert-info mx-auto' id='nothingtoapprove' style="display: none;">
            <p>There is nothing to approve</p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">නම</th>
                    <th scope="col">හැදුනුම්පත් අංකය</th>
                    <th scope="col">අදාල මාසය</th>
                    <th scope="col">ඉදිරි කාලසටහන</th>

                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                <?php foreach ($this->timetables as $timetable) : ?>
                    <tr>
                        <th scope="row"><?= $count; ?></th>
                        <td><?= $timetable->name; ?></td>
                        <td><?= $timetable->idcardnum; ?></td>
                        <td><?= $timetable->month; ?></td>
                        <td><?= $timetable->area; ?></td>
                        <td><a href="<?= PROOT ?>medicalofficer/timetabledetails/<?= $timetable->id; ?>">view details</a></td>

                    </tr>
                    <?php $count++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <h3 class="pt-5 pb-3">Approved Recently</h3>

    <div class="list-group">
        <?php foreach ($this->approvedRecently as $timetable) : ?>
            <a href="<?= PROOT ?>medicalofficer/timetabledetails/<?= $timetable->id; ?>" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?=$timetable->area?></h5>
                    <small><?= Helper::time_elapsed_string($timetable->approveddate); ?></small>
                </div>
                <p class="mb-1" style="font-size: 12px;"><?=$timetable->name?> : <?=$timetable->idcardnum?> : <?=$timetable->month?></p>
                <p style="font-size: 10px;">Approved by : <?=$timetable->approvedby?></p>
            </a>
        <?php endforeach; ?>
        
    </div>
</div>
<?php $this->end(); ?>