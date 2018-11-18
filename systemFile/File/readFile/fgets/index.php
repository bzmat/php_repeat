<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Odczyt po wersie pliku</title>
</head>
<body>
		<?php 

			if (($file = fopen("../text.txt", "r")) == false) {
				
				exit("Plik nie został otwarty.");
			}else {
				
				while (!feof($file)) {

					$str = fgets($file);

					echo nl2br($str);
				    
				}

				fclose($file);

			}

		 ?>
</body>
</html>