<?php
error_reporting(0);
require 'db/connect.php';
require 'function/security.php';


//=-----------EXAMPLE--------\\


// $records = array();

// if($results = $db->query("SELECT * FROM people")){
// 	if ($results->num_rows) {
// 		while ($row=$results->fetch_object()) {
// 			$records[] = $row;
// 		}
// 	}
// }
// echo "<pre>", print_r($records), "</pre>";


$records = array();

if (!empty($_POST)) {
	if (isset($_POST['first_name'], $_POST['last_name'], $_POST['bio'])) {
		
		$first_name = trim($_POST['first_name']);
		$last_name  = trim($_POST['last_name']);
		$bio        = trim($_POST['bio']);

echo $first_name, $last_name, $bio;

		if (!empty($first_name) && !empty($last_name) && !empty($bio)) {
			$insert = $db->prepare("INSERT INTO people(first_name, last_name, bio, created)
									VALUES(?, ?, ?, NOW())");
			$insert->bind_param("sss", $first_name, $last_name, $bio);

			if ($insert->execute()) {
				header('Location: indextest.php');
				die();
			}
		}
	}
}

if ($results = $db->query("SELECT * FROM people")) {
	if ($results->num_rows) {
		while ($row = $results->fetch_object()) {
			$records[] = $row;
		}
	}
}


?>

<!DOCTYPE html>
<html>
	<head>
		<title>People</title>
	</head>
	<body>
		<h3>People</h3>

		<?php
		if (!count($records)) {
			echo 'No records';
		}else{
		?>
			<table>
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Bio</th>
						<th>Created</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($records as $record) {			
					?>	
						<tr>
							<td><?php echo escape($record->first_name); ?></td>
							<td><?php echo escape($record->last_name); ?></td>
							<td><?php echo escape($record->bio); ?></td>
							<td><?php echo escape($record->created); ?></td>
						</tr>
					<?php
					}
					?>				
				</tbody>
			</table>
		<?php
		}
		?>

		<hr>

		<form action="" method="POST">
			<div class="field">
				<label for="first_name">First Name</label>
				<input type="text" name="first_name" id="first_name" autocomplete="off">
			</div>
			<div class="field">
				<label for="last_name">Last Name</label>
				<input type="text" name="last_name" id="last_name" autocomplete="off">
			</div>
			<div class="field">
				<label for="bio">Bio</label>
				<textarea name="bio" id="bio"></textarea>
			</div>
			<input type="submit" value="Insert">
		</form>
	</body>
</html>

