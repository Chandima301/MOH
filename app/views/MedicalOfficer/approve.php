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
</div>
<?php $this->end(); ?>