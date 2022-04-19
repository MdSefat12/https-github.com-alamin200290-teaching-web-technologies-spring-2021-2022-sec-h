
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
	$sql = "select * from viewpakage where id =$id";
		
	    $result = mysqli_query($conn, $sql);
	  
	    $row = mysqli_fetch_assoc($result);
	 
	     $adminname = $row['name'];
	     $email = $row['type'];
	      $username = $row['location'];
	      $password = $row['hotelname'];
	       $confirmpassword = $row['transportname'];
	        $address = $row['price'];

	if(isset($_REQUEST['submit'])){
		
		$adminname = $_REQUEST['name'];
		$email = $_REQUEST['type'];
		$username = $_REQUEST['location'];
		$password = $_REQUEST['hotelname'];
		$confirmpassword = $_REQUEST['transportname'];
		$address = $_REQUEST['price'];

		$sql = "update viewpakage set id = $id,name='$adminname',type='$email',location='$username',hotelname='$password',transportname='$confirmpassword',price='$address'  where id =$id";
		$result = mysqli_query($conn, $sql);

	if( $result)
	{
		
	header("location: manage pakage.php");
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
				<a href="../Views/manage pakage.php"> <h3>Back</h3></a> 
				<a href="../Views/manage pakage.php"><h3> logout </h3></a> 
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
								<td> Name </td>
								<td>: <input type="text" name="name" value=<?php echo $adminname; ?>> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td> type </td>
								<td>: <input type="text" name="type" value=<?php echo $email; ?>> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							
							<tr >
								<td> location </td>
								<td>: <input type="text" name="location" value=<?php echo $username; ?> > </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td> hotelname </td>
								<td>: <input type="text" name="hotelname" value=<?php echo $password; ?> > </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td> transportname </td>
								<td>: <input type="text" name="transportname" value=<?php echo  $password ; ?>> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td> price </td>
								<td>: <input type="text" name="price" value=<?php echo $confirmpassword; ?>> </td>
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