<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require 'config.php';
    $sql = 'SELECT name, counter FROM photo WHERE ID ='.$_GET['id'];
    $image = mysqli_fetch_assoc(mysqli_query ($database, $sql));
    $image['counter']++;
    $sql = 'UPDATE photo SET counter = '.($image['counter']).' WHERE photo.ID = '.$_GET['id'];
    mysqli_query ($database, $sql);
    ?>
    
    <title>Просмотр <?=$image['name']?></title>
</head>
<body>
    <div>
        <img src="<?=PHOTO.$image['name']?>" height=700>

        <p>Просмотров:<?=$image['counter']?></p>
    </div>
</body>
</html>