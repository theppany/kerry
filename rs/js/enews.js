// JavaScript Document
$(document).ready(function(){
						   
	$('#btnEnews').click( function() {
		$('#enewsForm').submit();			   
	});
	
	var txt = Array();
	txt['email'] = "Enter your email here";

			
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
	

	
	$('#enewsForm').submit(function(){

			$('#enewsForm').find('input[type=text] , textarea').each( function( pos , el ) {
				
				$(el).val( jQuery.trim($(el).val()) );
				
			});
			
		
			
			if($('#inputEmail').val()=='' || $.trim($('#inputEmail').val()) == txt['email'] ){
				alert("Please enter your e-mail.");
				$('#inputEmail').focus();
				return false;
			}else{
				
				if(!isEmail($.trim($('#inputEmail').val()))){
					alert("Please enter a valid email address.");		
					$('#inputEmail').focus();
					return false;
				}	
				$('#error-msg').html("").hide();
				
			}		
		
		
			$.ajax({
				type:"POST", 
				url:"ajax-saveenews.php", 
				data:$("#enewsForm").serialize(), 
				cache:false,
				success: function(data) {
					$('#enewTxt').html("<div class='t2'>Thank you for subscribing to our newsletter.<br />You have been successfully added to our mailing list, keeping you up-to-date with our latest news.</div>");
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
