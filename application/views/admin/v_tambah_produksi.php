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
    <link href="<?= base_url('assets/'); ?>css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="<?= base_url('assets/'); ?>js/all.min.js" crossorigin="anonymous"></script>

</head>

<script>
    function tampilkan() {
        var kecamatan = document.getElementById("form1").kecamatan.value;
        if (kecamatan == "1") {
            document.getElementById("longitude").value = 112.4053046;
            document.getElementById("latitude").value = -8.3219695;
        } else if (kecamatan == "2") {
            document.getElementById("longitude").value = 112.4410671;
            document.getElementById("latitude").value = -8.2072238;
        } else if (kecamatan == "3") {
            document.getElementById("longitude").value = 112.5125893;
            document.getElementById("latitude").value = -8.2439594;
        } else if (kecamatan == "4") {
            document.getElementById("longitude").value = 112.548349;
            document.getElementById("latitude").value = -8.313498;
        } else if (kecamatan == "5") {
            document.getElementById("longitude").value = 112.6317838;
            document.getElementById("latitude").value = -8.3392423;
        } else if (kecamatan == "6") {
            document.getElementById("longitude").value = 112.6943559;
            document.getElementById("latitude").value = -8.251113;
        } else if (kecamatan == "7") {
            document.getElementById("longitude").value = 112.7556;
            document.getElementById("latitude").value = -8.208461;
        } else if (kecamatan == "8") {
            document.getElementById("longitude").value = 112.8165095;
            document.getElementById("latitude").value = -8.2514993;
        } else if (kecamatan == "9") {
            document.getElementById("longitude").value = 112.8820489;
            document.getElementById("latitude").value = -8.2118543;
        } else if (kecamatan == "10") {
            document.getElementById("longitude").value = 112.813301;
            document.getElementById("latitude").value = -8.055128;
        } else if (kecamatan == "11") {
            document.getElementById("longitude").value = 112.7509656;
            document.getElementById("latitude").value = -8.1277952;
        } else if (kecamatan == "12") {
            document.getElementById("longitude").value = 112.6927722;
            document.getElementById("latitude").value = -8.1680053;
        } else if (kecamatan == "13") {
            document.getElementById("longitude").value = 112.6556213;
            document.getElementById("latitude").value = -8.1129703;
        } else if (kecamatan == "14") {
            document.getElementById("longitude").value = 112.641602;
            document.getElementById("latitude").value = -8.183743;
        } else if (kecamatan == "15") {
            document.getElementById("longitude").value = 112.6079459;
            document.getElementById("latitude").value = -8.197451;
        } else if (kecamatan == "16") {
            document.getElementById("longitude").value = 112.5727584;
            document.getElementById("latitude").value = -8.1290848;
        } else if (kecamatan == "17") {
            document.getElementById("longitude").value = 112.4738486;
            document.getElementById("latitude").value = -8.1618518;
        } else if (kecamatan == "18") {
            document.getElementById("longitude").value = 112.4947092;
            document.getElementById("latitude").value = -8.1274298;
        } else if (kecamatan == "19") {
            document.getElementById("longitude").value = 112.5394091;
            document.getElementById("latitude").value = -8.0916546;
        } else if (kecamatan == "20") {
            document.getElementById("longitude").value = 112.488749;
            document.getElementById("latitude").value = -8.0614038;
        } else if (kecamatan == "21") {
            document.getElementById("longitude").value = 112.595398;
            document.getElementById("latitude").value = -8.014754;
        } else if (kecamatan == "22") {
            document.getElementById("longitude").value = 112.6079459;
            document.getElementById("latitude").value = -8.074933;
        } else if (kecamatan == "23") {
            document.getElementById("longitude").value = 112.6794582;
            document.getElementById("latitude").value = -8.0503973;
        } else if (kecamatan == "24") {
            document.getElementById("longitude").value = 112.7509656;
            document.getElementById("latitude").value = -8.0055108;
        } else if (kecamatan == "25") {
            document.getElementById("longitude").value = 112.7032945;
            document.getElementById("latitude").value = -7.9675395;
        } else if (kecamatan == "26") {
            document.getElementById("longitude").value = 112.7986343;
            document.getElementById("latitude").value = -7.9417131;
        } else if (kecamatan == "27") {
            document.getElementById("longitude").value = 112.697098;
            document.getElementById("latitude").value = -7.830759;
        } else if (kecamatan == "28") {
            document.getElementById("longitude").value = 112.6722635;
            document.getElementById("latitude").value = -7.8848787;
        } else if (kecamatan == "29") {
            document.getElementById("longitude").value = 112.5841075;
            document.getElementById("latitude").value = -7.8522383;
        } else if (kecamatan == "30") {
            document.getElementById("longitude").value = 112.5364292;
            document.getElementById("latitude").value = -7.9567121;
        } else if (kecamatan == "31") {
            document.getElementById("longitude").value = 112.4529878;
            document.getElementById("latitude").value = -7.8290737;
        } else if (kecamatan == "32") {
            document.getElementById("longitude").value = 112.3641293;
            document.getElementById("latitude").value = -7.8973294;
        } else if (kecamatan == "33") {
            document.getElementById("longitude").value = 112.3456985;
            document.getElementById("latitude").value = -7.8045098;
        }
    }
