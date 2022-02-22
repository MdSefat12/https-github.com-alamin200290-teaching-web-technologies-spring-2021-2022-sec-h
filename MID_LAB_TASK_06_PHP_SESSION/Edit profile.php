<html>

<head>
	<title>Change Password</title>
</head>

<body>
	<table border="1" width="100%">
		<tr>
			<td>
				picture
			</td>
			
			<td align="right">
				<a href="login.html">Logged in as </a> |<a href="../controller/logout.php">Logout</a>
			</td>
		</tr>
		<img src="ra.png" alt="logo" width="100px" height="50px">
		<tr style="height:150px;">
			<td> 
	<h4> <ul> Account </ul> </h4> <br>
	
		<li>
		 <a href="Dashboard.html">Dashboard </a> <br/>
		 <a href="profile.html">View Profile </a> <br/>
		 <a href="edit.html">Edit Profile </a> <br/>
		 <a href="profile.html">Change Profile Picture </a> <br/>
		 <a href="changepass.html">Change Password </a> <br/>
		 <a href="logout.php">LogOut </a>
	</li>
	</ul>
	</td>
            <td>
                <form method="post" action=".../controller/editprofile.php">
                    <fieldset style="width: 90%">
                        <legend>Edit Profile</legend>
                        <table>
                           
			<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male">Male
                                        <input type="radio" name="gender" value="Female">Female
                                        <input type="radio" name="gender" value="Other">Other
                                    </fieldset>
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="date" name="dob" value="Male">
                                    </fieldset>
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="signup" value="Submit">
                                    
                            </tr>
			</table>
		</fieldset>
	</form>
		<tr>
			<td colspan="2" align="center">
				Copyright @ 2017
			</td>
		</tr>			
	</table>
</body>
</html>