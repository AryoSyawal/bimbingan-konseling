<?php
include 'koneksi.php';
$sql_guru = "SELECT * FROM guru";
$data_guru = mysqli_query($connect, $sql_guru);
$jumlah_guru = mysqli_num_rows($data_guru);

$sql_siswa = "SELECT * FROM siswa";
$data_siswa = mysqli_query($connect, $sql_siswa);
$jumlah_siswa = mysqli_num_rows($data_siswa);

$sql_konsul = "SELECT * FROM data_konsul";
$data_konsul = mysqli_query($connect, $sql_konsul);
$jumlah_konsul = mysqli_num_rows($data_konsul);

$total = $jumlah_guru + $jumlah_siswa + $jumlah_konsul;

$sql_konsultan_terbaru = "SELECT * FROM data_konsul ";
$data_konsultan = mysqLi_query($connect, $sql_konsultan_terbaru);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">    
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Data</div>
                                    <p style="margin: 0px 0px 20px 20px; font-size: 20px;"><?php echo"$total"?></p>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="index.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Guru</div>
                                    <p style="margin: 0px 0px 20px 20px; font-size: 20px;"><?php echo"$jumlah_guru"?></p>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tabelteacher.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Siswa</div>
                                    <p style="margin: 0px 0px 20px 20px; font-size: 20px;"><?php echo"$jumlah_siswa"?></p>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tabelstudent.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Konsultasi</div>
                                    <p style="margin: 0px 0px 20px 20px; font-size: 20px;"><?php echo"$jumlah_konsul"?></p>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tabelconsult.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Chart Harian
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Chart Kelamin
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Table Recent Consult
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama Guru</th>
                                            <th>Nama Siswa</th>
                                            <th>Tanggal Konsultasi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>Nama Guru</th>
                                            <th>Nama Siswa</th>
                                            <th>Tanggal Konsultasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $data_konsultan = mysqLi_query ($connect,$sql_konsultan_terbaru);
                                        while($data = mysqLi_fetch_array($data_konsultan)){
                                            echo "
                                    <tr>
                                        <td>$data[nama_guru]</td>
                                        <td>$data[nama_siswa]</td>
                                        <td>$data[tanggal_konsul]</td>
                                    </tr>
                                    ";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <?php
            $tanggal_konsul= "";
            $jumlah=null;
            //Query SQL
            $sql="select tanggal_konsul,COUNT(*) as 'total' from data_konsul GROUP by tanggal_konsul";
            $query=mysqli_query($connect,$sql);

            while ($data = mysqli_fetch_array($query)) {
                //Mengambil nilai tanggal_konsul dari database
                $jur=$data['tanggal_konsul'];
                $tanggal_konsul .= "'$jur'". ", ";
                //Mengambil nilai total dari database
                $jum=$data['total'];
                $jumlah .= "$jum". ", ";

            }
        ?>
        <script>
            var ctx = document.getElementById('myAreaChart');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',
                // The data for our dataset
                data: {
                    labels: [<?php echo $tanggal_konsul; ?>],
                    datasets: [{
                        label: "Recent Consult",
                        lineTension: 0.3,
                        backgroundColor: "rgba(2,117,216,0.2)",
                        borderColor: "rgba(2,117,216,1)",
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(2,117,216,1)",
                        pointBorderColor: "rgba(255,255,255,0.8)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(2,117,216,1)",
                        pointHitRadius: 50,
                        pointBorderWidth: 2,
                        data: [<?php echo $jumlah; ?>]
                    }]
                },

                // Configuration options go here
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        </script>
        <?php
            $kelamin= "";
            $jumlah=null;
            //Query SQL
            $sql="select kelamin,COUNT(*) as 'total' from siswa GROUP by kelamin";
            $query=mysqli_query($connect,$sql);

            while ($data = mysqli_fetch_array($query)) {
                //Mengambil nilai kelamin dari database
                $jur=$data['kelamin'];
                $kelamin .= "'$jur'". ", ";
                //Mengambil nilai total dari database
                $jum=$data['total'];
                $jumlah .= "$jum". ", ";

            }
        ?>
        <script>
            var ctx = document.getElementById('myBarChart');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'pie',
                // The data for our dataset
                data: {
                    labels: [<?php echo $kelamin; ?>],
                    datasets: [{
                        label: "Revenue",
                        backgroundColor: ['#007bff', '#dc3545'],
                        borderColor: "#ffff",
                        data: [<?php echo $jumlah; ?>]
                    }]
                },

                // Configuration options go here
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

        </script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