</script>

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
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <div class="card mb-4 mt-2">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Tambah Data Produksi
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <body>
                                        <div class="container">
                                            <br>
                                            <center>
                                                <h5>Tambah Data Produksi</h5>
                                            </center>
                                            <form id="form1" name="form1" action="<?php echo base_url() . 'index.php/admin_produksi/tambah_aksi'; ?>" method="post">
                                                <table style="margin:20px auto;">
                                                    <tr>
                                                        <td>Kecamatan </td>
                                                        <td>: <select id="kecamatan" style="width: 250px;" type="text" name="kecamatan" onchange="tampilkan()">
                                                                <option value='0' disabled=" disabled" selected />Pilih</option>
                                                                <option value="1">Donomulyo</option>
                                                                <option value="2">Kalipare</option>
                                                                <option value="3">Pagak</option>
                                                                <option value="4">Bantur</option>
                                                                <option value="5">Gedangan</option>
                                                                <option value="6">Sumbermanjing</option>
                                                                <option value="7">Dampit</option>
                                                                <option value="8">Tirtoyudo</option>
                                                                <option value="9">Ampelgading</option>
                                                                <option value="10">Poncokusumo</option>
                                                                <option value="11">Wajak</option>
                                                                <option value="12">Turen</option>
                                                                <option value="13">Bululawang</option>
                                                                <option value="14">Gondanglegi</option>
                                                                <option value="15">Pagelaran</option>
                                                                <option value="16">Kepanjen</option>
                                                                <option value="17">Sumberpucung</option>
                                                                <option value="18">Kromengan</option>
                                                                <option value="19">Ngajum</option>
                                                                <option value="20">Wonosari</option>
                                                                <option value="21">Wagir</option>
                                                                <option value="22">Pakisaji</option>
                                                                <option value="23">Tajinan</option>
                                                                <option value="24">Tumpang</option>
                                                                <option value="25">Pakis</option>
                                                                <option value="26">Jabung</option>
                                                                <option value="27">Lawang</option>
                                                                <option value="28">Singosari</option>
                                                                <option value="29">Karangploso</option>
                                                                <option value="30">Dau</option>
                                                                <option value="31">Pujon</option>
                                                                <option value="32">Ngantang</option>
                                                                <option value="33">Kasembon</option>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Tahun </td>
                                                        <td>: <input style="width: 250px;" type="number" name="tahun"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanam (Ha) </td>
                                                        <td>: <input style="width: 250px;" type="number" name="tanam"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Panen (Ha) </td>
                                                        <td>: <input style="width: 250px;" type="number" name="panen"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Produktivitas (Kw/Ha) </td>
                                                        <td>: <input style="width: 250px;" type="number" name="produktivitas"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Produksi (Ton) </td>
                                                        <td>: <input style="width: 250px;" type="number" name="produksi"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Longitude </td>
                                                        <td>: <input style="width: 250px;" type="text" name="longitude" id="longitude"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Latitude </td>
                                                        <td>: <input style="width: 250px;" type="text" name="latitude" id="latitude"></td>
                                                    </tr>
                                                    <tr></tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><input type="submit" class="btn btn-primary mt-3 ml-5" value="Tambah Data"></td>
                                                    </tr>
                                                </table>
                                            </form>

                                        </div>
                                </table>
                            </div>
                        </div>
                    </div>


                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; SiG Produksi Padi Kabupaten Malang</div>
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
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>js/scripts.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>demo/chart-area-demo.js"></script>
        <script src="<?= base_url('assets/'); ?>demo/chart-bar-demo.js"></script>
        <script src="<?= base_url('assets/'); ?>js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>demo/datatables-demo.js"></script> -->
</body>

</html>