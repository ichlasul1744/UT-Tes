<?php
include 'database.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $db = new database();
    $id = $_GET['id'];
    $db->hapus($id);

    header("Location: tampil.php");
    exit;
} else {
    header("Location: tampil.php");
    exit;
}
?>