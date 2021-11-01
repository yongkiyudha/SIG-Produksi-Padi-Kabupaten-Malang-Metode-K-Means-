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
                            Edit Data Produksi
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <div class="container">
                                        <br>
                                        <center>
                                            <h5>Edit Data Produksi</h5>
                                        </center>
                                        <?php foreach ($tb_produksi as $u) : ?>
                                            <form action="<?php echo base_url() . 'index.php/admin_produksi/update/' . $u->id_produksi; ?>" method="post">
                                                <table style="margin:20px auto;">
                                                    <tr>
                                                        <input type="hidden" name="id_produksi" value="<?php echo $u->$id_produksi ?>">
                                                        <td>Tahun </td>
                                                        <td>: <input style="width: 250px; " type="text" name="tahun" value="<?php echo $u->tahun ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kecamatan </td>
                                                        <td>: <input style="width: 250px; " type="text" name="kecamatan" value="<?php echo $u->kecamatan ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanam (Ha) </td>
                                                        <td>: <input style="width: 250px; " type="text" name="tanam" value="<?php echo $u->tanam ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Panen (Ha) </td>
                                                        <td>: <input style="width: 250px; " type="text" name="panen" value="<?php echo $u->panen ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Produktivitas (Kw/Ha) </td>
                                                        <td>: <input style="width: 250px; " type="text" name="produktivitas" value="<?php echo $u->produktivitas ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Produksi (Ton) </td>
                                                        <td>: <input style="width: 250px; " type="text" name="produksi" value="<?php echo $u->produksi ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Longitude </td>
                                                        <td>: <input style="width: 250px; " type="text" name="longitude" value="<?php echo $u->longitude ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Latitude </td>
                                                        <td>: <input style="width: 250px; " type="text" name="latitude" value="<?php echo $u->latitude ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><input type="submit" class="btn btn-primary mt-3 ml-5" value="Edit Data"></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        <?php endforeach; ?>
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