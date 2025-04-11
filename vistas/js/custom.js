
(function ($) {
	$(document).ready(function () {

		$(".banner-image").backstretch('vistas/assets/images/bannerthinking.jpg');
		$(".banner-image2").backstretch('vistas/assets/images/bannerdigital.jpg');
		$(".banner-image3").backstretch('vistas/assets/images/bannerevents.png');
		$(".banner-image4").backstretch('vistas/assets/images/bannercontacto.jpg');
		$(".banner-image5").backstretch('vistas/assets/images/banner-leermas.png');
		$(".banner-image6").backstretch('vistas/assets/images/banner-diccionario-marketing.png');
		$(".banner-image7").backstretch('vistas/assets/images/bannerdigitalservicios.png');
		$(".banner-image8").backstretch('vistas/assets/images/bannereventsservicios.png');
		$(".banner-image9").backstretch('vistas/assets/images/bannerthinkingservicios.png');
		$(".banner-image10").backstretch('vistas/assets/images/banner-filosofia.jpg');
		$(".banner-image11").backstretch('vistas/assets/images/banner-diccionario-marketing.png');
		$(".banner-image12").backstretch('vistas/assets/images/banner-terminos-marketing.jpg');
		$(".banner-image13").backstretch('vistas/assets/images/banner-nosotros.jpg');
		$(".banner-image14").backstretch('vistas/assets/images/absoluteplus.jpg');
		// Fixed header
		//-----------------------------------------------
		$(window).scroll(function () {
			if (($(".header.fixed").length > 0)) {
				if (($(this).scrollTop() > 0) && ($(window).width() > 767)) {
					$("body").addClass("fixed-header-on");
				} else {
					$("body").removeClass("fixed-header-on");
				}
			};
		});

		$(window).load(function () {
			if (($(".header.fixed").length > 0)) {
				if (($(this).scrollTop() > 0) && ($(window).width() > 767)) {
					$("body").addClass("fixed-header-on");
				} else {
					$("body").removeClass("fixed-header-on");
				}
			};
		});

		$('#quote-carousel').carousel({
			pause: true,
			interval: 6000,
		});
		$('#quote-carousel2').carousel({
			pause: true,
			interval: 4000,
		});
		//Scroll Spy
		//-----------------------------------------------
		if ($(".scrollspy").length > 0) {
			$("body").addClass("scroll-spy");
			$('body').scrollspy({
				target: '.scrollspy',
				offset: 152
			});
		}

		//Smooth Scroll
		//-----------------------------------------------
		if ($(".smooth-scroll").length > 0) {
			$('.smooth-scroll a[href*=#]:not([href=#]), a[href*=#]:not([href=#]).smooth-scroll').click(function () {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top - 151
						}, 1000);
						return false;
					}
				}
			});
		}

		// Animations
		//-----------------------------------------------
		if (($("[data-animation-effect]").length > 0) && !Modernizr.touch) {
			$("[data-animation-effect]").each(function () {
				var $this = $(this),
					animationEffect = $this.attr("data-animation-effect");
				if (Modernizr.mq('only all and (min-width: 768px)') && Modernizr.csstransitions) {
					$this.appear(function () {
						setTimeout(function () {
							$this.addClass('animated object-visible ' + animationEffect);
						}, 400);
					}, { accX: 0, accY: -130 });
				} else {
					$this.addClass('object-visible');
				}
			});
		};

		// Isotope filters
		//-----------------------------------------------
		if ($('.isotope-container').length > 0) {
			$(window).load(function () {
				$('.isotope-container').fadeIn();
				var $container = $('.isotope-container').isotope({
					itemSelector: '.isotope-item',
					layoutMode: 'masonry',
					transitionDuration: '0.6s',
					filter: "*"
				});
				// filter items on button click
				$('.filters').on('click', 'ul.nav li a', function () {
					var filterValue = $(this).attr('data-filter');
					$(".filters").find("li.active").removeClass("active");
					$(this).parent().addClass("active");
					$container.isotope({ filter: filterValue });
					return false;
				});
			});
		};

		//Modal
		//-----------------------------------------------
		if ($(".modal").length > 0) {
			$(".modal").each(function () {
				$(".modal").prependTo("body");
			});
		}

	}); // End document ready
})(this.jQuery);

// Funcion para desplegar menu con HOVER
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function () {
	if (this.matchMedia("(min-width: 768px)").matches) {
		$dropdown.hover(
			function () {
				const $this = $(this);
				$this.addClass(showClass);
				$this.find($dropdownToggle).attr("aria-expanded", "true");
				$this.find($dropdownMenu).addClass(showClass);
			},
			function () {
				const $this = $(this);
				$this.removeClass(showClass);
				$this.find($dropdownToggle).attr("aria-expanded", "false");
				$this.find($dropdownMenu).removeClass(showClass);
			}
		);
	} else {
		$dropdown.off("mouseenter mouseleave");
	}
});
$(document).ready(function () {
	//cuando cambie el input filtramos del each de lista-terminos
	$('#txt-buscador').change(function () {
		var txtBuscar = $(this).val();

		if ($(this).val() == "") {
			$('#lista-terminos li').show();
		}

		$('#lista-terminos li').each(function () {
			if ($(this).text().indexOf(txtBuscar) >= 0) {

			} else {
				$(this).hide();
			}
		});
	});

	var busquedaAnterior = "";
	$('#txt-buscador').bind('input', function () {
		var txtBuscar = $(this).val().toUpperCase();

		if ($(this).val() == "") {
			$('#lista-terminos li').show();
		}

		if (busquedaAnterior != "") {

		}

		//meter un span para resaltar el texto que se ha encontrado

		$('#lista-terminos li strong').each(function () {
			if ($(this).text().toUpperCase().indexOf(txtBuscar) >= 0) {
				$(this).parent().show();
				console.log($(this).html());
			} else {
				$(this).parent().hide();
			}
		});
	});
});

