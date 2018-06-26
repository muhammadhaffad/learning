<?php

$host = "localhost";
$db_name = "sqli_db";
$user = "youruser";
$pass = "yourpass";

$db = mysqli_connect($host, $user, $pass, $db_name);

if( !$db ){
	die("Gagal terhubung dengan database: ".mysqli_connect_error());
}

?>
