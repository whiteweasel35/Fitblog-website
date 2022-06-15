<?php

session_start();

    include("baglanti.php");
	include("fonksiyonlar.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{      
		$kullanici_adi =   $_POST['kullanici_adi'];
		$kullanici_sifre = $_POST['kullanici_sifre']; 
		
		if(!empty($kullanici_adi) && !empty($kullanici_sifre))
		{
			
			
			$query = "select * from kullanicilar where kullanici_adi = '$kullanici_adi' limit 1";
			$result = mysqli_query($con, $query);
			if($result)
			{                                               
				if($result && mysqli_num_rows($result) > 0) 
		        {
			      $user_data = mysqli_fetch_assoc($result);    
			      if($user_data["kullanici_sifre"] === $kullanici_sifre)
				  {   
			          $_SESSION['kullanici_id'] = $user_data['kullanici_id'];
					  header("Location: index.php");
			          die;
				  }
		        } 
			}
			echo "Geçerli İd ve Şifre Giriniz";
		}	else 
		{
			echo "Geçerli İd ve Şifre Giriniz";
		} 
	}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	
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
		    <div style: "font-size: 20px;margin: 10px;color: white;">Login</div>
			
		    <input id="text" type="text" name="kullanici_adi" placeholder="Kullanici Adi"><br><br>
			<input id="text" type="password" name="kullanici_sifre" placeholder="Kullanici Sifre"><br><br>
			                      
			<input id="button" type="submit" value="Login"><br><br>  
			 
			<a href="kayit.php">Kayıt Ol</a><br><br>
		</form>
	
</body>
</html>	


