$(document).ready(function() {
	// validate register form on ready and submit
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
				required: "Please enter your first and last name",
				minlength: "Your name must be at least 2 characters long"
			},
			email: { 
				email: "Please enter a valid email address",
				required: "Please enter an email address"
			},
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.parent().next() );
		}
	});
});

function formSubmit(){
	alert("submission!");
	var form_data = {
			name: $('#name').val(),
			email: $('#email').val(),
			ajax: '1'
		};
};

$('form').submit(function(){
		
	alert("submission!");
	var form_data = {
			name: $('#name').val(),
			email: $('#email').val(),
			ajax: '1'
	};

	$.ajax({
		url: "<?php echo site_url('contact/submit'); ?> ",
		type: 'POST',
		data: form_data,
		success: function(msg) {
			$('#subscription_form').hide();
			$('#subscribeForm').append(msg); 
			$('#load').fadeIn(1000);  
		}
	});
	
	return false;
	
});
