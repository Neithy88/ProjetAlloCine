<?php include 'header.php'; ?>
<!-- Start Main -->

<main role="main">
    <div class="container">
        <div class="form-row">
            <div class="col md-6 ">
                <form action="" method="get">
                    <select class="form-control" name='Acteur' id="select_id" onchange="getID()">
                        <?php foreach ($Allacteur as $value) {
                            echo '<option value="' . $value['id_acteurs'] . '">' . $value['prenom'] . " " . $value['nom'] . '</option>';
                        } ?>
                    </select>
            </div>
            <div class="col md-6">
            <button class="btn" type="submit">Valider</button>
            </div>
            </form>

        </div>
    </div>


    <div class="album py-5">
        <div class="container">
            <div class="row">

                <?php foreach ($acteurs as $key => $acteur) : ?>
                    <div class="col-md-4">
                        <div class="card md-4 shadow-sm">
                            <img class="card-img-top" src="<?= 'Views/image/' . $acteur['image'] ?>" alt="<?= $acteur['titre'] ?>">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="customlink" href="<?= 'Film?filmId=' . $acteur['id_films'] ?>">Details</a>

                                    </div> 

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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    function getID() {
        d = document.getElementById("select_id").value;
        //alert(d);
        document.getElementById('foo').innerHTML = d;
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
</script>
<script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>