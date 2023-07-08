<?php

$act = $_GET['act'];

if($act == 'save'){
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis kelamin'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    
    $query = $db->query("INSERT INTO apotek (id_pelanggan, nama, jenis_kelamin, umur, alamat,)
        values('$id_pelanggan','$nama','$jenis_kelmain', '$umur', $alamat')");
    if($query){
        echo "<script>
            alert('Data Sukses disimpan');
            window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }
    else{
    
        echo"<script>
        alert('Data gagal disimpan');
        window.location.href='" . base_url() . "index.php?page=santri&act=input';
        </script>";
    }
}
else if($act == 'update'){
    $id_pelanggan_old = $_POST['id_pelanggan_old'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    if(!empty(password)) {
        $password_fix = sha1($password);
        $query = $db->query("UPDATE pelanggan SET id_pelanggan = '$id_pelanggan',
                                            nama ='$nama',
                                            jenis_kelamin = '$jenis_kelamin',
                                            umur = '$umur',
                                            alamat = '$alamat',
                                    WHERE id_pelanggan='$id_pelanggan_old'");
    }
    else{

        $query = $db->query("UPDATE pelanggan SET id_pelanggan = '$id_pelanggan',
                                            nama ='$nama',
                                            jenis_kelamin = '$jenis_kelamin',
                                            umur = '$umur',
                                            alamat = '$alamat'
                                    WHERE id_pelanggan='$id_pelanggan_old'");
    }
    if($query){
        echo "<script>
            alert('Data Sukses diubah');
            window.location.href='" . base_url() . "index.php?page=pelanggan';
        </script>";
    }
    else{
    
        echo"<script>
        alert('Data gagal diubah');
        window.location.href='" . base_url() . "index.php?page=pelanggan';
        </script>";
    }
}
else if($act == 'hapus'){
    $id_member = $_GET['id_pelanggan'];
    $query = $db->query("DELETE FROM pelanggan WHERE id_pelanggan ='$id_pelanggan'");
    if($query){
        echo "<script>
            alert('Data Sukses dihapus');
            window.location.href='" . base_url() . "index.php?page=pelanggan';
        </script>";
    }
    else{
    
        echo"<script>
        alert('Data gagal dihapus');
        window.location.href='" . base_url() . "index.php?page=pelanggan';
        </script>";
    }
}
else{
    echo "<script>
        alert('maaf parameter tidak valid');
        window.location.href='" . base_url() . "index.php?page=pelanggan';
    </script>";
}

