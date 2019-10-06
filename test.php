<!DOCTYPE HTML>
<html>

<head>
	<title>Заголовок страницы</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>


<?php 
error_reporting(E_ALL);

$file = 'http://laprbass.com/RAY_EE_images/headshot.png';
$file = 'http://laprbass.com/RAY_EE_images/headshot.jpg';
$file = 'http://laprbass.com/RAY_EE_images/headshot.gif';

$what = getimagesize($file);

switch(strtolower($what['mime']))
{
    case 'image/png':
        $img = imagecreatefrompng($file);
        break;
    case 'image/jpeg':
        $img = imagecreatefromjpeg($file);
        break;
    case 'image/gif':
        $img = imagecreatefromgif($file);
        break;
    default: die();
}
$new = imagecreatetruecolor($what[0],$what[1]);
imagecopy($new,$img,0,0,0,0,$what[0],$what[1]);

header('Content-Type: image/jpeg');
imagejpeg($new);
imagedestroy($new);
?>


</body>
</html>

