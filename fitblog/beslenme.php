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
		<!-- Modern slider -->
		<link rel="stylesheet" href="modern-slide-in/css/sequencejs-theme.modern-slide-in.css" />
		
		<script src="js/jquery-min.js"></script>
		<script>
		 if (typeof jQuery == 'undefined'){
		    document.write(unescape('%3Cscript src="modern-slide-in/scripts/jquery-min.js" %3E%3C/script%3E'));
		 }
		</script>
		<script src="modern-slide-in/scripts/jquery.sequence-min.js"></script>
		<script src="modern-slide-in/sequencejs-options.modern-slide-in.js"></script>
	</head>

	<body>
	
	
		<div class="header_area">
			<div class="fix header">
				<div class="logo fix floatleft">
					<a href="#"><h1>FİT<span>BLOG</span></h1></a>
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
					<h1>BESLENME </h1>
				</div>
				<div class="single_content_area">
					<div class="single_main_content floatleft">
						<img class="author_img" src="images/saglık.jpg" alt="" title=""/>
						<p>Alınan besinlerin içerik ve oranları fizyolojik olmalı
                       <br> Alınan enerji miktarına dikkat edilmeli 
                      <br>  Öğünler sık ve az olarak alınmalı 
                     <br>   Protein ve karbonhidrat oranlarına dikkat edilmeli.
                     <br>   Yağ sınırlamasına önem vermeli
                      <br>  Taze meyve ve sebze tüketimi artırılmalı
                     <br>   Enerji kaynağı olarak dengeli tahıl ürünleri tüketilmeli
                    <br>    Şeker ve tatlı tüketimi azaltılmalı
                    <br>    Su ve sıvı besin alımına dikkat edilmeli
                    <br>    Besinler, uygun saklanmalı ve uygun pişirilmeli
                    <br>    Düzenli egzersiz yapılmalı
					
						<div class="post_quote">
							<p> Sağlıklı beslenme, hem sağlığın hem de vücut formunun korunması açısından en önemli konulardan bir tanesidir. Bebeklerde anne sütü veya formülalar ile başlayan süreçten, yetişkinlik ve yaşlılık dönemine kadar tüm yaş gruplarında sağlıklı ve dengeli beslenme konusunda gerekliliklerin yerine getirilmesi, hastalıklardan korunmak ve ideal vücut kütlesine sahip olmak açısından büyük önem taşır. Vücutta günlük işlevlerin sorunsuz bir şekilde yerine getirilebilmesi için tüm besin ögelerinin eksiksiz bir şekilde karşılanması gerekir. Bunun sağlanabilmesi için sağlıklı ve dengeli beslenme elzemdir. Ek olarak her yaştan birey için obezite, akut ve kronik birçok hastalık türü için en önemli risk faktörleri arasında yer alır. Dolayısıyla sağlıklı beslenme ve enerji ihtiyacına uygun kalori alımı ile vücut kütlesinin ideal aralıkta tutulması, hastalıklardan korunmak ve sağlıklı bir yaşam sürebilmek adına oldukça önemlidir. Tüm bu nedenlerden dolayı, bebeklikten yaşlılığa kadar insan ömrünün her döneminde sağlıklı beslenme konusunda gerekli özen gösterilmeli ve bu konuda bilinçli davranmaya gayret edilmelidir.</p>
						</div>
						<p>Sağlıksız beslenmeye bağlı olarak görülebilen sorunlar nelerdir?
Dünya üzerinde sıklıkla görülen kronik hastalıkların pek çoğu beslenme ile doğrudan bir ilişki içerisindedir. Buna ek olarak sağlıksız ve dengesiz beslenme ile enfeksiyon hastalıkları başta olmak üzere birçok akut hastalığın da ortaya çıkış riskinde artış söz konusudur. Ülkemizde ve dünyada beslenmeye bağlı olarak en sık görülen sağlık sorunu obezitedir. Fazla kiloluluğun ileri bir boyutu olan obezite; kalp ve damar hastalıkları, diyabet, hormonal hastalıklar ve metabolik sendrom gibi birçok hastalığın en önemli risk faktörlerinden bir tanesidir. Sağlıksız, dengesiz veya yetersiz beslenme durumunda ortaya çıkan kötü beslenme tablosu, tıp dilinde malnütrisyon olarak adlandırılır. Malnütrisyon ile birlikte sıklıkla görülen sağlık sorunlarından bazıları şunlardır: </p>
						
					</div>
					<div class="single_sidebar_area floatright">
						<div class="single_sidebar">
							<h2><span>ÖRNEK TAVSİYELER</span></h2>
							<p>ÖRNEK TAVSİYELERLE İLGİLİ BİLGİLER</p>
						</div>
						<div class="single_sidebar">
					
							<h2><span>Photo Gallery</span></h2>
							<div class="gallery_container">
								<img src="images/elma.jpg" alt="" title=""/>
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
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	
	</body>
</html>

	</body>
</html>
