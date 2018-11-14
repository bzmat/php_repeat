<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wysyłanie plików wynik</title>
</head>
<body>
	<?php 

		$uploaddir = "upload_files/";

		if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
			
			$new_file = $uploaddir.$_FILES['file']['name'];
			$tmp_name = $_FILES['file']['tmp_name'];
			if (move_uploaded_file($tmp_name, $new_file)) {
				echo 'Plik został załadowany';
				echo 'Wielkość pliku:'. $_FILES['file']['size'];
			}else {
				echo 'Nieprawidłowy plik';
			}
		}

	 ?>
</body>
</html>