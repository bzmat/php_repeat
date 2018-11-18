<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funkcaja openfile()</title>
</head>
<body>
		<?php 

			$file = "/home/mateusz/www/php_repeat/loops/for/index.php";

			if (($fd = fopen($file, 'r')) == false) {
				
				echo 'Nie udało się otworzyć pliku';
			}else {
				
				echo 'Plik udało się otworzyć';

				fclose($fd);
			}

		 ?>
</body>
</html>