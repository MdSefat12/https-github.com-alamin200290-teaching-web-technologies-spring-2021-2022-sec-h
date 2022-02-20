
<?php
$uerro = "";
$name="";


if(isset($_REQUEST['submit']))
{
	if($_REQUEST['name']== null)
{
	$uerro = "invalid name";
}
else
{
	$name =$_REQUEST["name"];
}

}

?>

<html>
<head>
	<title></title>
</head>
<body>

	<form method= "POST" action="#">
		<table>
			<tr>
				<td>name</td>
				
				
					<td><input type="text" name="name"value ="<?php echo $name; ?>"></td>
					<td><?php echo $uerro; ?></td>
		
			</tr>
			
			<tr>

				
				</td><td>
					<td><input type="submit" name="submit"value ="submit"></td>
				
			</tr>
			
			
			

		</table>
	</form>


</body>
</html>





