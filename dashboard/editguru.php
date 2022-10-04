<?php
include 'koneksi.php';

 if(isset($_POST['simpan'])){
    $id_guru = $_POST['id_guru'];
    $nama_guru = $_POST['nama_guru'];
    $kelamin = $_POST['kelamin'];

    $sql = "UPDATE guru SET id_guru='$id_guru', nama_guru='$nama_guru', kelamin='$kelamin' WHERE id_guru='$id_guru'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tabelteacher.php');
    }else{
        header('Location: editguru.php?status=gagal');
    }      
 }
?>