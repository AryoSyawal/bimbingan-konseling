<?php

    include 'koneksi.php';

    if(isset($_POST['simpanteacher'])){
        $id_guru = $_POST['id_guru'];
        $nama_guru = $_POST['nama_guru'];
        $kelamin = $_POST['kelamin'];

        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png','jfif','gif','psd','pdf','eps','webp');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                    $fileNameNew = $fileName;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header('Location: tabelteacher.php?uploadberhasil');
            }else{
                echo "error upload";
            }
        }else{
            echo "gagal upload";
        }
    }

    $sqldokter = "INSERT INTO guru (id_guru, nama_guru, gambar, kelamin) VALUES ('$id_guru','$nama_guru', '$fileNameNew', '$kelamin')";
    $querydokter = mysqli_query($connect, $sqldokter);

    if($querydokter){
        header('Location: tabelteacher.php');
    }else{
        header('Location: simpanteacher.php?status=gagal');
    }

?>