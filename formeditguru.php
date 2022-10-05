<?php
include 'koneksi.php';
$idguru = hexdec(uniqid());

$id_guru = $_GET['id_guru'];
    $sql = "SELECT * FROM guru WHERE id_guru='$id_guru'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query)  < 1){
        die("Data Tidak Ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="">
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Close-Friend</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                table
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="tabelteacher.php">Teacher</a>
                                    <a class="nav-link" href="tabelstudent.php">Student</a>
                                    <a class="nav-link" href="tabelconsult.php">Consult</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Teac</h1>
                        <ol class="breadcrumb mb-4">    
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="container">
                    <div class="card-content">
                        <div class="container">
                    <div class="edit-content">
                        <form action="editguru.php" method="post" enctype="multipart/form-data">
                        <div class="form-edit">
                            <table>
                                <tr>
                                    <th>Id</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="id_guru" value="<?php echo $data['id_guru']?>" readonly></td>
                                </tr>
                                <tr>
                                    <th>Nama Guru :</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="nama_guru" required="required" autocomplete="off"value="<?php echo $data['nama_guru']?>"></td>
                                </tr>
                                <tr>
                                    <th>Kelamin :</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" id="laki_laki" name="kelamin" value="laki-laki" <?php if($data['kelamin']=='laki-laki') echo 'checked'?> required="required">
                                        <label for="laki_laki">Laki-laki</label>
                                        <input type="radio" id="perempuan" name="kelamin" value="perempuan" <?php if($data['kelamin']=='perempuan') echo 'checked'?> required="required">
                                        <label for="perempuan">Perempuan</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="file" required="required"></td>
                                </tr>
                            </table>
                            <div class="btn-simpan-cancel">
                                <a class="btn-simpan" href="tabelteacher.php">cancel</a>
                                <input type="submit" name="simpan" value="simpan">
                            </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
