$(document).ready(function () {
    $('img.menu_class').click(function () {
	$('ul.the_menu').slideToggle('medium');
    });
	
	$('a.booking_class').click(function () {
	$('div.the_menu').slideToggle('medium');
    });
});