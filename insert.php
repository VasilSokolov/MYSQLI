<?php
error_reporting(0);
require 'db/connect.php';


//=-----------INSERT--------\\



if (isset($_GET['first_name'])) {
    $first_name = $db->real_escape_string(trim($_GET['first_name']));

	if ($insert = $db->query("INSERT INTO
							 people(first_name, last_name, created)
							 VALUES('{$first_name}', 'Smith', NOW())")) 
	{
		
		echo $db->affected_rows;
	}
}

?>