<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <style type="text/css">
    * {
        font-family: 'PT Sans', sans-serif;
        font-size: 1.2em;
    }
    body {
        width: 800px;
        margin: 0 auto;
    }
    </style>
    <title>Отзывы</title>
</head>
<body>
    <?php
        require 'config.php';
        if(isset($_POST['add']) && isset($_POST['text'])){
            $sql = 'INSERT INTO feedbacks (name, text, date) VALUES (\''.$_POST['name'].'\',\''.$_POST['text'].'\',\''.date('Y-m-d H:i:s').'\')';
            mysqli_query($database, $sql);
        }
        $sql = 'SELECT * FROM `feedbacks`';
        $feedSQL = mysqli_query($database, $sql);
        $feed = [];
        while($data = mysqli_fetch_assoc($feedSQL)){
            $feed[]=$data;
        }
        
    ?>
    <h2>Отзывы</h2>
    <?php
        foreach ($feed as $item):?>
        <p>Пользователь <?=$item['name']?> пишет <?=$item['date']?>:</p>
        <p><?=$item['text']?></p><br>
        <?php endforeach ?>
    <hr>
    <h3>Добавить отзыв</h3>
    <form action="#" method="post">
        <textarea name="text" cols="40" rows="3" placeholder="Текст отзыва" ></textarea><br>
        <input type="text" size=40 name="name" placeholder="Ваше имя" id=""><br>
        <input type="submit" value="Запостить" name = 'add'>
    </form>
</body>
</html>