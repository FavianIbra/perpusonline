<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<br>
<br>

<body>
    
</body>
</html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="container">
    <h3>Tambah Buku</h3>
    <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
        Nama Buku:
        <input type="text" name="nama_buku" value="" class="form-control">
        Deskripsi :
        <textarea name="deskripsi" cols = 147 class="form-control"></textarea>
        Foto :
        <input type="file" name="foto" class="form-control">
        <br>
        <input type="submit" name="submit" value="Tambah Produk" class="btn btn-dark text-light">
    </form>
</div>

</body>
</html>