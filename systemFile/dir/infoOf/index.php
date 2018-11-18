<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Informcje o plikach</title>
</head>
<body>
		<?php 

			$dir = "/home/mateusz/www/php_repeat/loops/for/index.php";

			if (file_exists($dir) == true) {

				if ((is_file($dir)) && ((is_dir($dir) == false)) ) {

					echo "Wielkość pliku:" . filesize($dir);
					
				}else {
					
					echo "Wielkość katalogu:" . filesize($dir);
				}
				
				
				
			}else {
				
				
				echo 'Nie ma takiego pliku lub katalogu';
			}	
			

		 ?>
			
</body>
</html>