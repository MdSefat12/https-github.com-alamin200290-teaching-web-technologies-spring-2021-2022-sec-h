

<html>
<head>
	<title>update</title>

	<style>
	h3{
		color: red;
	}
</style>
	<table  width = "100%"> 
		<tr>
			<td> 
				<h5 align = "left">
				<a href="../Views/admin list.php"> <h3>Back</h3></a> 
				<a href="../Views/Homepage.php"><h3> logout </h3></a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table height = "60%" width = "100%" >
		<tr align = "left">
			<td> 
				<form method="POST" action="">
					<fieldset align="center" style = "width: 35%">
						<legend>Update Page</legend>
						<table align="center">
							<tr >
								<td>Admin Name </td>
								<td>: <input type="text" name="adminname" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Email </td>
								<td>: <input type="text" name="email" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							
							<tr >
								<td>Username </td>
								<td>: <input type="text" name="username" value="" > </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Password </td>
								<td>: <input type="Password" name="password" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Confirm Password </td>
								<td>: <input type="password" name="confirmpassword" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> Address </td>
								<td>: <input type = "text" name = "address" value = ""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td colspan = "3"> 
									<input type = "submit" name = "submit" value = "Update">
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>