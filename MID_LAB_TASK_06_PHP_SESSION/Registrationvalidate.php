<?php 
	session_start();
	$user = ['myname'=> "",'email'=>"",'username'=>"",'password'=>"",'confirm'=>"",'gender'=>"",'dob'=>""];
	$_SESSION['userr'] = $user;
	if(isset($_REQUEST['submit']))
	{
		$myname = $_REQUEST['myname'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$confirm = $_REQUEST['confirm'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$abc = true;
		if($myname == null or $username == null or $email == null or $confirm == null or $gender ==  null or $password == null or $dob == null) 
		$ab = false;
		if($confirm != $password)
		 $ab = false;
		if(!$abc)
		{
			echo "Registrationincomplete";
		}
		else
		{
			$user = ['myname'=>$myname,'email'=>$email,'username'=>$username,'password'=>$password,'confirm'=>$confirm,'gender'=>$gender,'dob'=>$dob];
			
			
			$userr = $_SESSION['userr'];
			$dgf = count($userr);
			$_SESSION['users'][$dgf] = $user;
			header('location: loginpage.php');
		}
	}

?>