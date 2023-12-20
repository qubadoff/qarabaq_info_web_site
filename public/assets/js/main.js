(function ($) {
	"use strict";

/*=============================================
	=    		 Preloader			      =
=============================================*/
function preloader() {
	$('#preloader').delay(0).fadeOut();
};

$(window).on('load', function () {
	preloader();
	mainSlider();
	wowAnimation();
	aosAnimation();
	tg_title_animation();
});



/*=============================================
	=    		Mobile Menu			      =
=============================================*/
//SubMenu Dropdown Toggle
if ($('.menu-area li.menu-item-has-children ul').length) {
	$('.menu-area .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

}

//Mobile Nav Hide Show
if ($('.mobile-menu').length) {

	var mobileMenuContent = $('.menu-area .main-menu').html();
	$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);

	//Dropdown Button
	$('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function () {
		$(this).toggleClass('open');
		$(this).prev('ul').slideToggle(300);
	});
	//Menu Toggle Btn
	$('.mobile-nav-toggler').on('click', function () {
		$('body').addClass('mobile-menu-visible');
	});

	//Menu Toggle Btn
	$('.menu-backdrop, .mobile-menu .close-btn').on('click', function () {
		$('body').removeClass('mobile-menu-visible');
	});
}



/*=============================================
	=     Menu sticky & Scroll to top      =
=============================================*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#sticky-header").removeClass("sticky-menu");
        $('.scroll-to-target').removeClass('open');
		$("#header-fixed-height").removeClass("active-height");

	} else {
		$("#sticky-header").addClass("sticky-menu");
        $('.scroll-to-target').addClass('open');
		$("#header-fixed-height").addClass("active-height");
	}
});


/*=============================================
	=    		 Scroll Up  	         =
=============================================*/
if ($('.scroll-to-target').length) {
  $(".scroll-to-target").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);

  });
}


/*=============================================
	=            Header Search            =
=============================================*/
$(".header-search > a").on('click', function () {
	$(".search-popup-wrap").slideToggle();
	return false;
});

$(".search-close").on('click', function () {
	$(".search-popup-wrap").slideUp(500);
});


/*=============================================
=     Offcanvas Menu      =
=============================================*/
$(".menu-tigger").on("click", function () {
	$(".extra-info,.offcanvas-overly").addClass("active");
	return false;
});
$(".menu-close,.offcanvas-overly").on("click", function () {
	$(".extra-info,.offcanvas-overly").removeClass("active");
});



/*=============================================
	=          Data Background               =
=============================================*/
$("[data-background]").each(function () {
	$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
})


/*=============================================
	=    		 Main Slider		      =
=============================================*/
function mainSlider() {
	var BasicSlider = $('.slider-active');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: false,
		autoplaySpeed: 10000,
		dots: false,
		fade: true,
		arrows: false,
		responsive: [
			{ breakpoint: 767, settings: { dots: false, arrows: false } }
		]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}


/*=============================================
	=    		Brand Active		      =
=============================================*/
$('.brand-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: false,
	slidesToShow: 5,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});

/*=============================================
	=    		services Active		      =
=============================================*/
$('.services-active').slick({
	dots: true,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: false,
	slidesToShow: 3,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    		Brand Active		      =
=============================================*/
$('.testimonial-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	fade: true,
	arrows: true,
	prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-right-arrow"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right-arrow"></i></button>',
	appendArrows: ".testimonial-nav",
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
});



/*=============================================
	=    		testimonial Active		      =
=============================================*/
$('.testimonial-active-two').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: true,
	prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-right-arrow"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right-arrow"></i></button>',
	appendArrows: ".testimonial-nav-two",
	slidesToShow: 2,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
});



/*=============================================
	=    		testimonial Active		      =
=============================================*/
$('.testimonial-active-three').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
    fade: true,
	arrows: true,
	prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-right-arrow"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right-arrow"></i></button>',
	appendArrows: ".testimonial-nav-three",
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
});


/*=============================================
	=    		testimonial Active		      =
=============================================*/
$('.testimonial-active-four').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: true,
	prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-right-arrow"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right-arrow"></i></button>',
	appendArrows: ".testimonial-nav-four",
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
});



