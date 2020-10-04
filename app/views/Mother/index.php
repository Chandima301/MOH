<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<main role="main">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= PROOT ?>/img/Pregnancy_Partner.jpg" class="d-block w-100" alt="" style="object-fit:cover;">
      <div class="container">
        <div class="carousel-caption text-left">

          <h1>Partner Support During Pregnancy</h1>
          <p>Pregnancy is usually a time of excitement. But sometimes, pregnant women and their partners may feel
            like they're expecting a bundle of anxiety along with the joy. They have a long list of to-dos. They
            have to cope with the changes and unknowns that come with pregnancy and birth.</p>
          <p><a class="btn btn-lg btn-primary" href="https://www.mottchildren.org/health-library/abp7352"
              role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= PROOT ?>/img/food.webp" class="d-block w-100" alt="" style="object-fit:cover;">
      <div class="container">
        <div class="carousel-caption">
          <h1 style="color: black;">What Foods to Eat During Pregnancy for an Intelligent Baby.</h1>
          <p style="color: black; font-weight:bold;">It’s no wonder doctors recommend that you take your Vitamin D,
            folic acid, and iron supplements during your pregnancy. The foods you eat are likely to affect how your
            baby’s cognitive development takes place..</p>
          <p><a class="btn btn-lg btn-primary"
              href="https://parenting.firstcry.com/articles/what-foods-to-eat-during-pregnancy-for-intelligent-baby/"
              role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= PROOT ?>/img/disease1.jpg" class="d-block w-100" alt="">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1 style="color: black;">Communicable Diseases and Pregnancy</h1>
          <p style="color: black;">Some diseases can cause problems for the growing baby<br>
            Chickenpox Mumps <br>
            Rubella (German measles) Measles
            .</p>
          <p><a class="btn btn-lg btn-primary"
              href="https://www.kflaph.ca/en/healthy-living/communicable-diseases-and-pregnancy.aspx"
              role="button">Learn more</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing "
  style="background-color: rgb(43, 51, 71); box-shadow: -6px 9px 12px -6px black; border-radius: 40px ;">

  <!-- Three columns of text below the carousel -->
  <div class="row" style="color: white;">
    <div class="col-lg-4">
      <img src="<?= PROOT ?>/img/personal.jfif" alt="profile-pic" class="profile-img">
      <h2>පෞද්ගලික තොරතුරු</h2>
      <p>
        ලියාපදිංචි තොරතුරු<br>
        පෞද්ගලික / පවුල් තොරතුරු<br>

      </p>
      <p>
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          පෙන්වන්න.
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="<?= PROOT ?>/mother/registerDetails">ලියාපදිංචි තොරතුරු</a>
          <a class="dropdown-item" href="<?= PROOT ?>/mother/personalDetails">පෞද්ගලික / පවුල් තොරතුර</a>
        </div>
      </div>
      </p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="<?= PROOT ?>/img/record-disease-history.jpg" alt="profile-pic" class="profile-img">
      <h2>රෝග ඉතිහාසය</h2>
      <p>
        පවුලේ රෝග ඉතිහාසය<br>
        කායික / ශල්‍ය ඉතිහාසය<br>
      </p>
      <p>
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          පෙන්වන්න.
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="<?= PROOT ?>/mother/familyHistory">පවුලේ රෝග ඉතිහාසය</a>
          <a class="dropdown-item" href="<?= PROOT ?>/mother/surgicalHistory">කායික / ශල්‍ය ඉතිහාසය</a>
        </div>
      </div>
      </p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="<?= PROOT ?>/img/pregnant-history.png" alt="profile-pic" class="profile-img">
      <h2>ගර්භනී ඉතිහාසය</h2>
      <p>
        වර්තමාන ගර්භ ඉතිහාසය<br>
        පෙර ගර්භ ඉතිහාසය
      </p>
      <p>
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          පෙන්වන්න.
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="<?= PROOT ?>/mother/presentObsHistory">වර්තමාන ගර්භ ඉතිහාසය</a>
          <a class="dropdown-item" href="<?= PROOT ?>/mother/pastObsHistory">පෙර ගර්භ ඉතිහාසය</a>
        </div>
      </div>
      </p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  <div class="row" style="color: white;">
    <div class="col-lg-4">
      <img src="<?= PROOT ?>/img/nurse-icon.png" alt="profile-pic" class="profile-img">
      <h2>සායනික සං‍රක්ෂණය</h2>
      <p> සායනයේදී හෙදිය පරීක්ෂා කීරීමෙන් පසුව හෙදිය සදහා </p>
      <p>
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          පෙන්වන්න.
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="<?= PROOT ?>/mother/clinicCare1">සායනික සං‍රක්ෂණය 1</a>
          <a class="dropdown-item" href="<?= PROOT ?>/mother/clinicCare2">සායනික සං‍රක්ෂණය 2</a>
        </div>
      </div>
      </p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4"><img src="<?= PROOT ?>/img/data.png" alt="profile-pic" class="profile-img">
      <h2>ප්‍රතිශක්තිකරණය හා බර සටහන</h2>
      <p>
        ප්‍රතිශක්තිකරණය<br>
        බර වැඩිවීමේ සටහන
      </p>
      <p>
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          පෙන්වන්න.
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="<?= PROOT ?>/mother/immunization">ප්‍රතිශක්තිකරණය</a>
          <a class="dropdown-item" href="<?= PROOT ?>/mother/weightChart">බර වැඩිවීේ සටහන</a>
        </div>
      </div>
      </p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="<?= PROOT ?>/img/pregnant-history.png" alt="profile-pic" class="profile-img">
      <h2>තොරතුරු හා පවුල් සැලසුම</h2>
      <p>
        හදිසි අවස්ථාවන් සදහා සැලසුම්<br>
        පවුල් සැලසුම් <br>
        පූර්ව ප්‍රසව සැසි සදහා පැමිණීම.</p>
      <p>
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          පෙන්වන්න.
        </button>
        <div class="dropdown-menu" style="font-weight: bold;" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="<?= PROOT ?>/mother/emergancyPlan">හදිසි අවස්ථාවන් සදහා සැලසුම්</a>
          <a class="dropdown-item" href="<?= PROOT ?>/mother/iCEmaterial">පවුල් සැලසුම්</a>
          <a class="dropdown-item" href="<?= PROOT ?>/mother/preClinic">පූර්ව ප්‍රසව සැසි සදහා පැමිණීම</a>
        </div>
      </div>
      </p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  <div class="row" style="color: white;">
    <div class="col-lg-4">
      <img src="<?= PROOT ?>/img/Physician.png" alt="profile-pic" class="profile-img">
      <h2>රෝහල් සායනික සං‍රක්ෂණය</h2>
      <p>රෝහල් සායනික කටයුතු සදහා</p>
      <p><a class="btn btn-secondary" href="<?= PROOT ?>/mother/hospitalClinc" role="button">පෙන්වන්න. &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="<?= PROOT ?>/img/postnatal.webp" alt="profile-pic" class="profile-img">
      <h2>ප්‍රසව හා පසුප්‍රසව සං‍රක්ෂණය</h2>
      <p> හෙද නිලධාරිනිය / පවුල් සෞඛ්‍ය සේවා නිලධාරිනිය විසින් රෝහලෙන් මුදාහරින අවස්ථාවේදී සම්පූර්ණ කළ යුතුය.</p>
      <p><a class="btn btn-secondary" href="<?= PROOT ?>/mother/postnatalCare" role="button">පෙන්වන්න. &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="<?= PROOT ?>/img/postpartum.webp" alt="profile-pic" class="profile-img">
      <h2>පසුප්‍රසව ක්ෂේත්‍ර් සං‍රක්ෂණය</h2>
      <p>
        පවුල් සෞඛ්‍ය නිලධාරිනිය සදහා<br>
        සායනික සං‍රක්ෂණය
      </p>
      <p><a class="btn btn-secondary" href="<?= PROOT ?>/mother/postpatumCare" role="button">පෙන්වන්න. &raquo;</a></p></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
