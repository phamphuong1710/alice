$(document).ready(function(){
	var pull = $('.icon');
	var menu = $('.primary-menu');
	$(pull).on('click',function(){
		menu.slideToggle();
	});
	$(window).resize(function(){
		var w = $(window).width();
		if (w>960 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
});
