$(document).ready(function() {
	var form = $('#form'); // contact form
	var submit = $('#submit');	// submit button
	var alert = $('.alert'); // alert div for show alert message

	form.submit(function(event) {

		// get the form data
		var formData = {
			'name' 				: $('input[name=name]').val(),
			'email' 			: $('input[name=email]').val(),
			'institution' 		: $('input[name=institution]').val(),
			'department' 		: $('input[name=department]').val(),
			'comment' 			: $('textarea[name=comment]').val()
		};

		// process the form
		$.ajax({
			type 		: 'POST', 
			url 		: 'process.php',
			data		: formData,
			dataType 	: 'json',
			beforeSend: function() {
				alert.fadeOut();
				submit.html('Sending...');
			},
			success		: function(data) {
				alert.html(data.message).fadeIn();
				form.trigger('reset');
				submit.html('Submit');
			}
		})

		.done(function(data) {
			console.log(data);
			if ( ! data.success) {
				if (data.errors.name) {
					$('#name-group').addClass('error-msg');
					$('#name-group').append('<div class="help-block text-danger">' + data.errors.name + '</div>');
					$('#name-group .help-block').delay(4000).fadeOut(600, function(){ $(this).remove(); });
				}
	
				if (data.errors.email) {
					$('#email-group').addClass('error-msg'); 
					$('#email-group').append('<div class="help-block text-danger">' + data.errors.email + '</div>'); 
					$('#email-group .help-block').delay(4000).fadeOut(600, function(){ $(this).remove(); });
				}
				
				if (data.errors.comment) {
					$('#message-group').addClass('error-msg'); 
					$('#message-group').append('<div class="help-block text-danger">' + data.errors.comment + '</div>');
					$('#message-group .help-block').delay(4000).fadeOut(600, function(){ $(this).remove(); });
				}
			}
	
		});
		
		event.preventDefault();
	});

});// JavaScript Document