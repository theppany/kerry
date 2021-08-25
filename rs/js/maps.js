var map = new google.maps.Map(document.getElementById('sector-map'), {
	zoom: 18,
	center: {lat:13.719755 , lng:100.513827}, 
	scrollwheel: false ,
	zoomControl:true  ,
	streetViewControl: false ,
	mapTypeId: google.maps.MapTypeId.ROADMAP,
   	disableDefaultUI: true
});

var branch  = [{ id:"HQ" , type:'' , name:'Headquarters' , lat:13.719755 , lng:100.513827 },
			   		  { id:"DC" , type:'' , name:'Kerry Bangna  Logistics Center' , lat:13.566910 , lng:100.757535 },
					  { id:"CS" , type:'' , name:'Customer Care Service' , lat:13.679397 , lng:100.609548 }];
					  //{ id:"CC" , type:'' , name:'Claim Center' , lat:13.719755 , lng:100.513827 }];




var prev_marker = '';
var markers = Array();

function addMarkers( map , m ) {

	var image = '../img/page_contact/marker.png';
	
	var marker = new google.maps.Marker({
		position: {lat: m.lat , lng: m.lng }, 
		map: map,
		title: m.name  ,
		icon: image ,
		animation: google.maps.Animation.DROP
	});
	
	marker.addListener('click', function() {
	 	
		mapDetail(m.id , false);
		
	});
	
	markers[m.id] = marker;

}


function mapDetail( id , pan ) {
	
	$('#tabSet .active').not("#btn"+id).removeClass("active");
	$("#btn"+id).addClass("active");
	
	
	$('.sector-detail > div').not("#btn"+id).addClass("hidden");
	$("#addr"+id).removeClass("hidden");
	
	var txt = $("#btn"+id).html();
	$('#btnMTxt').html(txt);
	
	
	id = ( id == 'CC') ? 'HQ' : id ;
	
	var marker = markers[id];
	var data = '';

	if ( pan )  {
		map.panTo(marker.getPosition());	
	}
	
	markerPlay( id );
}

function markerPlay( id ) {

	var marker = markers[id];

	marker.setAnimation(google.maps.Animation.BOUNCE);     
	
	
	if (prev_marker  != '' && prev_marker != marker) {
		prev_marker.setAnimation(null);
	}
	prev_marker = marker;
}



$(window).bind('load', function() { 
								
	for (var i=0;i<branch.length;i++) {
		addMarkers(map , branch[i] );
	}
	setTimeout( function() { mapDetail( 'HQ' , false); } , 1000 ); 
});
