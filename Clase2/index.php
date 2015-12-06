<?php

    class Persona{
        //Atributos
        public $nombre = "Christopher";
        
        //Metodos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }

$persona = New Persona();
//echo $persona->nombre;
$persona->hablar("Saludos");
?>