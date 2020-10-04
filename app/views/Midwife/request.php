<?php $this->setSiteTitle('MidwifeMother'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>


<div style="background-color: #E8EAEE">
  <div class="mother-heading" style="color: #265667;">
    <center>
      <h1 class="motherHead">ලියාපදිංචි කිරීම් හා සම්බන්ධ තොරතුරු</h1>
    </center>

  </div>

  <!-- Tables with search bar-->
  <div style= " margin-top: 20px;" class="mother-table-box">
    <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link mother-tab" href="<?=PROOT?>midwife/mother" id="pills-home-tab"  role="tab" aria-controls="pills-home" aria-selected="true"><span style="color: black;">ලියාපදිංචි වූ මාතාවන්</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?=PROOT?>midwife/request" role="tab"  aria-selected="false"><span style= "color: black;">ලියාපදිංචිය සදහා ඉල්ලීම්</span></a>
      </li>
    </ul>
    <div class="tab-content mother-table" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class='alert alert-danger mx-auto' id='notfound' style="display: none;">
            <p>Mother is not found</p>
        </div>
        <nav class="navbar navbar-light bg-dark">
          <form class="form-inline" action="<?= PROOT ?>midwife/searchUnconfirmedMother" method="POST">
            <input class="form-control mr-sm-2" type="text" id="idcardnum" name="idcardnum" placeholder="ID Card Number" aria-label="Search" value="<?= $this->search_text['idcardnum'] ?>"> 
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">නම</th>
              <th scope="col">හැදුනුම්පත් අංකය</th>
              <th scope="col">දුරකතන අංකය</th>
              <th scope="col">අයදුම්පත ස්ථීර කිරීම</th>
            </tr>
          </thead>
          <tbody>
          <?php $count = 1; ?>
          <?php foreach($this->unconfirmedMothers as $mother): ?>
            <tr>
              <th scope="row"><?= $count; ?></th>
              <td><?= $mother->name; ?></td>
              <td><?= $mother->idcardnum; ?></td>
              <td><?= $mother->phone; ?></td>
              <td><a href="<?=PROOT?>midwife/changePage/<?= $mother->idcardnum; ?>" style="color: blue;">Confirm</a></td>
            </tr>
          <?php $count++; ?>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--End tables with search bar-->

<div class="background-mother">
  <!--- Button -->
  <div class="container" style="padding-top: 155px;">
  <a href="<?= PROOT ?>midwife/registerMother" class="button" style="text-decoration: none; margin-top: 150px;">ලියාපදිංචි කිරීම</a>
  </div>
  <!--- Button -->
</div>


<?php $this->end(); ?>