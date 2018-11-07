<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pętla while</title>
</head>
<body>
	<?php 

		$i = 1;
		while ($i<10) {
		    echo "$i <br>";
		    $i++;
		}


		do {
			echo $i.'<br>';
			$i++;
		} while ($i<20);
	 ?>
</body>
</html>
