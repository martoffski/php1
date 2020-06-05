<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    * {
        font-family: 'PT Sans', sans-serif;
        font-size: 25px;
    }
    body {
        width: 800px;
        margin: 0 auto;
    }
    </style>
    <title>Карточка товара</title>
</head>
<body>
    <?php
    require 'config.php';
    $id = (int)$_GET['id'];
    $sql = 'SELECT * FROM goods WHERE ID ='.$id;
    $good = mysqli_fetch_assoc(mysqli_query ($database, $sql));
    ?>
    <h2><?=$good['title']?></h2>
<div>
        <img src="<?=IMG.$good['img']?>" height=700>
</div>
<p>Цена <?=$good['price']?> ₽</p>
<p><?=$good['info']?></p>
<form action="#">
    <button type="submit">Купить</button>
</form>
</body>
</html>