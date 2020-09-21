<?php 
$this->start("body"); ?>
<!--list of the mothers have registered-->
<div class="container" style="position: relative ;">
    <div class="row justify-content-center mt-3">
        <div class="sub-tab" id="midwifedetail" style="display: block;width: 100%;" style="font-size: small;">
            <nav class="navbar navbar-light" style="background-color: #d4d3cf;">
                <form class="form-inline" style="display:block;width: 100%;" method="POST"
                    action="<?=PROOT?>/preport/selectedDataShow">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                        name="idcardnum">
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

                    <?php if(!(empty($this->allData[0]))){
                $x=1;
                foreach($this->allData as $mother){
                ?>
                    <tr>
                        <th scope="row"><?= $x++ ?></th>
                        <?php if($mother->id){ ?>
                        <td><?= $mother->name ?></td>
                        <td><?= $mother->idcardnum ?></td>
                        <td><?= $mother->phone ?></td>
                        <td><a href="<?=PROOT?>preport/viewDetails/<?=$mother->id?>">
                                <p style="color: blue;">view details</p>
                            </a></td>
                        <?php } else{ ?>
                        <td>invalid id number</td>
                        <td></td>
                        <td></td>
                        <td><a href="#">
                                <p style="color: blue;">view details</p>
                            </a></td>
                    </tr>
                    <?php }}} ?>


                </tbody>
            </table>


        </div>


    </div>
</div>
<?php $this->end("body");?>