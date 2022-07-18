<html>
<head>
    <title>Tambah Anggota</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
	<h1><center>Silahkan Isi Data</center></h1>
	<center>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>No Hp</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><br><input type="submit" name="Submit" value="Tambah"></br></td>
            </tr>
        </table>
    </form>
	</center>
    
    <?php
	
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        // Show message when user added
         echo "<center> User added successfully. <a href='index.php'>Lihat Anggota</center></a>";
    }
    ?>
</body>
</html>