<?php
$hostName = "localhost";
$dataBase = "AulaPHP";
$user = "root";
$password = "";

$mysqli = new mysqli($hostName, $user, $password, $dataBase);

	if ($mysqli->connect_errno)
	{
	echo "Falha ao conectar:(" .$mysqli->connect_errno. "(" .$mysqli->connect_errno;
	}
?>

