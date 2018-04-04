
<?php

include 'dbh.php';

$first = $_POST['first'];

$last = $_POST['last'];

$uid = $_POST['uid'];

$pwd = $_POST['pwd'];

//Pass data to database for the users that are logged in
$sql = "INSERT INTO user (first, last, uid, pwd) 

Values ('$first','$last', 'uid', 'pwd')";

$result = $con->query($sql);
//Provides a result to the database

header("Location: index.php");
//Front Page of the Website