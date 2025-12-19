
$(document).ready(function() {
	fetch_suggestions();
});

function fetch_suggestions(query) {
	url = $('#base_url').val() + "Suggestion/fetch_suggestions";
	idCountry = $('#idCountry').val();
	console.log(idCountry);
	$.ajax({
		url: url,
		method:"POST",
		data:{
			'idCountry': idCountry
		},
		success:function(data) {
			console.log(data);
			$('#suggestion-content').html(data);
		}
	});
}
