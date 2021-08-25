// JavaScript Document
$(document).ready(function(){
	
	var txt = Array();
	txt['name'] = "Your Name *";
	txt['email'] = "Your E-Mail Address *";
	txt['zip'] = "Your Postcode/Zip *";
	txt['accNo'] = "Your Account Number";
	txt['tel'] = "Telephone Number *";
	txt['detail'] = "Details *";
	
	$('#inputName').blur(function(){
		if($.trim($('#inputName').val()) == ''){
			$('#inputName').val( txt['name'] );
		}else{
			$('#inputName').removeClass('inputerror');									
		}
	});
	$('#inputName').focus(function(){
		if($.trim($('#inputName').val()) == txt['name']){
			$('#inputName').val('');
		}
	});
			
			
	$('#inputEmail').blur(function(){
		if($.trim($('#inputEmail').val()) == ''){
			$('#inputEmail').val( txt['email'] );
		}else{
			$('#inputEmail').removeClass('inputerror');							
		}
	});
	$('#inputEmail').focus(function(){
		if($.trim($('#inputEmail').val()) == txt['email']){
			$('#inputEmail').val('');
		}
	});
	
	
	$('#inputZip').blur(function(){
		if($.trim($('#inputZip').val()) == ''){
			$('#inputZip').val( txt['zip'] );
		}else{
			$('#inputZip').removeClass('inputerror');								
		}
	});
	$('#inputZip').focus(function(){
		if($.trim($('#inputZip').val()) == txt['zip']){
			$('#inputZip').val('');
		}
	});
	
	
	$('#inputAccNo').blur(function(){
		if($.trim($('#inputAccNo').val()) == ''){
			$('#inputAccNo').val( txt['accNo'] );
		}else{
			$('#inputAccNo').removeClass('inputerror');								
		}
	});
	$('#inputAccNo').focus(function(){
		if($.trim($('#inputAccNo').val()) == txt['accNo']){
			$('#inputAccNo').val('');
		}
	});
					
	$('#inputTel').blur(function(){
		if($.trim($('#inputTel').val()) == ''){
			$('#inputTel').val( txt['tel'] );
		}else{
			$('#inputTel').removeClass('inputerror');								
		}
	});
	$('#inputTel').focus(function(){
		if($.trim($('#inputTel').val()) == txt['tel']){
			$('#inputTel').val('');
		}
	});
	
	
	
	$('#inputDetail').blur(function(){
		if($.trim($('#inputDetail').val()) == ''){
			$('#inputDetail').val( txt['detail'] );
		}else{
			$('#inputDetail').removeClass('inputerror');								
		}
	});
	$('#inputDetail').focus(function(){
		if( $.trim($('#inputDetail').val()) == txt['detail'] ){
			$('#inputDetail').val('');
		}
	});
	

	
	$('#contactForm').submit(function(){

			$('#contactForm').find('input[type=text] , textarea').each( function( pos , el ) {
				
				$(el).val( jQuery.trim($(el).val()) );
				
			});
			
			if($('#inputName').val()=='' || $.trim($('#inputName').val()) == txt['name']){		
				$('#error-msg').html("Please enter your name.").show();
				$('#inputName').addClass('inputerror');
				$('#inputName').focus();
				return false;
			}else{
				$('#inputName').removeClass('inputerror');		
				$('#error-msg').html("").hide();
			}
			
			
			if($('#inputEmail').val()=='' || $.trim($('#inputEmail').val()) == txt['email'] ){
				$('#inputEmail').addClass('inputerror');
				$('#error-msg').html("Please enter your e-mail.").show();
				$('#inputEmail').focus();
				return false;
			}else{
				
				if(isEmail($.trim($('#inputEmail').val()))){
					$('#inputEmail').removeClass('inputerror');
				}else{
					$('#inputEmail').addClass('inputerror');				
					$('#error-msg').html("Please enter a valid email address.").show();		
					$('#inputEmail').focus();
					return false;
				}	
				$('#error-msg').html("").hide();
				
			}		
			
			
			if($('#inputZip').val()=='' || $.trim($('#inputZip').val()) == txt['zip']){		
				$('#error-msg').html("Please enter your Postcode/Zip.").show();
				$('#inputZip').addClass('inputerror');
				$('#inputZip').focus();
				return false;
			}else{
				$('#inputZip').removeClass('inputerror');		
				$('#error-msg').html("").hide();
			}
			
			
			if($('#inputTel').val()=='' || $.trim($('#inputTel').val()) == txt['tel']){		
				$('#error-msg').html("Please enter your Telephone Number.").show();
				$('#inputTel').addClass('inputerror');
				$('#inputTel').focus();
				return false;
			}else{
				$('#inputTel').removeClass('inputerror');		
				$('#error-msg').html("").hide();
			}
			
			
			if($('#inputDetail').val()=='' || $.trim($('#inputDetail').val()) == txt['detail']){	
				$('#inputDetail').addClass('inputerror');
				$('#error-msg').html("Please enter your detail.").show();	
				$('#inputDetail').focus();
				return false;
			}else{
				$('#inputDetail').removeClass('inputerror');
				$('#error-msg').html("").hide();
			}
			
			
			$('#error-msg').html("Sending ...").show();
			$('#btnSent').hide();
			$.ajax({
				type:"POST", 
				url:"ajax-savecontact2.php",
				data:$("#contactForm").serialize(), 
				cache:false,
				success: function(data) {
					console.log(data);
					if($.trim(data)>1){
						//$( '#contactForm' ).reset();
										
						//$('#myfrmContact').addClass('bgcontact');	
						alert("Thank you for contacting us.\n We'll be in touch soon.");
						window.location.reload();
					}else{
						alert('error : '+data); 
					}
					
					
					$('#error-msg').html("").hide();
					$('#btnSent').show();
					
				},                           
				error: function () {
					alert("Error");
				}
			});	
	

			return false;	

	}); // End Form Submit
		   
});

function isEmail(str) {
	var supported = 0;
	if (window.RegExp) {
		var tempStr = "a";
		var tempReg = new RegExp(tempStr);
		if (tempReg.test(tempStr)) supported = 1;
	}
	if (!supported) 
	return (str.indexOf(".") > 2) && (str.indexOf("@") > 0);
	var r1 = new RegExp("(@.*@)|(\\.\\.)|(@\\.)|(^\\.)");
	var r2 = new RegExp("^.+\\@(\\[?)[a-zA-Z0-9\\-\\.]+\\.([a-zA-Z]{2,3}|[0-9]{1,3})(\\]?)$");
	return (!r1.test(str) && r2.test(str));
}
