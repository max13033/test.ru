<!DOCTYPE HTML>
<html>
<head>
	<title>test</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
</head>

<body>


<script src = "code.js"></script>

<div id = "cont">

	<form method = "post" enctype = "multipart/form-data">
		Загрузите фото <br>
		<input type = "file" accept = "image/jpeg, image/png, image/gif" name = "photo">
		<input type = "submit" value = "Сохранить">

	</form>	<br>
<?
error_reporting(E_ALL);
// header('Content-Type: image/jpeg');

if(isset($_FILES['photo'])){
	move_uploaded_file($_FILES['photo']['tmp_name'], "img/1.jpg") or die(mysql_error());	?>

	<img src = "img/1.jpg"> 
<?
	$image_p = imagecreatetruecolor(200, 150);
	imagecopyresampled($image_p, imagecreatefromjpeg('img/1.jpg'), 0, 0, 0, 0, 200, 150, 700, 525);
	imagejpeg($image_p, null, 100);


}



?>	
<img src = "img/2.jpg"> 

</div>    <!-- cont -->



</body>
</html>