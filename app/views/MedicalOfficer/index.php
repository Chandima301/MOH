<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="row">
    <div class="col-md-2 sidebar">
        <img src="<?= PROOT ?>img/avatar2.png" alt="profile-pic" class="profile-img">
        <div class="name-tag">
            <?= $this->name; ?>
            <br>
            <span style="font-size: 15px;">(ම. සෞ. හෙද සොයුරිය)</span>
        </div>
        <hr>
        <ul class="sidebar-btn">
            <li class="side-tab active" onclick="toggleTab('Area',event, 'side-tab', 'tab')">
                <a href="#">නිලධාරිනියන්ගෙ රාජකාරි ප්‍රදේශ</a>
            </li>
            <li class="side-tab" onclick="toggleTab('Approve',event, 'side-tab', 'tab')">
                <a href="#">ඉදිරි කාලසටහන් අනුමත කිරීම</a>
            </li>
            <li class="side-tab" onclick="toggleTab('cancel',event, 'side-tab', 'tab')">
                <a href="#">සායන අවලංගු කිරීම් දැනුම් දිම</a>
            </li>
            <li class="side-tab" onclick="toggleTab('detail',event,'side-tab', 'tab')">
                <a href="#">පවුල් සෞඛ්‍ය සේවා නිලධාරිනියන්</a>
            </li>

        </ul>
    </div>
    <div class="col-md-10 tab" style="display: block;" id="Area">
        <div class="tab-heading">
            නිලධාරිනියන්ගෙ රාජකාරි ප්‍රදේශ
        </div>
        <hr>

        <div class="sub">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">R.P.A.P රාමනායක</h5>
                            <h6 class="card-subtitle mb-2 text-muted">දු.අ. 0705436789</h6>
                            <div class="indicator">
                                <div class="dot-active"></div> රාජකාරියට වාර්ථාකර ඇත
                            </div>
                            <p class="card-text pb-4">පෙතියාගොඩ/පතිරණ මාවත/සමගි මාවත</p>
                            <a href="#" class="card-link">View details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">D.A.B.D කොඩිකාර</h5>
                            <h6 class="card-subtitle mb-2 text-muted">දු.අ. 0701236789</h6>
                            <div class="indicator">
                                <div class="dot-deactive"></div> හදිසි නිවාඩු
                            </div>
                            <p class="card-text pb-4">මාසික සමුලුව MOH කාර්යාලය</p>
                            <a href="#" class="card-link">View details</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="col-md-10 tab" id="Approve">
        <div class="tab-heading">
            ඉදිරි කාලසටහන් අනුමත කිරීම.
        </div>
        <hr>

        <div class="sub">
            <h3 style="padding-bottom: 10px;">අනුමැතිය සදහා ඉදිරිපත් කර ඇති කාලසටහන්</h3>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>R.P.A.P රාමනායක</td>
                        <td>903451234V</td>
                        <td>පෙබරවාරි</td>
                        <td>ප.සෞ.සේ.නි. පෙතියාගොඩ</td>
                        <td><a href="#">view details</a></td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>D.A.B.D කුමාරසිංහ</td>
                        <td>923412234V</td>
                        <td>පෙබරවාරි</td>
                        <td>ප.සෞ.සේ.නි. වනවාසල බටහිර</td>
                        <td><a href="#">view details</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>D.A.B.D කොඩිකාර</td>
                        <td>891351234V</td>
                        <td>පෙබරවාරි</td>
                        <td>ප.සෞ.සේ.නි. වනවාසල උතුර</td>
                        <td><a href="#">view details</a></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-10 tab" id="cancel">
        <div class="tab-heading">
            සායන අවලංගුකිරීමේ නිවේදන නිකුත්කිරීම.
        </div>
        <hr>
        <div class="sub">

            <form class="needs-validation" novalidate style="font-size: small;">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">දිනය</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="yyyy/mm/dd" required>
                        <div class="invalid-feedback">
                            කරුනාකර දිනය ඇතුලත් කරන්න.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">හේතුව</label>
                        <textarea class="form-control" id="validationCustom02" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            කරුනාකර හේතුව කෙටියෙන් සදහන් කරන්න.
                        </div>
                    </div>

                </div>

                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>

        </div>

    </div>
    <div class="col-md-10 tab" id="detail">
        <div class="tab-heading">
            පවුල් සෞඛ්‍ය සේවා නිලධාරිනියන් ලියාපදිංචි කිරීම් හා තොරතුරු
        </div>
        <hr>
        <div class="btn-group" id="tab-btn" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary active" onclick="toggleTab('midwifedetail',event, 'btn btn-secondary', 'sub-tab')">තොරතුරු</button>
            <button type="button" class="btn btn-secondary" onclick="toggleTab('midwiferegister',event, 'btn btn-secondary', 'sub-tab')">ලියාපදිංචි කිරිම්</button>
        </div>
        <div class="sub-tab" id="midwifedetail" style="display: block;" style="font-size: small;">
            <nav class="navbar navbar-light" style="background-color: #d4d3cf;">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
                        <th scope="col">සේවයේ නියුතුද/නැතිද යන වග</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>903451234V</td>
                        <td>0713451276</td>
                        <td>ඔව්</td>
                        <td><a href="#">view details</a></td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>923412234V</td>
                        <td>0773457123</td>
                        <td>ඔව්</td>
                        <td><a href="#">view details</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>891351234V</td>
                        <td>0707654253</td>
                        <td>නැත</td>
                        <td><a href="#">view details</a></td>

                    </tr>
                </tbody>
            </table>


        </div>

        <div class="sub-tab" id="midwiferegister" style="font-size: small;">
            <form class="needs-validation" novalidate action="<?=PROOT?>medicalofficer/register" method="POST">
                <div class='alert-danger alert-info mx-auto' style="margin-bottom: 10px;">
                    <?= $this->displayErrors; ?>
                </div>
                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="name">සම්පූර්ණ නම</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= $this->post['name'] ?>" required>
                        <div class="invalid-feedback">
                            කරුනාකර සම්පූර්ණ නම ඇතුලත් කරන්න.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="birthday">උපන් දිනය</label>
                        <input type="text" class="form-control" id="birthday" name="birthday" placeholder="yyyy/mm/dd" value="<?= $this->post['birthday'] ?>" required>
                        <div class="invalid-feedback">
                            කරුනාකර උපන්දිනය ඇතුලත් කරන්න.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="birthday">විද්‍යුත් තැපැල් ලිපිනය</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail address" value="<?= $this->post['email'] ?>" required>
                        <div class="invalid-feedback">
                            කරුනාකර විද්‍යුත් තැපැල් ලිපිනය ඇතුලත් කරන්න.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="idcardnum">ජාතික හැදුනුම්පත් අංකය</label>
                        <input type="text" class="form-control" id="idcardnum" name="idcardnum" placeholder="Id number" value="<?= $this->post['idcardnum'] ?>" required>
                        <div class="invalid-feedback">
                            කරුනාකර හැදුනුම්පත් අංකය ඇතුලත් කරන්න.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="birthday">දුරකතන අංකය</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" value="<?= $this->post['phone'] ?>" required>
                        <div class="invalid-feedback">
                            කරුනාකර දුරකතන අංකය ඇතුලත් කරන්න.
                        </div>
                    </div>


                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="address">ලිපිනය</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= $this->post['address'] ?>" required>
                        <div class="invalid-feedback">
                            කරුනාකර ලිපිනය ඇතුලත් කරන්න.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">මුරපදය</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" value="<?= $this->post['pwd'] ?>" required>
                        <div class="invalid-feedback">
                            කරුනාකර මුරපදයක් ඇතුලත් කරන්න.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">මුරපදය නැවත ඇතුලත් කරන්න</label>
                        <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Repeat-Password" value="<?= $this->post['confirm'] ?>" required>
                        <div class="invalid-feedback">
                            කරුනාකර මුරපදය නැවත ඇතුලත් කරන්න.
                        </div>
                    </div>
                </div>


                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>


    </div>


</div>

<?php $this->end(); ?>