<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$iduser    = $_POST['idUser'];
$nama      = $_POST['name'];
$username = $_POST['username'];
$password   = $_POST['password'];
$level      = $_POST['email'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET name = '$nama', username = '$username', password = '$password', email = '$level' WHERE idUser = '$iduser'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>