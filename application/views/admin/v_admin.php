<?php
$koneksi    = mysqli_connect("localhost", "root", "", "db_padi");
$produksi  = mysqli_query($koneksi, "SELECT produksi FROM tb_produksi");
$kecamatan       = mysqli_query($koneksi, "SELECT kecamatan FROM tb_produksi");
$tahun       = mysqli_query($koneksi, "SELECT tahun FROM tb_produksi");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Halaman Admin</title>
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="<?= base_url('assets/'); ?>js/all.min.js" crossorigin="anonymous"></script>

    <script src="<?= base_url('assets/'); ?>js/Chart.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Halaman Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>


        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo base_url(); ?>login_control" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu Admin</div>
                        <a href="<?php echo base_url(); ?>admin_control" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Beranda
                        </a>
                        <a href="<?php echo base_url(); ?>admin_map" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fa fa-map"></i></div>
                            View Peta Produksi
                        </a>
                        <div class="sb-sidenav-menu-heading">Menu Kelola Data</div>
                        <a href="<?php echo base_url(); ?>admin_user" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            Data User
                        </a>
                        <a href="<?php echo base_url(); ?>admin_produksi" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                            Data Produksi
                        </a>
                        <a href="<?php echo base_url(); ?>admin_cluster" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                            Data Hasil Cluster
                        </a>
                        <a href="<?php echo base_url(); ?>tanggal_control" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                            Data Tanggal
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>

                    </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <!-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol> -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <!-- <font size="18"><b><?php echo $this->M_Padi->get_data('tb_cluster')->num_rows(); ?></b></font> -->
                                <font size="18">44</font>
                                <div class="mr-5"><b>Produksi Banyak</b></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?php echo base_url(); ?>admin_produksi">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <font size="18">40</font>
                                <div class="mr-5">Produksi Sedang</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?php echo base_url(); ?>admin_produksi">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <font size="18">15</font>
                                <div class="mr-5">Produksi Kurang Memuaskan</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?php echo base_url(); ?>admin_produksi">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <!-- <div class="row" style="width: 75vw; margin-left: 2px;">
                        <div class="col-xl-6>
                            <div class=" card mb-4" style=" width: 100vw;">
                            <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"></i>
                                Grafik Produksi Padi
                            </div>
                            <canvas id="barchart" style="width: 100%;"></canvas>
                        </div>
                    </div>
                </div> -->
                    <!-- <div class="container">
                        <h2>Cara Membuat Grafik Menggunakan HTML, PHP, MySQLi & ChartJS</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Contoh Grafik Batang</div>
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div id="chartContainer" style="height:500px; width: 100%; margin-left: 1%; "></div>
        </div>
        <?php
        $q_produksi_1 = $this->db->query("SELECT * FROM  tb_produksi WHERE tahun = 2018")->result_array();
        $q_produksi_2 = $this->db->query("SELECT * FROM  tb_produksi WHERE tahun = 2019")->result_array();
        $q_produksi_3 = $this->db->query("SELECT * FROM  tb_produksi WHERE tahun = 2020")->result_array();
        ?>

        <script>
            window.onload = function() {

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,

                    axisX: {
                        interval: 1
                    },
                    axisY2: {
                        interlacedColor: "rgba(1,77,101,.2)",
                        gridColor: "rgba(1,77,101,.1)",
                        title: "Grafik Produksi Padi Kabupaten Malang"
                    },
                    data: [{
                            type: "bar",
                            name: "companies",
                            axisYType: "secondary",
                            color: "#014D65",
                            dataPoints: [
                                <?php foreach ($q_produksi_1 as $qp) : ?> {
                                        y: <?= $qp['produksi'] ?>,
                                        label: "<?= $qp['kecamatan'] ?>"
                                    },
                                <?php endforeach ?>


                            ]
                        },
                        {
                            type: "bar",
                            name: "companies",
                            axisYType: "secondary",
                            color: "gold",
                            dataPoints: [
                                <?php foreach ($q_produksi_2 as $qp) : ?> {
                                        y: <?= $qp['produksi'] ?>,
                                        label: "<?= $qp['kecamatan'] ?>"
                                    },
                                <?php endforeach ?>


                            ]
                        },
                        {
                            type: "bar",
                            name: "companies",
                            axisYType: "secondary",
                            color: "red",
                            dataPoints: [
                                <?php foreach ($q_produksi_3 as $qp) : ?> {
                                        y: <?= $qp['produksi'] ?>,
                                        label: "<?= $qp['kecamatan'] ?>"
                                    },
                                <?php endforeach ?>


                            ]
                        },
                    ]
                });
                chart.render();



            }
        </script>
    </div>

    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small fixed-bottom">
                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>

    <!-- <script type="text/javascript">
        var ctx = document.getElementById("barchart").getContext("2d");
        var data = {
            labels: [<?php while ($p = mysqli_fetch_array($kecamatan)) {
                            echo '"' . $p['kecamatan'] . '",';
                        } ?>],
            datasets: [{
                label: "Produksi ",
                data: [<?php while ($p = mysqli_fetch_array($produksi)) {
                            echo '"' . $p['produksi'] . '",';
                        } ?>],
                // backgroundColor: [ ]

            }]
        };



        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                legend: {
                    display: false
                },
                barValueSpacing: 20,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }]
                }
            }
        });
    </script> -->







    <div style="margin-top:1% ">
        <div style="display: inline-block; margin-top:-10% ; margin-left:28% ;">Keterangan : </div>
        <div style="width: 10px; height: 10px; background:green; display: inline-block;"></div>
        <div style="display: inline-block">Produksi Tahun 2018</div>
        <div style="width: 10px; height: 10px; background:gold; display: inline-block"></div>
        <div style="display: inline-block">Produksi Tahun 2019</div>
        <div style="width: 10px; height: 10px; background:red; display: inline-block"></div>
        <div style="display: inline-block">Produksi Tahun 2020</div>
    </div>
    <br>

    <script src="assets/js/canvasjs.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/barchartsjs.js') ?>"></script>
</body>

</html>