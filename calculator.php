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
        $action = $_POST['action'];
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $result = '';
        switch ($action){
            case 'plus':
                $result = $value1 + $value2;
                break;
            case 'minus':
                $result = $value1 - $value2;
                break;
            case 'multi':
                $result = $value1 * $value2;
                break;
            case 'divide':
                if ($value2 == '0'){
                    $result = '&infin;';
                } else {
                    $result = $value1 / $value2;
                }
            }
    ?>
    <form name = "calculator" action="#" method="post">
    <input type="number" size=3 name="value1"value=<?=$value1?>> 
    <select size="1" name="action" onchange="document.forms['calculator'].submit()">
        <option <?=$action==''? 'selected':''?> value=""></option>
        <option <?=$action=='plus'? 'selected':''?> value="plus">+</option>
        <option <?=$action=='minus'? 'selected':''?> value="minus">-</option>
        <option <?=$action=='multi'? 'selected':''?> value="multi">*</option>
        <option <?=$action=='divide'? 'selected':''?> value="divide">&divide;</option>
    </select>
    <input type="number" size=3 name="value2" value=<?=$value2?>>
    <?=$result!==''?' = '.$result:''?>
    </form>
    
</body>
</html>