//Main content when document is ready:
$(document).ready(function (){	
	$('#main_content').load($('.menu_top:first').attr('href'));
});

//AJAX navigation:
$('.menu_top').click(function() {

	var href = $(this).attr('href');
	
	$('#main_content').hide().load(href).fadeIn('slow');
	return false;
});
//Dynamically add class 'active' to <li> tag and remove it from the others 
$('.menu_top').click(function() {
	
	var clicked = $(this).parent(),
		another = $('.menu_top').parent();
		
	another.removeClass('active');
	clicked.addClass('active');
});