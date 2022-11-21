<?php
include 'connection.php';

$id_mhs = $_POST['id'];
$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];
$foto = "img1.png";
$email = $_POST['email'];

$query = "UPDATE tbl_mhs SET nim = '$nim', nama_mhs = '$nama_mhs', jk = '$jk', alamat = '$alamat', prodi = '$prodi', email = '$email' WHERE id_mhs = '$id_mhs' ";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}