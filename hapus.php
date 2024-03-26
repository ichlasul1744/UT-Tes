<?php
require_once 'database.php';

if(!empty($_GET['id'])) {
    $koneksi = new KoneksiDatabase();
    $id = $_GET['id'];
    $koneksi->hapus($id);

    header("Location: tampil.php");
    die();
} else {
    header("Location: tampil.php");
    die();
}
?>
