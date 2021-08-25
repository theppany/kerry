$('#frmRegisterJob').find('.date').datepicker({
	changeMonth: true,
	changeYear: true ,
	dateFormat : "dd/mm/yy" ,
	yearRange: "-50:+0"
});

$('.number').keypress(function(event) {
  if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
	event.preventDefault();
  }
});



$('#frmRegisterJob').submit( function() {

	var Flag = true; 

	$('#frmRegisterJob input[type="text"]').each( function( pos , el )  { $(el).val( jQuery.trim( $(el).val() ) ) });
	
	$('#frmRegisterJob ._req').each( function( pos , el ) {
		
		if ( $(el).val() == "" ) {
			alert('Require "'+$(el).attr('title')+'"');
			$(el).focus();
			Flag = false;
			return false;
		}

	});
	
	if (!Flag) { return false; }
	
	if ($('#frmRegisterJob #inputWorked:checked').val() == 'Y') {
		
		var wkexp =  $('#frmRegisterJob #wkexp').val();
		if (wkexp == "" || wkexp <= 0 ) {
			alert('Require Year.');
			$('#frmRegisterJob #wkexp').focus();
			Flag = false;
			return false;
		}
		
	}
	
	
	if ($('#frmRegisterJob #acceptFlag:checked').val() != 'Y' && Flag) {
		alert('Plase confirm this application');
		$('#frmRegisterJob #acceptFlag').focus();
		return false;
	} 
	
	 $('#frmRegisterJob').find('.date').datepicker( "option", "dateFormat", "yy-mm-dd" );
	$('#frmRegisterJob').find('.btn-submit').attr('disabled','disabled');
	$.ajax({
		url : 'ajax-saveform.php' ,
		type : 'post' ,
		data : $('#frmRegisterJob').serialize() , 
		success : function ( html ) { 
			alert('Thank you for submitting your application.');
			window.location.href="./";
			$('#frmRegisterJob').find('.btn-submit').removeAttr('disabled');
			//$('#frmRegisterJob').find('.date').datepicker( "option", "dateFormat", "dd/mm/yy" );
		}  ,
		error : function() {
			alert('Error , Please submit again.');
			$('#frmRegisterJob').find('.date').datepicker( "option", "dateFormat", "dd/mm/yy" );
			$('#frmRegisterJob').find('.btn-submit').removeAttr('disabled');
		}
	});
	
	
	return false;
})

/*
$( "#format" ).change(function() {
  $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
});*/ 