<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Odczyt pliku znak po znaku</title>
</head>
<body>
		<?php 

			if (($file = fopen("../text.txt", "r")) == false) {
				
				exit("Plik nie został otwarty.");
			}else {
				
				while (($str = fgetc($file)) !== false) {
				    
				    if ($str == "\n") $str = "<br>";
				    	
				    	echo $str;
				    
				}
				
				fclose($file);
			}

		 ?>
</body>
</html>