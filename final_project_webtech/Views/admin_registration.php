<html>
<head>
	<title>Registration Page</title>
	<style>
	h3{
		color: red;
	}
</style>
	<table  width = "100%"> 
		<tr>
			<td> 
				<h5 align = "left">
				<a href="../Views/Homepage.php"> <h3>Home</h3></a> 
				<a href="../Views/Homepage.php"><h3> Sign In</h3></a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>


	<table height = "60%" width = "100%" >
		<tr align = "left">
			<td> 
				<form method="POST" action="../Controller/admin_registration_validate.php" name ="myform" onsubmit="return validate()">
					<fieldset align="center" style = "width: 35%">
						<legend>REGISTRATION</legend>
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
									<input type = "submit" name = "submit" value = "Submit">
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>


	<script>
		function validate() {



			let aname = document.forms["myform"]["adminname"].value;
			let ename = document.forms["myform"]["email"].value;
			let uname = document.forms["myform"]["username"].value;
			let pname = document.forms["myform"]["password"].value;
			let cpname = document.forms["myform"]["confirmpassword"].value;
			let adname = document.forms["myform"]["address"].value;



			if(aname == '')
			{
				alert("adminname cannot be empty");
				return false;
			}
			if(ename == '')
			{
				alert("please enter your email");
				return false;
			}
			
			if(uname == '')
			{
				alert("username cannot be empty");
				return false;
			}
			if(pname == '')
			{
				alert("please enter your password");
				return false;
			}
			if(cpname == '')
			{
				alert("please enter your confirmpassword");
				return false;
			}
			if(adname == '')
			{
				alert("enter your address");
				return false;
			}
			
			
			
			
		}
		





	</script>
</body>
</html>