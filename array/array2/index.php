<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tablice asocjacyjne</title>
</head>
<body>
		<?php 

			$colors = array(

				"color1" => "red",
				"color2" => "yellow",
				"color3" => "grey"

			);

			foreach ($colors as $value) {
				
				echo $value.'<br>';
			}

			echo '<br><br>';

			foreach ($colors as $key => $value) {
				
				echo $key.'=>'.$value.'<br>';
			}

		 ?>
</body>
</html>