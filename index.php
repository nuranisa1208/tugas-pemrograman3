<?php
error_reporting(0);
session_start();
$username   = $_SESSION['username'];
$password   = $_SESSION['password'];
$level      = $_SESSION['level']; 

    if(isset($_SESSION['username']) && isset($_SESSION['level']))
    {
      header('Location: home.php');
    }
    else
    {
      
    }

?>
<html>
	<head></head>
<body>
	<form method="POST" action="session.php">
	<center>SILAHKAN ISI LOGIN</center>
	
	<center>
		<table class="table table-dark">
		<tr>
			<td>username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="login" value="save"></td>
		</tr>
		</table>
	</center>
	</form>
</body>
</html>