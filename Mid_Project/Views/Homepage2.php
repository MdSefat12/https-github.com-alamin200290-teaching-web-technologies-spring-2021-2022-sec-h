<?php
	session_start();
	$current_user = $_SESSION['current_user'];
	
	$Username = $current_user['username'];
?>
<html>
<head>
	<table>
		<a href="admin list.php">Admin List </a><br><br>
		<a href="userlist.php">User List </a> <br><br>
		<a href="agencylist.php">Agency List </a> <br><br>
		<a href="manage pakage.php"> View Pakage </a> 
		<tr>
			<td width = "85%" align = "center"> </td>
			<td>
				<h2 align = "center"> Admin Page </h2>
				Logged in as <a href="admin_profile.php"> <?=$Username?></a>
			</td>
		</tr>
	</table>
	
</head>
<body>
	
	
</body>
</html>
