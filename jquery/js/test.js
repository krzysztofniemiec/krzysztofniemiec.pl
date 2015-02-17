$(document).ready(function() {
	
	
	
	setInterval(function(){
		eventTime = Date.parse('14 December 2014') / 1000;
		currentTime = Math.floor($.now() / 1000) ;
		seconds = eventTime - currentTime ;
		days = Math.floor(seconds/ (60* 60 * 24));
		hours = Math.floor(seconds / (60 * 60));
		minutes = Math.floor(seconds / 60);
		
		$('#feedback').text(seconds) ;
		$('#hours').text(hours);
		$('#days').text(days);
		$('#minutes').text(minutes);
	}, 1000);
	
	
	
});
