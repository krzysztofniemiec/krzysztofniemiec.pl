$(document).ready(function(){
	$('#program').load('program1.php');
	
	$('.container nav a').click(function() {
		var strona = $(this).attr('href');
		$('#program').hide().load(strona + '.php').fadeIn('normal');
		return false;
	});
});
