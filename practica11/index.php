<html>
<head>
<title>practica 11 php</title>
</head>
<body>
	<?php
		//Jose Gildardo 
		//Usando variables en PHP
		echo "<h1>variables</h1>";
		$nombre='Jose Gildardo'; //tipo cadenas
		$apellidos='Hernandez de la Cruz';
		$edad=20;
		$salario=12345.50;
		$fechaNacimiento='23/07/1996';
		$estatus=true;
		echo $nombre.'<br/>';
		echo $apellidos.'<br/>';
		echo 'Nombre completo:'.$nombre.' '.$apellidos.'<br/>';
		echo 'TU EDAD ES: '.$edad.'<br/>';
		echo 'TU SALARIO ES:'.$salario;
	?>
	<h1>OPERADORES ARIDMETICOS</h1>
	<?php
		$a=5;
		$b=3;
		$suma=$a+$b;
		$resta=$a-$b;
		$multiplica=$a*$b;
		$divide=$a/$b;
		echo 'La suma de '.$a.'+'.$b.' es: '.$suma.'<br/>';
		echo 'La resta de '.$a.'-'.$b.' es: '.$resta.'<br/>';
		echo 'La multiplicacion de '.$a.'*'.$b.' es: '.$multiplica.'<br/>';
		echo 'La division de '.$a.'/'.$b.' es: '.$divide;
	?>
</body>
</html>
