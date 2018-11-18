<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Odczyt całego pliku za pomocą funkcji file_get_contents</title>
</head>
<body>
	<?php 

		$src = "../text.txt";

		if (($file = file_get_contents($src)) == false) {
			
			exit("Nie mogę otworzyć pliku");
		}else {
			
			echo $file;
		}
	 ?>
</body>
</html>