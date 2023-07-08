<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <tittle>Apotek</tittle>
    </head>
</html>
<<a class="btn btn-primary btn-sm" href="<?php echo base_url().'index.php?page=santri&act=input';?>">Tambah Data</a>
    <?php
    $query = $db->query("SELECT * FROM nama;");
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Id_Pelanggan</th>
            <th>Act</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            while($row = $query->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['jenis_kelamin'];?></td>
                    <td><?php echo $row['umur'];?></td>
                    <td><?php echo $row['id_pelanggan'];?></td>
                    <td><a class="btn btn-success btn-sm" href="<?php echo base_url();?>index.php?page=apotek&act=edit&apotek=<?php echo $row['nama'];?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?php echo base_url();?>index.php?page=apotek&act=hapus&apotek=<?php echo $row['nama'];?>">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
  </div>
</div>
