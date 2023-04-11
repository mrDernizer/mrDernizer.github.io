//----Zmiana między przyklejoną nawigacją, a normalną
window.addEventListener("scroll", function () {

	var mainNav = document.querySelector("#normal");
	var mainNavOffset = mainNav.offsetTop + 69;
	var scrollPosition = window.pageYOffset;

	var stickyNav = document.getElementById("sticky");
	var stickyNavBody = document.querySelector("nav#sticky div");

	if (scrollPosition >= mainNavOffset) {
		stickyNavBody.style.display = "block";
		stickyNav.style.opacity = "0.95";
	} else {
		stickyNavBody.style.display = "none";
		stickyNav.style.opacity = "0";
	}
});

//----Scrollowanie po nawigacji
$(".logo_nav").click(function () {
	$("nav li").removeClass("active");
	$('html, body').animate({
		scrollTop: 0
	}, 1000);
});

$("nav li").click(function () {
	$("nav li").removeClass("active");
	var id = $(this).attr("value");
	$("li[value='" + id + "']").addClass("active");
	var idOffset = $(id).offset().top - 90;
	$('html, body').animate({
		scrollTop: idOffset
	}, 1000);

	console.log(id);
	console.log(idOffset);
});

var about, baner_beton, baner_kolor, contact, map = 0;

about = $("#about").offset().top;
baner_beton = $("#baner_beton").offset().top;
baner_kolor = $("#baner_kolor").offset().top;
contact = $("#contact").offset().top;
map = $("#map").offset().top;

$(window).resize(function () {
	about = $("#about").offset().top;
	baner_beton = $("#baner_beton").offset().top;
	baner_kolor = $("#baner_kolor").offset().top;
	contact = $("#contact").offset().top;
	map = $("#map").offset().top;
});

$(window).scroll(function () {
	var scrollPos = $(window).scrollTop() + 100;
	$("nav li").removeClass("active");

	if (scrollPos >= about && scrollPos < baner_beton ) {
		$("li[value='#about']").addClass("active");
		console.log(scrollPos);
	}
	else if (scrollPos >= baner_beton && scrollPos < baner_kolor ) {
		console.log(scrollPos);
		$("li[value='#baner_beton']").addClass("active");
	}
	else if (scrollPos > baner_kolor && scrollPos < contact ) {
		console.log(scrollPos);
		$("li[value='#baner_kolor']").addClass("active");
	}
	else if (scrollPos > contact && scrollPos < map ) {
		console.log(scrollPos);
		$("li[value='#contact']").addClass("active");
	}
	else if (scrollPos > map) {
		$("nav li").removeClass("active");
		$("li[value='#map']").addClass("active");
	}
});

// Fallback for IE9
if (document.all && !window.atob) {
  var galleryItems = document.querySelectorAll('.wrapper');
  var galleryGrid = document.querySelector('.gallery-grid');
  
  for (var i = 0; i < galleryItems.length; i++) {
    galleryItems[i].style.width = '30%';
    galleryItems[i].style.margin = '1%';
  }
  
  galleryGrid.style.display = '-ms-flexbox';
  galleryGrid.style.msFlexWrap = 'wrap';
  galleryGrid.style.msFlexPack = 'center';
}

// Formularz kontaktowy, walidacja
function validateForm() {
	console.log("Działa walidacja");
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var message = document.getElementById("message").value;
	var captcha = document.getElementById("captcha").value;

	console.log(name, email, message, captcha);

	document.getElementById("name-error").innerHTML = "";
	document.getElementById("email-error").innerHTML = "";
	document.getElementById("message-error").innerHTML = "";
	document.getElementById("captcha-error").innerHTML = "";

	var isValid = true;

	if (name === '') {
			document.getElementById("name-error").innerHTML = "Pole Imię jest wymagane!";
			isValid = false;
	}
	else if (name.length <= 3) {
			document.getElementById("name-error").innerHTML = "Pole Imię ma być dłuższe od 3 znaków!";
			isValid = false;
	}

	if (email === '') {
			document.getElementById("email-error").innerHTML = "Pole E-mail jest wymagane!";
			isValid = false;
	}
	else if (!validateEmail(email)) {
		document.getElementById("email-error").innerHTML = "Proszę podać poprawny adres email.";
	}	

	if (message === '') {
			document.getElementById("message-error").innerHTML = "Pole Treść wiadomości jest wymagane!";
			isValid = false;
	}

	if (captcha === '') {
			document.getElementById("captcha-error").innerHTML = "Pole Kod Captcha jest wymagane!";
			isValid = false;
	}

	if (isValid) {
			alert("Formularz został wysłany!");
			return true;
	} else {
			return false;
	}
}

// Walidacja pola email
function validateEmail(email) {
	var emailPattern = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
	return emailPattern.test(email);
}