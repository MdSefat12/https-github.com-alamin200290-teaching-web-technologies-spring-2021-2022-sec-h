
<?php
function getConnection(){
		$host = "localhost";
		$dbname= "sefat";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}
    


	$conn = getConnection();
	$id = $_GET['id'];
	$sql = "select * from adminlist where id =$id";
		
	    $result = mysqli_query($conn, $sql);
	  
	    $row = mysqli_fetch_assoc($result);
	 
	     $adminname = $row['adminname'];
	     $email = $row['email'];
	      $username = $row['username'];
	      $password = $row['password'];
	        $confirmpassword = $row['confirmpassword'];
	         $address = $row['address'];

	if(isset($_REQUEST['submit'])){
		
		$adminname = $_REQUEST['adminname'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$confirmpassword = $_REQUEST['confirmpassword'];
		$address = $_REQUEST['address'];

		$sql = "update adminlist set id = $id,adminname='$adminname',email='$email',username='$username',password='$password',confirmpassword='$confirmpassword',address='$address'  where id =$id";
		$result = mysqli_query($conn, $sql);

	if( $result)
	{
		
	header("location:admin list.php");
	}
	else
	{
		echo "not updated";
	}


	}




?>



<html>
<head>
	<title>update</title>

	<style>
	h3{
		color: red;
	}
</style>
	<table  width = "100%"> 
		<tr>
			<td> 
				<h5 align = "left">
				<a href="../Views/admin list.php"> <h3>Back</h3></a> 
				<a href="../Views/Homepage.php"><h3> logout </h3></a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table height = "60%" width = "100%" >
		<tr align = "left">
			<td> 
				<form method="POST" action="">
					<fieldset align="center" style = "width: 35%">
						<legend>Update Page</legend>
						<table align="center">
							<tr >
								<td>Admin Name </td>
								<td>: <input type="text" name="adminname" value=<?php echo $adminname; ?>> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Email </td>
								<td>: <input type="text" name="email" value=<?php echo $email; ?>> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							
							<tr >
								<td>Username </td>
								<td>: <input type="text" name="username" value=<?php echo $username; ?> > </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Password </td>
								<td>: <input type="Password" name="password" value=<?php echo  $password ; ?>> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Confirm Password </td>
								<td>: <input type="password" name="confirmpassword" value=<?php echo $confirmpassword; ?>> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> Address </td>
								<td>: <input type = "text" name = "address" value = <?php echo $address; ?>> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td colspan = "3"> 
									<input type = "submit" name = "submit" value = "Update">
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>