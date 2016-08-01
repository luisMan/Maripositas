<?php
header('Content-type: application/json');
include_once("definitions.php");

   //lets check our data base to see if we can find the member if not we will register the member
   if(isset($_POST['task']) && $_POST['task']=="member")
   {
   	   //we need to check if the user in the data base is currently register if now we will register the user 
        $check =  $object->check_member($_POST['userId'],$_POST['name']);
        if($check==0)
        {
             $object->register_member($_POST['userId'],$_POST['name']);
        }
   }

//=========ok great job======= now lets implement the codes for the new advice and comments as well as upvotes  views and photos=====*/
 if(isset($_POST['task']) && $_POST['task']=="photo")
   {
         $check =  $object->Check_photo($_POST['source']);
         if($check==0)
        {
             $object->send_photo($_POST['source']);
        }
   }

?>