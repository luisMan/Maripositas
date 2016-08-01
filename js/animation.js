$(document).ready(function(){
	// Cache the Window object
  	var $window = $(window);

    console.log("message from the animation script");
   $(window).scroll(function()
   {
     if($window.scrollTop()>=2000)
     {
     	$(".imgShow").each(function(key, value)
     	{
     		$( this ).show( 1000 ).delay( 50 ).fadeIn( 2000 );
     		
     	});

     }else{
     	$(".imgShow").each(function(key, value)
     	{
     		 var isMobile = window.matchMedia("only screen and (max-width: 760px)");

    			if (!isMobile.matches) {
       					 //Conditional script here
       					// $( this ).hide( 1000 ).delay( 10 ).fadeOut( 2000 );
    			 }
     		
     		
     	});

     }


   });


   	  $(".imgShow").each(function(key, value)
     	{
               $(this).click(function()
               {
               	 //console.log(($(this)[0]).attr("width"))
               	 $(".display-img").show(50);
               	 $(".display-img").animate({
   							 width: "80%",
   							 opacity: 1,
   							 left: "0px",
   							 marginLeft: "9%",
   							 fontSize: "24px",
   							 borderWidth: "0px",
   							 top: $(this)[0].y
  							}, 2000 );

               	 $('html, body').animate({scrollTop: $(this)[0].y}, 2000);

               	 //now lets put the content to the box
               	 $("#img-showcase").css({width:"45%",
               	                         height:"500px"});

               	 var obj = $(this);
               	 obj.css({width:"100%",
               	          height:"500px"});
               
               	 $("#img-showcase").html( obj);
                //now we will be calling our data base object with some returning data and them we will be placing it at the content comments
              	 });


     	});


   	  //lets close the img showcase when we click the close button
   	  $(".display-img span").click(function()
   	  { 
   	  	         $(".display-img").hide(50);
               	 $(".display-img").animate({
   							 width: "100%",
   							 opacity: 1,
   							 left: "0px",
   							 marginLeft: "9%",
   							 fontSize: "24px",
   							 borderWidth: "0px",
   							 top: 3000
  							}, 2000 );
               	  $('html, body').animate({scrollTop: 0}, 2000);

   	  })

 
   
});