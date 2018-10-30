<?php

	$conectar=@mysqli_connect('localhost','root','');

	if (!$conectar) {
		echo "No es pot conectar amb el servidor";
	} else{
		$base=mysqli_select_db($conectar ,'usuaris');
		if (!$base) {
			echo "No s'ha trobat la base de dades";
		}
	}

	$usuari=$_POST['usuari'];
	$contrasenya=$_POST['contrasenya'];
	$contrasenya2=$_POST['contrasenya2'];

	if ($contrasenya==$contrasenya2) {
		$sql="INSERT INTO dades VALUES('$usuari','$contrasenya')";
		$executar=mysqli_query($conectar, $sql);
		$executar;
		echo "Les dades s'han guardat correctament<br><a href='index.html'>Tornar</a>";	
	}else {
		echo "Les contrasenyes no coincideixen<br><a href='registre.html'>Tornar</a>";
	}
	?>

	