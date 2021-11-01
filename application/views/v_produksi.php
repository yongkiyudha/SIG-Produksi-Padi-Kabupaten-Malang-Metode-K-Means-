<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>datatables/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="<?= base_url('assets/'); ?>js/all.min.js" crossorigin="anonymous"></script>
    <link href="<?= base_url() ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet">
    <title>Produksi Padi</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container"><a class="navbar-brand" href="beranda"><img src="assets/img/logokab.png" alt="" width="45" height="55" class="d-inline-block align-text-fixed"> SISTEM INFORMASI GEOGRAFIS PRODUKSI PADI KAB MALANG <button class="navbar-toggler navbar-toggler-right  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <span class="navbar-text">
                    <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
                    <div class="navbar-nav">
                        <a href="<?php echo base_url(); ?>beranda" class="nav-link active" aria-current="page">BERANDA</a>
                        <a href="<?php echo base_url(); ?>map_control" class="nav-link active" aria-current="page">PETA</a>
                        <a href="<?php echo base_url(); ?>grafik_control" class="nav-link active" aria-current="page">GRAFIK</a>
                        <a href="<?php echo base_url(); ?>produksi_control" class="nav-link active" aria-current="page">DATA</a>
                        <a href="<?php echo base_url(); ?>login_control" class="nav-link active" aria-current="page">LOGIN</a>
                    </div>
                    <!-- </div> -->
                </span>
        </div>
    </nav>

    <br><br><br>
    <div id="content-wrapper">
        <div class="container-fluid mt-4">
            <!-- DataTables -->
            <div class="card mb-3 mt-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <center>
                            <h3> DATA PRODUKSI PADI KAB MALANG
                            </h3>
                        </center>

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">N0</th>
                                    <th style="text-align: center;">Tahun</th>
                                    <th style="text-align: center;">Kecamatan</th>
                                    <th style="text-align: center;">Tanam (Ha)</th>
                                    <th style="text-align: center;">Panen (Ha)</th>
                                    <th style="text-align: center;">Produktivitas (Kw/Ha)</th>
                                    <th style="text-align: center;">Produksi (Ton)</th>

                                </tr>
                            </thead>
                            <?php foreach ($produksi as $u) : ?>
                                <tr>
                                    <td>
                                        <center><?php echo $u->id_produksi ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->tahun ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->kecamatan ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->tanam ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->panen ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->produktivitas ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->produksi ?></center>
                                    </td>


                                </tr>
                            <?php endforeach; ?>
                        </table>

                        <!-- <table class="table table-hover mt-4" id="dataTable" width="100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">N0</th>
                                    <th style="text-align: center;">Tahun</th>
                                    <th style="text-align: center;">Kecamatan</th>
                                    <th style="text-align: center;">Tanam (Ha)</th>
                                    <th style="text-align: center;">Panen (Ha)</th>
                                    <th style="text-align: center;">Produktivitas (Kw/Ha)</th>
                                    <th style="text-align: center;">Produksi (Ton)</th>
                                </tr>
                            </thead>
                            <?php foreach ($produksi as $u) : ?>
                                <tr>
                                    <td>
                                        <center><?php echo $u->id_produksi ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->tahun ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->kecamatan ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->tanam ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->panen ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->produktivitas ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $u->produksi ?></center>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/yongkie.rockers.3" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="https://yongkiyudha1@gmail.com" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="https://www.instagram.com/yudhayongki_" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="https://github.com/yongkiyudha" role="button"><i class="fab fa-github"></i></a>

                <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white">SIG Produksi Padi Kab Malang</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body> -->

</html>