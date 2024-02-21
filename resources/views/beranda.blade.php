<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SIG Perumahan Kota Bandung</title>
    <link type="image/png" rel="Icon" href="img/logo-home.png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        #map {
            height: 600px;
        }

        .label {
            font-size: 12px;
            font-weight: bold;
            text-align: center;
            background-color: white;
            border: 1px solid #333;
            padding: 3px;
            border-radius: 5px;
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .info h6 {
            margin: 0;
        }

        .legend {
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }

        .kecamatan {
            background: none;
            border: none;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
                <a href="/" class="navbar-brand">
                    <h1 class="text-primary mb-0 display-5">
                        PERUM<span class="text-white">SIG</span><i class="fa fa-home text-primary ms-2"></i>
                    </h1>
                </a>
                <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-dark"></span>
                </button>
                <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a target="_blank" href="/dashboard-admin" class="nav-item nav-link">Login Admin</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid carousel px-0 mb-5 pb-5">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <!-- <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol> -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/Swiss.jpg" class="img-fluid w-100" alt="First slide" />
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h4 class="text-white mb-4 animated slideInDown">
                                Selamat Datang
                            </h4>
                            <h1 class="text-white display-1 mb-4 animated slideInDown">
                                Pilihan Banyak Perumahan
                            </h1>
                            <a href="#start" class="me-2"><button type="button"
                                    class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">
                                    Selengkapnya
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div id="start" class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                    Peta
                </h5>
                <h1 class="display-5">Lokasi Perumahan</h1>
            </div>
            <div class="row g-5">
                <div class="d-flex col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="mb-1">
                        <h5>Filter:</h5>
                        <div class="btn-group" role="group" aria-label="Filter">
                            <button type="button" class="btn btn-outline-primary filter-btn" data-filter="all">
                                <select class="kecamatan" name="filter" id="filterkecamatan"
                                    onchange="updateMap()">
                                    <option value="">Pilih Kecamatan :</option>
                                    @foreach ($kecamatan as $kec)
                                        <option value="{{ $kec->nama_kec }}">{{ $kec->nama_kec }}</option>
                                    @endforeach
                                </select>
                            </button>
                            <button type="button" class="btn btn-outline-primary filter-btn" data-filter="category3"
                                onclick="showPerumahan()">Perumahan</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="d-flex col-lg-6 col-md-6 wow fadeInUp justify-content-end" data-wow-delay=".3s">
                    <div class="mb-1">
                        <h5><br></h5>
                        <div class="btn-group" role="group" aria-label="Filter">
                            <select name="filter" id="filterkecamatan" onchange="updateMap()">
                                <option value="">Pilih Kecamatan :
                                    @foreach ($kecamatan as $kec)
                                <option value="{{ $kec->nama_kec }}">{{ $kec->nama_kec }}</option>
                                @endforeach
                                </option>
                            </select>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12 col-md-12 wow fadeInUp">
                    <div id="map"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid services py-5">
        <div class="container text-center py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                    Daftar
                </h5>
                <h1 class="display-5">Perumahan</h1>
            </div>
            <div class="row g-5">
                @foreach ($perumahan as $rumah)
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="bg-light rounded p-5 services-item">
                            <div class="d-flex" style="align-items: center; justify-content: center">
                                <div class="mb-4">
                                    <img src="storage/{{ $rumah->gambar_perum }}" class="img-thumbnail"
                                        alt="">
                                </div>
                            </div>
                            <h4>{{ $rumah->nama_perum }}</h4>
                            <p class="fs-5">{{ $rumah->dev_perum }}</p>
                            <a href="/detail/{{ $rumah->id_perum }}"
                                class="btn btn-primary border-0 rounded-pill px-4 py-3">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->



    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                    Tim
                </h5>
                <h1 class="display-5 w-50 mx-auto">Kelompok 5</h1>
            </div>
            <div class="row g-5">
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rounded team-item">
                        <img src="#" class="img-fluid w-100 rounded-top border border-bottom-0"
                            alt="" />
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-4 fw-bold">Ilham</span>
                            <p class="text-muted mb-0"></p>
                        </div>
                        <div class="team-icon d-flex flex-column">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="rounded team-item">
                        <img src="#" class="img-fluid w-100 rounded-top border border-bottom-0"
                            alt="" />
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-4 fw-bold">Guntur</span>
                            <p class="text-muted mb-0"></p>
                        </div>
                        <div class="team-icon d-flex flex-column">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                    <div class="rounded team-item">
                        <img src="#" class="img-fluid w-100 rounded-top border border-bottom-0"
                            alt="" />
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-4 fw-bold">Tsalsa</span>
                            <p class="text-muted mb-0"></p>
                        </div>
                        <div class="team-icon d-flex flex-column">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".9s">
                    <div class="rounded team-item">
                        <img src="#" class="img-fluid w-100 rounded-top border border-bottom-0"
                            alt="" />
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-4 fw-bold">Daffa</span>
                            <p class="text-muted mb-0"></p>
                        </div>
                        <div class="team-icon d-flex flex-column">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <a href="#" class="text-primary mb-0 display-6">Perum<span class="text-white">SIG</span><i
                            class="fa fa-home text-primary ms-2"></i></a>
                </div>
                <div class="col-md-4 copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0">
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-md-4 my-auto text-center text-md-end text-white">
                    Designed By
                    <a class="">Kelompok 5</a><br />Distributed By
                    <a class="">SIG</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>
    <script src="koordinat/andir.js"></script>
    <script src="koordinat/antapani.js"></script>
    <script src="koordinat/arcamanik.js"></script>
    <script src="koordinat/astanaAnyar.js"></script>
    <script src="koordinat/babakanCiparay.js"></script>
    <script src="koordinat/bandungKidul.js"></script>
    <script src="koordinat/bandungKulon.js"></script>
    <script src="koordinat/bandungWetan.js"></script>
    <script src="koordinat/batununggal.js"></script>
    <script src="koordinat/bojongloaKaler.js"></script>
    <script src="koordinat/bojongloaKidul.js"></script>
    <script src="koordinat/buahbatu.js"></script>
    <script src="koordinat/cibeunyingKaler.js"></script>
    <script src="koordinat/cibeunyingKidul.js"></script>
    <script src="koordinat/cibiru.js"></script>
    <script src="koordinat/cicendo.js"></script>
    <script src="koordinat/cidadap.js"></script>
    <script src="koordinat/cinambo.js"></script>
    <script src="koordinat/coblong.js"></script>
    <script src="koordinat/gedebage.js"></script>
    <script src="koordinat/kiaracondong.js"></script>
    <script src="koordinat/lengkong.js"></script>
    <script src="koordinat/mandalajati.js"></script>
    <script src="koordinat/panyileukan.js"></script>
    <script src="koordinat/rancasari.js"></script>
    <script src="koordinat/regol.js"></script>
    <script src="koordinat/sukajadi.js"></script>
    <script src="koordinat/sukasari.js"></script>
    <script src="koordinat/sumurBandung.js"></script>
    <script src="koordinat/ujungberung.js"></script>

    <script>
        var datakec = {!! json_encode($kecamatan) !!};

        var geojsonData = {
            type: "FeatureCollection",
            features: [],
        };

        var koordinatKecamatan = {
            "Andir": andir,
            "Antapani": antapani,
            "Arcamanik": arcamanik,
            "Astana Anyar": astanaAnyar,
            "Babakan Ciparay": babakanCiparay,
            "Bandung Kidul": bandungKidul,
            "Bandung Kulon": bandungKulon,
            "Bandung Wetan": bandungWetan,
            "Batununggal": batununggal,
            "Bojongloa Kaler": bojongloaKaler,
            "Bojongloa Kidul": bojongloaKidul,
            "Buahbatu": buahbatu,
            "Cibeunying Kaler": cibeunyingKaler,
            "Cibeunying Kidul": cibeunyingKidul,
            "Cibiru": cibiru,
            "Cicendo": cicendo,
            "Cidadap": cidadap,
            "Cinambo": cinambo,
            "Coblong": coblong,
            "Gedebage": gedebage,
            "Kiaracondong": kiaracondong,
            "Lengkong": lengkong,
            "Mandalajati": mandalajati,
            "Panyileukan": panyileukan,
            "Rancasari": rancasari,
            "Regol": regol,
            "Sukajadi": sukajadi,
            "Sukasari": sukasari,
            "Sumur Bandung": sumurBandung,
            "Ujung Berung": ujungberung,

        };

        // Loop melalui data dari PHP
        datakec.forEach(function(item) {
            if (koordinatKecamatan.hasOwnProperty(item.nama_kec)) {
                var feature = {
                    type: "Feature",
                    id: item.id_kec,
                    properties: {
                        name: item.nama_kec,

                    },
                    geometry: {
                        type: "Polygon",
                        coordinates: [koordinatKecamatan[item.nama_kec]],
                    },
                };

                // Tambahkan feature ke dalam features array
                geojsonData.features.push(feature);
            } else {
                // Jika nama kecamatan tidak ditemukan, log pesan kesalahan
                console.error("Koordinat untuk kecamatan '" + item.nama_kec + "' tidak ditemukan.");
            }
        });

        function updateMap() {
            var selectedKecamatan = document.getElementById("filterkecamatan").value;

            // Hapus semua layer yang ada di peta
            map.eachLayer(function(layer) {
                map.removeLayer(layer);
            });

            // Tambahkan kembali layer peta dasar
            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(map);

            // Tambahkan kembali GeoJSON layer sesuai dengan kecamatan yang dipilih
            var selectedGeojson = getGeojsonForKecamatan(selectedKecamatan);
            L.geoJson(selectedGeojson, {
                style: style,
                onEachFeature: onEachFeature
            }).addTo(map);

            // Tambahkan kembali data perumahan yang sesuai dengan kecamatan yang dipilih
            var dataFromDatabase = {!! json_encode($perumahan) !!};
            dataFromDatabase.forEach(function(data) {
                console.log(data);
                if (data.kecamatan.nama_kec === selectedKecamatan) {
                    var marker = L.marker([data.latitude_perum, data.longitude_perum]).addTo(map);
                    var link = '<a href="/detail/' + data.id_perum + '">Selengkapnya</a>';
                    marker.bindPopup("<b>" + data.nama_perum + "</b><br>" + link);
                    marker.on("click", function() {
                        marker.openPopup();
                    });
                }
            });
        }


        var perumahanLayer = L.layerGroup();

        function showPerumahan() {
            map.eachLayer(function(layer) {
                map.removeLayer(layer);
            });

            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(map);

            perumahanLayer.addTo(map);


            var dataFromDatabase = {!! json_encode($perumahan) !!};
            //Loop melalui data dan tambahkan marker
            dataFromDatabase.forEach(function(data) {
                var marker = L.marker([data.latitude_perum, data.longitude_perum]).addTo(perumahanLayer);
                // Membuat tautan HTML dengan menggunakan <a href>
                var link = '<a href="/detail/' + data.id_perum + '">Selengkapnya</a>';

                marker.bindPopup("<b>" + data.nama_perum + '</b><br>' + link);

                //Menambahkan event listener untuk menampilkan popup ketika marker diklik
                marker.on("click", function() {
                    marker.openPopup();
                });
            });
        }

        function getGeojsonForKecamatan(kecamatan) {
            // Temukan geojson sesuai dengan kecamatan yang dipilih
            var selectedGeojson = geojsonData.features.find(function(feature) {
                return feature.properties.name === kecamatan;
            });

            return selectedGeojson;
        }

        var map = L.map("map", {
            center: [-6.916393873160235, 107.61465712482202],
            zoom: 12,
            minZoom: 12,
        });

        L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }).addTo(map);

        var geojson = L.geoJson(geojsonData, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map)

        var info = L.control();

        info.onAdd = function(map) {
            this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
            this.update();
            return this._div;
        };

        // method that we will use to update the control based on feature properties passed
        info.update = function(props) {
            this._div.innerHTML = (props ? '<h4><strong>Kecamatan ' + props.name + '</strong></h4>' :
                'Hover over a state');
        };

        info.addTo(map);

        function style(feature) {
            return {
                fillColor: getColor(feature.properties.density),
                weight: 2,
                opacity: 1,
                color: 'red',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        function getColor(d) {
            return 'rgb(235, 217, 180)'; // Biru untuk density <= 50000

        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });

            function highlightFeature(e) {
                var layer = e.target;
                layer.setStyle({
                    weight: 5,
                    color: '#666',
                    dashArray: '',
                    fillOpacity: 0.7
                });

                info.update(layer.feature.properties);
            }

            function resetHighlight(e) {
                geojson.resetStyle(e.target);
                info.update();
            }

            var isZoomed = false; // Menandakan apakah sedang dalam mode zoom

            function zoomToFeature(e) {
                var layer = e.target;
                var bounds = layer.getBounds();
                var featureID = layer.feature.id

                if (isZoomed) {



                } else {
                    // Mode zoom tidak aktif, zoom ke area
                    map.flyToBounds(bounds);
                }

                // Toggle status zoom
                isZoomed = !isZoomed;
            }


            var bounds = layer.getBounds();
            var center = bounds.getCenter();
            var text = L.divIcon({
                className: 'label',
                html: feature.properties.name
            });
            L.marker(center, {
                icon: text
            }).addTo(map);
        }


        // Titik-titik yang membentuk poligon
        var polygonPoints = [
            [-6.903272, 107.5607555],
            [-6.903272, 107.5607555],
            [-6.903272, 107.5607555],
            [-6.903272, 107.5607555],
        ];

        // Membuat poligon dengan menggunakan L.polygon
        var polygon = L.polygon(polygonPoints, {
            color: 'red', // Warna garis poligon
            fillColor: 'blue', // Warna isian poligon
            fillOpacity: 0.5, // Opasitas isian poligon
        }).addTo(map);

        var dataFromDatabase = {!! json_encode($perumahan) !!};
        dataFromDatabase.forEach(function(data) {
            console.log(data);

            var marker = L.marker([data.latitude_perum, data.longitude_perum]).addTo(map);
            var link = '<a href="/detail/' + data.id_perum + '">Selengkapnya</a>';
            marker.bindPopup("<b>" + data.nama_perum + "</b><br>" + link);
            marker.on("click", function() {
                marker.openPopup();
            });

        });
    </script>

    <!-- <script>
        var map = L.map("map").setView([-6.9174163451476, 107.6208369341539], 13);
        L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }).addTo(map);

        // Marker Map
        var marker1 = L.marker([-6.89855273499184, 107.63302919247838]).addTo(
            map
        );
        var marker2 = L.marker([-6.891424526979195, 107.60175496959842]).addTo(
            map
        );

        // Popup Marker
        marker1.bindPopup("<b>Perum</b><br>A").openPopup();
        marker2.bindPopup("<b>Perum</b><br>B").openPopup();
    </script> -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

