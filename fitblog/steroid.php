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
		<!-- filtering effects style -->
		<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
		<script type="text/javascript" src="js/jquery-min.js"></script>
	    <script src="js/jquery.quicksand.js" type="text/javascript"></script>
        <script src="js/jquery.easing.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
       	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
        <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
		<!-- Modern slider -->
		<link rel="stylesheet" href="modern-slide-in/css/sequencejs-theme.modern-slide-in.css" />
		

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
					<h1>STEROIDLER</h1>
				</div>
			<!--	<div class="filtering_menu fix">
					<ul>
						<li><a href="" class="act">All</a></li>
						<li><a href="">Print</a></li>
						<li><a href="">Web</a></li>
						<li><a href="">Photoshop</a></li>
						<li><a href="">Wordpress</a></li>
					</ul>
				</div>  -->
				<div class="portfolio_area fix">
						  
			
						   
						  <ul class="portfolio-area">	
							
										<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">	
										<div>
									   <span class="image-block">
										<a class="image-zoom" href="images/big/pic1.png" rel="prettyPhoto[gallery]" title="Wall-E"><img width="225" height="140" src="images/filter-thumbs/p1.png" alt="Wall-E" title="Wall-E" />                    
										</a>
										</span>
									   <div class="home-portfolio-text">
										<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Wall-E">sustanon</a></h2>
										<p class="post-subtitle-portfolio">released: 2021</p>
										<p1>SUSTANON etkin madde testosteronun (250 mg/ml) 4 farklı şeklini içeren derin kas içi
enjeksiyonluk berrak, açık sarı renkli bir çözeltidir. Her bir karton kutuda 1ml’lik 1 adet renksiz
cam ampul vardır.
 SUSTANON’un etkin maddeleri vücutta testosterona dönüşür. Testosteron androjen olarak
bilinen doğal erkeklik hormonudur.
 Testosteron erkeklerde testislerde (er bezlerinde) üretilen ve normal büyüme, gelişme ve erkek
cinsiyet organları ile ikincil erkek cinsiyet özelliklerinin gelişimi için gerekli olan doğal
erkeklik hormonudur. Vücut kılları, kemik ve kas gelişimi için gerekli olup kırmızı kan
hücrelerinin üretimini uyarır. Erkeklerde sesin kalınlaşmasını da sağlar.
 SUSTANON erişkin erkeklerde testosteron yetmezliğine bağlı çeşitli sağlık problemlerinde
(erkekte hipogonadizm adı verilen durum) testosteronun yerine konması için kullanılır.</p1>
										</div>
										
										</div>	
										</li>			
												
																
										<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">	
										<div>
									   <span class="image-block">
										<a class="image-zoom" href="images/big/pic2.jpg" rel="prettyPhoto[gallery]" title="Up"><img width="225" height="140" src="images/filter-thumbs/p3.jpg" alt="Up" title="Up" />                    
										</a>
										</span>
									   <div class="home-portfolio-text">
										<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Up">Testestoron</a></h2>
										<p class="post-subtitle-portfolio">released: 2021</p>
										<p1>Testosterone Enanthate, tüm zamanların en eski ve belki de en yaygın kullanılan anabolik steroididir. Testosteron Enanthate, testosteron hormonunun yavaş etkili bir salım formudur ve sentetik olarak üretilen uzun ester testosteron formudur. Sentetik testosteronun kendisi 1930’larda geliştirilmiştir. Üretilen ilk testosteron partilerinde ester bağı yoktu (Testosteron Süspansiyonu) ve kanda çok hızşı bir şekilde emildiği için ve çok sık enjeksiyon gerektirmekteydi. 1937’de ilk ester bağı yani kontrollü salınımlı testosterone testosteron Schering firması tarafından Testosteron Propionat olarak pazara girmiştir. Bununla birlikte, 1950’lerin başında Testosterone Enanthate’da daha büyük bir ester hormona eklenmiş ve böylece hormonun salınımı süresi daha da uzatılmıştır. Bu süreçte Testosteron Enanthate tıp alanında en yagın kullanılan testosteron formu olmuş ve daha sonra Testosteron Cypionate da piyasaya sürülmüştür. Testosteron Enanthate ve Testosteron Cypionate arasındaki fark neredeyse önemsizdir.</p1>
										</div>
										
										</div>	
										</li>				
									 
													
											<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">	
										<div>
									   <span class="image-block">
										<a class="image-zoom" href="images/big/pic3.jpg" rel="prettyPhoto[gallery]" title="Cars 2"><img width="225" height="140" src="images/filter-thumbs/p2.jpg" alt="Cars 2" title="Cars 2" />                    
										</a>
										</span>
									   <div class="home-portfolio-text">
										<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Cars 2">primabolan</a></h2>
										<p class="post-subtitle-portfolio">released: 2021</p>
										<p1>Tıbbi alanda, metenolon, kas kaybı ve şiddetli kilo kaybının bir semptom olduğu durumlardan muzdarip bireyleri tedavi etmek için kullanılır. Diğer kullanımlar arasında şunlar vardır: enfeksiyonlarla mücadele eden bireyler için bir bağışıklık uyarıcı, uzun süreli kortikosteroid tedavisinin etkilerine karşı bir destek ve osteoporozun yanı sıra sarkopeni (yaşlanma ile ilişkili olarak kas kaybı) tedavisi. Primo, Anavar gibi, olumsuz etkilerinin çok hafif olduğu kanıtlanmış olduğu gibi, çocuklarda ve bebeklerde de, erken doğmuş bebeklerde kilo alımını teşvik etmek amacıyla, herhangi bir yan etki veya toksisite belirtisi olmaksızın kullanılmıştır. Bu anabolik steroidin cazibesinin, atletik ve vücut geliştirme topluluğunun içinden nerede geldiğini kolayca görebilirsiniz, çünkü çok az yan etki ile zayıf androjenik etkiler sergileyen bir bileşiktir.

 

