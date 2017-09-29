<?php 
class Empleado extends Persona{
	public static $curp="HEVOPKLMJ";

	// Variable no estatica y publica para acceder fuera de la clase
	public $rfc="WSDER56";

	// Variable publica y estatica el acceso es directo
	public static $noEmpleados = "796"; 

	function __construct($nombreCompleto, $segundoNombre, $tercerNombre){
		if($nombreCompleto == "omar"){			
			$this->set_fullName(strtoupper($nombreCompleto), $segundoNombre, $tercerNombre); 			
		}else{
			$this->set_fullName($nombreCompleto, $segundoNombre, $tercerNombre); 			
		}
	}


	// Obtiene el valor de variable estetica 
	public static function obtieneValorEstaticoParent(){
		return parent::CONSTANTE;
	}
	

	public static function obtieneValorEstaticoSelf(){
		return self::$curp;
	}
}

?>