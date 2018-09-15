
function headerScroll() {
	var scroll = jQuery(window).scrollTop();
	if(scroll > 100) {
		jQuery('.page-header').addClass('scrolled');
	} if(scroll < 100) { 
		jQuery('.page-header').removeClass('scrolled');
	}
}
jQuery(document).ready(headerScroll);
jQuery(document).scroll(headerScroll);

function historySlider() {
	var count = jQuery('.history__case').length;
	var activeInd = jQuery('.active').index();

	console.log(count);

	jQuery('.history__year').each(function(i){
		var leftPos = i * 18 + 50 - 18 * activeInd;
		jQuery(this).css('left',leftPos+ '%');
	});
	var j = activeInd;
	jQuery('.history__btn--next').on('click', function(e){
		e.preventDefault();

		if(j < (count - 1)) {
			j = j + 1;
			var activeInd = jQuery('.active').index();
			jQuery('.history__case').removeClass('active');
			jQuery('.history__case').eq(activeInd + 1).addClass('active');
			jQuery('.history__year').each(function(i){
				var leftPos = i * 18 + 50 - 18 * (activeInd + 1);
				jQuery(this).css('left',leftPos+ '%');
			});
		}
	});
	jQuery('.history__btn--prev').on('click', function(e){
		e.preventDefault();

		if(j > 0) {
			j = j - 1; 
			var activeInd = jQuery('.active').index();
			jQuery('.history__case').removeClass('active');
			jQuery('.history__case').eq(activeInd - 1).addClass('active');
			jQuery('.history__year').each(function(i){
				var leftPos = i * 18 + 50 - 18 * (activeInd - 1);
				jQuery(this).css('left',leftPos+ '%');
			});
		}		
	});
}
jQuery(document).ready(historySlider);



jQuery(document).ready(function(){

	function mainVideoResize() {
		var windowsWidth = jQuery(window).width();
		var windowsHeight = jQuery(window).height();
		var screenRes = windowsWidth / windowsHeight;
		if(screenRes > 1.23) {
			jQuery('#mainVideo').css({'width':'100%', 'height':'auto'});
		} if(screenRes < 1.23) {
			jQuery('#mainVideo').css({'width':'auto', 'height':'100%'});
		}
	}
	mainVideoResize();
	jQuery(window).resize(mainVideoResize);
	jQuery(document).ready(mainVideoResize);

	jQuery(function() {
		jQuery("a[href^='#']").bind('click', function() {
			var _href=jQuery(this).attr("href");
			jQuery("html, body").animate({
				scrollTop:jQuery(_href).offset().top+"px"},800);
			return false;
		});
	});

	jQuery('.page-header__search').on('click',function(e) {
		e.preventDefault();
		jQuery('#seach_block').slideToggle(200);
		jQuery('body').toggleClass('searchOpen');
		jQuery('.page-header').addClass('scrolled');
	});

	jQuery('.search__close').on('click',function(e) {
		e.preventDefault();
		jQuery('#seach_block').fadeOut(200);
		jQuery('body').removeClass('searchOpen');
		headerScroll();
	});


	/* Функция, которая делит строку по нескольким разделителям */
	String.prototype.xSplit = function(separators){
		return this
		.split(new RegExp(separators.join('|'), 'g'))
		.map(function(bar){ return bar.trim() });
	} 

	jQuery('.info-map__btn').on('click',function(){
		var scale = jQuery('#imapWrapper').css('transform').xSplit([", "]);
		scale = parseFloat(scale[3]);
		if(jQuery(this).hasClass('info-map__btn--plus')){
			scale = scale + 0.15;
		} if(jQuery(this).hasClass('info-map__btn--minus')){
			scale = scale - 0.15;
		}
		jQuery('#imapWrapper').css('transform','scale('+scale+')');
	});


	jQuery('.info-map__dot').on('click',function(){
		var status = jQuery(this).find('.info-map__text').css('display');
		if(status == 'none') {
			jQuery(this).find('.info-map__text').fadeIn(200);	
		}
		if(status == 'block') {
			jQuery(this).find('.info-map__text').fadeOut(200);	
		}		
	});
	jQuery('#imapWrapper').draggable();

	jQuery('.objects__btn').on('click',function(){
		var scale = jQuery('#imapRussiaWrapper').css('transform').xSplit([", "]);
		scale = parseFloat(scale[3]);
		if(jQuery(this).hasClass('objects__btn--plus')){
			scale = scale + 0.15;
		} if(jQuery(this).hasClass('objects__btn--minus')){
			scale = scale - 0.15;
		}
		jQuery('#imapRussiaWrapper').css('transform','scale('+scale+')');
	});
	jQuery('.objects__marker').on('click',function(){
		var status = jQuery(this).find('.objects__text').css('display');
		if(status == 'none') {
			jQuery(this).find('.objects__text').fadeIn(200);	
		}
		if(status == 'block') {
			jQuery(this).find('.objects__text').fadeOut(200);	
		}		
	});
	jQuery('#imapRussiaWrapper').draggable();

	function productParalax() {
		var scroll = jQuery(window).scrollTop();
		var windowsWidth = jQuery(window).width();
		var product = jQuery('.product').offset().top;
		var productHeight = jQuery('.product').height();
		// if(windowsWidth < 3000) {
			var counter = -((scroll - product) / scroll * 100) - windowsWidth / 20;	
		// }
		
		console.log(windowsWidth);
		jQuery('#product__paralax').css('top',counter + '%');
	}
	jQuery(document).ready(productParalax);
	jQuery(document).scroll(productParalax);

	function mainVideo() {
		var promoWidth = jQuery('.promo').width();
		var promoHeight = jQuery('.promo').height();
		var videoWidth = jQuery('#mainVideo').width();
		var videoHeight = jQuery('#mainVideo').height();

		if(promoWidth > videoWidth) {
			jQuery('#mainVideo').css({'width':'100%', 'height':'auto'});
		} if(promoHeight > videoHeight) {
			jQuery('#mainVideo').css({'width':'auto', 'height':'100%'});
		}
	}
	jQuery(window).resize(mainVideo);
	jQuery(document).ready(mainVideo);


	jQuery('.main-menu__burger-wrapper').on('click', function() {
		jQuery(this).find('.main-menu__burger').toggleClass('main-menu__burger--active');
		jQuery('.main-menu').slideToggle(300);
	});

	function menuHideShow() {
		var windowsWidth = jQuery(window).width();
		if (windowsWidth > 992) {
			jQuery('.main-menu').css('display','flex');
			jQuery('.main-menu__burger').removeClass('main-menu__burger--active');
		} if (windowsWidth < 992) {
			jQuery('.main-menu__burger--active').removeClass('main-menu__burger--active');
			jQuery('.main-menu').css('display','none');
		}
	};

	jQuery(document).ready(menuHideShow);
	// jQuery(document).scroll(menuHideShow);
	jQuery(window).resize(menuHideShow);


	ymaps.ready(initMap);
	function initMap(){ 
		var myMap = new ymaps.Map("contactMap", {            
			center: [59.387921, 28.611306],            
			zoom: 16,
		});

		myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
			hintContent: 'Юридический и физический адреса',
			balloonContent: 'Юридический и физический адреса',
		}, {
			iconLayout: 'default#image', 
			iconImageHref: 'http://sydphoep.beget.tech/wp-content/themes/softmasters/img/map/geo-tag.gif',
			iconImageSize: [45, 65],
			iconImageOffset: [-20, -55]
		}),

		myMap.behaviors.disable('scrollZoom');
		myMap.geoObjects.add(myPlacemark)
	}

});
