<?php


function login_kontrol($con)  
{
	if(isset($_SESSION['kullanici_id']))   
	{
		
		$id = $_SESSION['kullanici_id'];            
		$query = "select * from kullanicilar where kullanici_id = '$id' limit 1";    
		
		$result = mysqli_query($con,$query);   
		if($result && mysqli_num_rows($result) > 0) 
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;             
		}
	}
	
	header("Location: login.php");
	die;
}

function random_sayi($uzunluk)    
{
	$text= "";
	if($uzunluk < 5)
	{
		$uzunluk = 5;
	}
	$uzun = rand(4,$uzunluk);
	for($i=0; $i < $uzun; $i++){
		$text .= rand(0,9);
	}
	return $text;
}