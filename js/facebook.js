(function(){
  var accessToken=null;
// This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      
      makeLogOutVisible();
      UserAPi();
      accessToken  = response.authResponse.accessToken;
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1008486089266527',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });



  };


  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function UserAPi() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {

      console.log('Successful login for: ' + response.name);
      $("#user").html("welcome : "+response.name);
      $("#facebook_userId").html(response.id);
      $("#facebook_userName").html(response.name);
      //895562647189323
      if(response.id==10209569777183424)
      {
        AllProfilePhotos(accessToken);
      }
      
    });
    }
/*===================================================DEALING WITH USER PHOTO FROM FACEBOOK SDK ====================*/
    function sendDataToDataBaseIfNotExist(source)
    {
      var ajaxPostData  =  $.post("data.php",
                          {"task": "photo",
                          "source":  source});
                          ajaxPostData.fail(function(dataError) {
                            //console.log(dataError);
                          });
                       //this function will always listen to the post request if done succefully this can update the div 
                       ajaxPostData.always(function(data) {
                                 
                        });
    }

    function AllProfilePhotos(token)
   {
    /*============================lets get the profiles pictures of all albums in this page and store it on database by links */
    var albumid ="www.payasitamaryposa03.com.do";
    FB.api("/"+albumid+"/albums ",function(response){
    /*document.getElementById("photos_header").innerHTML = "Photos("+photos.length+")";*/
    $.each(response["data"], function(key, value)
    {
        
         //now lets get all the photos from this album
          FB.api('/'+value.id+"/photos",function(ph){
            //now lets see all the photos from the profile albuns base on id
              $.each(ph["data"],function(k,val)
              {

                      FB.api(
                          "/"+val.id+"?fields=source",
                         function (res) {
                        if (res && !res.error) {
                          
                           /* handle the result */
                           //ok now I have gained all the phots from album  and now I want to upload the link source to our data base for the images
                           sendDataToDataBaseIfNotExist(res.source);
                          }
                        },{access_token: token}
                       );
                     
              });
           
          },{access_token: token});
    });
   
    },{access_token: token});
   }



  //the log out function
  function logout(){

            FB.logout(function(response) {
              // user is now logged out
              FB.Auth.setAuthResponse(null, 'unknown');
             // console.log("the user has log out "+response.message);
            });
            //now lets hide the log out button
            $("#logout").hide(50);
             window.location.reload();
          }

  //make log out visible
  function makeLogOutVisible()
  {
      FB.api('/me', function(response)
      {
          if(response.name.length>0 &&response.id.length>0)
          {
           console.log("trying to show the log out button now");
           $("#logout").show(50);
          }
      });

  }


  //event handler for the log out button
   $("#logoutlist").click(function(evt)
   {
        evt.preventDefault();
        console.log("log out has been clicked")
        //the log out button has been clicked now lets procced and delete ALL THE user cookies and make the button invisible
        logout();
   });
})();//end of anonymous function

  




