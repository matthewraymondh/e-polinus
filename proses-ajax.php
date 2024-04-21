<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$query = mysqli_query($koneksi, "select * from pasien where nim='$nim'");
$p = mysqli_fetch_array($query);
$data = array(
            'id'      =>  $p['id'],
            'nama'      =>  $p['nama'],
            );
 echo json_encode($data);
?>