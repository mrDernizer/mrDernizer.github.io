//----Zmiana między przyklejoną nawigacją, a normalną
window.addEventListener("scroll", function() {

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
//----Powolne przewijanie do elementu oraz nadanie klasy active
// document.addEventListener('click', function(event) {
// 	var id = "";
//   console.log(event);

//   //----Sprawdzanie, czy dany element znajduje się w menu nawigacji
//   //----Oraz przechwytywanie wartości value elementu, pewnie da się to zrobić lepiej, ale spełnia wymagania
//   //----Następnie powolny scroll do elementu o Id wyłuskanym z Value klikniętego obiektu 
//   if ((event.target.tagName === 'LI' || 
//   	event.target.tagName === 'H4' || 
//   	event.target.tagName === 'H5') && 
//   	event.target.attributes.getNamedItem('value') !== '') {
//   		id = event.target.attributes.getNamedItem('value').nodeValue;
//   		console.log(id);

//   		document.querySelector(id).scrollIntoView({ behavior: 'smooth' });

//   		//----Jeśli element to 'LI', dodatkowo dodaje do niego klasę active
//   		//----Usuwając poprzednio tą klasę z innego elementu
//   		if (event.target.tagName === 'LI') {
//   			var active = document.getElementsByClassName("active");

//   			console.log(active);
//   			console.log(event.target);

//   			if (active.length !== 0) {
// 					for (var i = 0; i < active.length; i++) {
// 						for (var j = 0; j < active[i].classList.length; j++) {
// 							console.log(active[i].classList[j]);
// 						  active[i].classList[j] = "";
// 						}
// 					}
//   			}
//   			event.target.classList.add('active');		
//   		}
//   }
// });

$('nav li').on('click', () => {
  $('.login-form').toggle();
});