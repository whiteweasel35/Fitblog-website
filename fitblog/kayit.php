<?php
session_start();

    include("baglanti.php");
	include("fonksiyonlar.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{      
		$kullanici_adi =   $_POST['kullanici_adi'];
		$kullanici_sifre = $_POST['kullanici_sifre'];
		$ad =              $_POST['ad'];
		$soyad =           $_POST['soyad'];  
		
		if(!empty($kullanici_adi) && !empty($kullanici_sifre) && !empty($ad) && !empty($soyad) && !is_numeric($ad) && !is_numeric($soyad)) 
		{
			
			$kullanici_id = random_sayi(20);  
			$query = "insert into kullanicilar (kullanici_id,kullanici_adi,kullanici_sifre,ad,soyad) values ('$kullanici_id','$kullanici_adi','$kullanici_sifre','$ad','$soyad')"; //sorgu
			mysqli_query($con, $query);
			header("Location: login.php"); 
			die;
		}	else 
		{
			echo "Tüm Kutuları Doldurunuz. Ad ve Soyad Numara olamaz"; 
		} 
	}
	
?>                                              


<!DOCTYPE html>
<html>
<head>
    <title>Kayit Ol</title>
	
</head>
<body>
    <style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{
                                    
		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: orange;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
	<div id="box">
	    
		<form method="post">
		    <div style: "font-size: 20px;margin: 10px;color: white;">Kayit Ol</div>
			
		    <input id="text" type="text" name="kullanici_adi" placeholder="Kullanici Adi"><br><br>
			<input id="text" type="password" name="kullanici_sifre" placeholder="Kullanici Sifre"><br><br>
			<input id="text" type="text" name="ad" placeholder="İsim"><br><br>
			<input id="text" type="text" name="soyad" placeholder="Soy İsim"><br><br>                
			                                                                   
			<input id="button" type="submit" value="Kayit Ol"><br><br>
			
			<a href="login.php">Giris Yap</a><br><br>
		</form>
	
</body>
</html>	