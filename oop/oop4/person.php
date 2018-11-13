<?php 
	
	class Person{

		public $name;
		public $surname;


		function __construct($name, $surname){

			$this->name = $name;
			$this->surname = $surname;

		}

		 function show(){

			echo 'Imię'.$this->name."<br>";
			echo 'Nazwisko'.$this->surname."<br>";
		}
	}

 ?>