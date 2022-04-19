<?php 

	function getConnection(){
		$host = "localhost";
		$dbname= "sefat";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}



	function login($username, $password){
		$conn = getConnection();
		$sql = "select * from adminlist where username='{$username}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function signup($adminname,$email, $username, $password,$confirmpassword ,$address)
	{
		$conn = getConnection();
		$sql = "insert into adminlist values('', '{$adminname}','{$email}','{$username}',
		 '{$password}', '{$confirmpassword }', '{$address}')";

		echo $sql;

		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
	}

}
function pakage($adminname,$email, $username, $password,$confirmpassword ,$address)
	{
		$conn = getConnection();
		$sql = "insert into viewpakage values('', '{$adminname}','{$email}','{$username}',
		 '{$password}', '{$confirmpassword }', '{$address}')";

		echo $sql;

		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
	}

}
function getalladmin()
{
	$conn = getConnection();
	$sql = "select * from adminlist";
	$result = mysqli_query($conn, $sql);
	$admin =[];



	while ($user = mysqli_fetch_assoc($result))
	 {
	       array_push($admin,$user);
	}
	
	return $admin;
}
function update($id,$adminname,$email,$username,$password,$address)
{
	$conn = getConnection();
	$sql = "update adminlist set ,adminname ='{$adminname}',email='{$email}',
	username ='{$username}', password= '{$password}',  address='{$address}' where id={$id}";
	if( mysqli_query($conn, $sql))
	{
		return true;
	}
	else
	{
		return false;
	}
	
}
function getdeleteadmin($ID)
{
	$conn = getConnection();
	$sql = "DELETE from adminlist where ID='{ID}'";
	if( mysqli_query($conn, $sql))
	{
		return true;
	}
	else
	{
		return false;
	}



}
function getadmin($id)
	{
		$conn = getconnection();
		$sql = "select * from adminlist where id = '{$id}'";
		$res = mysqli_query($conn, $sql);
		if(mysqli_num_rows($res))
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$Admin = [

					'id' => $row['id'],
					'adminname' => $row['adminname'],
					'email' => $row['email'],
					'username' => $row['username'],
					'password' => $row['password'],
					'address' => $row['address'],
					
				];
				return $Admin;
			}
		}
	}
	function getadminid($username, $password)
	{
		$conn = getconnection();
		$sql = "select * from adminlist where username = '{$username}' and password = '{$password}'";
		$res = mysqli_query($conn, $sql);
		if(mysqli_num_rows($res))
		{
			while($row = mysqli_fetch_assoc($res))
			{
				if($username == $row['username'] and $password == $row['password'])
				{
					$id = $row['id'];
					return $id;
				}
			}
		}
	}

	?>
