<?php 
include("koneksi.php");
$db = new database();
$table_barang = $db->tampil_data();
$koneksi=mysqli_connect(hostname:"localhost",username: "root",password: "",database: "belajar_oop");
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css">
            form#background_border{
                margin: 0px 239px;
                color: white;
            }
        </style>
    </head>
    <body>
        <a href="tambah_data.php">
            tambah data
        </a>
        <form id="background_border" method="get">
            <input type="text" name = "caei" placeholder="cari nama barang">
            <input type="submit" value="cari">
        </form> 
        <?php
        if(isset($_GET['cari'])){
        echo "<<hasil pencarian : ".$cari."<b/>";
        }
        ?>

        <table border="1">
            <tr>
                <th>No</th>
                <th>barang</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>action</th>
            </tr>
        <?php
        $no = 1;
        foreach ($table_barang as $row) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_barang'];?></td>
                <td><?php echo $row['stok'];?></td>
                <td><?php echo $row['harga_beli'];?></td>
                <td><?php echo $row['harga_jual'];?></td>
                <td>
                    <a href="edit_data.php?id_barang=<?php echo $row['id_barang'];?>&action=edit">edit</a>
                    <a href="proses_barang.php?id_barang=<?php echo $row['id_barang'];?>&action=delete">hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </table>
    </body>
</html>
