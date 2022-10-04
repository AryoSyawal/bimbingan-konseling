<?php

include 'koneksi.php';
    if (isset($_GET['id_guru'])){
        header('Location: tabelteacher.php');
    $id_guru = $_GET['id_guru'];
    $sql1 = "DELETE FROM guru WHERE id_guru='$id_guru'"; 
    $query1 = mysqli_query($connect, $sql1);    
    if($query1){
        header('Location: tabelteacher.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }
?>