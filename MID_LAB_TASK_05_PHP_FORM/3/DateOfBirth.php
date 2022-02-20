
<?php
$uerro = "";
$DOB="";


if(isset($_REQUEST['submit']))
{
	if($_REQUEST["dob"]== null)
{
	$uerro = "invalid DOB ";
}
else
{
	$DOB = $_REQUEST["dob"];
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
				<td>Date of Birth</td>
				
				
					<td><input type="date" name="dob"value ="<?php echo $DOB; ?>"></td>
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





