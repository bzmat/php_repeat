<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dziedziczenie</title>
</head>
<body>

		<?php 

			require 'user.php';
			$user = new User("Jan", "Kowalaski", 1);
			$user->showId();
			$user->show();

		 ?>
	
</body>
</html>