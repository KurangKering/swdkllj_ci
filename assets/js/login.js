$('document').ready(function() { 
	/* handling form validation */
	$("#login").validate({
		rules: {
			username : "required",
			password : "required",
		},
		messages: {
			username : "Harap Masukkan Username",
			password : "Harap Masukkan Password"
		},
		submitHandler: submitForm	
	});	   
	/* Handling login functionality */
	function submitForm() {		
		var data = $("#login").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'auth/login',
			data : data,
			beforeSend: function(){	

				$("#error").fadeOut();
				$("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Mengecek ...');
			},
			success : function(response){						
				if(response == 'YES'){									
					$("#login_button").html('<img src="assets/img/ajax-loader.gif" /> &nbsp; Signing In ...');
					setTimeout(' window.location.href = "band"; ',1000);
				} 
				else if (response == 'NO') {									
					$("#error").fadeIn(100, function(){						
						$("#error").html('<div class="alert alert-danger text-center"> <span class="glyphicon glyphicon-info-sign"></span> Username atau Password Salah</div>');
						$("#login_button").html('Login');
					});
				}
			}
		});
		return false;
	}   
});