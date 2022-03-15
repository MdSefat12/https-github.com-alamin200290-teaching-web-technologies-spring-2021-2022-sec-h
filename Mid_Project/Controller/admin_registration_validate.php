<?php

session_start();


if(isset($_REQUEST['submit']))
	

{
	$adminname = $_REQUEST["Adminname"];
	$email = $_REQUEST["email"];
	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	$confirm = $_REQUEST["confirm"];
	$address = $_REQUEST["Address"];

	if($password != $confirm)
	{
		echo "pass and confirm pass don't match";
	}
	
	if($adminname != null && $email!= null && $username != null && $password !=null && $confirm != null  && $address != null )
{
	
	
	$user = $adminname."|".$email."|".$username."|".$password."|".$confirm."|".$address."\r\n";
	$file = fopen('../Model/admin.txt', 'a');
	fwrite($file,$user);
	fclose($file);
	


	header('location:../views/Homepage.php');
}


else
{
	echo"invalid user";
}

}


?>