</div>

<!-- START THE FEATURETTES -->
<div class="container marketing "
  style="background-color: rgb(43, 51, 71); box-shadow: -6px 9px 12px -6px black; border-radius: 40px ;">

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading" style="color: wheat;">සෞඛ්‍ය සම්පන්න ගර්භණී ආහාර වේලක් සඳහා අනුභව කළ යුතු දේ.
      </h2>
      <p class="lead" style="color: wheat;">
        ඔබට සහ ඔබේ දරුවාට අවශ්‍ය පෝෂ්‍ය පදාර්ථ ලබා ගැනීම සඳහා විටමින් සහ ඛනිජ වලින් පිරුණු විවිධ ආහාර අනුභව කිරීම
        වැදගත් වේ.<br>

        මධ්‍යධරණී ආහාර පිරමීඩය මුහුදු ආහාර ඇතුළු රසවත් හා සෞඛ්‍ය සම්පන්න ආහාර තේරීම් සඳහා උදාහරණ පෙන්වයි..</p>
    </div>
    <div class="col-md-5">
      <img src="<?= PROOT ?>/img/diet1.png" width="100%" height="100%" alt="">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading" style="color: wheat;">බොහෝ කාන්තාවන්ට ගර්භණී සමයේදී දිනකට අමතර කැලරි 300-400 ක්
        පමණ අවශ්‍ය වේ</h2>

    </div>
    <div class="col-md-5 order-md-1">
      <img src="<?= PROOT ?>/img/pregnancy-food1.jpg" width="100%" height="100%" alt="">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading" style="color: wheat;">ගර්භනී කාන්තාවන් සඳහා යෝග - ඉරියව්, වාසි සහ ඉඟි</h2>
      <p class="lead" style="color: wheat;">ගැබ් ගැනීම ඕනෑම කාන්තාවකගේ ජීවිතයේ විශේෂ කාලයක් වන අතර එය මෙතෙක් ලද
        ප්‍රීතිමත්ම අත්දැකීමක් විය හැකිය! සංකූලතා නොමැති නම්, ඔබ තුළ වැඩෙන ළදරුවාගේ අවශ්‍යතා සපුරාලීම සඳහා මෙහි සහ
        එහි කරකැවීම් කිහිපයක් සමඟින්, ඔබ ආදරය කරන දේ දිගටම කරගෙන යාමෙන් කිසිවක් ඔබව වළක්වා නොගත යුතුය!
        ව්‍යායාම කිරීමද ව්‍යතිරේකයක් නොවන අතර ගර්භණී සමයේදී ශාරීරිකව ක්‍රියාශීලීව සිටින විට ඔබ අමතර සැලකිල්ලක්
        දැක්වීම අත්‍යවශ්‍ය වේ. යෝගා යනු ගර්භනී කාන්තාවන්ට සලකා බැලිය හැකි ව්‍යායාම ක්‍රමයක් වන අතර ගර්භණී සමයේදී
        යෝගා පුහුණුවීම සඳහා ආරක්ෂිතම ක්‍රමය වන්නේ සහතික කළ උපදේශකයෙකු සමඟ ප්‍රසව යෝගා පන්තියක් සොයා ගැනීමයි.
        මේවා ගර්භනී කාන්තාවන් සඳහා නිර්මාණය කර ඇති විශේෂ පන්ති වේ. <a href="https://youtu.be/RrB77_yU_ZM">Learn
          more</a></p>
      </p>
    </div>
    <div class="col-md-5">
      <img src="<?= PROOT ?>/img/yoga1.jpg" width="100%" height="100%" alt="">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->
  </div><!-- /.container -->
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
  <?php $this->end(); ?>
