$(document).ready(function () {

	svg4everybody({});

	var lazyLoadInstance = new LazyLoad({});

	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);

	window.addEventListener('resize', () => {
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	});

	$('.header__link-search').on('click', function () {
		$('.header__search').addClass("open");
		return false;
	});
	$('.header__search-close').on('click', function () {
		$('.header__search').removeClass("open");
		return false;
	});

	$('.header__mobile_btn').on('click', function () {
		var btn = $(this);
		var menu = $(".header__mobile_menu");
		if (btn.hasClass("active")) {
			btn.toggleClass("active");
			menu.slideUp(300);
			$("body").removeClass("blocked");
		} else {
			btn.addClass("active");
			menu.slideDown(300);
			$("body").addClass("blocked");
		}
		return false;
	});

	$('.header__mobile_nav-dropdown .header__mobile_nav-item').on('click', function () {
		var dropdown = $(this).parent();
		var menu = dropdown.children(".header__mobile_nav-dropdown_block");
		if (dropdown.hasClass("active")) {
			dropdown.toggleClass("active");
			menu.slideUp(300);
		} else {
			dropdown.addClass("active");
			menu.slideDown(300);
		}
		return false;
	});

	if ($(window).width() < 750) {
		$('.popular_products-mobile_slider:not(.slick-initialized)').slick({
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			adaptiveHeight: true
		});
	} else {
		$(".popular_products-mobile_slider.slick-initialized").slick("unslick");
	}

	$(window).on('resize', function () {
		if ($(window).width() < 750) {
			$('.popular_products-mobile_slider:not(.slick-initialized)').slick({
				slidesToScroll: 1,
				arrows: false,
				dots: true,
				adaptiveHeight: true
			});
		} else {
			$(".popular_products-mobile_slider.slick-initialized").slick("unslick");
		}
	});

	if ($(window).width() < 750) {
		$('.blog_product-mobile_slider:not(.slick-initialized)').slick({
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			adaptiveHeight: true
		});
	} else {
		$(".blog_product-mobile_slider.slick-initialized").slick("unslick");
	}

	$(window).on('resize', function () {
		if ($(window).width() < 750) {
			$('.blog_product-mobile_slider:not(.slick-initialized)').slick({
				slidesToScroll: 1,
				arrows: false,
				dots: true,
				adaptiveHeight: true
			});
		} else {
			$(".blog_product-mobile_slider.slick-initialized").slick("unslick");
		}
	});

	$('.reviews-blocks').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		lazyLoad: 'ondemand',
		responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					adaptiveHeight: true
				}
			}
		]
	});

	if ($(window).width() > 991) {
		$('.catalog_page__categories-btn').on('click', function () {
			var btn = $(this);
			var list = btn.siblings(".catalog_page__categories-list");
			if (btn.hasClass("active")) {
				btn.toggleClass("active");
				list.slideUp(300);
			} else {
				btn.addClass("active");
				list.slideDown(300);
			}
			return false;
		});
	} else {
		$('.catalog_page__categories-btn').addClass("active");
	}
	
	$('#catalogFilterOpen').on('click', function () {
		$("body").addClass("blocked");
		$('#catalogFilterMenu').addClass("open");
		return false;
	});
	$('#catalogFilterClose').on('click', function () {
		$("body").removeClass("blocked");
		$('#catalogFilterMenu').removeClass("open");
		return false;
	});
	
	// Анимация появления на главной блоков и кнопки

	function mainCategoriesAnimate() {
		$(".main_categories__block").each(function(i, el) {
			var delay = 200;
			setTimeout(function() {
				$(el).addClass("show");
			}, delay + (i * delay));
		});
	}
	function mainCategoriesSignal() {
		var b = $(".main_categories-blocks");
		if (!b.prop("shown") && isVisible(b)) {
			b.prop("shown", true);
			mainCategoriesAnimate();
		}
	}
	$(function () {
		mainCategoriesSignal();
		$(window).scroll(mainCategoriesSignal);
	});


	Number.prototype.clamp = function(min, max) {
		return Math.min(Math.max(this, min), max);
	};
	(function($){
		$.fn.filterFind = function(selector) { 
			return this.find('*').addBack().filter(selector);
		};
	})(jQuery);
	(function($) {
		$.fn.svgDraw = function(progress) {
			this.filterFind('path').each(function() {
					var pathLength = this.getTotalLength();
					$(this).css('strokeDasharray', pathLength + ' ' + pathLength);
					$(this).css('strokeDashoffset', pathLength * ((1 - progress)).clamp(0, 1));
			});
			return this;
		};
	})(jQuery);

	$(".unique_program__btn.animate-btn-1 .border").svgDraw(0);
	$(".unique_program__btn.animate-btn-2 .border").svgDraw(0);

	function uniqueProgramAnimate1() {
		var button = $(".unique_program__btn.animate-btn-1");
		button.addClass('loading');
		var $progress = button.find('.border');
		var progress = 0;
		setInterval(function() {
			progress += Math.random() * 5;
			$progress.svgDraw(progress);
		}, 300);
	}
	function uniqueProgramAnimate2() {
		var button = $(".unique_program__btn.animate-btn-2");
		button.addClass('loading');
		var $progress = button.find('.border');
		var progress = 0;
		setInterval(function() {
			progress += Math.random() * 5;
			$progress.svgDraw(progress);
		}, 300);
	}

	function isVisible(tag) {
		var t = $(tag);
		var w = $(window);
		var wt = w.scrollTop();
		var tt = t.offset().top;
		var tb = tt + t.height();
		return ((tb <= wt + w.height()) && (tt >= wt));
	}
	function uniqueProgramSignal1() {
		var btn = $(".unique_program__btn.animate-btn-1");
		if (!btn.prop("shown") && isVisible(btn)) {
			btn.prop("shown", true);
			uniqueProgramAnimate1();
		}
	}
	function uniqueProgramSignal2() {
		var btn = $(".unique_program__btn.animate-btn-2");
		if (!btn.prop("shown") && isVisible(btn)) {
			btn.prop("shown", true);
			uniqueProgramAnimate2();
		}
	}
	$(function () {
		uniqueProgramSignal1();
		$(window).scroll(uniqueProgramSignal1);
	});
	$(function () {
		uniqueProgramSignal2();
		$(window).scroll(uniqueProgramSignal2);
	});


	$( ".personal_account__filter-select" ).selectmenu({
		classes: {
			"ui-selectmenu-button": "personal_account__filter-select-button",
			"ui-selectmenu-menu": "personal_account__filter-select-menu"
		},
		position: { my : "right top", at: "right bottom" }
	});
	$( ".creation_of_appeal-select" ).selectmenu({
		classes: {
			"ui-selectmenu-button": "personal_account__filter-select-button creation_of_appeal-select-button",
			"ui-selectmenu-menu": "personal_account__filter-select-menu creation_of_appeal-select-menu"
		},
		position: { my : "right top", at: "right bottom" },
		select: function( event, ui ) {
			$(this).siblings(".creation_of_appeal-select-button").addClass("selected");
		}
	});
	$( ".personal_data__item-select" ).selectmenu({
		classes: {
			"ui-selectmenu-button": "personal_account__filter-select-button creation_of_appeal-select-button personal_data__item-select-button",
			"ui-selectmenu-menu": "personal_account__filter-select-menu creation_of_appeal-select-menu personal_data__item-select-menu"
		}
	});
	$( ".ordering_page__radio-uiselect" ).selectmenu({
		classes: {
			"ui-selectmenu-button": "personal_account__filter-select-button ordering_page__radio-select-button",
			"ui-selectmenu-menu": "personal_account__filter-select-menu ordering_page__radio-select-menu"
		},
		position: { my : "right top", at: "right bottom" }
	});

	$(".personalAccountLike").click(function () {
		$(this).toggleClass("active");
	});

	$(".my_orders__block").each(function () {
		var block = $(this);
		var head = block.find(".my_orders__block-head");
		var body = block.find(".my_orders__block-body");
		var animationSpeed = 300;
		head.click(function () {
			if (block.hasClass("active")) {
				block.toggleClass("active");
				body.slideUp(animationSpeed);
			} else {
				block.addClass("active");
				body.slideDown(animationSpeed);
			}
		});
	});

	$(".creation_of_appeal__file").each(function () {
		var block = $(this);
		var field = block.find("input");
		var text = block.find(".creation_of_appeal__file-text");
		field.change(function(e){
			var fileName = e.target.files[0].name;
			text.text(fileName);
		});
	});

	$( "input.ui-date" ).datepicker();

	$("input[type='tel']").inputmask("+38 099 999 99 99");
	$("input.card_number").inputmask("9999 9999 9999 9999");
	$("input.validity").inputmask("99");
	$("input.cvv").inputmask("999");
	
	$(".modal_change__field").each(function () {
		var block = $(this);
		var field = block.find(".modal_change__field-input");
		var btn = block.find(".modal_change__field-eye");
		btn.click(function () {
			if (field.attr('type') == 'password'){
				field.attr('type', 'text');
				btn.addClass("active");
			} else {
				field.attr('type', 'password');
				btn.removeClass("active");
			}
			return false;
		});
	});

	$(document).on('click', '.cart__quantity-button--minus', function () {
		let total = $(this).next();
		let data = total.data('min');
		if (total.val() > data) {
			total.val(+total.val() - 1);
		}
	});
	$(document).on('click', '.cart__quantity-button--plus', function () {
		let total = $(this).prev();
		total.val(+total.val() + 1);
	});

	$(document).on('click', '.cart_new__quantity-button--minus', function () {
		let total = $(this).next();
		let data = total.data('min');
		if (total.val() > data) {
			total.val(+total.val() - 1);
		}
	});
	$(document).on('click', '.cart_new__quantity-button--plus', function () {
		let total = $(this).prev();
		total.val(+total.val() + 1);
	});


	$(".arcticmodal-btn").click(function () {
		var btnHref = $(this).attr('href');
		$(btnHref).arcticmodal();
		$(".arcticmodal-container_i2").animate({scrollTop: '0px'}, 300);
	});

	$(".arcticmodal-cart-btn").click(function () {
		var btnHref = $(this).attr('href');
		$(btnHref).arcticmodal();
		$(".arcticmodal-container_i2").addClass("cart-arcticmodal").animate({scrollTop: '0px'}, 300);
		if ($(window).width() < 767) {
			$(".cart_related_products-separator").remove();
			$('.cart_related_products-box.mobile-slider:not(.slick-initialized)').slick({
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: true,
				dots: false,
				infinite: false
			});
		} else {
			$(".cart_related_products-box.mobile-slider.slick-initialized").slick("unslick");
		}
		$(window).on('resize', function () {
			if ($(window).width() < 767) {
				$(".cart_related_products-separator").remove();
				$('.cart_related_products-box.mobile-slider:not(.slick-initialized)').slick({
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: true,
					dots: false,
					infinite: false
				});
			} else {
				$(".cart_related_products-box.mobile-slider.slick-initialized").slick("unslick");
			}
		});
	});

	$(".arcticmodal-btn-review_buyer").click(function () {
		var btnHref = $(this).attr('href');
		$(btnHref).arcticmodal();
		$(".arcticmodal-container_i2").animate({scrollTop: '0px'}, 300);
		$('.modalReviewBuyerSlider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: false
		});
	});
	$(".modalReviewBuyerSliderPrev").click(function(){
		$(".modalReviewBuyerSlider").slick("slickPrev");
	});
	$(".modalReviewBuyerSliderNext").click(function(){
		$(".modalReviewBuyerSlider").slick("slickNext");
	});

	$(".header__dropdown").hover(function(){
		$(this).addClass("open");
		$(this).find(".header__dropdown-box").show();
	}, function(){
		$(this).removeClass("open");
		$(this).find(".header__dropdown-box").hide();
	});

	$(".header__dropdown_min").hover(function(){
		$(this).addClass("open");
		$(this).find(".header__dropdown_min-box").show();
	}, function(){
		$(this).removeClass("open");
		$(this).find(".header__dropdown_min-box").hide();
	});

	$(".reviews_accordion-block").each(function () {
		var block = $(this);
		var head = block.find(".reviews_accordion__head");
		var toggle = block.find(".reviews_accordion__head-toggle");
		var body = block.find(".reviews_accordion__body");
		var animationSpeed = 300;
		toggle.click(function () {
			if (head.hasClass("active")) {
				head.toggleClass("active");
				body.slideUp(animationSpeed);
			} else {
				head.addClass("active");
				body.slideDown(animationSpeed);
			}
		});
	});

	$(".modal_feedback__add_file").each(function () {
		var block = $(this);
		var field = block.find("input");
		var text = block.find(".modal_feedback__add_file-name span");
		field.change(function(e){
			var fileName = e.target.files[0].name;
			text.text(fileName).addClass("file_selected");
		});
	});

	$(".productPageTabsNav").click(function () {
		if ($(this).hasClass("active")) {
			$(".productPageTabsNav").removeClass("active");
			$(".productPageTabsContent").hide();
		} else {
			$(".productPageTabsNav").removeClass("active").eq($(this).index()).addClass("active"); 
			$(".productPageTabsContent").hide().eq($(this).index()).fadeIn();
		}
		return false;
	});

	$('.product_page_main__quantity--subscription .product_page_main__quantity-field').each(function(i,d){
		var p = $(this).prop('checked');
		if(p){
		  $('.product_page_main__additional--subscription .product_page_main__additional-block').eq(i).addClass('active');
		}    
	});
	$('.product_page_main__quantity--subscription .product_page_main__quantity-field').on('change', function(){
		var p = $(this).prop('checked');
		var i = $('.product_page_main__quantity--subscription .product_page_main__quantity-field').index(this);
		$('.product_page_main__additional--subscription .product_page_main__additional-block').removeClass('active');
		$('.product_page_main__additional--subscription .product_page_main__additional-block').eq(i).addClass('active');
	});

});