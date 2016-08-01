$(document).ready(function()
{
	 var topForm = $(".topForm");
     var isOpen =false;
  
         
	 var signIn = '<div class="container">';
         signIn +='<div style="float:right" ><a href="#" class="btn btn-info btn-lg" id="closeGUI">';
         signIn +='<span class="glyphicon glyphicon-remove-sign"></span> Close </a></div>';
         signIn += '<form class="form-signin"><h2 class="form-signin-heading">Please sign in</h2><label for="inputEmail" class="sr-only">Email address</label>';
         signIn += '<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>';
         signIn += '<label for="inputPassword" class="sr-only">Password</label>';
         signIn += '<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>';
         signIn +='<div class="checkbox"><label><input type="checkbox" value="remember-me"> Remember me</label>';
         signIn +='</div><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></form></div><script src = "js/button.js"></script><!-- /container -->';
     

      var signUp = '<div class="container">';
          signUp +='<div style="float:right" ><a href="#" class="btn btn-info btn-lg" id="closeGUI">';
          signUp +='<span class="glyphicon glyphicon-remove-sign"></span> Close </a></div>';
          signUp += '<form class="form-signin"><h2 class="form-signin-heading">Please sign up</h2><label for="inputName" class="sr-only">Name</label>';
          signUp += '<label for="inputEmail" class="sr-only">Email address</label>';
         signUp += '<input type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>';
         signUp += '<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>';
         signUp += '<label for="inputPassword" class="sr-only">Password</label>';
         signUp += '<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>';
         signUp +='<div class="checkbox"><label><input type="checkbox" value="remember-me"> Remember me</label>';
         signUp +='</div><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></form></div><script src = "js/button.js"></script> <!-- /container -->';
    
     $(".link2").click(function()
     {
     	/*console.log("sign in clicked")
     	//click listener for the link one;
        if(!topForm.is(':visible')){
        topForm.slideToggle(1000); 
     	topForm.animate({top: "100"},2000);
     	topForm.html(signIn);
        isOpen=true;
        }else{
        topForm.slideToggle(1000); 
        topForm.slideToggle(1000); 
        topForm.animate({top: "100"},2000);
        topForm.html(signIn);
        isOpen=false;
        }*/

     });



     $(".link1").stop().click(function()
     {

       /*console.log("sign up clicked")
     	//click listener for the link one;
        if(!topForm.is(':visible')){
        topForm.slideToggle(1000); 
     	topForm.animate({top: "100"},2000);
        topForm.html( signUp);
        isOpen=true;
         }else{
          topForm.slideToggle(1000); 
          topForm.slideToggle(1000); 
          topForm.animate({top: "100"},2000);
          topForm.html(signUp);
          isOpen=false;
         }*/
     });

    $("#closeGUI").stop().click(function()
    {
    	/*console.log("closed");
         if(topForm.is(':visible')){
    	topForm.slideToggle(1000);
    	topForm.animate({top:"1000px"},1000);
        }//close if*/
    })




  
});


