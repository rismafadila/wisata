<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit</title>
</head>
<body>
<h1>Edit Pemesanan Tiket</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="process.php" method="post">
<label>Nama</label>
<br>
<input type="text" name="nama" value="<?php echo $data->nama ?>">
<br>
<label>Tanggal pesan</label>
<br>
<input type="text" name="nama" value="<?php echo $data->tgl ?>">
<br>
<label>Jenis Tiket</label>
<br>
<input type="text" name="tiket" value="<?php echo $data->tiket?>">
<br>
<label>No.telp</label>
<br>
<input type="text" name="telp" value="<?php echo $data->telp?>">
<br>
<label>jumlah orang</label>
<br>
<input type="text" name="org" value="<?php echo $data->org ?>">
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>