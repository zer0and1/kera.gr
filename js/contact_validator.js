var emailPat = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	function validateSubmit(){
		if( !$('#Name').val() || $('#Name').val() == ''{
			$('#jInfo').html('<div id="infoMsg" class="error"><b>Please, enter your name!</b></div>').show().fadeOut(5000);
			$('#Name')[0].focus();
			
		}
		
		else if( !$('#country').val() || $('#country').val() == ''{
			$('#jInfo').html('<div id="infoMsg" class="error"><b>Please, enter Phone No!</b></div>').show().fadeOut(5000);
			$('#Phone')[0].focus();
			
		}
/*
		else if( !$('#emailAddress').val() || $('#emailAddress').val() == ''{
			$('#jInfo').html('<div id="infoMsg" class="error"><b>Please, enter your email address!</b></div>').show().fadeOut(5000);
			$('#emailAddress')[0].focus();
			
		}
		else if(!emailPat.test($('#emailAddress').val()) ) {
		//createOverlay({title:'Required Field Missing',msg:'Please provide valid email address'});
			$('#jInfo').html('<div id="infoMsg" class="error">Please, enter valid email address!</div>').show().fadeOut(5000);
			$('#emailAddress')[0].focus();
			
		}
		else if( !$('#companyName').val() || $('#companyName').val() == '' || $('#companyName').val() == 'Company Name (if applicable)...'){
			$('#jInfo').html('<div id="infoMsg" class="error"><b>Please, enter company name!</b></div>').show().fadeOut(5000);
			$('#companyName')[0].focus();
			
		}
*/
		
		else if( !$('#textMessage').val() || $('#textMessage').val() == 'Message' ){
			$('#jInfo').html('<div id="infoMsg" class="error"><b>Please, leave your message!</b></div>').show().fadeOut(5000);
			$('#textMessage')[0].focus();
			
		}
		else{
			$('#jInfo').hide();
			$.post("verify.php",
   				{ emailTo: $('#emailTo').val(), Email: $('#emailAddress').val(), Name:$('#Name').val(), country: $('#country').val(), textMessage: $('#textMessage').val() },//work here
   					function(data){
						
						$('#jInfo').fadeIn(1000).html(data).fadeOut(5000);
					}
			);
		
		}
	}