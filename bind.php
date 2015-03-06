<?php
//error_reporting(0);
require 'db/connect.php';

//=-----------BIND--------\\

if (isset($_GET['last_name'], $_GET['first_name'], $_GET['id'])) {
	$last_name = trim($_GET['last_name']);
	$first_name = trim($_GET['first_name']);
	$id = trim($_GET['id']);

	$people = $db->prepare("SELECT first_name, last_name FROM people WHERE last_name = ? AND first_name = ? AND id = ?");
	$people->bind_param('ssi', $last_name, $first_name, $id);
	$people->execute();

	$people->bind_result($first_name, $last_name);

	while ($people->fetch()) {
		echo $first_name, ' ', $last_name, '<br>';
	}
}


//=-----------BIND--------\\

// if (isset($_GET['last_name'], ($_GET['id'])) {
// 	$last_name = trim($_GET['last_name']);
// 	$id = trim($_GET['id']);

// 	$people = $db->prepare("SELECT first_name, last_name FROM people WHERE last_name = ? AND id = ?");
// 	$people->bind_param('si', $last_name, $id);
// 	$people->execute();

// 	$people->bind_result($first_name,$last_name);

// 	while ($people->fetch()) {
// 		echo $first_name, ' ', $last_name, '<br>';
// 	}
// }


?>