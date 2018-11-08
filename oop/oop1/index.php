<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Użycie obiektu</title>
</head>
<body>
	<?php 

		require 'person.php';

		$persons = array();

			for ($i = 0; $i < 3; $i++) {
				$persons[$i] = new Person();
			}

		$persons[0]->name = "Jan";
		$persons[0]->surname = "Kowalski";
		$persons[1]->name = "Andrzej";
		$persons[1]->surname = "Nowak";
		$persons[2]->name = "Anna";
		$persons[2]->surname = "Janowska";
			

 ?>

		<table border="1">
			<tr>
				<th>Imię</th><th>Nazwisko</th>
			</tr>
			<?php 

				for ($i = 0; $i < 3 ; $i++) {
					echo '<tr>';
					echo '<td>'. $persons[$i]->name."</td>";
					echo '<td>'. $persons[$i]->surname."</td>";
					echo '</tr>';
				}


			 ?>
		</table>

</body>
</html>