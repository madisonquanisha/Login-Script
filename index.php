index.php



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Title of the document </title>
<link rel="stylesheet" type= "text/css" href="style.css">
</head>
<body>
<form>

	<input type="text" name="uid" placeholder="Username">
<input type="password" name="pwd" placeholder="password">
<button type="submit"> LOGIN</button>


</form>
<br><br><br>
<form action="login.php" method="POST">
	//Hidden Inside the Url 
<input type="text" name="first" placeholder="First Name">
<input type="text" name="Last" placeholder="Last Name">
<input type="text" name="uid" placeholder="Username">
<input type="password" name="pwd" placeholder="password">
<button type="submit"> Sign Up</button>
</form>
</body>
</html>