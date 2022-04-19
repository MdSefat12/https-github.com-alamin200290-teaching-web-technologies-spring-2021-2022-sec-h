
<?php 
	session_start();
	require('../model/userModel.php');

	if(isset($_REQUEST['submit'])){
		
		$adminname = $_REQUEST['adminname'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$confirmpassword = $_REQUEST['confirmpassword'];
		$address = $_REQUEST['address'];
		if($adminname != null && $username != null && $email != null && $confirmpassword!= null && $address !=  null && $password != null)
		{
			$status = signup($adminname,$email, $username, $password,$confirmpassword ,$address);
			if($status){
				header('location: ../views/Homepage.php');
			}
		}
			
        else{
        	echo " Null Submission";

			 	//header('location: ../views/admin_registration.php');
		 }

		}
		

		?>


