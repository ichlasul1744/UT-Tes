<?php 
include 'database.php';
$db = new database();
?>
<h3>Data Mahasiswa</h3>
 
<a href="simpan.php">Input Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nama']; ?></td>
        <td><?php echo $x['alamat']; ?></td>
        <td><?php echo $x['umur']; ?></td>
        <td>
        <a href="hapus.php?id=<?php echo $x['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php 
    }
    ?>
</table>