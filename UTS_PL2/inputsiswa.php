<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <center>
        <?php 
        if(isset($_GET['nisn'])){
            if($_GET['nisn'] == "kosong"){
                echo "<h4 style='color:red'>NISN Belum Di Masukkan !</h4>";
            }
        }
        ?>
        <h3>Halaman Siswa</h3>
        <form method="post" action="viewsiswa.php">
		<table>
			<tr>
				<td>Input NISN</td>
				<td>:</td>
				<td><input type="text" name="nisn" placeholder="Masukkan NISN Siswa"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>			
	</form>
        <p><a href="indexadmin.php">Kembali</a></p>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</center>