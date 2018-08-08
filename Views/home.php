<?php require_once('Views/partial/navbar.php') ?>
<section class="sec-un">

    <div class="container container-pres">
        <div class="row">
            <div class="col-lg-12 team">
                <h2 class="my-4 our-team"> Decouvrir nos collaborateurs </h2>
            </div>
        </div>

        <div class="row row-pres">
            <div class="col-lg-6  text-center mb-6 presentation pres-cab ">
                <h3 class="titre-cab"><a class="lien-cab"
                                         href="index.php?p=cabinetGlobal">Cabinets</a>
                </h3>
            </div>

            <div class="col-lg-6  text-center mb-6 presentation pres-cab ">
                <h3 class="titre-cab"><a class="lien-cab"
                                         href="index.php?p=cabinet&id=1&idDepartement=1">Collaborateurs</a>
                </h3>
            </div>


        </div>
    </div>
</section>


<section class="sec-deux">
    <div class="container">
        <div class="title">
            <h3>À Propos de nous</h3>
        </div>
        <div class="description" id="about">
            <div class="row">
                <div class="col-md-12">
                    <ul class="items">
                        <div class="col-xs-12">
                            <li class="li col-xs-5 "><p class="row">
                                <div class="col-md-3">
                                    <img src="public/img/flow-chart.svg" width="60px" alt="">
                                </div>
                                <div class="col-md-9 text">
                                    <span class="item-title">Presentation</span>
                                    <span class="item-content">Presentation du groupe  <a
                                                href="index.php?p=presentationEntreprise" class="suite">Suite .. </a>
                                    </span>
                                </div>
                                </p>
                            </li>
                        <li class="li col-xs-5 col-xs-offset-1"><p class="row">
                            <div class="col-md-3">
                                <img src="public/img/book.svg" width="60px" alt="">
                            </div>
                            <div class="col-md-9 text">
                                <span class="item-title">Culture</span>
                                <span class="item-content">Pour comprendre la culture du groupe, il faut comprendre <a
                                            href="index.php?p=culture" class="suite">Suite .. </a>
                                    </span>
                            </div>
                            </p>
                        </li>
                        </div>
                        <div class="col-xs-12">

                        <li class="li col-xs-5"><p class="row">
                            <div class="col-md-3"><img src="public/img/strongbox.svg" width="60px" alt=""></div>
                            <div class="col-md-9 text"><span class="item-title">Valeurs</span><span
                                        class="item-content">Associates of Knowledge est un groupe qui se veut professionnel à l’égard des entreprises clientes et exemplaire dans <a
                                            href="index.php?p=valeurs" class="suite">Suite .. </a>
                                    </span>
                            </div>
                            </p></li>
                        <li class="li col-xs-5 col-xs-offset-1"><p class="row">
                            <div class="col-md-3"><img src="public/img/handshake.svg" width="60px" alt=""></div>
                            <div class="col-md-9 text"><span class="item-title">Éthique</span><span
                                        class="item-content"><a
                                            href="documents/charte_ethique.pdf" class="suite" style="text-decoration: none; color: cornflowerblue; :hover{text-decoration: none;} " >Découvrir notre charte ... </a></span>
                            </div>
                            </p></li>
                        </div>
                    </ul>
                    <div class="col-md-12 video" style="top: -45%;">
                        <div class="demo-screen col-xs-6 col-xs-offset-3">
                            <iframe width="560px" height="315" src="https://www.youtube.com/embed/O5R4XHw0PQ0"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="sec-trois article">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 team">
                <h2 class="my-4 our-team">Articles</h2>
            </div>
        </div>
        <div class="row" style="margin: 10% 0 10% 0">
            <?php foreach ($affArticle as $item) { ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-article" src="<?=$item['photo']?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title titre-article">
                            <a href="index.php?p=article&id=<?=$item['id'] ?>"><?= $item['titre']?></a>
                        </h4>
                    </div>
                </div>
            </div>
            <?php }?>

                <div class="col-xs-2 col-xs-offset-10">
            <a href="index.php?p=articles"  style="text-decoration: none; color: cornflowerblue; :hover{text-decoration: none;} ">Voir les autres articles </a>
                </div>

        </div>
    </div>

</section>
<section class="sec-quatre">

</section>
<section class="sec-cinq"></section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="public/vendor/jquery/jquery.min.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php require_once('Views/partial/footer.php') ?>


