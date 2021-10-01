<?php
include 'koneksi.php';
class Model extends Connection{
public function __construct()
    {
        $this->conn = $this->get_connection();

    }
    public function insert($nama, $tgl, $tiket, $telp,$org)
{
    $jumlah = $this->jumlah($tiket,$org);
    $transaksi = $this->transaksi($jumlah);
    $sql = "INSERT INTO transaksi (nama,tgl_pesan,jenis_tiket,no_telp, jml_org, jml_bayar, transaksi) VALUES ('$nama', '$tgl',
            '$tiket', '$telp', '$org', '$jumlah', '$transaksi')";
    $this->conn->query($sql);
}
public function jumlah($tiket,$org){
    $tiket = 25000;
    $jumlah=$tiket*$org;
    return $jumlah;
}
public function transaksi($jumlah){
    $jumlah="";
    if($jumlah >= 25000){
    $transaksi="selamat berlibur";
}else{
    $transaksi="tidak dapat tiket";
}
    return $transaksi;
}

public function tampil_data()
{
    $sql = "SELECT * FROM tiket1";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    
}
public function edit($id)
{
    $sql = "SELECT * FROM tiket1 WHERE id='$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
}
public function update($id, $nm, $tgl,$tiket, $telp,$org)
{
    
    $sql = "UPDATE tiket SET nama='$nm',tgl_pesan='$tgl', jenis_tiket='$tkt', no_telp='$telp', jml_org='$org' WHERE id='$id'";
    $this->conn->query($sql);
}
public function delete($id)
{
    $sql = "DELETE FROM tiket1 WHERE id='$id'";
    $this->conn->query($sql);
}
}