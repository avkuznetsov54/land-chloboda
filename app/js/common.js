$(function() {

	

});

$(document).ready(function() {

	// Прекращает воспроизведение видео после закрвтия модального окна
	$("#myModal-video-bt").on('click', function (e) {
		$("#myModal-video iframe").attr("src", $("#myModal-video iframe").attr("src"));
	});
	$("div#myModal-video").on('click', function (e) {
		$("#myModal-video iframe").attr("src", $("#myModal-video iframe").attr("src"));
	});

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


	

	

});