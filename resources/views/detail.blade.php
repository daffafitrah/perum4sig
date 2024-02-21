<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SIG Perumahan Kota Bandung</title>
    <link type="image/png" rel="Icon" href="/img/logo-home.png" />
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
    <link href="/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        #map {
            height: 500px;
        }
    </style>
</head>

<body>
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

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div id="map"></div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            Deskripsi
                        </h5>
                        <p class="fs-5" style="text-align: justify">
                            {{ $perumahan->nama_perum }} terletak di {{ $perumahan->alamat_perum }}
                        </p>
                        <p class="fs-5" style="text-align: justify">
                            Tipe 21
                            <br>
                            Rumah tipe 21 termasuk kecil. Sebab, luas bangunannya hanya 21 meter persegi. Dimensi untuk
                            rumah tipe 21 umumnya 3 x 7 meter, 5,25 x 4 meter, dan 6 x 3,5 meter.
                            <br>
                            Tipe 36
                            <br>
                            Rumah tipe 36 pas untuk keluarga kecil yang baru menikah. Rumah tipe ini biasanya dilengkapi
                            1 hingga 2 kamar tidur dengan dimensi 6 x 6 meter, 9 x 4 meter dan sebagainya.
                            <br>
                            Tipe 45
                            <br>
                            Rumah tipe 45 paling banyak dicari oleh orang Indonesia karena ukurannya yang cukup luas dan
                            harganya cukup terjangkau. Dimensi standar untuk rumah ini yakni 6 x 7,5 meter.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Project Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                    Gambar
                </h5>
                <h1 class="display-5">{{ $perumahan->nama_perum }}</h1>
            </div>
            <div class="row g-5">
                <div class=" col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="/storage/{{ $perumahan->gambar_perum }}" class="img-fluid h-100" alt="img" />
                        <a href="" class="fs-4 fw-bold text-center">Pintu Masuk</a>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="/storage/{{ $perumahan->gambar_perum2 }}" class="img-fluid h-100" alt="img" />
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="/storage/{{ $perumahan->gambar_perum3 }}" class="img-fluid h-100" alt="img" />
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="/storage/{{ $perumahan->gambar_perum4 }}" class="img-fluid h-100" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- Team End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <a href="#" class="text-primary mb-0 display-6">PERUM<span class="text-white">SIG</span><i
                            class="fa fa-home text-primary ms-2"></i></a>
                </div>
                <div class="col-md-4 copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0"></div>
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

    <script>
        var map = L.map("map", {
            center: [{{ $perumahan->latitude_perum }}, {{ $perumahan->longitude_perum }}],
            zoom: 13,
            minZoom: 13,
        });
        L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 30,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }).addTo(map);

        // Marker Map
        var marker1 = L.marker([{{ $perumahan->latitude_perum }}, {{ $perumahan->longitude_perum }}]).addTo(
            map
        );

        // Popup Marker
        marker1.bindPopup("<b>{{ $perumahan->nama_perum }}</b>");

        // Menambahkan event listener untuk menampilkan popup ketika marker diklik
        marker1.on("click", function() {
            marker1.openPopup();
        });


        var dataFromDatabase = {!! json_encode($perumahan) !!};
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>
