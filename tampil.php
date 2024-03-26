<?php 
 require_once 'database.php';
$koneksi = new KoneksiDatabase();
?>
<h3>Daftar Mahasiswa</h3>

<a href="simpan.php">Tambah Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Opsi</th>
    </tr>
    <?php
    $nomor = 1;
    foreach($koneksi->ambilData() as $data){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['umur']; ?></td>
        <td>
        <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php 
    }
    ?>
</table>
