<?php 

	session_start();
	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['email'];
		$userr = $_SESSION['userr'];
		$pass = "";
		$abc = false;
		$mail = "";
		for($i = 1;$i < count($userr);$i++)
		{
			 if (isset($userr[$i])) {
		       	$user = $userr[$i];
		       	$mail = $user['email'];
		       	$pass = $user['password'];
		       	
		       	if($mail == $email)
		       	{
		       		$abc= true;
		       		break;
		       	}
		    }
		}
		if($email == null or !$abc)
		{
			echo "Enter valid Email";
		}
		else
		{
			echo "";
		}
	}
?>