<?php 
class Automovil{

var $marca;
var $color;
var $puertas;


	function __construct($marca, $color, $puertas){
		$this->marca = $marca;
		$this->color = $color;
		$this->puertas = $puertas;
	}
	
	function acelerar(){
		return "Acelerando ";
	}

	function tocarClaxon(){
		return "Tocando el clakson";
	}

} ?>