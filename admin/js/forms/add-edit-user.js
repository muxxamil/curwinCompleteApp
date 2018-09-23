$('.add-edit-user').each(function(){
	$(this).validate({
		submitHandler: function(form) {
			var $form = $(form),
			$messageError = $form.find('#add-edit-user-error');
			$messageSuccess = $form.find('#add-edit-user-success');

			// Fields Data
			var formData = $form.serializeArray(),
				data = {};

			$(formData).each(function(index, obj){
			    data[obj.name] = obj.value;
			});

			// Ajax Submit
			$.ajax({
				type: 'POST',
				url: $form.attr('action'),
				data: data
			}).always(function(data, textStatus, jqXHR) {
				data = JSON.parse(data);
				if(!data || data.status != 200) {
					var errorHtml = "<ul class='mb-0'> <li>Unable to Add User.</li></ul>";
					if(data.body && data.body.error) {
						errorHtml = "<ul class='mb-0'>";
						for (var i = 0; i < data.body.error.length; i++) {
						    errorHtml += "<li>" + data.body.error[i] + "</li>";
						}
					}
					$messageError.html(errorHtml);
					$messageError.removeClass('d-none');
					$messageSuccess.addClass('d-none');
				} else {
					$messageSuccess.removeClass('d-none');
					$messageError.addClass('d-none');
				}
			});
		}
	});
});