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
    <title>view pakage</title>
</head>
<style>
    h3{
        color: red;
    }
</style>
<body>

   <a href="Homepage2.php"> <h3> Back</h3> </a> 
  <a href="../controller/logout.php"> <h3>Logout </h3></a>
  <a href="paagecreate.php"> <input type="button" name= "create" value="create"></a> <br> <br>
  


    <form method="POST" action="../view/Homepage2.php">
        
            <legend></legend>
            <table>
                <tr>
 <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>TYPE</td>
            <td>LOCATION</td>
            <td>HOTEL NAME</td>
            <td>TRANSPORT NAME</td>
            <td>PRICE</td>
            <td>ACTIONS</td>
        </tr>
        <?php
        $sql = "select * from viewpakage";
        $conn = getConnection();
        $result = mysqli_query($conn, $sql);
      
        if ($result)
     {
         while ($row = mysqli_fetch_assoc($result)) {
            $id=$row['id'];
          $adminname = $row['name'];
           $email = $row['type'];
           $username = $row['location'];
            $pass = $row['hotelname'];
            $con = $row['transportname'];
             $address = $row['price'];
            
            echo "<tr>
            <td>$id</td>
            <td>$adminname</td>
            <td>$email</td>
            <td>$username</td>
            <td>$pass</td>
            <td>$con</td>
            <td>$address</td>
            <td>
                <a href= 'pakageedit.php?id=$id'> Update </a> |
                <a href= 'pakagedelete.php?id=$id'> Delete </a>
            </td>
        </tr>";
         }
         
    }

    

    ?>

       

            
            </table>
       
    </form>
</body>
</html>


