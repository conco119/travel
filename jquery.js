$(document).ready(function() {
		
	//mobile-nav
	$(".mobile-button2").hide();
	$(".mobile-button").click(function(){
		
			$("body").addClass('wraper');
			$(this).hide();
			$(".mobile-button2").show();
	});
	
	$(".mobile-button2").click(function(){
		
		$("body").removeClass('wraper');
		$(this).hide();
		$(".mobile-button").show();
		
	});

	//#owl-1
			  var owl_1 = $("#owl-1");
			 
			  owl_1.owlCarousel({
			      items : 3, //10 items above 1000px browser width
			      itemsDesktop : [1000,3], //5 items between 1000px and 901px
			      itemsDesktopSmall : [900,3], // betweem 900px and 601px
			      itemsTablet: [600,2], //2 items between 600 and 0
			      itemsMobile :[320,1] // itemsMobile disabled - inherit from itemsTablet option
			  });
			 
			  // Custom Navigation Events
			  $(".next").click(function(){
			    owl_1.trigger('owl.next');
			  })
			  $(".prev").click(function(){
			    owl_1.trigger('owl.prev');
			  })
			  //end owl-1
			  
		//owl-demo	  
				 var owl_demo = $("#owl-demo");
	     
	      owl_demo.owlCarousel({
	          items : 1, //10 items above 1000px browser width
	          itemsDesktop : [1000,5], //5 items between 1000px and 901px
	          itemsDesktopSmall : [900,3], // betweem 900px and 601px
	          itemsTablet: [600,2], //2 items between 600 and 0
	          itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	      }); 
	      owl_demo.trigger('owl.play',2000);
	      // Custom Navigation Events
	      $(".next").click(function(){
	        owl_demo.trigger('owl.next');
	      })
	      $(".prev").click(function(){
	        owl_demo.trigger('owl.prev');
	      })
	 
});