{{-- var kecamatanLayer = L.layerGroup();
        // var perumahanLayer = L.layerGroup();

        // function showKecamatan() {
        //     map.eachLayer(function(layer) {
        //         map.removeLayer(layer);
        //     });

        //     L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
        //         maxZoom: 19,
        //         attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        //     }).addTo(map);

        //     kecamatanLayer.addTo(map);
        //     perumahanLayer.clearLayers();

        //     var geojson = L.geoJson(geojsonData, {
        //         style: style,
        //         onEachFeature: onEachFeature
        //     }).addTo(kecamatanLayer);

        //     info.addTo(map);
        // } --}}

{{-- function showPerumahan() {
map.eachLayer(function(layer) {
map.removeLayer(layer);
});

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
maxZoom: 19,
attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);

perumahanLayer.addTo(map);
kecamatanLayer.clearLayers();

var dataFromDatabase = {!! json_encode($perumahan) !!};
//Loop melalui data dan tambahkan marker
dataFromDatabase.forEach(function(data) {
var marker = L.marker([data.latitude_perum, data.longitude_perum]).addTo(perumahanLayer);
// Membuat tautan HTML dengan menggunakan <a href>
    var link = '<a href="/detail/' + data.id_perum + '">Selengkapnya</a>';

marker.bindPopup("<b>" + data.nama_perum + '</b><br>' + link);

//Menambahkan event listener untuk menampilkan popup ketika marker diklik
marker.on("click", function() {
marker.openPopup();
});
});
} --}}
