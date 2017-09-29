<?php 
ini_set('display_errors', 1);
@include("classPersona.php"); 
@include("classTelefono.php"); 
@include("classAutomovil.php");  
@include("classEmpleados.php");  
?>
<html>
<head>
	<title>POO PHP</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>Clase persona</td>
		</tr>
		<tr>
			<td><?php
				//Declarando el objeto de la clase Persona 
				$persona = new Persona("omar","miriel","1986-07-12");
				$fechaNacSet = $persona->setDateOfBrirth("2014-12-01");
				$fechaNacGet = $persona->getDateOfBrirth();
				$nameCompleto = $persona->get_fullName();
				echo $fechaNacGet."<br> Name Completo: ".$nameCompleto; 
			?>
			</td>
		</tr>
	</table>
	<br>
	<table border="1">
		<tr>
			<td>Clase Telefono</td>
		</tr>
		<tr>
			<td><?php 
				$telefono1 = new Telefono("motorola", "blanco","Iusacell");
				$llamada1 = $telefono1->call();
				$color1 = $telefono1->color;
				echo "Accion: ".$llamada1.", Color: ".$color1;			
				?>
			</td>
		</tr>
	</table>
	<br>
	<table border="1">
		<tr>
			<td>Clase Telefono</td>
		</tr>
		<tr>
			<td><?php
					$auto1 = new Automovil("Toyota","Rojo","5");
					$color1 = $auto1->color;
					$marca1 = $auto1->marca;
					$acelerar1 = $auto1->acelerar();
					$tocaClaxon = $auto1->tocarClaxon();
					echo  "Color: ".$color1." Marca: ".$marca1." ". $acelerar1." ---".$tocaClaxon;
				?>
			</td>
		</tr>
	</table>
	<br>
	<table border="1">
		<tr>
			<td>Herencia de clase: Persona a Empleado</td>
		</tr>
		<tr>
			<td><?php
					$empleado1 = new Empleado("omar Mimril","PAco","berenice");  // Modifica el valor de la fecha en la clase de Persona
					$nameComplete = $empleado1->get_fullName(); // Obtiene el valor modificado despues de la herencia
					echo  "El nombre es:" . $nameComplete;
				?>
			</td>
		</tr>
	</table>
	<br>
	<table border="1">
		<tr>
			<td>Accediendo a variables estaticas</td>
		</tr>
		<tr>
			<td>Variable estatica de otra clase</td>
			<td>Variable estatica de la misma clase</td>
			<td>Acceso a variable no estatica desde el exterior  de la clase</td>
			<td>Acceso a variable estatica y publica desde el exterior  de la clase</td>
		</tr>
		<tr>
			<td><?php
					$estaticas = new Empleado("wqw","wqw","asas");  // Modifica el valor de la fecha en la clase de Persona
					echo $estaticas->obtieneValorEstaticoParent();  ?>
			</td>
			<td><?php $estatica1 = new Empleado("s","s","sas"); 
				echo $estatica1->obtieneValorEstaticoSelf(); ?>
			</td>
			<td><?php  
				// Acceso a la variable no estatica
				$estatica3 = new Empleado("s","s","s");
				echo $estatica3->rfc;
			?>
			</td>
			<td><?php 
				// Acceso a la variable estatica y publica 
				echo Empleado::$tipo_sangre;		
			?>
			</td>
		</tr>
	</table>
</body>
</html>
