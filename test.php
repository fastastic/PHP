<?php
	echo "Today is " . date("l") . ". \n";

	echo "Hello world!\n";

	//Comentario en PHP
	/* Comentario en PHP */

	//Todas las variables en PHP empiezan por $
	$variable = "Hola";
	echo $variable;

	$variable_numerica = 1.49;
	echo $variable_numerica;

	$variable_array = array('Elemento1', 'Elemento2', 'Elemento3', 'Elemento4');
	echo $variable_array[3];

	$variable_array_bidimensional = array(array('Elemento1', 'Elemento2'), array('Elemento3', 'Elemento4'));
	echo $variable_array_bidimensional[1][1];

	//Importante remarcar que siempre que nos referimos a una variable hay que poner $ delante
	++$variable_numerica;
	echo $variable_numerica;

	//Concatenacion de strings (.)
	echo "Son las " . "20:00h." . " Hasta luego!";
	$variable2 = "Persona, ";
	$variable2 .= $variable;
	echo $variable2;

	//Cuando queremos hacer un echo de una frase con el valor de una variable en medio utilizamos " "
	echo "El importe es de $variable_numerica, gracias.";

	//PHP asume el tipo adecuado para cada variable en el momeno que se accede
	$numero = 12345 * 67890;
	echo substr($numero, 3, 1); //aqui se asume que es un string, se pasa de numero a string

	$pi = "3.1415927";
	$radio = 5;
	echo $pi * ($radio * $radio); //se multiplica string por numero, se asume que pi es un numero

	//Definir constantes
	define("ROOT_LOCATION", "/usr/local/www/");
	$directory = ROOT_LOCATION;
	echo $directory;

	//Constantes predefinidas en PHP
	echo __DIR__; //etc...

	//Print
	$b = 1;
	$b ? print "TRUE" : print "FALSE";

	//Funciones
	function longdate($timestamp) {
		return date("l F jS Y", $timestamp);
	}
	echo longdate(time());

	//Variables estáticas: variable local en una función que mantiene su valor una vez la función acaba
	function test() {
		static $count = 0;
		echo $count;
		$count++;
	}

	//Variables SUPERGLOBALES, que son arrays en verdad
	$origen = $_SERVER['HTTP_REFERER'];
	$origen = htmlentities($_SERVER['HTTP_REFERER']); //Mejor así, ya que evitamos que encuentren xploits a través de las variables superglobales
	
	//TEMA 4: Expresiones y control de flujo

	echo "a: [" . TRUE . "]\n";
	echo "b: [" . FALSE . "]\n";

	$saldo = 100;

	while ($saldo > 0) {
		if ($saldo == 100) {
			print "Tienes $saldo euros\n";
		}
		elseif ($saldo != 100) {
			print "No tienes 100 euros\n";
		}
		$saldo = $saldo - 10;
	}
	switch($saldo) {
		case 100:
			echo "Tienes 100 euros\n";
			break;
		case 200:
			echo "No tienes 100 euros\n";
			break;
	}

	for ($count = 1; $count < 10; $count++) {
		echo "Hola\n";
	}

	$var = "100";
	$total = (int) $var - 10;
	echo $total . "\n";
?>