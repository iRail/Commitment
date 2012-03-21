<?php
$fname = mysql_real_escape_string($_POST['fname']);
$lname = mysql_real_escape_string($_POST['lname']);
$email = mysql_real_escape_string($_POST['email']);

$query="INSERT INTO users (id, fname, lname, email) VALUES ('NULL', '".$fname."', '".$lname."', '".$email."')";

require 'dbconfig.php';

mysql_query($query) or die ('Error updating database');

header('location: updated.php');
?>
