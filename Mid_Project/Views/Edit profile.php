<?php 
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
				<a href="../Views/Homepage2.php"> Home|</a> <a href="../Views/Homepage.php"> Logout</a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table height = "80%" width = "100%" >
		<tr align = "left">
			<td>
				<form method = "POST" action = "../Controller/Admin edit validate.php"> 
					<fieldset align="center" style = "width: 35%">
						<legend>Profile</legend>
						<table align="center">
														
							<tr>
								<td>Admin Name: </td>
								<td><input type ="text" name = "Adminname" value = "<?=$adminname?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Email: </td>
								<td><input type ="text" name = "email" value = "<?=$email?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>User Name: </td>
								<td><input type ="text" name = "username" value = "<?=$username?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Password: </td>
								<td><input type ="Password" name = "password" value = "<?=$password?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> Address: </td>
								<td><input type ="text" name = "Address" value = "<?=$address?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> </td>
								<td><input type ="submit" name = "save" value = "save"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>