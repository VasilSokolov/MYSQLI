<?php
error_reporting(0);
require 'db/connect.php';

$result = $db->query("SELECT * FROM people");

print_r($result);
?>