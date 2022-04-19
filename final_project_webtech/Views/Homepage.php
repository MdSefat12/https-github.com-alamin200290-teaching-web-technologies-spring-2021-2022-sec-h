<html>
<head>


	<style >
	h3
	{
		color: blue;
	}


	</style>

	<table>
		<body>



	
		<tr><td width = "55%" align = "center"> </td>
			<td>
				<tr>
				<form method = "POST" action = "../Controller/admin_login_validate.php" name = "ss" onsubmit="return validate()">
					<h3>Username : <input type = "text" name = "username" value = ""> </h3>
					<h3>Password : <input type = "password" name = "password" value = ""> </h3>

					  <input type  = "submit" name = "submit" value = "Sign In"> <br> <br>


					<a href = "Registration.php"> <input type = "button" name = "SingUp" value = "Sing Up"></a>


					<style>
		#div1{
			background-color: pink;
			height:  60px;
			font-family: "Lucida Console", "Courier New", monospace;
			padding-top: 10px;
		}
	</style>
	<br> <br>
	<div>
		<div width = "40%"> </div>
		<div id = "div1" align="center"> <h3> Welcome to Admin Page </h3></div>
			<div width = "40%"> </div>
		
					
				</form>
			</td>
		</tr>




		    
			 
	</table>
	
</head>


	<script>
		function validate() {



			let uname = document.forms["ss"]["username"].value;
			let pname = document.forms["ss"]["password"].value;


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
