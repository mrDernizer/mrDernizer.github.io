<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PPHU KOLO Figury ogrodowe Borów Wielki</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery.js"></script>
</head>
<body>
	<div class="wrapper">

	<header id="start">
		<h2 class="logo">PPHU KOLO</h2>
		<h3 class="logo">Figury ogrodowe w Borowie Wielkim</h3>
		<nav id="normal">
			<ul>
				<li value="#about">O nas</li>
				<li value="#baner_beton">Figury Betonowe</li>
				<li value="#baner_kolor">Figury Żywiczne</li>
				<li value="#contact">Kontakt</li>
				<li class="last" value="#map">Mapa</li>
			</ul>
		</nav>
		<!-- Przyklejona nawigacja -->
		<nav id="sticky">
			<div>
				<a class="logo_nav">
					<h4 value="#start">PPHU KOLO</h4>
					<h5 value="#start">Figury ogrodowe w Borowie Wielkim</h5>
				</a>
				<ul>
					<li value="#about">O nas</li>
					<li value="#baner_beton">Figury Betonowe</li>
					<li value="#baner_kolor">Figury Żywiczne</li>
					<li value="#contact">Kontakt</li>
					<li class="last" value="#map">Mapa</li>
				</ul>
			</div>
		</nav>
	</header>

	<article>
		<section class="baner" id="baner_top">
			<h2>Upiększ swój ogród razem z Nami</h2>
		</section>

		<section id="about">
			<h3>Czym się zajmujemy?</h3>
			<hr>
			<p>Produkujemy figury ogrodowe z betonu oraz żywicy. Cechuje nas długoletnie doświadczenie, ponieważ na rynku jesteśmy od blisko 20 lat. Siedziba naszej firmy mieści się w Borowie Wielkim. Obsługujemy zarówno małych jak i większych klientów.</p>
			<p>Wyroby z betonu powstają na bazie wysokiej jakości cementu białego 52,5. Dzięki czemu są niezwykle odporne na działanie warunków atmosferycznych. W naszej ofercie znajdziesz wszelakiego rodzaju figury, takie jak fontanny, wazony, kolumny, figury zwierząt, czy postaci świętych... Nie sposób wymienić je wszystkie, ponieważ posiadamy blisko 500 szt. wzorów.</p>
			<p>Natomiast figury z tworzywa sztucznego powstają na bazie żywicy polimat 14%, które również są odporne na działanie warunków atomosferycznych. Podobnie jak z figurami betonowymi oferta jest niezwykle szeroka, tego rodzaju figur posiadamy jeszcze więcej, bo aż blisko 1000 szt. wzorów.</p>
		</section>

		<section class="baner" id="baner_beton">
			<h2>Figury Betonowe</h2>
		</section>

		<section class="gallery">
			<p>Oto kilka przykładowych figur wykonanych z betonu, pamiętaj, że to wyłącznie namiastka naszej oferty.</p>
			<div class="gallery-grid">
				<div class="gallery-wrapper">
					<img src="img/galeria/beton/beton_02.png" alt="">
					<div class="gallery-hover"><p>To tylko testowy tekst</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/beton/beton_03.png" alt="">
					<div class="gallery-hover"><p>To tylko testowy tekst</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/beton/beton_04.png" alt="">
					<div class="gallery-hover"><p>To tylko testowy tekst</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/beton/beton_01.png" alt="">
					<div class="gallery-hover"><p>To tylko testowy tekst</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/beton/beton_05.png" alt="">
					<div class="gallery-hover"><p>To tylko testowy tekst</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/beton/beton_06.png" alt="">
					<div class="gallery-hover"><p>To tylko testowy tekst</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/beton/beton_07.png" alt="">
					<div class="gallery-hover"><p>To tylko testowy tekst</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/beton/beton_08.png" alt="">
					<div class="gallery-hover"><p>To tylko testowy tekst</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/beton/beton_09.png" alt="">
					<div class="gallery-hover"><p>To tylko testowy tekst</p></div>
				</div>
			</div>
		</section>

		<section class="baner" id="baner_kolor">
			<h2>Figury Żywiczne</h2>
		</section>

		<section class="gallery">
			<p>A tutaj kilka przykładowych figur wykonanych z żywicy.</p>
			<div class="gallery-grid">
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_01.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_02.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_03.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_04.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_05.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_06.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_07.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_08.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_09.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_09.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_09.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
				<div class="gallery-wrapper">
					<img src="img/galeria/zywica/zywica_09.png" alt="">
					<div class="gallery-hover"><p>A tutaj inny</p></div>
				</div>
			</div>
		</section>

		<section id="contact">
			<h3>Skontaktuj się z nami</h3>			
			<hr>

			<div class="contact_wrapper">
				<p class="contact">
					<img class="icon" src="img/ikony/tel.png" alt="Ikona telefonu">
					<span>
						<img class="flag" src="img/ikony/pl.png" alt="Ikona flagi Polski">
						<a href="tel:+48604110304">+48 604 110 304</a>
						<br>
						<img class="flag" src="img/ikony/de.png" alt="Ikona flagi Niemiec">
						<a href="tel:+49692477408">+49 692 477 408</a>
					</span>
				</p>
				<p class="contact">
					<img class="icon" src="img/ikony/adres.png" alt="Ikona lokalizacji">
					<span>
						Borów Wielki 12 B
						<br>
						67-124 Nowe Miasteczko
					</span>
				</p>
				<p class="contact">
					<img class="icon" src="img/ikony/mail.png" alt="Ikona maila">
					<a href="mailto:grzegorzszumilas0619@wp.pl">grzegorzszumilas0619@wp.pl</a>
				</p>
			</div>

			<form method="post" action="check.php" onsubmit="true" novalidate>
        <label for="name">Imię:</label>
        <input type="text" id="name" name="name">
        <span id="name-error" class="error-message"></span>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
        <span id="email-error" class="error-message"></span>
        <br>

        <label for="message">Treść wiadomości:</label>
        <textarea id="message" name="message" rows="5" cols="30"></textarea>
        <span id="message-error" class="error-message"></span>
        <br>
				
				<?php
					require 'CaptchasDotNet.php';

					$captchas = new CaptchasDotNet ('mrDernizer', 'mrdernizer@gmail.com',
																					'/tmp/captchasnet-random-strings','3600',
																					'abcdefghkmnopqrstuvwxyz','6',
																					'240','80','000088');
					
				?>
				<input type="hidden" name="random" value="<?php $captchas->random ()?>" />
				<?= $captchas->image () ?> 

				<input id="captcha" name="captcha" size="6" />
        <span id="captcha-error" class="error-message"></span>


        <input type="submit" value="Wyślij">
    	</form>

		</section>

		<section id="map">
			<h3>Znajdź nas tutaj</h3>
			<hr>
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2473.622495225789!2d15.60303241530931!3d51.68505270551997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4706019454c1da67%3A0xd91e88c731d160e1!2sBor%C3%B3w%20Wielki%2012%2C%2067-125%20Bor%C3%B3w%20Wielki!5e0!3m2!1spl!2spl!4v1681181084484!5m2!1spl!2spl" width="520" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</section>

	</article>

	</div>

	<footer>
	<div class="footer-wrapper">

		<div class="left">
			<p class="contact">
				<img class="icon" src="img/ikony/tel_footer.png" alt="Ikona telefonu">
				<span>
					<img class="flag" src="img/ikony/pl.png" alt="Ikona flagi Polski">
					<a href="tel:+48604110304">+48 604 110 304</a>
					<br>
					<img class="flag" src="img/ikony/de.png" alt="Ikona flagi Niemiec">
					<a href="tel:+49692477408">+49 692 477 408</a>
				</span>
			</p>
			<p class="contact">
				<img class="icon" src="img/ikony/adres_footer.png" alt="Ikona lokalizacji">
				<span>
					Borów Wielki 12 B
					<br>
					67-124 Nowe Miasteczko
				</span>
			</p>
			<p class="contact">
				<img class="icon" src="img/ikony/mail_footer.png" alt="Ikona maila">
				<a href="mailto:grzegorzszumilas0619@wp.pl">grzegorzszumilas0619@wp.pl</a>
			</p>
		</div>
		<div class="right">
			Wszelkie prawa zastrzeżone © P.P.H.U Kolo 2023 
			<br>
			Wykonawca projektu: Marian Szkoda
		</div>

	</div>
	</footer>
</body>
<script src="script.js"></script>
</html>