<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Odczyt całego pliku funkcją fread</title>
</head>
<body>
		<?php 

			$src = "../text.txt";

			if (($file = fopen($src, "r")) == false) {
				
				exit("Nie mogę otworzyć pliku.");
			}else {
				
				echo fread($file, filesize($src));
			}

			fclose($file);

		 ?>
</body>
</html>