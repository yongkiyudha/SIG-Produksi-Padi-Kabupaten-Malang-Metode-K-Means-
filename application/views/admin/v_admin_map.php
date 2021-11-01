<!DOCTYPE html>
<html lang="en">

<head>

    <title>Halaman Admin</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />
    <link rel="stylesheet" href="assets/src/leaflet-search.css" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Halaman Admin</title>
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="<?= base_url('assets/'); ?>js/all.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/'); ?>js/Chart.js"></script>
</head>
<link href="<?= base_url() ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet">
<style>
    #mapid {
        position: absolute;
        right: 2%;
        left: 19%;
        bottom: 20%;
        top: 8%;
    }
</style>
</head>
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

                <div style="margin-top: 1%">

                    <center>
                        <h4>Pemetaan Produksi Padi Kabupaten Malang</h4>
                    </center>


                    <div id="mapid"></div>

                    <div style="margin-top:-5% ">
                        <div style="display: inline-block; margin-top: 50% ; margin-left:2.5%">Keterangan : </div>
                        <div style="width: 10px; height: 10px; background:green; display: inline-block;"></div>
                        <div style="display: inline-block">Produksi banyak</div>
                        <div style="width: 10px; height: 10px; background:gold; display: inline-block"></div>
                        <div style="display: inline-block">Produksi sedang</div>
                        <div style="width: 10px; height: 10px; background:red; display: inline-block"></div>
                        <div style="display: inline-block">Produksi kurang memuaskan</div>
                    </div>

                    <hr>


</body>




<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="<?= base_url('assets/js/leaflet.ajax.js'); ?>"></script>
<script src="assets/src/leaflet-search.js"></script>

