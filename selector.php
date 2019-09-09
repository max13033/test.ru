<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>
<style type="text/css">
.block{
	color: #777;
	width: 100px;
}	
.big{
	width: 200px;
	height: 200px;
}	
.block3 ~ p{   /* родственники   */
	font-size: 20px;
}
.block3 > p{		/*  дочерний элемент  */
	font-size: 30px;
}
div{
	background-color: #787:;
}
.block1 + a{  /*   соседние   */
	color: #879;
}
#price td{
	font-weight: bold;
}
#price td + td{
	font-weight: normal;
}
.block1 > .block2{
	gsdfg
}
</style>

<div class="conteiner">

<table id="price">
	<tr>
		<td>Брюки</td>	 <td>12р</td>
	</tr>

	<tr>
		<td>Кофта</td>  <td>22</td>
	</tr>

	<tr>
		<td>Купка</td>  <td>32</td>
	</tr>

</table>

</div>



<div class="block1">

	<div class="block2">

		<div class="block3">

			<div class="block4"></div>

		</div>

	</div>


</div>








</body>
</html>

