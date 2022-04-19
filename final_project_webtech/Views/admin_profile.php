



<?php 
	session_start();
	require('../Model/UserModel.php');
	$adminid = $_SESSION['current_adminid'];
	$current_admin = getadmin($adminid);
	?>
	
<html>
<head>
	<style>
	h3{
		color: red;
	}
</style>

	<title>Registration Page</title>
	<table  width = "100%"> 
		<tr>
			<td> 
				<h5 align = "left">
				<a href="../Views/Homepage2.php"> <h3> Back</h3></a> <a href="../Views/Homepage.php"> <h3>Sign In</h3></a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	
			<td> 
					<fieldset align="center" style = "width: 35%">
						<legend>REGISTRATION</legend>
						<table align="center">
							<tr>
								<td>Admin Name: </td>
								<td><?=$current_admin ['adminname']?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Email: </td>
								<td><?=$current_admin ['email']?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Username: </td>
								<td><?=$current_admin ['username']?> </td>	
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Password: </td>
								<td><?=$current_admin ['password']?> </td>
							</tr>
							
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> Address: </td>
								<td><?=$current_admin ['address']?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
						</table>
					</fieldset>
			</td>
		</tr>
	</table>
	<a href="../Controller/admin edit validate.php"> Edit Profile </a>
</body>
</html>