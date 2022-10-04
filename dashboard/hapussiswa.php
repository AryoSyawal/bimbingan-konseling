<?php

include 'koneksi.php';

    if(isset($_GET['simpan'])){
        $siswa = $_GET['id_siswa']

        $sql = "DELETE * FROM siswa WHERE id_siswa=$siswa";
        $query = mysqli_query($connect, $sql)
        
        if($query){
            header('Location : tabelstudent.php?sukses')
        }else{
            header('Location : hapussiswa.php?gagal')
        }
    }

?>