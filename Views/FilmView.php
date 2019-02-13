<?php include 'header.php';?> 
    <!-- Start Main -->
    <main role="main" id="mainview">
        <div class="container">
            <div class="row">
                <div class="col md-6 ">
                <h2><img src="Views/image/clapperboard1.png" alt="claplogo" id="clapp"><?=$movie['titre']?></h2>
                    <ul>
                    
                        <li><h3>Année de sortie :</h3> <?=$movie['annee']?></li>
                        <li><h3>Réalisé par :</h3> 
                        <?php foreach ($realisateurs as $key => $realisateur) {
                            echo $realisateur['prenom'].' '.$realisateur['nom'];
                        } ?> 
                        </li>
                        <li><h3>Genre :</h3> <?php foreach ($genres as $key => $genre) {
                        echo $genre['genre'].' ';}?></li>
                        <li><h3>Acteurs :</h3> <?php
                            foreach ($acteurs as $key => $acteur) {
                            echo $acteur['prenom'].' '.$acteur['nom'].'<br/>';} ?>
                        </li>
                        
                        <li><h3>Note :</h3> 


                        <!-- SANS  BASE DE DONNEES DIRECTEMENT SUR L API  -->

                        <!-- recuperer l id sur l api -->

                       

                        <?php 
                        $curl = curl_init();
                        $url = "http://www.omdbapi.com/?s=".urlencode($movie['titre'])."&apikey=aa168fab";
                        curl_setopt_array($curl, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 30,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                        ),
                        ));
                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        curl_close($curl);

                        $response = json_decode($response, true); //because of true, it's in an array

                    
                        // afficher la reponse depuis l api

                        $curl = curl_init();
                        $url = "http://www.omdbapi.com/?i=". $response['Search'][0]['imdbID']."&apikey=aa168fab";
                        curl_setopt_array($curl, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 30,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                        ),
                        ));
                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        curl_close($curl);

                        $response = json_decode($response, true); //because of true, it's in an array
                        echo $response['Ratings'][0]['Value']."<br>";






                        // AVEC ENTREE ID IMDB DANS BASE DE DONNEES

                        $curl = curl_init();
                        $url = "http://www.omdbapi.com/?i=".$response['imdbID']."&apikey=aa168fab";
                        curl_setopt_array($curl, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 30,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                        ),
                        ));
                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        curl_close($curl);

                        $response = json_decode($response, true); //because of true, it's in an array
                        echo "Note IMDB : ".$response['imdbRating']."<br>";

                        ?>
 
                    </li>

                    </ul>
                </div>
                <div class="col md-6">
                    <img class="card-img-top" src= "<?= 'Views/image/'.$movie['image']?>"alt="<?=$movie['titre']?>">
                </div>

                

            </div>
        </div>
        
        <div class="container" id="description">
            <div class="row">
            <h4><img src="Views/image/camera2.png" alt="claplogo" id="camera">Synopsis :</h4>
                <p><?=$movie['description']?></p>

                <div class="btn-group">
                    <button type="button" id="btnhome"class="btn btn-sm-warning btn-outline-secondary"><a href="Home">Home</a></button>
                </div>

            </div>
        </div>

    </main>


    <!-- <footer class="footer">
      <div class="container">
       
        <span class="text-muted">Created by Anjum Heriau, Aurélie Thècle Augustin, Ophélie Donizetti, Alexandra Moullet </span>
      </div>
    </footer> -->
    
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {# <script>
    var xhr = new XMLHttpRequest();
                        xhr.open('GET', 'http://www.omdbapi.com/?i=tt0848228&apikey=9f8a2026', true);
                        xhr.send(null);
                        xhr.onreadystatechange = function(){
                        //console.log(this);
                        if(this.readyState == 4 && this.status == 200) {
                        console.log(JSON.parse(this.response).Title);
                        id_imdb.innerHTML = this.response;
                        }
                        
                        }
                        var id_imdb = "<?php echo $film['imdbID']; ?>";
    </script> #}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>