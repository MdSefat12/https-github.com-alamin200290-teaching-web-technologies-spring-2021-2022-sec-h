<?php 
	
	session_start();
	require('../Model/UserModel.php');
	if(isset($_REQUEST['submit']))
	{
		$id = $_REQUEST['id'];
		$adminid = $_SESSION['current_adminid'];
		$name = $_REQUEST['adminname'];
		$ss = $_REQUEST['email'];
		$sss = $_REQUEST['username'];
		$ssss= $_REQUEST['password'];
		$sa = $_REQUEST['email'];
		$sq = $_REQUEST['address'];
		
			if(update($id, $adminid, $name, $ss, $sss, $ssss,$sa,$sq))
			{
				header('location: ../Views/Admin_profile.php');
			}
			else{
				echo "";
			}
		}
	
	
?>