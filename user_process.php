<?php







include("dbconnect.php");

$name=$_REQUEST['name'];
$city=$_REQUEST['city'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['message'];

// Inserting datato table

$query=mysqli_query($db_connect,"INSERT INTO user(name,city,email,message) VALUES ('$name','$city','$email','$msg')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);

header("location: gwapo.php?note=success");