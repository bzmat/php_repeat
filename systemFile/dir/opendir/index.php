<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wyświetlanie zawartości danego katalogu</title>
</head>
<body>
	<ul>
		<?php 

			$dir = "/home/mateusz/www/php_repeat";

			if (!($fd = opendir($dir))) {
				 
				 exit("Nie mogę otworzyć danego katalogu");
			}

			while (($file = readdir($fd)) !== false) {
			    
			    echo "<li>$file</li>";
			}

			closedir($fd);			

		 ?>
	</ul>
</body>
</html>