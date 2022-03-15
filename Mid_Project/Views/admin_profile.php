<?php 
error_reporting(0);
	session_start();
	
	$current_user = $_SESSION['current_user'];
	$adminname = $current_user['Adminname'];
	$email = $current_user['email'];
	$username = $current_user['username'];
	$password = $current_user['password'];
	$address = $current_user['Address'];
?>
<html>
<head>
	<title>Registration Page</title>
	<table  width = "100%"> 
		<tr>
			<td> 
				<h5 align = "left">
				<a href="../Views/Homepage2.php"> Home|</a> <a href="../Views/Homepage.php"> Sign In</a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table height = "60%" width = "100%" >
		<tr align = "left">
			<td> 
					<fieldset align="center" style = "width: 35%">
						<legend>REGISTRATION</legend>
						<table align="center">
							<tr>
								<td>Admin Name: </td>
								<td><?=$adminname?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Email: </td>
								<td><?=$email?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Username: </td>
								<td><?=$username?> </td>	
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Password: </td>
								<td><?=$password?> </td>
							</tr>
							
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> Address: </td>
								<td><?=$address?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
						</table>
					</fieldset>
			</td>
		</tr>
	</table>
	<a href="Edit profile.php"> Edit Profile </a>
</body>
</html>