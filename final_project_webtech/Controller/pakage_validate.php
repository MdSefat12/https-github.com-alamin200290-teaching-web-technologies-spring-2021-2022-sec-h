
<?php 
	session_start();
	require('../model/userModel.php');

	if(isset($_REQUEST['submit'])){
		
		$adminname = $_REQUEST['name'];
		$email = $_REQUEST['type'];
		$username = $_REQUEST['location'];
		$password = $_REQUEST['hotelname'];
		$confirmpassword = $_REQUEST['transportname'];
		$address = $_REQUEST['price'];
		if($adminname != null && $username != null && $email != null && $confirmpassword!= null && $address !=  null && $password != null)
		{
			$status = pakage($adminname,$email, $username, $password,$confirmpassword ,$address);
			if($status){
				header('location: ../views/manage pakage.php');
			}
		}
			
        else{
        	echo " Null Submission";

			 	
		 }

		}
		

		?>


