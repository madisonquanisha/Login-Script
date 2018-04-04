<?php

include 'dbh.php';


$uid = $_POST['uid'];

$pwd = $_POST['pwd'];

//Pass data to database for the users that are logged in
$sql = "SELECT * FROM user Where uid='$uid'AND pwd='$pwd' "; 
//Check to see if there is one row inside of the database

Values ('$first','$last', 'uid', 'pwd')";

$result = $con->query($sql);


if (!$row = $result->fetch_assoc()) {
 echo "Your Username or Password is incorrect"
} else {
	$_SESSION['id'] = $row['id'];
}
header("Location: index.php");
//Front Page of the Website