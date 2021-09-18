<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
</head>
<body>
    <center>
    <h3>Halaman Pembayaran Siswa</h3>
        <table border = "1">
            <tr>
                <th>NISN</th>
                <th>ID PEMBAYARAN</th>
                <th>ID SPP</th>
                <th>TGL BAYAR</th>
                <th>BULAN BAYAR</th>
                <th>TAHUN BAYAR</th>
                <th>ID PETUGAS</th>
                <th>JUMLAH BAYAR</th>
            </tr>
            <?php
            $nisn= $_POST['nisn'];
        
            if($nisn == ""){
                    header("location:inputpembayaran.php?nisn=kosong");
                }else{
                ?>
                <tr>
                    <?php    
                    include 'koneksi.php';
                    $data = mysqli_query ($koneksi,"SELECT * FROM  tbl_pembayaran where nisn='$nisn'");
                    while($d=mysqli_fetch_array($data)){
                    ?>
                    <td><?php echo $nisn; ?></td>
                    <td><center><?php echo $d['id_pembayaran']; ?></center></td>
                    <td><center><?php echo $d['id_petugas']; ?></center></td>
                    <td><center><?php echo $d['tgl_bayar']; ?></center></td>
                    <td><center><?php echo $d['bulan_dibayar']; ?></center></td>
                    <td><center><?php echo $d['tahun_dibayar']; ?></center></td>
                    <td><center><?php echo $d['id_spp']; ?></center></td>
                    <td><center><?php echo $d['jumlah_bayar']; ?></center></td>
                    </td>
                        
                </tr>
            <?php
            }
        }
        ?>
                
        </table>
        <p><a href="indexadmin.php">Kembali</a></p>
</body>
</center>
</html>