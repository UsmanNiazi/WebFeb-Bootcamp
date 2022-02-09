$(document).ready(function () {


	//Trend Slider
	$('.trend-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
		nextArrow: '.sli-next.trend',
		prevArrow: '.sli-prev.trend',
		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
					dots: true,

				}
					},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					prevArrow: null,
					nextArrow: null,
					dots: true,
				}
					},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					arrows: false,
				}
					}
				]

	});
	//Brand Slider
	$('.brand-slider').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
		nextArrow: '.sli-next.brand',
		prevArrow: '.sli-prev.brand',
		responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
				}
					},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					prevArrow: null,
					nextArrow: null,
				}
					},
			{
				breakpoint: 400,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					arrows: false,
				}
					}
				]
	});

	//Cbought
	$('.r-viewed-slider').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
		nextArrow: '.sli-next.r-viewed',
		prevArrow: '.sli-prev.r-viewed',
		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
				}
					},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					prevArrow: null,
					nextArrow: null,
				}
					},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
					}
				]
	});
	//Popular cat

	$('.popularcat-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
		nextArrow: '.sli-next.popularcat',
		prevArrow: '.sli-prev.popularcat',
		responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
					dots: true,
				}
					},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					arrows: false,
					dots: true,
				}
					},
			{
				breakpoint: 400,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					arrows: false,
				}
					}
				]
	});

	//Popular Item

	$('.popularitem-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
		nextArrow: '.sli-next.popularitem',
		prevArrow: '.sli-prev.popularitem',
		responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
					dots: true,
				}
					},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					arrows: false,
					dots: true,
				}
					},
			{
				breakpoint: 400,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					arrows: false,
				}
					}
				]
	});


	/* hovering link-image to highlight title*/
	$('.link-image').mouseover(function () {
		$(this).siblings('.title').addClass('link');
	});
	$('.link-image').mouseleave(function () {
		$(this).siblings('.title').removeClass('link');
	});
	/*End of Hover image in banner*/

	/*Fill heart font when it has liked class*/
	$('.heart').each(function () {
		heart = $(this);
		if (heart.hasClass("liked")) {
			heart.html('<i class="fas fa-heart" aria-hidden="true"></i>');
		} else {
			heart.html('<i class="far fa-heart" aria-hidden="true"></i>');
		}
	});
	/*Heart Clicked to fill heart*/
	$(".heart-button").click(function () {
		heart = $(this).find('.heart');
		if (heart.hasClass("liked")) {
			heart.html('<i class="far fa-heart" aria-hidden="true"></i>');
			heart.removeClass("liked");
		} else {
			heart.html('<i class="fas fa-heart" aria-hidden="true"></i>');
			heart.addClass("liked");
		}
	});
	/*End of Heart Fill*/


});
