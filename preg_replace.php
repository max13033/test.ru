<!DOCTYPE HTML>
<html>
<head>
	<title>Админ панель</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta name='viewport' content='width=device-width,initial-scale=1'/>
	<meta content='true' name='HandheldFriendly'/>
	<meta content='width' name='MobileOptimized'/>
	<meta content='yes' name='apple-mobile-web-app-capable'/>
</head>

<body>

<form method="get">
	<input type="text" name="text">
	<input type="submit" >
</form>	
<?

if(isset($_GET['text'])){
	$text = $_GET['text'];
	echo $text.'<br><br>';

	$pattern = "";
	$replacement = "";

	echo preg_replace($pattern, $replacement, $text);	
}




?>