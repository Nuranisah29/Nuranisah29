<?php

$act = isset($_GET['act']) ? $_GET['act'] : false;
$id = isset($_GET['id_santri']) ? $_GET['id_santri'] : false;

if($act == 'edit') {
    $url = base_url() . "index.php?page=santri&act=update";
    if($id){
        $query = $db->query("SELECT * FROM santri where id_santri = '$id'");
        $row = $query->fetch_array();
    }
    else{
        echo "<script>
        alert('Parameter nomer santri unvalid');
        window.location.href=' " . base_url() . "index.php?page=santri';</script>";
    }

}
else{
    $url = base_url() . "index.php?page=santri&act=save";
}
?>

        <div class="card">
  <div class="card-header">
    Input Data Apotek
  </div>
  <div class="card-body">
  <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="id_pelanggan_old" id="id_pelanggan_old" value="<?php echo isset($row) ? $row['id_pelanggan'] : ''; ?>">
        <div class= "mb-3">
            <label for="id_pelanggan">No</label>
            <input type="text" class="form-control" name="id_pelanggan" id="id_pelanggan" value="<?php echo isset($row) ? $row['id_pelanggan'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <label for="nama">Nama</label>
            <input  class="form-control" name="nama" id="nama" value="<?php echo isset($row) ? $row['nama'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <label for="nis">Jenis_Kelamin</label>
            <input  class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo isset($row) ? $row['jenis_kelamin'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <label for="ttl">Umur</label>
            <input  class="form-control" name="umur" id="umur" value="<?php echo isset($row) ? $row['umur'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <label for="asrama">Alamat</label>
            <input  class="form-control" name="alamat" id="alamat" value="<?php echo isset($row) ? $row['alamat'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <a class="btn btn-danger btn-sm float-start" href="list_member.php">
            <i class="fa-solid fa-floopy-disk"></i>
                Kembali
            </a>
            <button class="btn btn-primary btn-sm float-end" type="submit">
                <i class="fa-reguler fa-floopy-disk"></i>
                Simpan Data
            </button>
        </div>
    </form>
  </div>
</div>

