<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$query="INSERT INTO users (id, fname, lname, email) VALUES ('NULL', '".$fname."', '".$lname."', '".$email."')";

require 'dbconfig.php';

mysql_query($query) or die ('Error updating database');

header('location: updated.php');
?>
