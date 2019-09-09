<? require "head.php"; ?>
<style>
.sub{
	background: linear-gradient(0deg, #000066, #4d4dff);
	color: white;
	width: 120px;
	height: 40px;
	border-radius: 10px;
}	

.help{
	width: 200px;
	height: 400px;
	background-color: #5555FF;
	position: fixed;
	top: 200px;
	left: -170px;
	transition-property: left;
	transition-duration: 1s;
}
.help:hover{
	left:0;
}
</style>
		<div style="height: 300px;">
			<br>
			<form method="get">
				<input type="text" name = "login"><br><br>
				<input class="sub" type = "submit">

			</form>
<?		if(isset($_GET['login'])){
			$login = $_GET['login'];
		}
		$pattern = "/\D/";

		$replacement = "";

		$login = preg_replace($pattern, $replacement, $login);

		echo $login;


?>
		</div>

<div class="help">
	Helper	
</div>

<? require "foot.php"; ?>
