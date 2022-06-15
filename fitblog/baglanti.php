<?php

$dbhost = "localhost";
$dbuser = "id16920009_root";
$dbpass = "CanSefer4135?";              
$dbname = "id16920009_fitblogdb";     

if(!$con= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Bağlantı Başarısız");      
}