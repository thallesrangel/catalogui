$(function () {
	/*
	var state = $('#input-states').val();
	var city_id = $('#city-data').val();
	
	
	$.ajax({
		url: `/cidades/${state}`,
		type: "GET",
		data: {},
		dataType: 'json',
		success: function (res) {
			$.each(res, function (key, value) {
				let foo = (city_id == value.id) ? "selected":"";
				$("#city").append('<option value="' + value.id + '" '+ foo +'>' + value.name + '</option>');
			});
		}
	});
	*/
	
	$('#input-states').on('change', function () {
		var siglaState = this.value;
		console.log(siglaState)
		$("#city").html('');
		$.ajax({
			url: `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${siglaState}/municipios`,
			type: "GET",
			data: {},
			dataType: 'json',
			success: function (res) {
				$('#city').html('<option value="">Selecione uma cidade	</option>');
				$.each(res, function (key, value) {
					$("#city").append('<option value="' + value.id + '">' + value.nome + '</option>');
				});
			}
		});
	});
});