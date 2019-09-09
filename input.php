<? require "head.php"; ?>

		<div style="height: 500px;">

<?			$region = $_GET['region'];

			if(!isset($region)){  ?>			
			<form method="get">
				<select name="region">
					<option value="Московская обл.">Московская обл.</option>
					<option value="Ленинградская обл.">Ленинградская обл.</option>
					<option value="Краснодарский край">Краснодарский край</option>
					<option value="Тульская обл.">Тульская обл.</option>
				</select>
				<input type="submit" value="Дальше">
			</form><br>  
<?			}			
			else{
				echo $region;
				}   ?>
<br>
<?          
			if(isset($region)){  ?>
			<form method="get">
						<select name = "city">

<?				

				switch ($region){
					case 'Московская обл.':
 ?>	
							<option value = "Москва">Москва</option>
							<option value = "Солнцево">Солнцево</option>
							<option value="Домодедово">Домодедово</option>					
<?						break;

					case 'Ленинградская обл.':
?>							<option value = "Питер">Питер</option>
							<option value = "Питергов">Питергов</option>
							<option value = "Город2">Город2</option>
<?						break;		

					case 'Краснодарский край':
?>							<option value = "Краснодар">Краснодар</option>
							<option value = "Сочи">Сочи</option>
							<option value = "Геленджик">Геленджик</option>
<?						break;
				}   // switch
?>						
						</select>
						<input type = "submit" value="Выбрать">
					</form>
<? 			} //  if(isset(region))     ?>

				
							
								
			
			<br><br>
			

		</div><br>
		
 
<? require "foot.php"; ?>
