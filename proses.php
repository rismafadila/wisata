<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $tiket = $_POST['tiket'];
    $telp = $_POST['telp'];
    $org = $_POST['org'];
    $model = new Model();
    $model->insert($nama, $tgl, $tiket, $telp, $org);
    header('location:index.php');
    if (isset($_POST['submit_edit'])) {
        $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $tiket = $_POST['tiket'];
    $telp = $_POST['telp'];
    $org = $_POST['org'];
        $model = new Model();
        $model->update($nama,$tgl, $tiket, $telp,$org);
        header('location:index.php');
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $model = new Model();
        $model->delete($id);
        header('location:index.php');
    }
}