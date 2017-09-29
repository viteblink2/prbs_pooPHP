<?php 
class Telefono{
	var $modelo;
	var $color;
	var $compania;

	function __construct($modelo, $color, $compania){
		$this->modelo = $modelo;
		$this->color = $color;
		$this->compania = $compania;
	}

	function call(){
		return "Estoy llamando a otro movil";
	}

	function sms(){
		return "Estoy enviando un mensaje de texto";
	}
}

?>