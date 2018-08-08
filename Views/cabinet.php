<title>Group-Ask | Cabinet </title>
<?php require_once('Views/partial/navbar.php') ?>


<section class="sec-un">
    <div class="container container-pres">
        <div class="row">
            <div class="col-lg-12 team">
                <?php foreach ($affToutCabinet as $item) { ?>

                    <div class="col-lg-4 col-sm-6 text-center mb-4 presentation pres-cab">
                        <h3 class="titre-cab "><a class="lien-dep"
                                                  href="index.php?p=cabinet&id=<?= intval($item['id']) ?>"><?= $item['nom_cabinet'] ?></a>
                        </h3>


                    </div>

                <?php } ?>
            </div>
        </div>


        <div class="row row-pres">


            <?php if (isset($_GET['id'])) {
                foreach ($affDirecteur as $item) { ?>

                    <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                        <img class="rounded-circle img-fluid d-block mx-auto" src="<?= $item['photo'] ?>" alt="">
                        <h3>
                            <a class="lien-membre" href="index.php?p=membre&idDirecteur=<?= intval($item['id']) ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                            <br>
                            <small><?= $item['age'] ?> ans</small>
                            <br>
                        </h3>
                        <strong><?= $item['fonction'] ?></strong>

                        <div class="col-lg-12">
                            <p class="citation">«<?= $item['citation'] ?> »</p>
                            <p class="description"><?= $item['description'] ?> </p>

                        </div>


                    </div>

                <?php }
            } ?>

            <?php if (isset($_GET['id'])) {
                foreach ($affDirecteurAdjoint as $item) { ?>

                    <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                        <img class="rounded-circle img-fluid d-block mx-auto" src="<?= $item['photo'] ?>" alt="">
                        <h3>
                            <a class="lien-membre" href="index.php?p=membre&idDirecteurAdjoint=<?= intval($item['id']) ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                            <br>
                            <small><?= $item['age'] ?> ans</small>
                            <br>
                        </h3>
                        <strong><?= $item['fonction'] ?></strong>

                        <div class="col-lg-12">
                            <p class="citation">«<?= $item['citation'] ?> »</p>
                            <p class="description"><?= $item['description'] ?> </p>

                        </div>


                    </div>

                <?php }
            } ?>


            <div class="row col-lg-12">
                <div class="col-lg-12 team" >
                    <?php if (isset($_GET['id'])) {
                        foreach ($printDepartementParCab as $item) { ?>

                            <div class="col-lg-6 col-sm-6 text-center mb-4 presentation pres-cab">
                                <!-- <img class="rounded-circle img-fluid d-block mx-auto" src="public/img/tete2.jpg" alt="">-->
                                <h3 class="titre-cab "><a class="lien-dep"
                                                          href="index.php?p=cabinet&id=<?= intval($item['id_cabinet']) ?>&idDepartement=<?= intval($item['id']) ?>"><?= $item['nom_departement'] ?></a>
                                </h3>


                            </div>

                        <?php }
                    } ?>
                    <!-- <h2 class="my-4 our-team"><?php /* $affCabinetParId['nom_cabinet'] */ ?></h2>-->
                </div>
            </div>

            <div class="row col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-4" style="    padding: 3% 0 3% 0;">
                <div class="col-lg-12 team ">
                    <h3 style="text-align: center;"><?php if (isset($affDepartementParId)) {
                            echo $affDepartementParId['nom_departement'];
                        } else {
                            $affDepartementParId = " ";
                        }
                        ?></h3>
                </div>
            </div>


            <?php if (isset($_GET['idDepartement'])) {
                foreach ($affDirecteurDep as $item) { ?>

                    <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                        <img class="rounded-circle img-fluid d-block mx-auto" src="<?= $item['photo'] ?>" alt="">
                        <h3>
                            <a class="lien-membre" href="index.php?p=membre&id=<?= intval($item['id']) ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                            <br>
                            <small><?= $item['age'] ?> ans</small>
                            <br>
                        </h3>
                        <strong><?= $item['fonction'] ?></strong>

                        <div class="col-lg-12">
                            <p class="citation">«<?= $item['citation'] ?> »</p>
                            <p class="description"><?= $item['description'] ?> </p>

                        </div>


                    </div>

                <?php }
            } ?>
            <?php if (isset($_GET['idDepartement'])) {
                foreach ($affDirecteurAdjointDep as $item) { ?>

                    <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                        <img class="rounded-circle img-fluid d-block mx-auto" src="<?= $item['photo'] ?>" alt="">
                        <h3>
                            <a class="lien-membre" href="index.php?p=membre&id=<?= intval($item['id']) ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                            <br>
                            <small><?= $item['age'] ?> ans</small>
                            <br>
                        </h3>
                        <strong><?= $item['fonction'] ?></strong>

                        <div class="col-lg-12">
                            <p class="citation">«<?= $item['citation'] ?> »</p>
                            <p class="description"><?= $item['description'] ?> </p>

                        </div>


                    </div>

                <?php }
            } ?>

            <?php if (isset($_GET['idDepartement']) && isset($_GET['id'])) {
                foreach ($affMembresParCabEtDep as $item) { ?>

                    <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                        <img class="rounded-circle img-fluid d-block mx-auto" src="<?= $item['photo'] ?>" alt="">
                        <h3>
                            <a href="index.php?p=membre&id=<?= intval($item['id']) ?>" class="lien-membre"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                            <br>
                            <small><?= $item['age'] ?> ans</small>
                            <br>
                        </h3>
                        <strong><?= $item['fonction'] ?></strong>

                        <div class="col-lg-12">
                            <p class="citation">«<?= $item['citation'] ?> »</p>
                            <p class="description"><?= $item['description'] ?> </p>

                        </div>


                    </div>

                <?php }
            } ?>





        </div>
    </div>
</section>
<script src="public/js/membreAVenir.js"></script>

<?php require_once('Views/partial/footer.php') ?>
