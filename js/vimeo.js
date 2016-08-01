/*(function(){
//we will get all the pictures that will go to the slide show and all the videos that will be going to the slide show of the website
//this is going to be hosted on vimeos so we dont deal with all the data managing at godaddy..
//so we don't buy more space if it happens to be a big platform
//"http://content.guardianapis.com/search?q="+category+"&api-key=scjawm2duwzaaufeyshxe84s"
     $.ajax({
          url: "https://api.vimeo.com/users/{Mary}/albums/{album_id}/videos",
          type: "GET",
          beforeSend: function() {
             //loading info if want to show to the user
           },
           error: function(xhr, status, error) {
             console.log("Error: "+xhr.status +" - "+ error);
           },
           success: function(data) {
            }//end of success request
            
          });
})();*/