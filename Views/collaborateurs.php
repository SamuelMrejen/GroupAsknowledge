<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/round-about.css">
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Groupe Ask | collaborateurs</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">ASK-Group</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="sec-un">
    <div class="container container-pres">
        <div class="row">
            <div class="col-lg-12 team">
                <h2 class="my-4 our-team"><?= $affCabinet[0]['nom_cabinet'] ?></h2>
            </div>
        </div>

        <div class="row row-pres">
            <?php foreach ($affDirecteur as $item) { ?>

            <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                <img class="rounded-circle img-fluid d-block mx-auto" src="public/img/tete2.jpg" alt="">
                <h3>
                    <a href="index.php?p=membre&id=<?= intval($item['id']) ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                    <br>
                    <small><?= $item['age'] ?> ans</small>
                    <br>
                </h3>
                <strong><?= $item['nom_cabinet'] ?>  </strong>

                <div class="col-lg-12">
                    <p class="citation">«<?= $item['citation'] ?> »</p>
                    <p class="description"><?= $item['description'] ?> </p>

                </div>


            </div>
            <?php}?>

            <?php foreach ($affDirecteurAdjoint as $item) { ?>

            <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                <img class="rounded-circle img-fluid d-block mx-auto" src="public/img/tete2.jpg" alt="">
                <h3>
                    <a href="index.php?p=membre&id=<?= intval($item['id']) ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                    <br>
                    <small><?= $item['age'] ?> ans</small>
                    <br>
                </h3>
                <strong><?= $item['nom_cabinet'] ?></strong>

                <div class="col-lg-12">
                    <p class="citation">«<?= $item['citation'] ?> »</p>
                    <p class="description"><?= $item['description'] ?> </p>

                </div>
            </div>

            <?php}?>


        </div>
        <div class="row">
            <div class="col-lg-12 team">
                <h2 class="my-4 our-team"><?= $affDepartement[0]['nom_departement'] ?></h2>
            </div>
        </div>
        <div class="row row-pres">
            <?php foreach ($affDirecteurDep as $item) { ?>

            <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                <img class="rounded-circle img-fluid d-block mx-auto" src="public/img/tete2.jpg" alt="">
                <h3>
                    <a href="index.php?p=membre&id=<?= intval($item['id']) ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                    <br>
                    <small><?= $item['age'] ?> ans</small>
                    <br>
                </h3>
                <strong><?=$item['nom_departement'] ?>  </strong>
                <div class="col-lg-12">
                    <p class="citation">«<?= $item['citation'] ?> »</p>
                    <p class="description"><?= $item['description'] ?> </p>

                </div>
            </div>
            <?php}?>


            <?php foreach ($affDirecteurAdjointDep as $item) { ?>

            <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                <img class="rounded-circle img-fluid d-block mx-auto" src="public/img/tete2.jpg" alt="">
                <h3>
                    <a href="index.php?p=membre&id=<?= intval($item['id']) ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                    <br>
                    <small><?= $item['age'] ?> ans</small>
                    <br>
                </h3>
                <strong><?= $item['nom_departement'] ?></strong>
                <div class="col-lg-12">
                    <p class="citation">«<?=$item['citation'] ?> »</p>
                    <p class="description"><?=$item['description'] ?> </p>

                </div>
            </div>
            <?php}?>

        </div>
        <div class="row">
            <div class="col-lg-12 team">
                <h2 class="my-4 our-team">Collaborateurs</h2>
            </div>
        </div>
        <?php


        /* for($i=0 ; $i<=count($affCollaborateurParDep);$i++)
         {
             for ($j=0;$j<=count($affDepartement);$j++)
                 if($affDepartement[$j]['id']==$affCollaborateurParDep[$i]['id_departement'])
                 {

                     var_dump( $affCollaborateurParDep[$i]['nom']);

                 }
         }*/

        ?>


        <div class="row row-pres">
            <?php foreach ($affCollaborateurParDep as $item) { ?>

                <div class="col-lg-6 col-sm-6 text-center mb-4 presentation">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="public/img/tete2.jpg" alt="">
                    <h3>
                        <a href="index.php?p=membre&id=<?= intval($item['id']) ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>
                        <br>
                        <small><?= $item['age'] ?> ans</small>
                        <br>
                    </h3>
                    <strong><?= $item['nom_departement'] ?> </strong>

                    <div class="col-lg-12">
                        <p class="citation">«<?= $item['citation'] ?> »</p>
                        <p class="description"><?= $item['description'] ?> </p>

                    </div>


                </div>

            <?php } ?>

        </div>
        <div class="div-button">
            <button class="button col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3"><a
                        href="index.php?p=collaborateurs">Autre Membres</a></button>
        </div>
    </div>
</section>


<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="public/vendor/jquery/jquery.min.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>