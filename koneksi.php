<?php

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD","");
define("DATABASE", "stmik");

$mysqli=new mysqli(HOST,USER,PASSWORD,DATABASE);

if($mysqli->connect_error){
	trigger_error('koneksi gagal',$mysqli->connect_error,E_USER_ERROR);
}
?>