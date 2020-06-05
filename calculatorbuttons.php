<!DOCTYPE html>
<html lang="ru">
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
    <title>Калькулятор</title>
</head>
<body>
    <h2>Калькулятор</h2>
    <?php
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $result = '';
        if($value1!='' && $value2 !=''){
        if (isset($_POST['plus'])){
            $result = $value1 + $value2;
        }elseif (isset($_POST['minus'])){
            $result = $value1 - $value2;
        }elseif (isset($_POST['multi'])){
            $result = $value1 * $value2;
        }elseif (isset($_POST['divide'])){
            if ($value2 == '0'){
                $result = '&infin;';
            } else {
                $result = $value1 / $value2;
            }
        }
    }
    ?>
    <form name = "calculator" action="#" method="post">
    <input type="number" size=3 name="value1"value=<?=$value1?>> 
    <input type="number" size=3 name="value2" value=<?=$value2?>>
    <br>
    <input type="submit" name="plus" value = "+">
    <input type="submit" name="minus" value = "-">
    <input type="submit" name="multi" value = "х">
    <input type="submit" name="divide" value = "&divide;">
    </form>
    <?=$result!==''?'Результат: '.$result:''?>
    
</body>
</html>