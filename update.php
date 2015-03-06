<?php
error_reporting(0);
require 'db/connect.php';

//=-----------UPDATE--------\\

if ($update = $db->query("UPDATE people
						 SET last_name = 'John'
						 WHERE id = 1")){
	echo $db->affected_rows;
		
}


?>