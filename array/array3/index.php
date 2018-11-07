<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tablice wielowymiarowe</title>
</head>
<body>
		<?php 

			$library = array(

				array(
					"Autor" => "Marcin Lis",
					"Tytuł" => "PHP5. Praktyczny kurs",
					"numer" => "1"
				),
				array(
					"Autor" => "Marcin Lis",
					"Tytuł" => "Tworzenie stron WWW",
					"numer" => "2"
				),
				array(
					"Autor" => "Marcin Lis",
					"Tytuł" => "Javascrpit Praktyczny kurs",
					"numer" => "3"
				)
			);

			foreach ($library as $key => $value) {
				
				echo $key."<br>";

					foreach ($library as $value) {
						
						$autor = $value['Autor'];
						$tytuł = $value['Tytuł'];
						$numer = $value['numer'];

						echo "$autor | $tytuł | $numer";

						echo '<br>';
					}
			};


			$tablica = array(

					array(1,2,3),
					array(5,6),
					array(7),
					array(8,9)
			);

			foreach ($tablica as $value) {
				foreach ($value as $val) {

					echo $val;
					
				}

				echo "<br>";
			}

		 ?>
</body>
</html>