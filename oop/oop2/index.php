<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Użycie this</title>
</head>
<body>

	<?php 

		require 'person.php';

		$person1 = new Person();

		$person1->name = "Anna";

		$person1->surname = "Nowak";

		$person1->show();

	 ?>
	
</body>
</html>