<script>
    var mymap = L.map('mapid').setView([-7.9797, 112.6304], 9);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
        maxZoom: 25,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);

    <?php $colors = array([-8.3219695, 112.4053046], [-8.2072238, 112.4410671], [-8.2439594, 112.5125893]) ?>

    var data = [
        <?php foreach ($dataProduksi as $value) { ?> {
                "loc": [<?= $value['latitude'] ?>, <?= $value['longitude'] ?>],
                "tahun": <?= $value['tahun'] ?>,
                "kecamatan": "<?= $value['kecamatan'] ?>",
                "tanam": <?= $value['tanam'] ?>,
                "panen": <?= $value['panen'] ?>,
                "produktivitas": <?= $value['produktivitas'] ?>,
                "produksi": <?= $value['produksi'] ?>,
            },
        <?php } ?>
    ];

    var myStyle = {
        "color": "#1E90FF",
        "weight": 2,
        "opacity": 0.9
    };

    var jsonTest = new L.GeoJSON.AJAX(["assets/geojson/c.geojson"], {
        style: myStyle
    }).addTo(mymap);

    var dangerMarker = L.icon({
        iconUrl: '<?= base_url('assets/img/danger.png') ?>',
        iconSize: [30, 40]
    });

    var warningMarker = L.icon({
        iconUrl: '<?= base_url('assets/img/warning.png') ?>',
        iconSize: [30, 40]
    });

    var successMarker = L.icon({
        iconUrl: '<?= base_url('assets/img/success.png') ?>',
        iconSize: [30, 40]
    });

    var markersLayer = new L.LayerGroup(); //layer contain searched elements

    mymap.addLayer(markersLayer);

    var controlSearch = new L.Control.Search({
        position: 'topright',
        layer: markersLayer,
        initial: false,
        zoom: 12,
        marker: false
    });

    mymap.addControl(controlSearch);

    //metode K-means

    var centroid = [
        [1, 1, 1],
        [2, 2, 1],
        [3, 3, 3]
    ]
    var centroid_sesudah = [
        [1, 1, 1],
        [2, 2, 1],
        [3, 3, 3]
    ]
    // while (loop == false) {
    let data_awal = [
        <?php foreach ($dataProduksi as $value) { ?>[<?= $value['panen'] . ', ' . $value['produksi'] . ', ' . $value['produktivitas'] ?>],
        <?php } ?>
    ]

    //mengitung nilai dari centroid
    var counter = 0
    let centroid_panen = []
    let centroid_produksi = []
    let centroid_produktivitas = []
    <?php foreach ($dataProduksi as $value) { ?>
        if (data_awal[counter][0] < 1500) {
            centroid_panen[counter] = 3;
        } else if (data_awal[counter][0] < 2500) {
            centroid_panen[counter] = 2;
        } else if (data_awal[counter][0] >= 2500) {
            centroid_panen[counter] = 1;
        }

        if (data_awal[counter][1] < 8000) {
            centroid_produksi[counter] = 3;
        } else if (data_awal[counter][1] < 15000) {
            centroid_produksi[counter] = 2;
        } else if (data_awal[counter][1] >= 15000) {
            centroid_produksi[counter] = 1;
        }

        if (data_awal[counter][2] < 68.3) {
            centroid_produktivitas[counter] = 3;
        } else if (data_awal[counter][2] < 70) {
            centroid_produktivitas[counter] = 2;
        } else if (data_awal[counter][2] >= 70) {
            centroid_produktivitas[counter] = 1;
        }
        counter++;
    <?php } ?>

    var cluster = []

    var loop = true;
    while (loop) {
        centroid = centroid_sesudah;

        var c1 = []
        var c2 = []
        var c3 = []

        var cluster1 = []
        var cluster2 = []
        var cluster3 = []
        var cluster4 = []
        var cluster5 = []
        var cluster6 = []
        var cluster7 = []
        var cluster8 = []
        var cluster9 = []

        var data_cluster1 = 0
        var data_cluster2 = 0
        var data_cluster3 = 0
        var data_cluster4 = 0
        var data_cluster5 = 0
        var data_cluster6 = 0
        var data_cluster7 = 0
        var data_cluster8 = 0
        var data_cluster9 = 0

        var total_cluster1 = 0
        var total_cluster2 = 0
        var total_cluster3 = 0
        var total_cluster4 = 0
        var total_cluster5 = 0
        var total_cluster6 = 0
        var total_cluster7 = 0
        var total_cluster8 = 0
        var total_cluster9 = 0

        var new_centroid1 = 0
        var new_centroid2 = 0
        var new_centroid3 = 0
        var new_centroid4 = 0
        var new_centroid5 = 0
        var new_centroid6 = 0
        var new_centroid7 = 0
        var new_centroid8 = 0
        var new_centroid9 = 0

        //menghitung nilai cluter
        var counter2 = 0


        <?php foreach ($dataProduksi as $euc) { ?>

            c1[counter2] = Math.sqrt(Math.pow((centroid_panen[counter2] - centroid[0][0]), 2) + Math.pow((centroid_produksi[counter2] - centroid[0][1]), 2) + Math.pow((centroid_produktivitas[counter2] - centroid[0][2]), 2));
            c2[counter2] = Math.sqrt(Math.pow((centroid_panen[counter2] - centroid[1][0]), 2) + Math.pow((centroid_produksi[counter2] - centroid[1][1]), 2) + Math.pow((centroid_produktivitas[counter2] - centroid[1][2]), 2));
            c3[counter2] = Math.sqrt(Math.pow((centroid_panen[counter2] - centroid[2][0]), 2) + Math.pow((centroid_produksi[counter2] - centroid[2][1]), 2) + Math.pow((centroid_produktivitas[counter2] - centroid[2][2]), 2));
            counter2++;
        <?php } ?>
        // console.log(c1)

        //menentukan cluster
        var counter3 = 0
        <?php foreach ($dataProduksi as $euc) { ?>
            if (c1[counter3] < c2[counter3] && c1[counter3] < c3[counter3]) {
                cluster[counter3] = 1;
            } else if (c2[counter3] < c1[counter3] && c2[counter3] < c3[counter3]) {
                cluster[counter3] = 2;
            } else if (c3[counter3] < c1[counter3] && c3[counter3] < c2[counter3]) {
                cluster[counter3] = 3;
            } else {
                cluster[counter3] = 1;
            }

            counter3++;
        <?php } ?>
        //menghitung hasil cluster
        var counter4 = 0


        <?php foreach ($dataProduksi as $euc) { ?>
            //   cluster1
            if (cluster[counter4] == 1) {
                cluster1[counter4] = centroid_panen[counter4];
            } else {
                cluster1[counter4] = 0;
            }

            if (cluster[counter4] == 1) {
                cluster2[counter4] = centroid_produksi[counter4];
            } else {
                cluster2[counter4] = 0;
            }

            if (cluster[counter4] == 1) {
                cluster3[counter4] = centroid_produktivitas[counter4];
            } else {
                cluster3[counter4] = 0;
            }

            //   cluster2
            if (cluster[counter4] == 2) {
                cluster4[counter4] = centroid_panen[counter4];
            } else {
                cluster4[counter4] = 0;
            }

            if (cluster[counter4] == 2) {
                cluster5[counter4] = centroid_produksi[counter4];
            } else {
                cluster5[counter4] = 0;
            }

            if (cluster[counter4] == 2) {
                cluster6[counter4] = centroid_produktivitas[counter4];
            } else {
                cluster6[counter4] = 0;
            }

            //   cluster2
            if (cluster[counter4] == 3) {
                cluster7[counter4] = centroid_panen[counter4];
            } else {
                cluster7[counter4] = 0;
            }

            if (cluster[counter4] == 3) {
                cluster8[counter4] = centroid_produksi[counter4];
            } else {
                cluster8[counter4] = 0;
            }

            if (cluster[counter4] == 3) {
                cluster9[counter4] = centroid_produktivitas[counter4];
            } else {
                cluster9[counter4] = 0;
            }

            total_cluster1 = total_cluster1 + cluster1[counter4];
            total_cluster2 = total_cluster2 + cluster2[counter4];
            total_cluster3 = total_cluster3 + cluster3[counter4];
            total_cluster4 = total_cluster4 + cluster4[counter4];
            total_cluster5 = total_cluster5 + cluster5[counter4];
            total_cluster6 = total_cluster6 + cluster6[counter4];
            total_cluster7 = total_cluster7 + cluster7[counter4];
            total_cluster8 = total_cluster8 + cluster8[counter4];
            total_cluster9 = total_cluster9 + cluster9[counter4];


            if (cluster1[counter4] > 0) {
                data_cluster1 = data_cluster1 + 1
            }
            if (cluster2[counter4] > 0) {
                data_cluster2 = data_cluster2 + 1
            }
            if (cluster3[counter4] > 0) {
                data_cluster3 = data_cluster3 + 1
            }
            if (cluster4[counter4] > 0) {
                data_cluster4 = data_cluster4 + 1
            }
            if (cluster5[counter4] > 0) {
                data_cluster5 = data_cluster5 + 1
            }
            if (cluster6[counter4] > 0) {
                data_cluster6 = data_cluster6 + 1
            }
            if (cluster7[counter4] > 0) {
                data_cluster7 = data_cluster7 + 1
            }
            if (cluster8[counter4] > 0) {
                data_cluster8 = data_cluster8 + 1
            }
            if (cluster9[counter4] > 0) {
                data_cluster9 = data_cluster9 + 1
            }


            new_centroid1 = total_cluster1 / data_cluster1;
            new_centroid2 = total_cluster2 / data_cluster2;
            new_centroid3 = total_cluster3 / data_cluster3;
            new_centroid4 = total_cluster4 / data_cluster4;
            new_centroid5 = total_cluster5 / data_cluster5;
            new_centroid6 = total_cluster6 / data_cluster6;
            new_centroid7 = total_cluster7 / data_cluster7;
            new_centroid8 = total_cluster8 / data_cluster8;
            new_centroid9 = total_cluster9 / data_cluster9;

            counter4++;
        <?php } ?>

        centroid_sesudah = [
            [parseFloat(new_centroid1.toFixed(1)), parseFloat(new_centroid2.toFixed(1)), parseFloat(new_centroid3.toFixed(1))],
            [parseFloat(new_centroid4.toFixed(1)), parseFloat(new_centroid5.toFixed(1)), parseFloat(new_centroid6.toFixed(1))],
            [parseFloat(new_centroid7.toFixed(1)), parseFloat(new_centroid8.toFixed(1)), parseFloat(new_centroid9.toFixed(1))]
        ]

        function arraysEqual(a1, a2) {
            /* WARNING: arrays must not contain {objects} or behavior may be undefined */
            return JSON.stringify(a1) == JSON.stringify(a2);
        }

        if (arraysEqual(centroid, centroid_sesudah)) {
            loop = false;
        }
    }

    for (i in data) {
        var tahun = data[i].tahun;
        var kecamatan = data[i].kecamatan;
        var tanam = data[i].tanam;
        var panen = data[i].panen;
        var produktivitas = data[i].produktivitas;
        var produksi = data[i].produksi;
        loc = data[i].loc;

        if (cluster[i] == 1) {
            marker = new L.Marker(new L.latLng(loc), {
                tahun: tahun,
                kecamatan: kecamatan,
                tanam: tanam,
                panen: panen,
                produktivitas: produktivitas,
                produksi: produksi,
                icon: successMarker,
            });
        } else if (cluster[i] == 2) {
            marker = new L.Marker(new L.latLng(loc), {
                tahun: tahun,
                kecamatan: kecamatan,
                tanam: tanam,
                panen: panen,
                produktivitas: produktivitas,
                produksi: produksi,
                icon: warningMarker,
            });
        } else {
            marker = new L.Marker(new L.latLng(loc), {
                tahun: tahun,
                kecamatan: kecamatan,
                tanam: tanam,
                panen: panen,
                produktivitas: produktivitas,
                produksi: produksi,
                icon: dangerMarker,
            });
        }


        marker.bindPopup(
            'Tahun: ' + tahun +
            '<br>Kecamatan: ' + kecamatan +
            '<br>Tanam: ' + tanam + '  Hektar' +
            '<br>Panen: ' + panen + '  Hektar' +
            '<br>Produktivitas: ' + produktivitas + '  Kw/Hektar' +
            '<br>Produksi: ' + produksi + '  Ton'
        );
        markersLayer.addLayer(marker);
    }
</script>



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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>

</html>