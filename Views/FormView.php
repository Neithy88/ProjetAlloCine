<?php include 'header.php';?> 
    <!-- Start Main -->
    <main role="main">
        <div class="container">
            <div class="form-row">
                <div class="col md-6 ">

                  <h1>Partage avec nous ton film préféré !</h1>

                    <form class="form-group" method="post" action="?page=Form">
                        <label for="titre">Entrez le titre du film</label>
                        <input type="text" name="titre"><br>
                        <label for="date">Entrez l'année de sortie</label>
                        <input type="number" name="date" min="1900" max="2099" step="1" value="2016"><br>
                        <label for="description">Entrez le synopsis</label>
                        <input type="text" name="description"><br>
                        <label for="realisateur">Entrez le nom du réalisateur</label>
                        <input type="text" name="realisateur"><br>
                        <label for="genre">Entrez le genre</label>
                        <input type="text" name="genre film"><br>
                        <label for="image">Affiche film format 768 x 960</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        <input type="text" name="genre"><br>
                        <input type="submit" name="valider" value="Envoyer">
	                </form>
                    
        
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
     <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script>
    function getID() {
        d = document.getElementById("select_id").value;
        //alert(d);
        document.getElementById('foo').innerHTML = d;
    }
    </script>
   
</body>

</html>