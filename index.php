<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>tiket</title>
<a href="print.php" target="_blank">Cetak Data</a>
</head>
<body>
<div>
<h1>Pemesanan Tiket</h1>
<a href="create.php">Tambah Data</a>
<br><br>
<table border="1">
<thead>
<tr>
<th>No.</th>
<th>Nama</th>
<th>tanggal_pesan</th>
<th>jenis_tiket</th>
<th>No.Telp</th>
<th>jumlah_orang</th>
<th>jumlah_bayar</th>
<th>Transaksi</th></tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->nama?></td>
<td><?=$data->tgl?></td>
<td><?=$data->tiket?></td>
<td><?=$data->telp?></td>
<td><?=$data->org ?></td>
<td><?=$data->jumlah?></td>
<td><?=$data->transaksi?></td>
<td>
<a name="edit" id="edit" href="edit.php?nim=<?=$data->id ?>">Edit</a>
<a name="hapus" id="hapus" href="proses.php?nim=<?=$data->id ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>
