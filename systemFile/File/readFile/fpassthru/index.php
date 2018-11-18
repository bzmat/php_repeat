<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Odczyt całego pliku funkcją fpassthru()</title>
</head>
<body>
	<?php 

		$src = "../text.txt";

		if (($file = fopen($src, "rb")) == false) {
			
			exit("Nie moge otworzyć pliku.");	
		}else {
			
			fpassthru($file);
		}

		fclose($file);

	 ?>
</body>
</html>