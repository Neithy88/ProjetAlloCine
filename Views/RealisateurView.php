<?php include 'header.php';?> 
    <!-- Start Main -->
    <main role="main" id="mainview">
        <div class="container">
            <div class="row">
                <div class="col md-6 ">
                     <form action="" method="get">
                        <select name='Realisateur' id="select_id" onchange="getID()">
                                <?php foreach ($Allrealisateurs as $value) {
                                    echo '<option value="' .$value['id_realisateurs']. '">' .$value['prenom']. " ".$value['nom']. '</option>';
                                    } ?>
                        </select>
                                    
                        <button>Valider</button>
                    </form>
                    </div>
                </div>
             </div>
            <div class="row">
                 <div class="col md-6 ">
                        <?php foreach ($realisateurs as $key => $realisateur) : ?>
                                        <div class="col-md-4">
                                            <div class="card mb-4 shadow-sm">
                                                <img class="card-img-top" src="<?= 'Views/image/'.$realisateur['image']?>"
                                                    alt="<?=$realisateur['titre']?>">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a href="<?='Film?filmId='.$realisateur['id_films']?>">Details</a>
                                                    
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
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
</body>

</html>