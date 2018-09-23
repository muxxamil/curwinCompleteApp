$(document).ready(function(){
	refreshUserQuota();
});

$("#officeLocationDropdown").change(function () {
    showOfficeLocationBookings(this.value, $("#bookingForDate").val());
});

function refreshUserQuota() {
	$.ajax({
	    url: 'controllers/ajax/get_user_quota.php',
	    type: 'GET',
	    dataType: "json",
	    data: {onlyLoggedInUser: true},
        success: (data) => {
        	console.log(data);
        	console.log(data.status);
		    if(data && data.status == 200) {
		    	$.ajax({
				    url: 'controllers/ajax/tpl/userHoursQuota.tpl.php',
				    type: 'POST',
				    dataType: "html",
				    data: {
				    	quota: data.body,
				    },
			        success: function(data){
					    $("#availableQuota").html(data);
					}
				});
		    } else {
		    	new PNotify({
					title: 'Error!',
					text: "Something went wrong to refresh Quota, Please contact Support.",
					type: 'error'
				});
		    }
		}
	});
}

function showOfficeLocationBookings(officeLocationId, date) {
	if(officeLocationId) {
	    $.ajax({
		    url: 'controllers/ajax/office_location_bookings.php',
		    type: 'GET',
		    dataType: "json",
		    data: {
		    	id: officeLocationId,
		    	date: date
		    },
	        success: (data) => {
			    if(data && data.status == 200) {
			    	if(data && data.body && data.body.length) {
			    		for (var i = 0; i < data.body.length; i++) {
						    data.body[i].from = moment(data.body[i].from).format('YYYY-MM-DD HH:mm:ss');
						    data.body[i].to = moment(data.body[i].to).format('YYYY-MM-DD HH:mm:ss');
						}
			    	}
			    	loadBookedSlots((data && data.body) ? data.body : []);
			    } else {
			    	$("#bookedSlots").html("<p class='text-danger'>Error! Booking cannot take place, Please contact support.</p>")
			    }
			}
		});
    } else {
    	$("#bookedSlots").html('');
    }
}

function loadBookedSlots(data) {
	if(data && data.length) {
		$.ajax({
		    url: 'controllers/ajax/tpl/bookedScheduleList.tpl.php',
		    type: 'POST',
		    dataType: "html",
		    data: {
		    	bookedSlots: data,
		    },
	        success: function(data){
			    $("#bookedSlots").html(data);
			}
		});
	} else {
	    $("#bookedSlots").html("<p class='text-danger'>No Booked Slots.</p>")
	}
	
}

$('.booking-schedule-form').each(function(){
	$(this).validate({
		submitHandler: function(form) {
			var $form = $(form),
			$messageError = $form.find('#add-edit-user-error');
			$messageSuccess = $form.find('#add-edit-user-success');

			// Fields Data
			var formData = $form.serializeArray(),
				requestData = {};

			$(formData).each(function(index, obj){
			    requestData[obj.name] = obj.value;
			});

			// Ajax Submit
			$.ajax({
				type: 'POST',
				url: $form.attr('action'),
				data: requestData
			}).always((data, textStatus, jqXHR) => {
				data = JSON.parse(data);
				if(!data || data.status != 200) {
					if(data.body && data.body.error && data.body.error.length) {
						for (var i = data.body.error.length - 1; i >= 0; i--) {
							new PNotify({
								title: 'Error!',
								text: data.body.error[i],
								type: 'error'
							});
						}
					} else {
						new PNotify({
							title: 'Error!',
							text: "Something went wrong, Please contact Support.",
							type: 'error'
						});
					}
				} else {
					showOfficeLocationBookings(requestData.rentalLocationId, $("#bookingForDate").val());
					refreshUserQuota();
					new PNotify({
						title: 'Success!',
						text: "Location has been booked",
						type: 'success'
					});
				}
			});
		}
	});
});