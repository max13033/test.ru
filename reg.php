<?php
$title = "Регистрация";
require "head.php"; 

?>


<div class="conteiner">
	<h3>Регистрация </h3>
	<table style="margin:auto;">		
		<form method="get">
			<tr>
				<td>Выберите регион</td>
				<td>
					<select name = "region">
<?php
$query_select = "SELECT * FROM `region`";
$result = mysqli_query($connect,$query_select);	
$num_region = mysqli_num_rows($result);//эта команда подсчитывает колличество строк в запросе

for($i = 1; $i <= $num_region; $i++){
	$arr = mysqli_fetch_array($result);//$arr("region_id"=>"01","region_name"=>"Адыгея")
?>
						<option value = <?php echo '"'.$arr['region_id'].'"';?><?php if(isset($_GET['region']) AND $_GET['region']==$arr['region_id']){echo "selected";}?>><?php echo $arr['region_name'];?></option>
<?php				
}
?>						
					</select>
					<input type="submit" value="Сохранить">
				</td>
			</tr>		
		</form>
    

<?php  //вмсесто свича сделать запросвбазу данных и из базы из таблицы сити ()создать ее сколько городов в данном регионе и также через цикл вывести города 
if(isset($_GET['region'])){  //01
	$region = $_GET['region'];
		echo '<form method = "post">';
		echo "<tr><td>Выберите город</td>";
		
		echo "<td><select name = \"city\">";  //   \" если перед кавычкой одинарный слэш кавычки воспринимает как чаасть текста\"	

?>
	
		
			</select>	
		</td>
	</tr>

	<tr>
		<td>Введите логин :</td>
		<td><input type = "text" name = "login" placeholder="Логин" pattern="^[a-zA-Z]+$" required ></td>
	</tr>	
	<tr>
		<td>Введите пароль :</td>
		<td><input type = "password" name = "password" placeholder ="Пароль"  required ></td>
	</tr>
	<tr>
		<td>Укажите пол :</td>		
		<td><input name="pol" type="radio" value="man">Мужской
		<input name="pol" type="radio" value="womam">Женский</td>
	</tr>	
	<tr>
		<td>Укажите возраст :</td>
		<td><select name = "age">
<?php
$age = 30;
$i = 18;
 while($i <= $age){
	 echo "<option value = \"$i\">$i</option>";
	 $i++;
 }	
?>
			</select>
		</td>
	</tr>	
			<tr><td></td><td><input type="submit" value="Сохранить"></td></tr>
	
		</form>
	

<?php
}
  //01
?>
	</table>
</div><!--conteiner-->

<?php
$connect = mysqli_connect("localhost","root","mysql","test");

if(isset($_POST['city'])){
	$city = $_POST['city'];
}
if(isset($_POST['login'])){
	$login = $_POST['login'];
	
}
if(isset($_POST['password'])){
	$password = $_POST['password'];	
}
if(isset($_POST['pol'])){
	$pol = $_POST['pol'];
}
if(isset($_POST['age'])){
	$age = $_POST['age'];
	
	$query_select = "SELECT `login` FROM `people` WHERE `login` = '$login'";
	$result = mysqli_query($connect,$query_select);
    

	
	$arr = mysqli_fetch_array($result);


	if(isset($arr['login'])){
			echo "логин сущестует";
			//echo '<meta http-equiv = "refresh" content = "3 ; URL=Glavnaya.php">';
			
		}else{
			echo "вы успешно зарегестрированы";
			
			$shiphpass = md5($password);
			$query_insert =  "INSERT INTO `test`.`people` (`user_id`, `login`, `password`, `age`) VALUES (NULL, '$login', '$shiphpass', '$age');";
			mysqli_query($connect,$query_insert);
			
			
		
		}
	
	
	
}



require "footer.php"; 


?>

