$(document).ready(function(){

	$(".phoneMask").inputmask("+7 (999) 999-9999");

	$(".phoneMask").on({
		keydown: function(e) { if (e.which === 32 || e.which === 37 || e.which === 39 || e.which === 38 || e.which === 40) return false; },
		change: function() { this.value = this.value.replace(/\s/g, ""); }
	});

	jQuery(function() {
		jQuery("a[href^='#']").bind('click', function() {
			var _href=jQuery(this).attr("href");
			jQuery("html, body").animate({
				scrollTop:jQuery(_href).offset().top+"px"},800);
			return false;
		});
	});

	jQuery('.burger__wrapper').on('click',function(){
		jQuery('.sidebar').slideToggle(300);
	});

	jQuery('.search__btn-header').on('click',function(){
		console.log(123);
		jQuery('.search').slideToggle(300);
	});

	jQuery('.link__wrapper').slick({
		slidesToShow: 'unslick',
		responsive: [
		{
			breakpoint: 1250,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 770,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}
		]
	});

	jQuery('.project__gallery').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
	});



});
