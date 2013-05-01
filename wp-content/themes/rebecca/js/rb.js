/* SEAN JS */

$(document).ready(function(){
	
	var boxHeight = $('div.container').height();
	$('#one, #two, #three').css('height', boxHeight);
	$(window).resize(function () {$('#one, #two, #three').css('height', boxHeight);});

});