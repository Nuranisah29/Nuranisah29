
<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <tittle>Form Apotek</tittle>
    </head>

    <body>
        <form action="controller_prodi.php" method="post">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin">
        </div>
        
        <div>
            <label for="umur">Umur</label>
            <input type="text" name="umur" id="umur">
        </div>
        <div>
            <label for="id_pelanggan">Id Pelanggan</label>
            <input type="text" name="id_pelanggan" id="id_pelanggan">
        </div>
        <div>
            <input type="submit" value="Simpan Data">
        </div>
        </form>
    </body>