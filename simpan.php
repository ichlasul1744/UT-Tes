<?php 
include 'database.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    
    $db = new database();
    $simpan = $db->simpan($nama, $alamat, $usia);
}

if($simpan){
    header("Location: tampil.php");
    exit(); 
}else{
    echo "Data gagal disimpan!";
}
?>

<h3>Input Data</h3>
<form method="post" action="">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td><input type="text" name="usia"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>