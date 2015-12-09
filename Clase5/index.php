<?php

	class Facebook{
		//Atributos
		public $nombre;
		public $edad;
		private $pass;

		//Metodos
		public function __construct($nombre, $edad, $pass){
			$this->nombre = $nombre;
			$this->edad = $edad;
			$this->pass = $pass;
		}

		public function verInformacion(){
			echo "Nombre: " . $this->nombre . "<br>";
			echo "Edad: " . $this->edad . "<br>";
			self::cambiarPass("12345");
			echo "Password: " . $this->pass . "";
		}

		private function cambiarPass($pass){
			$this->pass = $pass;
		}
	}

$facebook = new Facebook("Christopher Riquelme", 28, "qwerty" );
//echo $facebook->pass;
//$facebook->cambiarPass("12345");
$facebook->verInformacion();
?>