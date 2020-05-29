<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головков</title>
</head>
<body>
<?php
    $img = scandir("img/big/");

    echo '<table><tr>';
    for($i=2; $i < count($img); $i++){
        echo "<td><a href='img/big/$img[$i]' target = '_blank'><img src='img/big/$img[$i]' width=300></a></td>";
        if(($i + 2) %3 == 0){
            echo '</tr><tr>';
        }
    }
?>

</body>
</html>