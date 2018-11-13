<?php 

require 'person.php';

	class User extends Person{

		public $id;


		function __construct($name, $surname, $id)
		{
			$this->name = $name;
			$this->surname = $surname;
			$this->id = $id;
		}

		function showId(){

			echo "Id:" .$this->id;
		}
	}
 ?>