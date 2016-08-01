 <html><head><title>Setting up database For LinkedVoice</title></head><body>

<h3>Setting up...</h3>
<?php
 // Example 21-3: setup.php
include_once 'definitions.php';

$object->createTable('member', 
            'id VARCHAR(100) PRIMARY KEY,
             name VARCHAR(100)');



$object->createTable('upvote',
                'id int(11) AUTO_INCREMENT PRIMARY KEY,
                 post_id int(11),
                 category VARCHAR(100),
                 id_upvoting VARCHAR(100)');
$object->createTable('photos',
	                  'id int(11) AUTO_INCREMENT PRIMARY KEY,
	                  source VARCHAR(400)');


$object->createTable('consejos',
	                  'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	                   post_title VARCHAR(1000),
	                   post_text VARCHAR(4096),
	                   post_view INT,
	                   post_time BIGINT,
	                   upvote INT(11),
	                   updated INT(2)');
$object->createTable('commenters',
	                  'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	                  post_id INT UNSIGNED,
	                  post_title VARCHAR(400),
	                  user_comenting VARCHAR(100),
	                  text VARCHAR(4096),
	                  comment_time BIGINT,
	                  updated INT(2)');




?>
</body>
</html>