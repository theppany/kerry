var branch  = [{ id:1 , type:'me' , name:'' , lat:13.764618 , lng:100.539040 },
					  { id:2 , type:'bts' , name:'' , lat:13.720877 , lng:100.557597 }, 
					  { id:3 , type:'bts' , name:'' , lat:13.728267 , lng:100.534341 },
					  { id:4 , type:'' , name:'' , lat:13.739900 , lng:100.514759 },
					  { id:5 , type:'' , name:'' , lat:13.828197 , lng:100.528354 },
					  { id:6 , type:'' , name:'' , lat:13.790678 , lng:100.570149 },
					  { id:7 , type:'' , name:'' , lat:13.828679 , lng:100.487622 }];


var MyLocation = '';
					  

var map = new google.maps.Map(document.getElementById('sector-map'), {
				zoom: 12,
				center: {lat: 13.788089, lng: 100.526608},  
				scrollwheel: false ,
				zoomControl:true  ,
				streetViewControl: false ,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				disableDefaultUI: true
			});

// Try HTML5 geolocation. 
var Timeout = 6000;
var pos = Array();

if (navigator.geolocation) {
	
	navigator.geolocation.getCurrentPosition(function(position) {
	  pos = {
		lat: position.coords.latitude,
		lng: position.coords.longitude
	  };

	  //infoWindow.setPosition(pos);
	  //infoWindow.setContent('Location found.');
	  var marker = new google.maps.Marker({
			position: {lat: pos['lat'] , lng: pos['lng'] }, 
			map: map,
			title: ''  ,
			icon: 'icon/you.png' ,
			zIndex: 9999999 ,
			animation: google.maps.Animation.DROP
		});
	  
	  MyLocation = pos;
	  
	  map.setCenter(pos);
	  
	  
		  
	}, function(errorCode) { 
	   //handleLocationError(true, infoWindow, map.getCenter());
	},{
	  maximumAge: Infinity, timeout: 6000, enableHighAccuracy: true
	});

} 

setTimeout( function() {
			
	loadNearby( PAGE_TYPE );
					
} , Timeout+1000 );


function loadNearby( type ) {
	var data = ''; 
	if (pos['lat']) {
		data = 'mLat='+pos['lat']+'&mLng='+pos['lng'];
	}
	
	$.ajax({
		url : 'list.php' ,
		type : 'post' ,
		data : 'type='+type+'&'+data , 
		success : function( html ) {
			$('#ListBranch').html( html );
			$('.listArea .list').eq(0).click();
			$('.loadLocation').hide();
			$('#frmSearch').show();
		}
	});	
}


var markers = Array();
var prev_marker = '';

function addMarkers( map , m ) {

	var image = 'icon/shop.png';
	
	if ( m.type == 'bts' ) {
		image = 'icon/bts.png';
	} else if ( m.type == 'me' ) {
		image = 'icon/you.png';
	} else if ( m.type == 'dc' ) {
		image = 'icon/dc.png';
	} else if ( m.type == 'locker' ) {
		image = 'icon/locker.png';
	}
	
	var marker = new google.maps.Marker({
		position: {lat: m.lat , lng: m.lng }, 
		map: map,
		title: ''  ,
		icon: image ,
		animation: google.maps.Animation.DROP
	});
	
	marker.addListener('click', function() {
	 	
		mapDetail(m.id , false);
		
	});
	
	markers[m.id] = marker;

}

function mapDetail( id , pan ) {
	
	var marker = markers[id];
	var data = '';
	
	if (MyLocation != '')	{
		data = "&latlng="+MyLocation['lat']+','+MyLocation['lng'];
	}
	$.ajax({
		url : 'detail.php' ,
		data : 'id='+id+data ,
		type : 'post' ,
		success : function( html ) {
			$('#map-detail').html( html );  
		}
	});
	
	if ( pan )  {
		map.panTo(marker.getPosition());	
	}
	
	markerPlay(id);
	
	var b = $("html, body");
	b.stop().animate({scrollTop:0}, '300' );
}

function markerPlay( id ) {
	
	var marker = markers[id];

	if (marker.getAnimation() !== null) {
		marker.setAnimation(null);
	} else {
		marker.setAnimation(google.maps.Animation.BOUNCE);
	}	
	
	if (prev_marker  != '' && prev_marker != marker) {
		prev_marker.setAnimation(null);
	}
	
	prev_marker = marker;
}

function markerStop( marker ) {
	marker.setAnimation(null);
}


function filterMarker( type ) {
	
	for (var i=0;i<branch.length;i++) {
		var m = branch[i];
		if (m.type != type && type != '') {
			markers[m.id].setVisible(false);
		} else {
			markers[m.id].setVisible(true);
		}
	}
	
	$('#fillter_type').val( type );
	
	if ( type=='' ) {
		$('#selectType > .inner').html("All");
	} else {
		$('#selectType > .inner').html("<img src='../img/page_where/search/"+type+".png' />");
	}
	
	$('#map-detail').html( '' );  
	$('#selectPopArea').hide();
	
	loadNearby( type );
}
$('#selectType').click( function() { 	
	$('#selectPopArea').toggle()	;
});



$(function() {
	$.ajax({
	  
		  url : './maps-json.php' ,
		  data : "type="+$('#fillter_type').val() ,
		  type : "post" ,
		  cache : false ,
		  success : function(html) { //alert(html);
		  	
				branch = $.parseJSON( html ) ;
				for (var i=0;i<branch.length;i++) {
					addMarkers(map , branch[i] );
				}

		  }
		   
	});		   
})


$('#inputSearch').blur(function(){
	if($.trim($('#inputSearch').val()) == ''){
		$('#inputSearch').val( 'Search by keyword' );
	}
});
$('#inputSearch').focus(function(){
	if($.trim($('#inputSearch').val()) == 'Search by keyword'){
		$('#inputSearch').val('');
	}
});

$('#btnSearch').click( function() {
								
	$('#inputSearch').val(jQuery.trim($('#inputSearch').val())) ;
	if ($('#inputSearch').val() == '' || $('#inputSearch').val() == 'Search by keyword'){
		alert('Please enter your keyword.')	;	
		$('#inputSearch').focus();
		return false;
	}
	
	$('#loadSearch').show();
	$('#frmSearch').hide();
	
	$.ajax({
		url : 'list.php' ,
		type : 'post' ,
		data : 'kw='+jQuery.trim($('#inputSearch').val())+"&type="+$('#fillter_type').val() , 
		success : function( html ) {
			$('#SearchBranch').html( html );
			$('#map-detail').html( '' ); 
			markerStop( prev_marker ); 
			var b = $("html, body");
			b.stop().animate({scrollTop:450}, '300' );
			
			$('#loadSearch').hide();
			$('#frmSearch').show();
		}
	});							
});


