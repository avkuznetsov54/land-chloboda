$(function() {

	// BEGIN Прекращает воспроизведение видео после закрвтия модального окна
	$("#myModal-video-bt").on('click', function (e) {
		$("#myModal-video iframe").attr("src", $("#myModal-video iframe").attr("src"));
	});
	$("div#myModal-video").on('click', function (e) {
		$("#myModal-video iframe").attr("src", $("#myModal-video iframe").attr("src"));
	});
	//////

	// открывает fancybox при нажатии на div
	$("#object-images").on('click', function () {
		$.fancybox.open([
			{ src  : 'img/gallery/pic_01.jpg', opts : {	caption : 'First caption', thumb   : 'img/gallery/pic_01.jpg'}},
			{	src  : 'img/gallery/pic_02.jpg', opts : {	caption : 'Second caption', thumb   : 'img/gallery/pic_02.jpg'}}
		], 
		{
		loop : true
		});
	});
	////// END

	// BEGIN фильтр по квартирам
	$(".filter-button").click(function () {
		var value = $(this).attr('data-filter');
		if (value == "all") {
				$('.filter').show('1000');
		}
		else {
				$(".filter").not('.' + value).hide('3000');
				$('.filter').filter('.' + value).show('3000');
		}
	});
	if ($(".filter-button").removeClass("active")) {
		$(this).removeClass("active");
	}
	$(this).addClass("active");
	////// END

	// BEGIN Включаем Owl Carousel
	$(".owl-carousel").owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		dots: false
	});
	////// END

	// BEGIN Button Back to top
  $(window).scroll(function() {
		if($(this).scrollTop() > $(this).height()) {
			$('.top-move-bt').addClass('active');
		}else{
			$('.top-move-bt').removeClass('active');
		}
	});
	$('.top-move-bt').click(function() {
		$('html, body').stop().animate({scrollTop:0}, 'slow', 'swing')
	});
	////// END
	

});