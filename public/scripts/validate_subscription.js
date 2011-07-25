$(document).ready(function() {
	
	function displayResponse(msg) {
		$('#subscription_form').hide();
		$('#subscribeForm').append(msg); 
		$('#load').fadeIn(2000); 	
	};
	
	submitHandler: function formSubmit(form) {
		
		var form_data = {
				name: $('#name').val(),
				email: $('#email').val(),
				ajax: '1'
		};

		$.ajax({
			url: "http://localhost/IdealDeals/public/index.php/welcome/subscribe",
			type: 'POST',
			data: form_data,
			success: function(msg) {
				displayResponse(msg);
			}
		});
		
		return false;
	}

	//validate register form on ready and submit
	$("#subscription_form").validate({
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
		},
		messages: {
			name: {
				required: "Please enter your first and last name.",
				minlength: "Your name is too short."
			},
			email: { 
				email: "Please enter a valid email address.",
				required: "Please enter an email address."
			}
		},
		errorLabelContainer: "#messageBox",
   		wrapper: "li",
		submitHandler: formSubmit
	});
});