<?php 
	session_start();
	$username='';
	if(isset($_SESSION['user']))
	{
		$username = $_SESSION['user']['username'];
	}
?>
<html>
<head>
	<title>Dashboard</title>
	<table border = "1" width = "100%"> 
		<tr>
			<td> 
				<h1 align="left"> XCompany</h1> 
				<h5 align = "right">
			   Logged in as: <a href = "Profle.php"> <?php if(isset($username)) echo "$username" ?>  |</a> 
				<a href="Logout.php"> Logout </a>
				</h5> 
			</td>
		</tr>
	   </table>
        </head>
       <body>
	  <table border = "1">
		<tr>
			<td >
				<table width = "300px">
					<tr colspan = "100%"> 
						<h5 > Account </h5>
						<hr width = "100%" >
					</tr>
					<tr>
						<ul> 
							<li> <a href = "Dashboard.php"> Dashboard </a> </li>
							<li> <a href = "Profile.php"> View Profile </a> </li>
							<li> <a href = "Editprofile.php"> Edit Profile </a> </li>
							<li> <a href = "ChangeProfile_picutre.php"> Change Profile Picture </a> </li>
							<li> <a href = "ChangePassword.php"> Change Password </a> </li>
						</ul>
					</tr>
				</table>
			</td>
			<td width = "100%" align = "center">
				Welcome <?php echo "$username"; ?>
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