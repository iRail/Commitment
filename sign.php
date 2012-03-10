<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

mysql_connect("localhost", "USER", "PASS") or die ('Error: ' . mysql());
mysql_select_db("indn");

$query="INSERT INTO users (id, fname, lname, email) VALUES ('NULL', '".$fname."', '".$lname."', '".$email."')";

mysql_query($query) or die ('Error updating database');

header('location: updated.php');
?>
