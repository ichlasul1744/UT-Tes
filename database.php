<?php
class KoneksiDatabase {
    private $server = "localhost";
    private $pengguna = "root";
    private $katasandi = "";
    private $namaDB = "db_akademik";
    private $koneksi;

    public function __construct() {
        $this->koneksi = new mysqli($this->server, $this->pengguna, $this->katasandi, $this->namaDB);
    }

    public function ambilData() {
        $hasil = $this->koneksi->query("SELECT * FROM mahasiswa");
        return $hasil;
    }

    public function tambah($nama, $alamat, $umur) {
        $nama = $this->koneksi->real_escape_string($nama);
        $alamat = $this->koneksi->real_escape_string($alamat);
        $umur = $this->koneksi->real_escape_string($umur);

        $perintah = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
        $hasil = $this->koneksi->query($perintah);

        return $hasil;
    }

    public function hapus($id) {
        $id = $this->koneksi->real_escape_string($id);

        $perintah = "DELETE FROM mahasiswa WHERE id='$id'";
        $hasil = $this->koneksi->query($perintah);

        return $hasil;
    }
}
?>
