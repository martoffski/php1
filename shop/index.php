<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
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
    <title>Каталог товаров</title>
</head>
<body>
    <?php
        require 'config.php';
        $sql = 'SELECT * FROM `goods`';
        $feedSQL = mysqli_query($database, $sql);
        $goods = [];
        while($data = mysqli_fetch_assoc($feedSQL)){
            $goods[]=$data;
        }
    ?>
    <table>
        <tr>
            <?php
            $i = 0;
            foreach ($goods as $good):?>
            <td><?=$good['title']?><a href="card.php?id=<?=$good['ID']?>" target='_blank'>
            <img src="<?=PRE.$good['img'] ?>">
        </a>Цена <?=$good['price']?> ₽</td>
        <?php $i++;
        if($i %3 == 0):?>
            </tr><tr>
        <?php
        endif;
        endforeach; ?>
    </table>

</body>
</html>