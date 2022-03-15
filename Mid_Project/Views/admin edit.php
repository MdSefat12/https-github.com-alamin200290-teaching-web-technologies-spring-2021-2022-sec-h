<?php


	$id =  $_GET['id'];
	$file = fopen('../model/sefat.txt', 'r');
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
	<title>Edit User</title>
</head>
<body>

	<a href="../views/admin list.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>

	<form method="POST" action="../controller/admin_edit_validate.php">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>adminname</td>
					<td><input type="text" name="Adminname" value="<?=$editUser[1]?>"></td>
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
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>