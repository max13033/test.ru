<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<style type="text/css">
	
</style>

<?
	if(isset($_POST['title'])){
		echo $_POST['title']."<br>";
		echo $_POST['article'];
	}
?>
<form method="post">
	<input type="text" name="title"><br>
	<textarea name = "article" cols="20" rows="2"></textarea>	
	<input type="submit">
</form>









</body>
</html>

