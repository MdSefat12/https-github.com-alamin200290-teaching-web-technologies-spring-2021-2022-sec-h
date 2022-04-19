

<?php
function getConnection(){
		$host = "localhost";
		$dbname= "sefat";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


?>

<html>
<head>
	<title>admin list</title>
</head>
<style>
	h3{
		color: red;
	}
</style>

<body>

	<a href="Homepage2.php"><h3> Back</h3> </a> 

	<a href="../controller/logout.php"><h3>Logout </h3></a>
	
	<table border="1">
		<tr>
			<td>NO</td>
			<td>adminname</td>
			<td>Eamil</td>
			<td>username</td>
			<td>password</td>
			<td>confirm password</td>
			<td>address</td>
			<td>Action</td>
		</tr>
		<?php
		$sql = "select * from adminlist";
		$conn = getConnection();
	    $result = mysqli_query($conn, $sql);
	  
	    if ($result)
	 {
	     while ($row = mysqli_fetch_assoc($result)) {
	     $id=$row['id'];
	     $adminname = $row['adminname'];
	     $email = $row['email'];
	      $username = $row['username'];
	       $pass = $row['password'];
	        $con = $row['confirmpassword'];
	         $address = $row['address'];
	        
	        echo "<tr>
			<td>$id</td>
			<td>$adminname</td>
			<td>$email</td>
			<td>$username</td>
			<td>$pass</td>
			<td>$con</td>
			<td>$address</td>
			<td>
				<a href= 'admin edit.php?id=$id'> Update </a> |
				<a href= 'admin delete.php?id=$id'> Delete </a>
			</td>
		</tr>";
	     }
	     
	}

	

	?>

	</table>
</body>
</html>