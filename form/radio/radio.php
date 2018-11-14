<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wynik działania skryptu</title>
</head>
<body>
	<?php 

		if (isset($_GET['radio1']) && ($_GET['radio1'] == "Pole1" || $_GET['radio1'] == "Pole2" || $_GET['radio1'] == "Pole3")) {
			
			echo 'Zaznaczona opcja to: '. $_GET['radio1'];
		}else {
			
			echo 'Nie zaznaczono żadnego pola';
		}

	 ?>
</body>
</html>