/*=============================================
	=    		testimonial Active		      =
=============================================*/
$('.testimonial-active-five').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: true,
	prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-right-arrow"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right-arrow"></i></button>',
	appendArrows: ".testimonial-nav-five",
	vertical: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
});


/*=============================================
	=         Project Active           =
=============================================*/
if (jQuery(".project-active").length > 0) {
	let courses = new Swiper(".project-active", {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		autoplay: false,
		breakpoints: {
			500: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 2.5,
				spaceBetween: 20,
			},
			992: {
				slidesPerView: 3.5,
				spaceBetween: 20,
			},
			1200: {
				slidesPerView: 3.5,
				spaceBetween: 20,
			},
			1500: {
				slidesPerView: 4,
				spaceBetween: 24,
			},
		},
		// If we need pagination
		pagination: {
			el: ".project-swiper-pagination",
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		// And if we need scrollbar
		scrollbar: {
			el: ".swiper-scrollbar",
		},
	});
}

/*=============================================
	=    		pricing Active  	       =
=============================================*/
$(".pricing-tab-switcher, .tab-btn").on("click", function () {
	$(".pricing-tab-switcher, .tab-btn").toggleClass("active"),
	$(".pricing-tab").toggleClass("seleceted"),
	$(".pricing-price, .pricing-price-two").toggleClass("change-subs-duration");
});


/*=============================================
	=          services Active               =
=============================================*/
$('.services-item-two').hover(function () {
	$(this).find('.services-content-two p').slideToggle(300);
	return false;
});


/*=============================================
	=        Team Social Active 	       =
=============================================*/
$('.social-toggle-icon').on('click', function () {
	$(this).parent().find('ul').slideToggle(400);
	$(this).find('i').toggleClass('fa-times');
	return false;
});


/*=============================================
	    =           Partical JS        =
=============================================*/
if ($('.banner-area-three, .banner-area-five').length) {
	const colors = ["#FF4D4D", "#1AD6FF", "#FFCD4D", "#BB6BD9", "#1A66FF"];

	const numBalls = 30;
	const balls = [];

	for (let i = 0; i < numBalls; i++) {
		let ball = document.createElement("div");
		ball.classList.add("ball");
		ball.style.background = colors[Math.floor(Math.random() * colors.length)];
		ball.style.left = `${Math.floor(Math.random() * 100)}%`;
		ball.style.top = `${Math.floor(Math.random() * 100)}%`;
		ball.style.transform = `scale(${Math.random()})`;
		ball.style.width = `${Math.random() * 10}px`;
		ball.style.height = ball.style.width;
		balls.push(ball);

		$('.banner-area-three, .banner-area-five').append(ball);
	}

	balls.forEach((el, i, ra) => {
		let to = {
			x: Math.random() * (i % 2 === 0 ? -10 : 11),
			y: Math.random() * 12
		};

		let anim = el.animate(
			[
				{ transform: "translate(0, 0)" },
				{ transform: `translate(${to.x}rem, ${to.y}rem)` }
			],
			{
				duration: (Math.random() + 1) * 2000,
				direction: "alternate",
				fill: "both",
				iterations: Infinity,
				easing: "ease-in-out"
			}
		);
	});
}


/*=============================================
	    =           Partical JS        =
=============================================*/
if ($('.about-area-six').length) {
	const colors = ["#FF4D4D", "#1AD6FF", "#FFCD4D", "#BB6BD9", "#1A66FF"];

	const numBalls = 30;
	const balls = [];

	for (let i = 0; i < numBalls; i++) {
		let ball = document.createElement("div");
		ball.classList.add("ball");
		ball.style.background = colors[Math.floor(Math.random() * colors.length)];
		ball.style.left = `${Math.floor(Math.random() * 100)}%`;
		ball.style.top = `${Math.floor(Math.random() * 100)}%`;
		ball.style.transform = `scale(${Math.random()})`;
		ball.style.width = `${Math.random() * 10}px`;
		ball.style.height = ball.style.width;
		balls.push(ball);

		$('.about-area-six').append(ball);
	}

	balls.forEach((el, i, ra) => {
		let to = {
			x: Math.random() * (i % 2 === 0 ? -10 : 11),
			y: Math.random() * 12
		};

		let anim = el.animate(
			[
				{ transform: "translate(0, 0)" },
				{ transform: `translate(${to.x}rem, ${to.y}rem)` }
			],
			{
				duration: (Math.random() + 1) * 2000,
				direction: "alternate",
				fill: "both",
				iterations: Infinity,
				easing: "ease-in-out"
			}
		);
	});
}

