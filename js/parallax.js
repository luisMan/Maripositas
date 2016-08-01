

$(document).ready(function(){
	// Cache the Window object
  	var $window = $(window);
    
  $('section[data-type="background"]').each(function()
  {
         $(this).hide();
  });

                
   $('section[data-type="background"]').each(function(){
     var $bgobj = $(this); 
       
      $(window).scroll(function() {
    
        if($window.scrollTop()>150){  
        $bgobj.fadeIn(1000);      					
		var yPos = -(($window.scrollTop() / 30)*3);
        
        var coords = '50% '+ yPos + 'px';
         $bgobj.animate({backgroundPosition: coords},1000);   
       }
     });

     });






}); 


/* 
 * Create HTML5 elements for IE's sake
 */