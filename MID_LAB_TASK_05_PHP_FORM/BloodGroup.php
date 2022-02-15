
<?php
$uerro = "";




if(isset($_REQUEST['submit']))
{
	if(isset($_REQUEST['Bloodgroup']))

{
	


	$uerro = "valid dob";
	
}
else
{
	$uerro = "invalid dob";
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
				
				
				
					<td>Blood Group</td>
					<td>
						<select name="Bloodgroup">
						
						<option value="">A+</option>
						<option value="">A-</option>
						<option value="">B+</option>
						<option value="">B+</option>
						<option value="">B-</option>
						<option value="">AB+</option>
						<option value="">AB-</option>
						<option value="">O+</option>
						<option value="">O-</option> 
					</select> <br>
					</td>
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





