var peopleSwiper = new Swiper('.swiper-container-benefits',{
	pagination: '.pagination-benefits',
	paginationClickable: true,
	speed:1000 ,
	autoplay:3000 ,
	loop : true ,
	//mode: 'vertical' ,
	simulateTouch : true ,
	resizeReInit : true ,
	calculateHeight : true });


$('.careerArea .tb .row').not('.rowHead').each( function( pos ,el ) {
										 
	$(el).click( function( event ) {
event.stopPropagation();
		$('.careerArea .tb .row-active').removeClass("row-active");
		$(el).addClass("row-active");

	})
										 
});


$('body').click( function() {
	$(".row-active").removeClass("row-active");
})