In vücut geliştirme alan, birçok sporcu ve vücut geliştiriciler yağsız kas kütlesi kazanmak için metenolon enantat / metenolon enantat tozu alır.Methenolone enthate özellikle sporcular için eğilerek ve kalori kısıtlaması sırasında mümkün olduğunca fazla kas korumak için attemptiong için çok popüler bir seçenektir. Birçok rekabetçi vücut geliştiricisi, metenolon ilavesiyle bir ön yarışma yığınını düşünmeyecekti. Metenolon enantat aşırı derecede düşük bir androjenik profile sahip orta derecede ananboliktir. Anabolik etkiler, androjenik yan etkilerin kayda değer ölçüde daha az olduğu durumlarda DECA durabolin ile karşılaştırılabilir. Primo döngüsünde alacağınız kazançlar, kaliteli kasta yavaş bir kazanç olacaktır. Döngününüzü tamamladıktan sonra kazançları birkaç ay boyunca tutabilirsiniz.</p1>
										</div>
										
										</div>	
										</li>		
												
								
																	
										<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">	
										<div>
									   <span class="image-block">
										<a class="image-zoom" href="images/big/pic5.jpg" rel="prettyPhoto[gallery]" title="Finding Nemo"><img width="225" height="140" src="images/filter-thumbs/p5.jpg" alt="Finding Nemo" title="Finding Nemo" />                    
										</a>
										</span>
									   <div class="home-portfolio-text">
										<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="Finding Nemo">Clenbuterol</a></h2>
										<p class="post-subtitle-portfolio">released: 2021</p>
										<p1>Clenbuterol hap şeklinde olup astım hastalığı olan insanların tedavilerinde kullanılan bir steroid türevidir. 1970 yıllında veterinerlerin hayvanlarda kullandıkları bir tedavi olarak doğmuş daha sonrasında ise insanlarda ki astım hastalığı içinde doktor kontrolünde tedavi amaçlı belirli dozlarda kullanılmaya başlamıştır. Fakat daha sonraları çoğu ünlü sanatçıların ve sporcuların da kullanmasıyla popüler hale gelmiştir. (Sporcuların yağ yakmak için kullandıkları dozlar insanlara zararlıdır. Doktorların verdikleri dozlar yağ yakmak için değil sadece astım hastaları içindir ve sporcuların yağ yakması için gereken dozun çok çok altındadır. )

</p1>
										</div>
										
										</div>	
										</li>			
												
																
									
											
							
											
									

								
											<div class="column-clear"></div>
						  </ul><!--end portfolio-area -->

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
	
		<script type="text/javascript" src="js/selectnav.min.js"></script>
		<script type="text/javascript">
			selectnav('nav', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
		</script>		
	</body>
</html>
