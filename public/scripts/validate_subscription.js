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