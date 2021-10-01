<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
   
    <a href="create.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TIKET</a>
    <a href="alam.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DESTINASI</a>
    
  </div>
</div>

<body>
    <style>
        body{
            background-images : black;
            margin-top :50px;
        }
        
    </style>

<?php
include 'print.php';
$server ="localhost";
$user ="root";
$password ="";
$nama_database ="wisata1";
$db = mysqli_connect($server,$user,$password,$nama_database);

$sql = "SELECT MAX(id) FROM tiket1 ";
$query = mysqli_query($db, $sql);
if ($data = mysqli_fetch_array($query)){
    $id = $data[0]+1;
}

echo "
<head>
<title>Tiket</title>
</head>
<body>

    <center>
    <form action='' method='POST'>
    <h2>DAFTAR TIKET</h2><p>
    <table border=2 frame='void'><tr><td>
    <table>
    <tr><td>ID</td> <td>: $id</td></tr> 
    <tr><td>Nama lengkap</td> <td>: <input type='text' name='nm'></td></tr> 
    <tr><td>Tanggal Pesan</td><td>: <input type='text' name='tgl'></td></tr>
    <tr><td>No.telp </td> <td>: <input type='text' name='telp'></td></tr> 
    <tr><td>jenis tiket </td><td>: <input type='text' name='tkt'></td></tr>
    <tr><td>jumlah orang </td> <td>: <input type='text' name='org'></td></tr> 
    <tr><td><input type='Submit' name='Daftar' value='Daftar'></td></tr>
    </table>
    </td></tr>
    </table>
</form>
<table>
<tr>
<td>id</td>
<td>Nama Lengkap</td>
<td>tanggal pesan</td>
<td>No.telp</td>
<td>jenis tiket</td>
<td>jumlah orang</td>
</tr>
";

if (isset($_POST['Daftar'])){
    $nm = $_POST['nm'];
    $tgl = $_POST['tgl'];
    $telp = $_POST['telp'];
    $tkt = $_POST['tkt'];
    $org = $_POST['org'];
    
    $sql = "INSERT INTO 
    tiket1 (id,nama,tgl,no_telp,tiket,jml_org) 
    VALUES ('$id', '$nm', '$tgl', '$telp', '$tkt','$org')";
    $query = mysqli_query($db, $sql);
        
        echo "<td>$id</td>";
        echo "<td>$nm</td>";
        echo "<td>$tgl</td>";
        echo "<td>$telp</td>";
        echo "<td>$tkt</td>";
        echo "<td>$org</td>";
        echo "<td>
        
        
        </td></tr></form>";
}
echo "<a href='home.php'>Home</a><br>";

?>
</body>
</html>