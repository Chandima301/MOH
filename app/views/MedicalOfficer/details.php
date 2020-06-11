<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-10 tab" id="detail">
    <div class="tab-heading">
        පවුල් සෞඛ්‍ය සේවා නිලධාරිනියන් ලියාපදිංචි කිරීම් හා තොරතුරු
    </div>
    <hr>

    <div class="btn-group" id="tab-btn" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary <?= $this->btn_state['details-tab'] ?>" onclick="document.location = '<?= PROOT ?>medicalofficer/details'">තොරතුරු</button>
        <button type="button" class="btn btn-secondary <?= $this->btn_state['register-tab'] ?>" onclick="document.location = '<?= PROOT ?>medicalofficer/register'">ලියාපදිංචි කිරිම්</button>
    </div>
    <div class="sub-tab" id="midwifedetail">
        <div class='alert alert-danger mx-auto' id='notfound' style="display: none;">
            <p>Midwife not found</p>
        </div>
        <nav class="navbar navbar-light" style="background-color: #d4d3cf;">
            <form class="form-inline" action="<?= PROOT ?>medicalofficer/searchmidwife" method="POST">
                <input class="form-control mr-sm-2" type="text" id="idcardnum" name="idcardnum" placeholder="ID card number" aria-label="Search" value="<?= $this->search_text['idcardnum'] ?>">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">නම</th>
                    <th scope="col">හැදුනුම්පත් අංකය</th>
                    <th scope="col">දුරකතන අංකය</th>
                    <th scope="col">විද්‍යුත් තැපැල් ලිපිනය</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                <?php foreach ($this->midwifes as $midwife) : ?>
                    <tr>
                        <th scope="row"><?= $count; ?></th>
                        <td><?= $midwife->name; ?></td>
                        <td><?= $midwife->idcardnum; ?></td>
                        <td><?= $midwife->phone; ?></td>
                        <td><?= $midwife->email; ?></td>
                        <td><a href="<?= PROOT ?>medicalofficer/midwifedetails/<?= $midwife->idcardnum; ?>">view details</a></td>

                    </tr>
                    <?php $count++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>



</div>

<?php $this->end(); ?>