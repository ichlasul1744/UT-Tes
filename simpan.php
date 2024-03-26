<?php 
require_once 'database.php';

if(!empty($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    
    $koneksi = new KoneksiDatabase();
    $statusSimpan = $koneksi->tambah($nama, $alamat, $usia);
}

if(isset($statusSimpan) && $statusSimpan){
    header("Location: tampil.php");
    die(); 
}else{
    echo "Gagal menyimpan data!";
}
?>

<h3>Formulir Entri Data</h3>
<form method="post" action="">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat Rumah</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><input type="text" name="usia"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Kirim"></td>
        </tr>
    </table>
</form>
