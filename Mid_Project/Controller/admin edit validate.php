<?php 
	session_start();
	$file = fopen('../Model/sst.txt', 'w');
	fwrite($file, "");
	fclose($file);
	if(isset($_REQUEST['save']))
	{
		
		$adminname = $_REQUEST['Adminname'];
		$email =  $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$address =  $_REQUEST['Address'];
		
		if( $adminname == "null" or $email == "null" or $usernname == "null"or $password == "null"or  $address == "null") 
		{
			echo "can not be empty";
		}
		
		else
		{
			$file = fopen('../Model/admin.txt', 'r');
			$sst = fopen('../Model/sst.txt', 'w');
			while(!feof($file))
			{
				$getadmin = fgets($file);
				$adminarray = explode('|', $getadmin);
				
				
			}
			$string =$adminname."|".$email."|".$username."|". $password."|".$address."\r\n";
			fwrite($sst, $string);
			fclose($file);
			fclose($sst);
			$sst = fopen('../Model/sst.txt', 'r');
			$file = fopen('../Model/admin.txt', 'w');
			$sst = fread($sst, filesize('../Model/sst.txt'));
			fwrite($file, $sst);
			$current_user['username'] = $username;
			$current_user['password'] = $password;
			$current_user['email'] = $email;
			$current_user['Adminname'] = $adminname;
			$current_user['Address'] = $address;
			$_SESSION['current_user'] = $current_user;
			header('location: ../Views/admin_profile.php');
		}
	}
	else
	{
		echo "Error";
	}
	