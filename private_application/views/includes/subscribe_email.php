<?php 
        /* Setting up email details */
        $recipient = $email;
        $subject = "Ideal Deals Subscription";
        $message = "Thank you for signing up with Ideal Deals!
The site is still under development but will be ready soon!
As soon as its up you will be one of the first people to know and be on your way to getting the best deals around!
							
If you did not sign up with this email address please email the staff at subscribe@idealdeals.com and we will have you taken off!
													
Thankyou for registering with Ideal Deals!";
        $header = "From: subscribe@idealdeals.com";
        mail($recipient, $subject, $message, $header);
        /* End of email */
        ?>