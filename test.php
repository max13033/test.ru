<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>


<?php 
// ПРИМЕР ФАЙЛА. 
$filename = 'img/1.jpg'; 

// ПРОВЕРКА НА ИЗОБРАЖЕНИЕ
$size = getimagesize($filename); // если это изображение и у него определён размер, то продолжаем
if ($size){

// ОПРЕДЕЛЯЕМ МАКСИМАЛЬНЫЕ ШИРИНУ И ВЫСОТУ ИЗОБРАЖЕНИЯ
$width = 200; 
$height = 200; 

// РАБОТАЕМ КОРРЕКТНО. ОПРЕДЕЛЯЕМ ТИП
header("Content-type: {$size['mime']}");

// ПОЛУЧАЕМ НОВЫЕ РАЗМЕРЫ
list($width_orig, $height_orig) = getimagesize($filename); 

if ($width && ($width_orig < $height_orig)) { 
    $width = ($height / $height_orig) * $width_orig; 
} else { 
    $height = ($width / $width_orig) * $height_orig; 
} 

// ПЕРЕСОХРАНЯЕМ ИЗОБРАЖЕНИЕ
$image_p = imagecreatetruecolor($width, $height); 
$image = imagecreatefromjpeg($filename); 
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig); 

// СОЗДАЁМ
imagejpeg($image_p, null, 100); 

// УДАЛЯЕМ ИСХОДНИК - НУЖЕН АДРЕС. НАПРИМЕР, images/img001.jpg
unlink ($filename);

} else {
exit("Загружаемый файл не изображение...");
}
?>


</body>
</html>

