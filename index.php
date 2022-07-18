<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
 <style>
 h1{color: blue; text-align: center;
 }
 </style>
<body>
<h1> Daftar Anggota </h1>
 
    <table width='80%' border=1 align='center'>
 
    <tr>
        <th>Nama</th> <th>No Hp</th> <th>Email</th> <th>Tindakan</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
	
<br/>
<center>
<a href="add.php"><button>Tambah Anggota</button</a>
</center>
<br/>
</body>
</html>