/*=============================================
	    =           Partical JS        =
=============================================*/
if ($('.testimonial-area-five').length) {
	const colors = ["#FF4D4D", "#1AD6FF", "#FFCD4D", "#BB6BD9", "#1A66FF"];

	const numBalls = 30;
	const balls = [];

	for (let i = 0; i < numBalls; i++) {
		let ball = document.createElement("div");
		ball.classList.add("ball");
		ball.style.background = colors[Math.floor(Math.random() * colors.length)];
		ball.style.left = `${Math.floor(Math.random() * 100)}%`;
		ball.style.top = `${Math.floor(Math.random() * 100)}%`;
		ball.style.transform = `scale(${Math.random()})`;
		ball.style.width = `${Math.random() * 10}px`;
		ball.style.height = ball.style.width;
		balls.push(ball);

		$('.testimonial-area-five').append(ball);
	}

	balls.forEach((el, i, ra) => {
		let to = {
			x: Math.random() * (i % 2 === 0 ? -10 : 11),
			y: Math.random() * 12
		};

		let anim = el.animate(
			[
				{ transform: "translate(0, 0)" },
				{ transform: `translate(${to.x}rem, ${to.y}rem)` }
			],
			{
				duration: (Math.random() + 1) * 2000,
				direction: "alternate",
				fill: "both",
				iterations: Infinity,
				easing: "ease-in-out"
			}
		);
	});
}


/*=============================================
	=          easyPieChart Active          =
=============================================*/
function easyPieChart() {
	$('.circle-item').on('inview', function (event, isInView) {
		if (isInView) {
			$('.chart').easyPieChart({
				scaleLength: 0,
				lineWidth: 10,
				trackWidth: 10,
				size: 160,
				rotate: 360,
				animate: 3000,
				trackColor: '#2A3E66',
				barColor: '#0055FF',
			});
		}
	});
}
easyPieChart();


/*-------------------------------------
Intersection Observer
-------------------------------------*/
if (!!window.IntersectionObserver) {
let observer = new IntersectionObserver((entries, observer) => {
	entries.forEach(entry => {
	if (entry.isIntersecting) {
		entry.target.classList.add("active-animation");
		//entry.target.src = entry.target.dataset.src;
		observer.unobserve(entry.target);
	}
	});
}, {
	rootMargin: "0px 0px -100px 0px"
});
document.querySelectorAll('.has-animation').forEach(block => {
	observer.observe(block)
});
} else {
document.querySelectorAll('.has-animation').forEach(block => {
	block.classList.remove('has-animation')
});
}


/*=============================================
	=    		 Jarallax Active  	         =
=============================================*/
$('.jarallax').jarallax({
	speed: 0.2,
});


/*=============================================
	=    		Odometer Active  	       =
=============================================*/
$('.odometer').appear(function (e) {
	var odo = $(".odometer");
	odo.each(function () {
		var countNumber = $(this).attr("data-count");
		$(this).html(countNumber);
	});
});


/*=============================================
	=    		Magnific Popup		      =
=============================================*/
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
		enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});


/*=============================================
	=    		 Wow Active  	         =
=============================================*/
function wowAnimation() {
	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 0,
		mobile: false,
		live: true
	});
	wow.init();
}


/*=============================================
	=           Aos Active       =
=============================================*/
function aosAnimation() {
	AOS.init({
		duration: 1000,
		mirror: true,
		once: true,
		disable: 'mobile',
	});
}


})(jQuery);