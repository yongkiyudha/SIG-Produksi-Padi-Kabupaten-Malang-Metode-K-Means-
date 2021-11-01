<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <title>Produksi padi</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Halaman Admin</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="<?= base_url('assets/'); ?>js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />
    <link rel="stylesheet" href="assets/src/leaflet-search.css" />
    <link href="<?= base_url() ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet">
    <style>
        #mapid {
            position: absolute;
            right: 5%;
            left: 5%;
            bottom: 5%;
            top: 25%;
        }
    </style>
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

    <div style="margin-top: 8%">

        <center>
            <h4>Pemetaan Produksi Padi Kabupaten Malang</h4>
            Data diperbarui
            <?php echo $dataTanggal[0]['tanggal'] ?>
            <?php  ?>
        </center>


        <div id="mapid"></div>

        <div style="margin-top:-14% ">
            <div style="display: inline-block; margin-top: 50% ; margin-left:5%">Keterangan : </div>
            <div style="width: 10px; height: 10px; background:green; display: inline-block;"></div>
            <div style="display: inline-block">Produksi banyak</div>
            <div style="width: 10px; height: 10px; background:gold; display: inline-block"></div>
            <div style="display: inline-block">Produksi sedang</div>
            <div style="width: 10px; height: 10px; background:red; display: inline-block"></div>
            <div style="display: inline-block">Produksi kurang memuaskan</div>
        </div>

        <hr>
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

</html>