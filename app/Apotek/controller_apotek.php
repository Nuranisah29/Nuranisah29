<?php
require "../../config/config_database.php";
$db = koneksi (hostname, username, password, database);

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$id_pelanggan = sha1 ($_POST['id_pelanggan']);

$query = $db->query("INSERT INTO nama (nama, jenis_kelamin, umur, id_pelanggan)
                 VALUES ('$nama','$jenis_kelamin','$umur','$id_pelanggan')");
if($query){
    echo "<script>
    alert('Data sukses disimpan')
    window.location.href='list_prodi.php';
    </script>"
}
else{
    echo "<script>
    alert('Data gagal disimpan')
    window.location.href='form_prodi.php';
    </script>"
}
