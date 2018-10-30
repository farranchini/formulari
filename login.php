<?php

$usuari_l=$_POST['usuari'];
$clau=$_POST['contrasenya'];

$conexio=mysqli_connect("localhost", "root", "", "usuaris");
$consulta="SELECT * FROM dades WHERE usuari='$usuari_l' and contrasenya='$clau'";
$resultat=mysqli_query($conexio, $consulta);

$files=mysqli_num_rows($resultat);

if ($files>0) {
	header("location:benvingut.html");
}else {
	echo "Error en la autentificacio<br><a href='index.html'>Tornar</a>";
}
mysqli_free_result($resultat);
mysqli_close($conexio);

?>