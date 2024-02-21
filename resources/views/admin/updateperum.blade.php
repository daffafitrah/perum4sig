<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Developer PERUM SIG</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-home.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-center">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="img/logo-home.png" width="100" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Perumahan</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboard-admin" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">List Perumahan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/add-perum" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">Formulir Perumahan</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Developer</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/list-dev" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">List Developer</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/add-dev" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">Formulir Developer</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">User</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/list-user" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">List User</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/add-user" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">Formulir User</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Account</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/update-password" aria-expanded="false">
                                <span>
                                    <i class="ti ti-key"></i>
                                </span>
                                <span class="hide-menu">Change Password</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/logout" aria-expanded="false">
                                <span>
                                    <i class="ti ti-logout"></i>
                                </span>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <a href="/" target="_blank" class="btn btn-primary">WEB PERUMSIG</a>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Formulir Update Perumahan</h5>
                            <div class="card">
                                <div class="card-body">

                                    <form action="/edit-perum/{{ $perumahan->id_perum }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama-perum" class="form-label">Nama Perumahan</label>
                                            <input name="nama_perum" type="text" class="form-control"
                                                id="" required value="{{ $perumahan->nama_perum }}" />
                                        </div>


                                        <div class="mb-3">
                                            <label for="kecamatan-perum" class="form-label">Kecamatan: </label>
                                            <select name="id_kec" class="form-control" required>
                                                <option value="">Pilih Kecamatan :</option>
                                                @foreach ($kecamatan as $kec)
                                                    <option value="{{ $kec->id_kec }}"
                                                        @if ($kec->id_kec == $perumahan->id_kec) selected @endif>
                                                        {{ $kec->nama_kec }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat-perum" class="form-label">Alamat Perumahan</label>
                                            <input name="alamat_perum" type="text" class="form-control"
                                                id="" required value="{{ $perumahan->alamat_perum }}" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label for="dev-perum" class="form-label">Developer
                                                    Perumahan</label>
                                                <a href="add-dev" class="btn btn-primary border-0 p-2 mb-2">Tambah
                                                    Developer</a>
                                            </div>
                                            <select name="id_pers" class="form-control" required>
                                                <option value="">Pilih Developer :</option>
                                                @foreach ($perusahaan as $pers)
                                                    <option value="{{ $pers->id_pers }}"
                                                        @if ($pers->id_pers == $perumahan->id_pers) selected @endif>
                                                        {{ $pers->nama_pers }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="latitude-perum" class="form-label">Latitude
                                                Perumahan</label>
                                            <input name="latitude_perum" type="text" class="form-control"
                                                id="" required value="{{ $perumahan->latitude_perum }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="longitude-perum" class="form-label">Longitude
                                                Perumahan</label>
                                            <input name="longitude_perum" type="text" class="form-control"
                                                id="" required value="{{ $perumahan->longitude_perum }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="pict-perum" class="form-label">Gambar Perumahan</label>
                                            @if ($perumahan->gambar_perum !== 'NULL')
                                                <img class="d-block mb-3 img-fluid" style="width: 200px"
                                                    src="{{ asset('storage/' . $perumahan->gambar_perum) }}"
                                                    alt="">
                                            @endif
                                            <input name="gambar_perum" class="form-control form-control-sm"
                                                id="formFileSm" type="file" value="gambar_perum"><br>
                                            @if ($perumahan->gambar_perum2 !== 'NULL')
                                                <img class="d-block mb-3 img-fluid" style="width: 200px"
                                                    src="{{ asset('storage/' . $perumahan->gambar_perum2) }}"
                                                    alt="">
                                            @endif
                                            <input name="gambar_perum2" class="form-control form-control-sm"
                                                id="formFileSm" type="file" value="gambar_perum2"><br>
                                            @if ($perumahan->gambar_perum3 !== 'NULL')
                                                <img class="d-block mb-3 img-fluid" style="width: 200px"
                                                    src="{{ asset('storage/' . $perumahan->gambar_perum3) }}"
                                                    alt="">
                                            @endif
                                            <input name="gambar_perum3" class="form-control form-control-sm"
                                                id="formFileSm" type="file" value="gambar_perum3"><br>
                                            @if ($perumahan->gambar_perum4 !== 'NULL')
                                                <img class="d-block mb-3 img-fluid" style="width: 200px"
                                                    src="{{ asset('storage/' . $perumahan->gambar_perum4) }}"
                                                    alt="">
                                            @endif
                                            <input name="gambar_perum4" class="form-control form-control-sm"
                                                id="formFileSm" type="file" value="gambar_perum4">
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
