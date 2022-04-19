<?php
	session_start();
	$current_adminid = $_SESSION['current_adminid'];
	$con = mysqli_connect('localhost', 'root', '', 'sefat');
	$sql = "select * from adminlist where id = '{$current_adminid}'";
	$res = mysqli_query($con, $sql);
	if($res)
	{
		$row =  mysqli_fetch_assoc($res);
		$Username = $row['username'];
	}
	else
	{
		echo "Error";
	}
?>



<html>
<head>
	<style>
		h1{
			color: greenyellow;
		}
		h3{
			color: red;
		}
		.c1{
			color: blue;
		}
		.c2{
			color: lightpink;
		}
		.c3
		{
			color: red;
		}
		<tr>
			<td> </td>
			<td style = "width: auto;justify-content: center;">
				Logged in as <a href="Agency_profile.php"> <?=$Username?></a>
			</td>
			<td width = "90%" align = "right">
				<a href = "../Controller/Logout.php"> <input type = "button" name = "logout" value = "Logout"> </a>
			</td>
		</tr>
	</table>
	
</head>
<body>
	<br> <br>
	<style>
		
	</style>
	<div>
		<div width = "40%"> </div>
		<div align = "center" id = "div1"> <h1>Welcome to Admin Page</h1> </div>
		<div width = "40%"> </div>
	</div>
		

	<table>
		<h3>Logged in  <a href="Admin_profile.php"> <?=$Username?> </h3></a>
		 <a href="Homepage.php"><h3> Back </h3></a> 
	<a href="../controller/logout.php"> <h3> Logout <h3> </a><br><br>
		<a href="admin list.php"><p class = "c1"> Admin List </p> </a>
		<a href="userlist.php"><p class = "c1">User List</p> </a>
		<a href="agencylist.php"><p class = "c1">Agency List</p> </a> 
		<a href="manage pakage.php"> <p class = "c1">View Pakage </p></a> 
		<a href="ajax.php"> <p class = "c1"> details_Pakage_view </p></a> 
		<tr>
			<td width = "85%" align = "center"> </td>
			<td>
				<h2 align = "center"><p class = "c2"> Admin Page</p> </h2>
				
			</td>
		</tr>
	</table>
	
</head>
<body>


	
	
</body>
</html>
