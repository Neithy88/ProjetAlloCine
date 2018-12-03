<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Annuaire de films - <?=$page?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1><?=$page?></h1>

  
    <form action="" method="get">
    <select name='Genre' id="select_id" onchange="getID()">
    <?php
    //echo '<label>Genre de film:';
    //echo "<select name='Genre' onchange=\"getID()\">";
    foreach ($Allgenders as $value) {
        //echo("<h2>".$value."</h2>");
        echo '<option value="' .$value['id_genres']. '">' .$value['genre']. '</option>';
    }


    echo "</select>";
    
    ?>
    <button>Valider</button>
    </form>
    <main role="main">

        
        <div class="album py-5 bg-light">
            
            <div class="container">
              
                <div class="row">
                <?php foreach ($genders as $key => $genders) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">

                            
                             <img class="card-img-top" src= "<?= 'Views/image/'.$genders['image']?>"alt="<?=$genders['titre']?>">
                                <div class="card-body">
                                
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                          
                                            <a href="<?='Film?filmId='.$genders['id_films']?>">Details</a>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
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