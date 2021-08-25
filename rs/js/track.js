var df_txt = "Enter your tracking number";
$('#track').blur(function(){
	if($.trim($('#track').val()) == ''){
		$('#track').val( df_txt);
	}
});
$('#track').focus(function(){
	if($.trim($('#track').val()) == df_txt){
		$('#track').val('');
	}
});


$('#frmTrack').submit( function() {
						
				
	if($.trim($('#track').val()) == df_txt || $.trim($('#track').val()) == ''){
		alert("Please enter track code.");
		$('#track').focus();
		return false;
	}

	
});