<!-- Pas de HTML dans les models et controllers : première balise HTML dans la vue-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - <?=$page?></title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

    <h1><?=$page?></h1>
    <ul>
        <?php foreach ($directors as $key => $director) : ?>
           <?php echo "<a href='".$director['prenom'].$director['nom']."'>".$director['prenom']." ".$director['nom']."</a>"."<br>"."<br>";?>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>
