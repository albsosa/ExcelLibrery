<?php 
namespace CodeHeroPHPUnit\Test;

//Podemos Observar varias de las convenciones que dijimos anteriormente 
//El nombre del archivo termina en Test
//El nombre de nuestra clase termina en Test y es igual al del archivo 
//Extendemos de la clase PHPUnit_Framework_TestCase
//Nuestra funcion comienza con test

class MiPrimerTest extends \PHPUnit_Framework_TestCase
{
	//Esta function no prueba ningun otra función pot lo tanto el nombre solo describe lo que hace 
	//en este caso vamos a probar que True es igual a True 

	public function testParaProbarQueTrueEsTrue()
	{
		$variableTrue = true;
		//primero vamos a ponerlo falso para que la prueba flle

		//Probar que $variableTrue sea True de verdad 
		$this->assertTrue($variableTrue);
	}
}
?>
