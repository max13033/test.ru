<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</head>

<body>
<style type="text/css">


</style>

<script type="text/javascript">
	

</script>


<form method="get">
	
	<input type="text" name="login"> <br><br>
	<input type="password" name="pass"> <br><br>
	<input type = "submit" value = "Отправить">
</form>

<?php
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
$base1 = new mysqli('localhost', 'root', 'mysql', 'new_base');

mysqli_query($base1, "SET NAMES utf8");



$login = $_GET['login'];
$pass = $_GET['pass'];



$insert = "INSERT INTO `new_base`.`users` (`user_id`, `name`, `password`) VALUES (NULL, '$login', '$pass');";  

mysqli_query($base1, $insert);






?>





</body>
</html>


