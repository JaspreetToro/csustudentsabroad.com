$(document).ready(function() {
	var form = $('#form'); // contact form
	var submit = $('#submit');	// submit button
	var alert = $('.alert'); // alert div for show alert message

	// form submit event
	/*form.validate({
		submitHandler: function (form) {
			$.ajax({
				url: 'submit.php', // form action url
				type: 'POST', // form submit method get/post
				dataType: 'json', // request type html/json/xml
				data: form.serialize(), // serialize form data 
				beforeSend: function() {
					alert.fadeOut();
					submit.html('Sending....'); // change submit button text
				},
				success: function(data) {
					alert.html(data).fadeIn(); // fade in response data
					form.trigger('reset'); // reset form
					submit.html('Send Email'); // reset submit button text
				}		
			});
			form.submit();			
		}
	});*/
	form.submit(function(event) {

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'name' 				: $('input[name=name]').val(),
			'email' 			: $('input[name=email]').val(),
			'institution' 		: $('input[name=institution]').val(),
			'department' 		: $('input[name=department]').val(),
			'message' 			: $('input[name=message]').val()
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'submit.php', // the url where we want to POST
			data		: formData, // our data object
			dataType 	: 'json' // what type of data do we expect back from the server
		})


		.done(function(data) {
	
			// log data to the console so we can see
			console.log(data);
	
			// here we will handle errors and validation messages
			if ( ! data.success) {
				
				// handle errors for name ---------------
				if (data.errors.name) {
					$('#name-group').addClass('error'); // add the error class to show red input
					$('#name-group').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
				}
	
				// handle errors for email ---------------
				if (data.errors.email) {
					$('#email-group').addClass('error'); // add the error class to show red input
					$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
				}
			} else {
	
				// ALL GOOD! just show the success message!
				$('form').append('<div class="alert alert-success">' + data.message + '</div>');
	
				// usually after form submission, you'll want to redirect
				// window.location = '/thank-you'; // redirect a user to another page
				alert('success'); // for now we'll just alert the user
				form.trigger('reset');
	
			}
	
		});


		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});// JavaScript Document