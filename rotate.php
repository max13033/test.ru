<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<style type="text/css">
	.cont{
		width: 500px;
		height: 500px;
		background-color: #999;
	}
	.wheel{
		position: absolute;
		top: 50px;
		left: 50px;
		width: 200px;
		transition-property: transform;
		transition-duration: 2s;
		backface-visibility: hidden;
		z-index: 2;
	}
	.cont:hover .wheel{
		transform: rotateY(720deg);
	}
	.wheel2{
		position: absolute;
		top: 50px;
		left: 50px;
		width: 200px;
		transition-property: transform;
		transition-duration: 2s;
		backface-visibility: hidden;
		transform: rotateY(180deg);
	}
	.cont:hover .wheel2{
		transform: rotateY(900deg);
	}
</style>
<div class="cont">

 <img class = "wheel" src="img/wheel.png">
 <img class = "wheel2" src="img/wheel2.png">

</div>








</body>
</html>

