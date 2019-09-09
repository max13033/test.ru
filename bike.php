<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>
<style type="text/css">

.but{
	width: 200px;
	height: 200px;
	background-color: #678;
}
.moto{
	width: 200px;
	position: absolute;
	right: -200px;
	transition-property: right;
	transition-duration: 5s;
	transition-timing-function: ease-in-out;
}
.but:hover img.moto{
	right: 1500px;
	background-sound:  muz.mp3;

	transform: scale(-1, 1);
}
</style>

<div class="but"><img class="moto" src="moto.jpg"></div>

<? 



?>









</body>
</html>

