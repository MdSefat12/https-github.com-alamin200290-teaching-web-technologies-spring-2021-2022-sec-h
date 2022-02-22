<html>
<head>
	<title>Login Page</title>
	<table border = "1" width = "100%"> 
		<tr>
			<td> 
				<h1 align="left"> XCompany</h1> 
				<h5 align = "right">
				<a href="Homepage.php"> Home|</a> <a href="Loginpage.php"> Login|</a> <a href="Registration.php"> Registration</a> 
				</h5> 
			</td>
		   </tr>
	      </table>
           </head>
          <body>
	      <table border = "1" height = "40%" width = "100%" >
		  <tr align = "center">
			<td> 
				<form method="POST" action="loginvalidate.php">
					<fieldset style = "width: 40%">
						<legend>Login</legend>
						<table>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username" value=""></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" value=""></td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" align = "left"  > </td>
							</tr>
							<tr>
								<td><input type="checkbox" name="remember" value=""> Remember Me </td>
							</tr>
							<tr>
								<td><input type="submit" name="submit" value="Submit"> <a href = "Forgot.php"> Forgot Password? </a></td>
							</tr>
						</table>
					 </fieldset>
				  </form>
			    </td>
		     </tr>
	        </table>
	      <table width = "100%" border = "1">
		   <tr height = "60px">
			<td align = "center"> Copyright@2017 </td>
		   </tr>
	     </table>
      </body>
     </html>
