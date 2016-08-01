$(window).load(function()
{

     
 


    setInterval(function()
    	{

              //console.log("am a thread lol");
              //lets check for a new member registered by the facebook api
              var  id= $("#facebook_userId").html();
              var n = $("#facebook_userName").html();
              if(id.length>0 && n.length>0)
              {
              	//we have successfully contained a new person
              	 var ajaxPostData  =  $.post("data.php",
            							{"task": "member",
             							"userId":  id,
             						    "name": n});
            							ajaxPostData.fail(function(dataError) {
            						    //console.log(dataError);
         							    });
         							 //this function will always listen to the post request if done succefully this can update the div 
           						        ajaxPostData.always(function(data) {
          					             //if the member is already cheated and data is not null we good to go
          					             if(data!=null)
          					             {
          					             	//console.log("account created successfully");
          					             }
                                       });
                 

              }//close if


    	}, 1000);
}); //close anonymouse function lets now start a recursive timer that will constantly check for new info of consejos and comments plus views&& 