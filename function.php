      <?php
       require_once __DIR__ .'/private.php';
      
      class _DataBase
      {  
         public $connection;
         public static function getConnection()
        {
          error_reporting(E_ALL ^ E_DEPRECATED);
          $connect = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die("Problems");
          return $connect;
        }
        public static function getDataBase()
        {return mysql_select_db(DB_DATABASE) or die(mysql_error());}
        
        function __construct()
         {
            //init all data conection component
            $this->_initDB();

         }

        function execSQL($query)
        {
           
                return mysql_query($query) or die(mysql_error());
    
        }
         function isNewsRefreshed($category,$language)
        {
          //it will return 1 when it is or 0 when is not
          $q = $this->executeSQL("SELECT * FROM news_post  WHERE post_category='$category' AND post_language='$language' ORDER BY id DESC");
           
            while($col = mysql_fetch_row($q)){
            if($col[11]==0)
            {
              return $col[0];
            }
            }

         return -1;
        }
        
        function __destruct()
        {
           //destructor the cleaning memory heap alloc
           $this->_close();

        }

       
         /*function to connect to mysql */
         function _initDB()
         {
            $query = _DataBase::getConnection();
            $this->getDataBase();
           return $query;
         }


          /*prevent code injection function */
          function preventInjections($var)
             {
                  $var = strip_tags($var);
                  $var = htmlentities($var);
                  $var = stripslashes($var);
                  return mysql_real_escape_string($var);
                 
             }
           
          function DestroySection()
             {
                if (session_id() != "" || isset($_COOKIE[session_name()]))
                    setcookie(session_name(), '', time()-2592000, '/');

             }
           /* query function */
           function executeSQL($query)
             {
                $result = mysql_query($query) or die(mysql_error());
                return $result;
             }

           function createTable($TableName, $query)
           {
             $this->executeSQL("CREATE TABLE IF NOT EXISTS $TableName($query)");
                echo 'Table Created or Already Exits<br/>';
           }

          function Check_member($userId, $name)
          {
              $id  = $this->preventInjections($userId);
              $n = $this->preventInjections($name);
              $result = $this->executeSQL("SELECT * FROM member WHERE id='$id'");
           return mysql_num_rows($result);
             
          }

          function Check_photo($source)
          {
            $source = $this->preventInjections($source);
            $result = $this->executeSQL("SELECT * From photos WHERE source='$source'");
            return mysql_num_rows($result);
          }

          function send_photo($source)
          {
              $n = $this->preventInjections($source);
              $result = $this->executeSQL("INSERT INTO photos (id, source) VALUES(null,'$n')");
         
              if($result)
              {
                return  true;
              }
            return false;
          }
          function register_member($userId,$name)
          {
              $id  = $this->preventInjections($userId);
              $n = $this->preventInjections($name);
              $result = $this->executeSQL("INSERT INTO member (id, name) VALUES('$id','$n')");
         
              if($result)
              {
                return  true;
              }
            return false;
          }
         function getNumVoters($post_id) {
      
           return mysql_num_rows($this->executeSQL("select * from upvote where post_id=$post_id"));
         }

        function delete( $commentId ){ 
          $sql = "select from news_post where id=$commentId";
          $query = mysql_fetch_row($this->executeSQL($sql));
          $update = "update profile set constribution=constribution-1 where user_id='$query[1]'";
          $this->executeSQL($update);
          $sql = "delete from news_post where id=$commentId";
          $query = $this->executeSQL($sql);

          if ( $query ) {

            return true;
          }
           return null;
        }

        function deleteReply( $commentId){ 
      // delete the comment from the comments database using the id of comment_id

      $sql = "delete from commenters where id=$commentId";
      
      $query = $this->executeSQL($sql);

      if ( $query ) {

        return true;
      }
      return null;

    }

       function getPhotos()
       {
         $result = $this->executeSQL("SELECT * FROM photos ORDER BY id DESC;");

         while ($row=mysql_fetch_row($result))
             {
            
                echo "<img src='".$row[1]."' width='100%' height='100%' ></img>";
             }
       }
       function getPhotosWithSize($w,$h)
       {
         $result = $this->executeSQL("SELECT * FROM photos ORDER BY id DESC;");

         while ($row=mysql_fetch_row($result))
             {
            
                echo "<img class='imgShow' src='".$row[1]."' width='".$w."' height='".$h."' ></img>";
             }
       }
   
         /**
           * Function to close db connection
           */
          function _close() {
              mysql_close($this->_initDB());
          }

          

    }//close class
      ?>