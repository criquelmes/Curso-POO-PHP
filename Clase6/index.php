<?php

	class Vehiculo{
		//Atributos
		public $motor = false;
		public $marca;
		public $color;


		//Metodos
		protected function estado(){
			if($this->motor == true){
				echo "El motor esta encendido <br>";
			}else{
				echo "El motor se encuentra apagado <br>";
			}
		}

		public function encender(){
			if($this->motor == true){
				echo "Cuidado el motor ya esta encendido <br>";
			}else{
				echo "El motor ahora esta encendido <br>";
				$this->motor = true;
			}
		}
	}

	class moto extends Vehiculo{

		public function estadoMoto(){
			$this->estado();
		}
	}


	class Cuatrimoto extends Moto{
		public function estadoCuatrimoto(){
			$this->estado();
		}
	}

	$moto = new Cuatrimoto();
	$moto->estadoCuatrimoto();

	/* Primer bloque de pruebas
	$vehiculo = new Vehiculo();
	$vehiculo->estado();
	$vehiculo->encender();
	$vehiculo->estado();*/

	/*Segundo bloque de pruebas
	$moto = new Moto();
	$moto->estadoMoto();*/
?>