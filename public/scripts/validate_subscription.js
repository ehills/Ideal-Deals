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
			email: "Please enter a valid email address"
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.parent().next() );
		}
	});
});
$('form').submit(function(){
	
	var $formId = $(this).parents('form');
    var formAction = $formId.attr('action');

	$('#subscription_form').hide();
	$.post(formAction, function(){
		$('#subscribeForm').append('<p id="load">Thankyou for subscribing with Ideal Deals! You will receive an email shortly.</p>'); 
		$('#load').fadeIn(6000);  
	});
	
});
