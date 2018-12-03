<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Annuaire de films - <?=$page?></title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

    <h1>Bradley Cooper</h1>

    <h2>Liste des films</h2>

    <p><?=$movie['titre']." | ".$movie['annee']."<br>".$movie['description']?></p>
    <img src= "<?= 'Views/image/'.$movie['image']?>"alt="<?=$movie['titre']?>">
    
    
</body>
</html>