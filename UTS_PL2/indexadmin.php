<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
    <center>
	<h1>Halaman Admin</h1>
	
	<br/>
    
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat Datang, <?php echo $_SESSION['username']; ?>!   </h4>
    <tr>
        <td><a href = "inputsiswa.php">Siswa</a></td>
        <td> | </td>
		<td><a href = "inputpembayaran.php">Pembayaran</a></td>
		<td> | </td>
		<td><a href="delete.php">delete</a></td>
       
    </tr>    
	<br/>
	<br/>
 
	<a href="logout.php">Logout</a>
 
 
</body>
</center>
</html>