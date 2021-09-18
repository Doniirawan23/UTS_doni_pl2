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
    <h3>Halaman Detail Siswa</h3>
        <table border = "1">
            <tr>
                <th>NISN</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>ID KELAS</th>
                <th>ALAMAT</th>
                <th>NO TELP</th>
                <th>ID SPP</th>
                <th>AKSI</th>
            </tr>
            <?php
            $nisn= $_POST['nisn'];
        
            if($nisn == ""){
                    header("location:inputsiswa.php?nisn=kosong");
                }else{
                ?>
                <tr>
                    <?php    
                    include 'koneksi.php';
                    $data = mysqli_query ($koneksi,"SELECT * FROM  tbl_siswa where nisn='$nisn'");
                    while($d=mysqli_fetch_array($data)){
                    ?>
                    <td><?php echo $nisn; ?></td>
                    <td><?php echo $d['nis']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><center><?php echo $d['id_kelas']; ?></center></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_telp']; ?></td>
                    <td><center><?php echo $d['id_spp']; ?></center></td>
                        
                </tr>
            <?php
            }
        }
        ?>
                
        </table>
        <p><a href="inputsiswa.php">Kembali</a></p>
</body>
</center>
</html>