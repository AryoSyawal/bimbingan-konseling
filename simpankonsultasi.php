<?php

include 'koneksi.php';

if(isset($_POST['simpankonsul'])){
    $id = $_POST['id'];
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $nama_guru = $_POST['nama_guru'];
    $kelas = $_POST['kelas'];
    $kelamin = $_POST['kelamin'];
    $tanggal_konsul = $_POST['tanggal_konsul'];
  
    $sql1 = "INSERT INTO `data_konsul` (`id`, `nama_guru`, `tanggal_konsul`) VALUES ('$id_konsul', '$nama_guru', '$tanggal_konsul')";
    $sql2 = "INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `kelas`, `kelamin`) VALUES ('$id_siswa', '$nama_siswa', '$kelas', '$kelamin')";

    mysqLi_query($connect, $sql1);
    mysqLi_query($connect, $sql2);

    header('location:landingpage.php?sukses');
}
?>