<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pętla foreach</title>
</head>
<body>
	<?php 
		$tab = array (
			'1' => 'jeden',
			'2' =>	'dwa',
			'trzy' => '3',
			'cztery' => '4'
		);

		foreach ($tab as $value) {
			
			echo $value. '<br>';
		}

		foreach ($tab as $key => $value) {
			echo "tab[$key] = $value <br>";
		}
	 ?>
</body>
</html>