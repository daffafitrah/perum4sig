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
                            <h5 class="card-title fw-semibold mb-4">Formulir Developer</h5>
                            <div class="card">
                                <div class="card-body">
                                    @foreach ($perusahaan as $pers)
                                        <form action="/edit-dev/{{ $pers->id_pers }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nama-pers" class="form-label">Nama Perusahaan</label>
                                                <input name="nama_pers" type="text" class="form-control"
                                                    id="" required value="{{ $pers->nama_pers }}" />

                                            </div>

                                            <div class="mb-3">
                                                <label for="alamat-pers" class="form-label">Alamat Perusahaan</label>
                                                <input name="alamat_pers" type="text" class="form-control"
                                                    id="" required value="{{ $pers->alamat_pers }}" />
                                            </div>

                                            <div class="mb-3">
                                                <label for="telp-pers" class="form-label">Telepon Perusahaan</label>
                                                <input name="telp_pers" type="text" class="form-control"
                                                    id="" required value="{{ $pers->telp_pers }}" />
                                            </div>

                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </form>
                                    @endforeach
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
