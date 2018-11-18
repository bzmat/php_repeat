<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Odczyt całego pliku z pomocą funkcji readfile()</title>
</head>
<body>
	<?php 

		$src = "../text.txt";

		if ((readfile($src)) == false) {
			exit("Nie mogę otworzyć pliku.");
		}else {
			
			readfile($src);
		}

	 ?>
</body>
</html>