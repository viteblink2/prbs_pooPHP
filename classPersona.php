<?php 
class Persona{
	//Propiedades de la persona (clase persona)
	public $firstName;
	public $lastName;
	private $dateOfBrirth; 
	public $fullName;
	public static $tipo_sangre = 'O-';
	const CONSTANTE = 'hola';

	// Constructor que inicializa las varables que se ingresan al instanciar la clase
	public function __construct($firstName, $lastName, $dateOfBrirth ){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->dateOfBrirth = $dateOfBrirth;
	}

	// Getters y Setters permiten obtener o reemplazar un un valor de una propiedad 

	//Obtiene el valor de dicha variable cuando esta sea de tipo privada
	public function getDateOfBrirth(){
		return $this->dateOfBrirth;
	}

	public function get_fullName(){
		return $this->fullName;
	}

	// Reemplaza el valor de dicha variable cuando esta sea de tipo privada
	public function setDateOfBrirth($date){ 
		$this->dateOfBrirth = $date;
	}

	public function set_fullName($firstName , $lastName ){
		$this->firstName = $firstName; 
		$this->lastName = $lastName;
		$this->fullName = $this->firstName." ".$this->lastName; 
	}
	
	public function age(){
		return $age;
	}
}

?>