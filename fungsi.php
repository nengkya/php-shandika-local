<?php

error_reporting(E_ALL);

ini_set('display_errors','1');

$connect = mysqli_connect('localhost','haga','~Ky4ky4ky4','phpdasar');

var_dump($connect);

/*
$mysqli_connect_errno = mysqli_connect_errno();

var_dump($mysqli_connect_errno);

if (mysqli_connect_errno()) {

	echo "Failed to connect to MySQL : " . mysqli_connect_error();	

	$mysqli_connect_error = mysqli_connect_error();

	var_dump($mysqli_connect_error);

} else {

	echo "Berhasil connect !";

}
*/

?>
