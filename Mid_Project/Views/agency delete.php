<?php


	$id =  $_GET['id'];
	$file = fopen('../model/agency.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[0]) == $id){
			$editUser = $userArray;
			break;
		}
	}
?>

<html>
<head>
	<title>delete agency</title>
</head>
<body>

	<a href="../views/agencylist.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>

	<form method="POST" action="">
		<fieldset>
			<legend>DELETE Agency</legend>
			<table>
				<tr>
					<td>Adminname</td>
					<td><input type="text" name="adminname" value="<?=$editUser[1]?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?=$editUser[2]?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?=$editUser[3]?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$editUser[4]?>"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="Address" value="<?=$editUser[5]?>"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><h3>Are you sure?</h3></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="delete" value="Confirm"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>