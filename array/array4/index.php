<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operacje na tablicach</title>
</head>
<body>

		<?php 

			$tab1 = array(1, 2, 3, 4);

			$tab2 = array("jeden", "dwa", "trzy", "cztery");

			echo 'Zawartość tablicy przed sortowaniem:<br>';

			foreach ($tab1 as $value) {
				
				echo $value.'<br>';
			}

			echo '<br>';

			foreach ($tab2 as $value) {
				
				echo $value.'<br>';
			}

			sort($tab1);
			sort($tab2);

			echo '<br> Zawartość tablicy po sortowaniu<br>';

			foreach ($tab1 as $value) {
				
				echo $value.'<br>';
			}

			foreach ($tab2 as $value) {
				
				echo $value.'<br>';
			}

			$size = count($tab1);

			echo $size;

		 ?>
	
</body>
</html>