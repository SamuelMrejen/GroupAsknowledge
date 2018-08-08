<?php require('Views/partial/navbar.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12  team">
            <h2 class="my-4 our-team">Articles</h2>
        </div>
    </div>

    <div class="row">
        <?php foreach ($affToutArticle  as $item) { ?>
        <!-- Post Content Column -->
        <div class="col-lg-3 col-xs-offset-2 ">
            <hr>
            <div class="row">
                <div class="col-lg-12 team">
                    <h2 class="my-4 our-team"><?= $item['titre'] ?></h2>
                </div>
            </div>

            <!-- Date/Time -->


            <!-- Preview Image -->
            <img class="img-fluid rounded img-article-id" src="<?= $item['photo'] ?>" alt="">

            <hr>


            <p><?= htmlspecialchars($item['contenu']) ?></p>

            <hr>


        </div>
        <?php } ?>
    </div>
    <!-- /.row -->


</div>

<?php require('Views/partial/footer.php'); ?>
