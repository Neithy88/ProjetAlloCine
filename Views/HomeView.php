<?php include 'header.php'; ?>
<!-- Navigation -->

<main role="main">
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($movies as $key => $movie) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm bg-light">
                            <img class="card-img-top" src="<?= 'Views/image/' . $movie['image'] ?>" alt="<?= $movie['titre'] ?>">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="<?= 'Film?filmId=' . $movie['id_films'] ?>">Details</a>
                                    </div>
                                    <small class="text-muted"><?= $movie['annee'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


        </div>

    </div>

</main>



<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Bootstrap core JavaScript -->
<script src="public/vendor/jquery/jquery.min.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>