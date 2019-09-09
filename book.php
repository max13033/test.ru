<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<style type="text/css">
.container {
	margin: 100px auto auto 100px;
	position: relative;
	width: 226px;
	height: 316px;
	/* задаем глубину сцене */
	-webkit-perspective: 600px; /* webkit */
	-moz-perspective: 600px; /* mozilla */
	-ms-perspective: 600px; /* IE 10 */
	-o-perspective: 600px; /* opera когда-то тоже должна начать понимать */
	perspective: 600px;	/* св-во по стандартам */
}

#book { /* поварачивать будет общий контейнер */
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	position: absolute;

	-webkit-transition: -webkit-transform 1.5s;
	-moz-transition: -moz-transform 1.5s;
	-ms-transition: -moz-transform 1.5s;
	-o-transition: -o-transform 1.5s;
	transition: transform 1.5s; /* трансформации будут происходить анимированно продолжительностью 0.5 сек */
	
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	transform-style: preserve-3d;	/* указываем, что дочерние элементы находятся в 3D пространстве */
	
}
#book.flip {	/* добавляя этот класс, поворачиваем контейнер на 180 градусов */
	-webkit-transform: rotateY( 180deg );
	-moz-transform: rotateY( 180deg );
	-ms-transform: rotateY( 180deg );
	-o-transform: rotateY( 180deg );
	transform: rotateY( 180deg );
}

figure {
	position: absolute;
	display: block;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	-o-backface-visibility: hidden;
	backface-visibility: hidden;	/* если элемент отвернут лицом от пользователя, контент этого элемента не виден */
}
.back, .front, .left-1, .left-2, .right {
	background: url(book-texture.jpg);
}
.front {
	width: 100%;
	height: 100%;
	background-position: -276px 0;
	-webkit-transform: rotateY( 0deg ) translateZ(  25px );
	-moz-transform: rotateY( 0deg ) translateZ(  25px );
	-ms-transform: rotateY(0deg) translateZ(  25px );
	-o-transform: rotateY( 0deg ) translateZ(  25px );
	transform: rotateY( 0deg ) translateZ(  25px );
	/* 
		rotateY - поворачиваем грань на нужный угол
		translateZ - т.к. объект имеет толщину
	*/
}
.back {
	width: 100%;
	height: 100%;
	-webkit-transform: rotateY( 180deg ) translateZ(  25px );
	-moz-transform: rotateY( 180deg ) translateZ(  25px );
	-ms-transform: rotateY(180deg) translateZ(  25px );
	-o-transform: rotateY( 180deg ) translateZ(  25px );
	transform: rotateY( 180deg ) translateZ(  25px );	/* в начальном положении фэйс карты к нам развернут на 180 градусов */
}

/*
	придаем выпуклости торцу 
	разбиваем его на две части и ставим их под небольшим углом друг к другу
	
*/
.left-1 {
	background-position: -250px 0;
	width: 28.5px;
			/*
				тут я немного схалтурил. реально размер половины грани равен 25px и при этом значении оставалась дырка между гранями
				в этом примере не стал пересчитывать толщину книги с учетом потерь из-за "выпуклости" торца
		 */
	height: 100%;
	-webkit-transform: rotateY( -70deg ) translate3d(-3px, 0, 8px );
	-moz-transform: rotateY( -70deg ) translate3d(-3px, 0, 8px );
	-ms-transform: rotateY(-70deg) translate3d( -3px, 0, 8px );
	-o-transform: rotateY( -70deg ) translate3d( -3px, 0, 8px );
	transform: rotateY( -70deg ) translate3d( -3px, 0, 8px ); /*
																															 8 получаем из решения прямоугольного треугольника (по известному углу и гипотенузе вычисляем катет) online решить можно тут http://www.fxyz.ru/
																															 -3 - костыль, подобранный в ручную для этого примера
																														*/
	-webkit-transform-origin: left center;
	-moz-transform-origin: left center;
	-ms-transform-origin: left center;
	-o-transform-origin: left center;
	transform-origin: left center; /* поворачиваю торцы вокруг их левой границы: так проще потом расположить элемент (в данном случае) */
}
.left-2 {
	background-position: -225px 0;
	width: 28px;
	height: 100%;
	-webkit-transform: rotateY( -110deg ) translate3d( -24.5px, 0, 8px );
	-moz-transform: rotateY( -110deg ) translate3d(  -24.5px, 0, 8px );
	-ms-transform: rotateY(-110deg) translate3d( -24.5px, 0, 8px );
	-o-transform: rotateY( -110deg ) translate3d( -24.5px, 0, 8px );
	transform: rotateY( -110deg ) translate3d( -24.5px, 0, 8px ); /*24.5 - тоже из решения прямоугольного треугольника - второй катет */
	
	-webkit-transform-origin: left center;
	-moz-transform-origin: left center;
	-ms-transform-origin: left center;
	-o-transform-origin: left center;
	transform-origin: left center;
}

.right {
	background-position: -276px 0;
	width: 50px;
	height: 100%;
	-webkit-transform: rotateY( 90deg );
	-moz-transform: rotateY( 90deg );
	-ms-transform: rotateY(90deg);
	-o-transform: rotateY( 90deg );
	transform: rotateY( 90deg );
	top: 0;
	right: 	0;
}
</style>

<div class="container" id="container">
<div id="book">
	<figure class="back"></figure>
	<figure class="front"></figure>
	<figure class="left-1"></figure>
	<figure class="left-2"></figure>
	<figure class="right"></figure>
</div>
</div>








</body>
</html>

