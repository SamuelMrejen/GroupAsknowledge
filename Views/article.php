<?php require_once ("Views/partial/navbar.php");?>
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-10 col-xs-offset-1">
            <hr>
            <div class="row">
                <div class="col-lg-12 team">
                    <h2 class="my-4 our-team"><?=$affArticleParId['titre'] ?></h2>
                </div>
            </div>

            <!-- Date/Time -->



            <!-- Preview Image -->
            <img class="img-fluid rounded img-article-id" src="<?=$affArticleParId['photo'] ?>" alt="">

            <hr>


            <p><?= $affArticleParId['contenu']?></p>

            <hr>





        </div>
    </div>
    <!-- /.row -->

</div>
<?php require_once ("Views/partial/footer.php");?>