//ReplaceAll
String.prototype.replaceAll = function (search, replacement) {
	var target = this;
	return target.split(search).join(replacement);
};
//MENU INTERNO DE SERVICIOS
$(document).ready(function () {
	$('#menu_on').click(function () { // Al hacer click...
		$('body').toggleClass('visible_menu'); // Añadimos o eliminamos la clase 'visible_menu' al body
	})
});

$(document).ready(function () {
	$('.carouselfrases').carousel({
		interval: 3000
	});
});

$('#footer-form').submit(function (event) {
	event.preventDefault();
	var name2 = $('#name2').val();
	var email2 = $('#email2').val();
	var phone2 = $('#phone2').val();
	var message2 = $('#message2').val();

	grecaptcha.ready(function () {
		grecaptcha.execute('6Ld9GhkaAAAAALtdcJqqWcTWMUgQEiYEceQvt0N7', { action: 'subscribe_newsletter' }).then(function (token) {
			$('#footer-form').prepend('<input type="hidden" name="token" value="' + token + '">');
			$('#footer-form').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
			$('#footer-form').unbind('submit').submit();
		});;
	});
});
function cambia(imagen) {
	var ima = 'vistas/assets/images/' + imagen + '.jpg';
	document.getElementById("imagencambiante").src = ima;
	//alert(imagen);
}
function cambia2(imagen) {
	var ima = 'vistas/assets/images/home/' + imagen + '.jpg';
	document.getElementById("imagencambiante3").src = ima;
	//alert(imagen);
}
function cambia3(imagen) {
	var ima = 'vistas/assets/images/home/' + imagen + '.jpg';
	document.getElementById("imagencambiante2").src = ima;
	//alert(imagen);
}
function cambia4(imagen) {
	var ima = 'vistas/assets/images/home/' + imagen + '.jpg';
	document.getElementById("imagencambiante4").src = ima;
	//alert(imagen);
}
function cambia5(imagen) {
	var ima = 'vistas/assets/images/home/movil/' + imagen + '.png';
	document.getElementById("imagencambiante4").src = ima;
	//alert(imagen);
}
function cambia6(imagen) {
	var ima = 'vistas/assets/images/home/movil/' + imagen + '.png';
	document.getElementById("imagencambiante5").src = ima;
	//alert(imagen);
}
function cambia7(imagen) {
	var ima = 'vistas/assets/images/home/movil/' + imagen + '.png';
	document.getElementById("imagencambiante6").src = ima;
	//alert(imagen);
}
function cambia8(imagen) {
	var ima = 'vistas/assets/images/home/movil/' + imagen + '.png';
	document.getElementById("imagencambiante7").src = ima;
	//alert(imagen);
}

function cambia9(imagen) {
	var ima = 'vistas/assets/images/' + imagen + '.jpg';
	document.getElementById("imagencambiante2").src = ima;
	//alert(imagen);
}
function cambiarenombra(idimagen) {
	if (idimagen == '1') {
		document.getElementById("imagencambiante").style.display = 'block';
		document.getElementById("imagencambiante3").style.display = 'none';
		document.getElementById("imagencambiante4").style.display = 'none';
		document.getElementById("imagencambiante2").style.display = 'none';
	} else if (idimagen == '2') {
		document.getElementById("imagencambiante").style.display = 'none';
		document.getElementById("imagencambiante3").style.display = 'none';
		document.getElementById("imagencambiante4").style.display = 'none';
		document.getElementById("imagencambiante2").style.display = 'block';
	} else if (idimagen == '3') {
		document.getElementById("imagencambiante").style.display = 'none';
		document.getElementById("imagencambiante2").style.display = 'none';
		document.getElementById("imagencambiante4").style.display = 'none';
		document.getElementById("imagencambiante3").style.display = 'block';
	} else if (idimagen == '4') {
		document.getElementById("imagencambiante").style.display = 'none';
		document.getElementById("imagencambiante2").style.display = 'none';
		document.getElementById("imagencambiante3").style.display = 'none';
		document.getElementById("imagencambiante4").style.display = 'block';
		//IMAGENES EN MOVIL

	} else if (idimagen == '5') {
		document.getElementById("imagencambiante5").style.display = 'block';
		document.getElementById("imagencambiante6").style.display = 'none';
		document.getElementById("imagencambiante7").style.display = 'none';
		document.getElementById("imagencambiante8").style.display = 'none';
	} else if (idimagen == '6') {
		document.getElementById("imagencambiante5").style.display = 'none';
		document.getElementById("imagencambiante6").style.display = 'block';
		document.getElementById("imagencambiante7").style.display = 'none';
		document.getElementById("imagencambiante8").style.display = 'none';
	} else if (idimagen == '7') {
		document.getElementById("imagencambiante5").style.display = 'none';
		document.getElementById("imagencambiante6").style.display = 'none';
		document.getElementById("imagencambiante7").style.display = 'block';
		document.getElementById("imagencambiante8").style.display = 'none';
	} else if (idimagen == '8') {
		document.getElementById("imagencambiante5").style.display = 'none';
		document.getElementById("imagencambiante6").style.display = 'none';
		document.getElementById("imagencambiante7").style.display = 'none';
		document.getElementById("imagencambiante8").style.display = 'block';
	};
	//alert(idimagen);
}
