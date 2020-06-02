<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головков</title>
</head>
<body>
    <?php
    require 'init.php';
    $i = 0;
    echo '<table><tr>';
    foreach ($images as $image) : ?>
        <td><a href="image.php?id=<?=$image['ID']?>" target='_blank'>
            <img src="<?=PREVIEW.$image['name'] ?>">
        </a></td>
        <?php $i++;
        if($i %3 == 0):?>
            </tr><tr>
        <?php
        endif;
        endforeach; ?>
</body>
</html>