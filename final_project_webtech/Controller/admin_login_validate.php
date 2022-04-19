
<?php 
	session_start();
	require('../Model/userModel.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username == '' && $password == '')
		{
			echo"null submission..";
		}

		if($username != null && $password != null){

			$status = login($username, $password);
			if($status){
				
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');

				$adminid = getadminid($username, $password);
				
				$_SESSION['current_adminid'] = null;
				$_SESSION['current_adminid'] = $adminid;
				header('location: ../views/Homepage2.php');
			}
			else{
			echo "invalid user";
		}
	}
	}
	?>