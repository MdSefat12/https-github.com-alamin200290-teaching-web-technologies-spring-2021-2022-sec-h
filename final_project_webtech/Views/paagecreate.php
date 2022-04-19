<html>
<head>
	<title> viewPage</title>
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
				<a href="../Views/manage pakage.php"><h3>logout</h3></a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>


	<table height = "60%" width = "100%" >
		<tr align = "left">
			<td> 
				<form method="POST" action="../Controller/pakage_validate.php" name ="myform" onsubmit="return validate()">
					<fieldset align="center" style = "width: 35%">
						<legend>view pakage</legend>
						<table align="center">
							<tr >
								<td> Name </td>
								<td>: <input type="text" name="name" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>type </td>
								<td>: <input type="text" name="type" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							
							<tr >
								<td>location </td>
								<td>: <input type="text" name="location" value="" > </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>hotelname</td>
								<td>: <input type="text" name="hotelname" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>transportname </td>
								<td>: <input type="text" name="transportname" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> price </td>
								<td>: <input type = "text" name = "price" value = ""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td colspan = "3"> 
									<input type = "submit" name = "submit" value = "Submit">
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>


	<script>
		function validate() {



			let aname = document.forms["myform"]["name"].value;
			let ename = document.forms["myform"]["type"].value;
			let uname = document.forms["myform"]["location"].value;
			let pname = document.forms["myform"]["hotelname"].value;
			let cpname = document.forms["myform"]["transportname"].value;
			let adname = document.forms["myform"]["price"].value;



			if(aname == '')
			{
				alert("name cannot be empty");
				return false;
			}
			if(ename == '')
			{
				alert("please enter your type");
				return false;
			}
			
			if(uname == '')
			{
				alert("location cannot be empty");
				return false;
			}
			if(pname == '')
			{
				alert("hotelname enter your password");
				return false;
			}
			if(cpname == '')
			{
				alert("please enter your transportname");
				return false;
			}
			if(adname == '')
			{
				alert("enter your price");
				return false;
			}
			
			
			
			
		}
		





	</script>
</body>
</html>