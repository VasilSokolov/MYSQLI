<?php
error_reporting(0);
require 'db/connect.php';

//=-----------SELECT--------\\

if ($result = $db->query("SELECT * FROM people")){
	if ($count = $result->num_rows) {
		echo '<p>',$count, '</p>';

		while ($row = $result->fetch_object()) {
			echo $row->first_name, ' ', $row->last_name, '<br>';
		}
		$result->free();

		// $rows = $result->fetch_assoc();
		// echo '<pre>', print_r($rows), '</pre>';


		// $rows = $result->fetch_all(MYSQLI_ASSOC);
		// echo '<pre>', print_r($rows), '</pre>';



		// $rows = $result->fetch_all(MYSQLI_ASSOC);
		// echo '<pre>', print_r($rows), '</pre>';


		// foreach ($rows as $row) {
		// 	echo $row['first_name'], ' ', $row['last_name'], '<br>';
		// }

		
	}
}

?>