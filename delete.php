<?php
error_reporting(0);
require 'db/connect.php';

//=-----------DELETE--------\\

if ($delete = $db->query("DELETE FROM people						 
						 WHERE id = 1")){
	echo $db->affected_rows;		
}
?>