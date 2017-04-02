$( document ).ready(function() {

    $(".input-group-btn .dropdown-menu li a").click(function(){

        var selText = $(this).html();
       $(this).parents('.input-group-btn').find('.btn-search').html(selText);

   });

    $(".tada-hover").hover(
    		function(){$(this).addClass('animated tada');},
    		function(){$(this).removeClass('animated tada');}
    	);
    $(".pulse-hover").hover(
    		function(){$(this).addClass('animated pulse');},
    		function(){$(this).removeClass('animated pulse');}
    	);
    $(".rubber-hover").hover(
    	function(){$(this).addClass('animated rubberBand');},
    	function(){$(this).removeClass('animated rubberBand');}
    );



    $(".destacados").bxSlider({
    	slideWidth: 300,
    	minSlides: 2,
    	maxSlides: 10,
    	slideMargin: 5
    });
});
