$(document).ready(function()
{
   var slideParent =  $("#imgSlide");
   var imgIndex = 0;
   var imgSizeIndex = slideParent.children().length;
  

   //lets show the first image of the slide show
   setInterval(function(){ 
       if(imgIndex<imgSizeIndex){
           slideParent.children().eq(imgIndex).show();
           imgIndex++;
       }else{
       	    imgIndex = 0;
       	 slideParent.children().eq(imgIndex).show();}

    slideParent.children().eq(imgIndex).slideToggle(100);   
    }, 3000);


  

});