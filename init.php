<?php
require 'config.php';
$imagesDir = array_slice(scandir (PHOTO),2);
$sql = 'select * from photo';
$imagesQuery = mysqli_query($database, $sql);
$imagesDB = [];
while($data = mysqli_fetch_assoc($imagesQuery)){
    $imagesDB[]=$data['name'];
}
//Добавляем в базу изображения в папке и создаём уменьшенные копии
foreach ($imagesDir as $image){
    if(!in_array ($image, $imagesDB)){
        $path = PHOTO.$image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $type = substr(finfo_file($finfo, $path), 6);
        finfo_close($finfo);
        if($type == 'jpeg' || $type == 'png' || $type == 'gif'){
            $sql = "INSERT INTO `photo`(`name`, `size`, `counter`) VALUES ('$image',".filesize($path).',0)';
            mysqli_query ($database, $sql);
            $h = 150;
            $w = 150;
            $previewPath = PREVIEW.$image;
            $newImg = imagecreatetruecolor($h, $w);
            switch ($type) {
                case 'jpeg':
                    $temp = imagecreatefromjpeg($path);
                    imagecopyresampled($newImg, $temp, 0, 0, 0, 0, $h, $w, imagesx($temp), imagesy($temp));
                    imagejpeg($newImg, $previewPath);
                    break;
                case 'png':
                    $temp = imagecreatefrompng($path);
                    imagecopyresampled($newImg, $temp, 0, 0, 0, 0, $h, $w, imagesx($temp), imagesy($temp));
                    imagepng($newImg, $previewPath);
                    reak;
                case 'gif':
                    $temp = imagecreatefromgif($path);
                    imagecopyresampled($newImg, $temp, 0, 0, 0, 0, $h, $w, imagesx($temp), imagesy($temp));
                    imagegif($newImg, $previewPath);
            }
        }
    }
}

//Удаляем из базы изображения, которых нет в папке
foreach ($imagesDB as $image){
    if(!in_array ($image, $imagesDir)){
        $sql = "SELECT ID FROM `photo` WHERE name = '$image'";
        $id = mysqli_fetch_assoc(mysqli_query ($database, $sql))['ID'];
        $sql =  "DELETE FROM `photo` WHERE `photo`.`ID` = $id";
        mysqli_query ($database, $sql);
    }
}

//Создаём массив с фотографиями
$sql = "SELECT * FROM `photo` ORDER BY `counter` DESC";
$imagesQuery = mysqli_query($database, $sql);
$images = [];
while($data = mysqli_fetch_assoc($imagesQuery)){
    $images[]=$data;
}


        