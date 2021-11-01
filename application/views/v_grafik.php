<?php
$koneksi    = mysqli_connect("localhost", "root", "", "db_padi");
$produksi  = mysqli_query($koneksi, "SELECT produksi FROM tb_produksi");
$kecamatan       = mysqli_query($koneksi, "SELECT kecamatan FROM tb_produksi");
$tahun       = mysqli_query($koneksi, "SELECT tahun FROM tb_produksi");
?>

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
    <!-- <link href="<?= base_url('assets/'); ?>datatables/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="<?= base_url('assets/'); ?>js/all.min.js" crossorigin="anonymous"></script> -->
    <link href="<?= base_url() ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>js/Chart.js"></script>
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
            <div class="row">
                <div class="table-responsive col-md-6 col-sm-12">
                    <p class="text-center">Penurunan Produksi Tahun 2019-2020 (Top Five)</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Tahun</td>
                                <td>Kecamatan</td>
                                <td>Selisih Produksi(Ton)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($selisih_2020_2019 as $key => $value) {
                                echo '
                                    <tr>
                                        <td>2019-2020</td>
                                        <td>' . $key . '</td>
                                        <td>' . $value . '</td>
                                    </tr>';
                                $i++;
                                if ($i > 5) break;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive col-md-6 col-sm-12">
                    <p class="text-center">Penurunan Produksi Tahun 2018-2019 (Top Five)</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Tahun</td>
                                <td>Kecamatan</td>
                                <td>Selisih Produksi(Ton)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($selisih_2019_2018 as $key => $value) {
                                echo '
                                    <tr>
                                        <td>2018-2019</td>
                                        <td>' . $key . '</td>
                                        <td>' . $value . '</td>
                                    </tr>';
                                $i++;
                                if ($i > 5) break;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <center>
                <div class="center">
                    <div class="table-responsive col-md-6 col-sm-12">
                        <p class="text-center">Jumlah Produksi (Ton) Tahun 2018-2020</p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Tahun</td>
                                    <td>Jumlah Produksi (Ton)</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2018</td>
                                    <td><?php echo $count2018; ?></td>
                                </tr>
                                <tr>
                                    <td>2019</td>
                                    <td><?php echo $count2019; ?></td>
                                </tr>
                                <tr>
                                    <td>2020</td>
                                    <td><?php echo $count2020; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <hr>


    <div id="chartContainer" style="height:500px; width: 100%; margin-left: 1%; "></div>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <script src="assets/js/canvasjs.min.js"></script>

    <footer class="bg-light text-center text-white fixed-bottom">
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
    <!-- <script src="js/scripts.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/barchartsjs.js') ?>"></script> -->
</body>

</html>