var Timer = null;
var prev_slide = 1;
var mySwiper = new Swiper('.swiper-container-cover',{
	speed:0 ,
	loop:true ,
	pagination: '.pagination-cover',
	paginationClickable: true,
	//mode: 'vertical' ,
	simulateTouch : false ,
	resizeReInit : false ,
	calculateHeight : false ,
	onSwiperCreated : function() { 
		clearTimeout(Timer);
		$('.coverArea .slide').eq(1).removeClass('slide_hide'); 
		$('.coverArea .slide').eq(1).find('.txt1 , .txt2').removeClass('txt1_hide , txt2_hide'); 
		   
	} ,
	onSlideChangeStart : function() {
		
		var obj = $('.coverArea .swiper-slide').not($(mySwiper.activeSlide()));
		obj.find('.txt1').addClass("txt1_hide");
		obj.find('.txt2').addClass("txt2_hide");
		obj.find('.slide').addClass('slide_hide'); 
		
		
		clearTimeout(Timer);
		var obj =  $(mySwiper.activeSlide());
		setTimeout( function() {
			obj.find('.txt1 , .txt2').removeClass('txt1_hide , txt2_hide'); 
			obj.find('.slide').removeClass('slide_hide'); 
		} , 10 );
		
		clearInterval(TimerSlide);
		start();
	}
});


var TimerSlide = 0;
function start()  {
	TimerSlide = setInterval( function() {
		mySwiper.swipeNext();
	} , 4000 );
}

start();



var peopleSwiper = new Swiper('.swiper-container-people',{
	pagination: '.pagination-people',
	paginationClickable: true,
	speed:2000 ,
	autoplay:4000 ,
	loop : true ,
	//mode: 'vertical' ,
	simulateTouch : true ,
	resizeReInit : true ,
	calculateHeight : true })

//alert($(document).height() +" / " +($(window).scrollTop()+$(window).height()));
$(window).bind( 'scroll' , function() {
		
	if	($(document).height() == ($(window).scrollTop()+$(window).height()) ) {
		$('.popTracking').css({ opacity:1 , right:50 });
	} else {
		$('.popTracking').css({ opacity:0 , right:-700 });
	}
	
});

$('.popTracking').click( function() { $(this).css({ opacity:0 , right:-300 })  } )


var trackDF = $('#frmTrack #track').val();
$('#frmTrack #track').blur(function(){
	if($.trim($('#frmTrack #track').val()) == ''){
		$('#frmTrack #track').val( trackDF );
	}
});
$('#frmTrack #track').focus(function(){
	if($.trim($('#frmTrack #track').val()) == trackDF){
		$('#frmTrack #track').val('');
	}
});
$('#frmTrack').submit( function() {
	if($.trim($('#frmTrack #track').val()) == trackDF || $.trim($('#frmTrack #track').val()) == ''){
		alert(trackDF);
		$('#frmTrack #track').focus();
		return false;
	}						
})

