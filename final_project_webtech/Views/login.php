<?php 

	$error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "invalid username/password";
		}
	}


?>



<html>
<head>
	<title>Login page</title>
</head>
<body>

	<form method="POST" action="../controller/admin_login_validate.php" name = "login" onsubmit="validat">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>


	<script>
		function validat() {



			let uname = document.forms["login"]["username"].value;
			let pname = document.forms["login"]["password"].value;


			if(uname == '')
			{
				alert("please enter your username");
				return false;
			}
			if(pname == '')
			{
				alert("please enter your password");
				return false;
			}

}

		</script>
</body>
</html>