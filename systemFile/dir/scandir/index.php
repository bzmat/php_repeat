<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funkcja scandir()</title>
</head>
<body>
	<ul>
		<?php 

			$dir = "/home/mateusz/www/php_repeat";

			$arr = scandir($dir);

			sort($arr);//sortowanie

			foreach ($arr as $file) {
				
				echo "<li>$file</li>";

			}

		 ?>
	</ul>
</body>
</html>