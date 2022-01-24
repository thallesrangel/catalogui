$(function () {
	var category = $('#input-category').val();
	var category_id = $('#input-subcategory').val();

	$.ajax({
		url: `/subcategory/${category}`,
		type: "GET",
		data: {},
		dataType: 'json',
		success: function (res) {
			$.each(res, function (key, value) {
				let foo = (category_id == value.id) ? "selected":"";
				$(".input-subcategory").append('<option value="' + value.id + '" '+ foo +'>' + value.name + '</option>');
			});
		}
	});
	
	$('#input-category').on('change', function () {
		var idCategory = this.value;
		$("#input-subcategory").html('');
		$.ajax({
			url: `/subcategory/${idCategory}`,
			type: "GET",
			data: {},
			dataType: 'json',
			success: function (res) {
				//$('#input-subcategory').html('<option value="">Selecione uma opção 	</option>');
				$.each(res, function (key, value) {
					$("#input-subcategory").append('<option value="' + value.id + '">' + value.name + '</option>');
				});
			}
		});
	});
});