<?php


function getConnection(){
		$host = "localhost";
		$dbname= "sefat";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];

    $conn = getConnection();
	 $sql = "DELETE from viewpakage where id =$id";
	if( mysqli_query($conn, $sql))
	{
		
		header("location: manage pakage.php");
	}
	else
	{
		echo "not deleted";
	}



	}





?>

