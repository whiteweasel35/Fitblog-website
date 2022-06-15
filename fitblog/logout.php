<?php

session_start();

if(isset($_SESSION['kullanici_id']))
{
	unset($_SESSION['kullanici_id']);        
}

header("Location: login.php");
die;