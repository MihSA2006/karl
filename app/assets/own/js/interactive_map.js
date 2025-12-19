countries = $('path');
nextLink = $('#next_link').val();
countryNameDisplay = $('#country_name');

$('path').each(function(index) {
	console.log(index + ",\t\t'" + $(this).attr('id') + "',\t\t'" + $(this).attr('data-name') + "',\t\t'" + $(this).attr("d") + "'\n");
	$(this).on("mousemove", e => {
		countryName = $(this).attr('data-name');
		$('#country_name').html(countryName);
	});

	$(this).click(e => {
		countryId = $(this).attr('id').toLowerCase();
		window.location.href = nextLink + countryId;
	});
});
