<?php
class Database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "db_akademik";
    var $link;

    function __construct()
    {
        $this->link = mysqli_connect($this->host, $this->uname, $this->pass);
        mysqli_select_db($this->link, $this->db);
    }

    function tampil()
    {
        $result = mysqli_query($this->link, "SELECT * FROM mahasiswa");
        return $result;
    }

    function simpan($nama, $alamat, $umur){
        $nama = mysqli_real_escape_string($this->link, $nama);
        $alamat = mysqli_real_escape_string($this->link, $alamat);
        $umur = mysqli_real_escape_string($this->link, $umur);
        
        $query = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
        $result = mysqli_query($this->link, $query);
        
        return $result;
    }

    function hapus($id){
        $id = mysqli_real_escape_string($this->link, $id);
        
        $query = "DELETE FROM mahasiswa WHERE id='$id'";
        $result = mysqli_query($this->link, $query);
        
        return $result;
    }
}
?>