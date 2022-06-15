<?php
session_start();

    include("baglanti.php");
	include("fonksiyonlar.php");
    
    $user_data = login_kontrol($con);           
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
			<title>FİT BLOGA HOŞGELDİNİZ</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" media="screen">	
		<link href="responsive.css" rel="stylesheet" media="screen">	
		
		<script src="js/jquery-min.js"></script>

	
	</head>

	<body>
	
	
		<div class="header_area">
			<div class="fix header">
				<div class="logo fix floatleft">
					<a href="#"><h1>Fit<span>BLOG</span></h1></a>
				</div>
				<div class="mainmenu floatright">
					<ul id="nav">
				        <li><a href="index.php">ANA SAYFA</a></li>
			
						<li><a href="beslenme.php">BESLENME</a></li>
						<li><a href="steroid.php">STEROIDLER</a></li>
						<li><a href="yag.php">YAG OLCUMLERI</a></li>
					    <li><a href="logout.php">LOG OUT</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header_bottom_area"></div>
		<div class="main_content_area fix">
			<div class="content_area structure">
				<div class="single_header_title">
					<h1>YAĞ ÖLÇÜMLERİ</h1>
					
				</div>
				
				<div class="single_content_area">
					<div class="single_main_content floatleft">
						<div class="google_map fix">
											<center><img src="https://cf.kizlarsoruyor.com/q10402843/63117102-b9bd-475f-b93a-a4366abdfa42.jpg" width="500" height="500"/></center>
				
						</div>
						<div class="cf_container">
								<p>AŞAĞIDAKİ PANELDEN VUCUT KİTLE ENDEKSİNİZİ HESAPLAYABİLİRSİNİZ.</p>
							<div class="address floatleft">
						
						
							</div>
							
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="JavaScript" type="text/javascript">
<!--
function hesapla() {
var kilo = document.KitleForm.kilo.value
var boy = document.KitleForm.boy.value
if(kilo > 0 && boy > 0){  
var sonuc = kilo/(boy/100*boy/100)
document.KitleForm.endeks.value = sonuc
if(sonuc < 18.5){
document.KitleForm.islemsonucu.value = "Zayıfsınız"
}
if(sonuc > 18.5 && sonuc < 25){
document.KitleForm.islemsonucu.value = "Gayet Sağlıklı."
}
if(sonuc > 25){
document.KitleForm.islemsonucu.value = "Şişmansınız."
}
}
else{
alert("Böyle kilo,boy olmaz tekrar dene")
}
}
//-->
</script>
</head>

<body>
<form name="KitleForm">
Kilo(kg): <input type="text" name="kilo" size="10"><br />
Boy(cm): <input type="text" name="boy" size="10"><br />
<input type="button" value="Kontrol Et" onClick="hesapla()"><br />
Vücut Kitle Endeksiniz: <input type="text" name="endeks" size="10"><br />
Sonuca Göre: <input type="text" name="islemsonucu" size="25"><br />
<input type="reset" value="Temizle" />
</form>
</body>

							<div class="cf floatright">
							
							</div>
						</div>
					</div>
					<div class="single_sidebar_area floatright">
						<div class="single_sidebar">

							<h2><span>YAĞ VE VUCUT KİTLE İNDEXİ</span></h2>
							<p>Sıklıkla kullanılan vücut kitle indeksinin aksine, boy ve kilodan bağımsız olarak vücut kompozisyonu hakkında bilgi veren vücut yağ oranı, kişinin sağlığı ve kondisyonunu belirlemek açısından önemli bir veridir. Vücut kitle indeksi, vücut yağ oranını hesaba katmadığı için özellikle kas oranı normalden yüksek olan bireyleri şişman ya da obez sınıfında değerlendiren hatalı sonuçlar verebilir.

Klinikte kullanılan çok yaygın bir method olsa da yağ oranı her şey değildir!

Yağ oranı daha çok sağlıklı olup olmamakla ilişkilendirilmelidir.. </p>
						</div>
		

						<div class="single_sidebar">
							<h2><span>kategoriler</span></h2>
							<ul class="category_list">
								<li><a href="">sağlık</a></li>
								<li><a href="">beslenme</a></li>
								<li><a href="">uyku</a></li>
								<li><a href="">antreman</a></li>
								<li><a href="">yaşam</a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
						<div class="single_sidebar">
							<h2><span>Photo Gallery</span></h2>
							<div class="gallery_container">
								<img src="images/galley_photo.png" alt="" title=""/>
								<img src="images/galley_photo.png" alt="" title=""/>
								<img src="images/galley_photo.png" alt="" title=""/>
								<img src="images/galley_photo.png" alt="" title=""/>
								<img src="images/galley_photo.png" alt="" title=""/>
								<img src="images/galley_photo.png" alt="" title=""/>
								<img src="images/galley_photo.png" alt="" title=""/>
								<img src="images/galley_photo.png" alt="" title=""/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fix footer_area">
			<div class="fix footer">
				<div class="fix single_footer_container">
					<div class="fix single_footer floatleft">
						<h2>AMACIMIZ</h2>
						<p>SİZ DEĞERLİ ÜYELERİMİZİ SAĞLIK VE GÖRÜNTÜ AÇISINDAN EN DÜZGÜN YERE ULAŞTIRMAYI HEDEFLİYORUZ </p>
						<br/>
						<p>HERHANGİ BİR PARA VB BİRŞEY ALMADAN SAĞLIĞINIZA KAVUŞMANIZ BİZİ MUTLU EDECEKTİR</p>
					</div>
					<div class="fix single_footer floatleft">
						<h2>BİZİ BURALARDAN TAKİP EDEBİLİRSİNİZ</h2>
						<p>@fitblog<br/>twitter adresimiz</p><br/>
						<p>@fitlog instagram adresimiz</p><br/>
					
					</div>
					<div class="fix single_footer floatleft">
						<h2>iletişim için</h2>
						<p>0555 555 55 55</p>
						<br/>
						<p>information@fitblog.com</p>
						<p>1.222.333.4444</p>
						<div class="fix social_area">
							<ul>
								<li><a href="#" class="facebook">facebook</a></li>
								<li><a href="#" class="twitter">twitter</a></li>
								<li><a href="#" class="email">email</a></li>
								<li><a href="#" class="feed">feed</a></li>
								<li><a href="#" class="vimeo">vimeo</a></li>
	</body>
</html>
