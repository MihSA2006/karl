$(document).ready( function() {
	resizeMainContent();
	sliceMessages();
	sliceUsername();
});

$(window).resize(e => {
	resizeMainContent();
	sliceUsername();
	sliceMessages();
});

function resizeMainContent() {
	bodyH = $('body').height();
	headerH = $('header').height();
	mainH = bodyH - headerH;

	MheaderH = $('#messages-panel-header').height();
	MfooterH = $('#messages-panel-footer').height();
	messageH = mainH - MheaderH - (MfooterH * 1);

	console.log(bodyH);
	console.log(headerH);
	console.log(mainH);
	console.log(MheaderH);
	console.log(MfooterH);
	console.log(messageH);

	$('#main').height(mainH + 'px');
	$('#users-panel').height(mainH + 'px');
	$('#messages-panel').height(messageH + 'px');
	$('#info-panel').height(mainH + 'px');
}

function sliceUsername() {
	var maxLength = 18;
	$('.user-username').each(function() {
		elementWidth = $('.user-messages-box').width();
		fontSize = parseInt($(this).css('font-size'));
		averageCharWidth = fontSize * 0.6;

		maxLength = Math.floor(elementWidth / averageCharWidth);
		maxLength -= 2;

		var text = $(this).attr('data-username');
		if (text.length > maxLength) {
			text = text.substr(0, maxLength) + "...";
		}
		$(this).text(text);
	});
}

function sliceMessages() {
	var maxLength = 30;
	$('.user-messages-preview').each(function() {
		elementWidth = $('.user-messages-box').width();
		fontSize = parseInt($(this).css('font-size'));
		averageCharWidth = fontSize * 0.6;

		maxLength = Math.floor(elementWidth / averageCharWidth);
		maxLength -= 2;

		var text = $(this).attr('data-messages');
		if (text.length > maxLength) {
			text = text.substr(0, maxLength) + "...";
		}
		$(this).text(text);
	});
}