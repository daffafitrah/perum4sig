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
                            <h5 class="card-title fw-semibold mb-4">Formulir User</h5>
                            @if (session()->has('msg'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    {{ session('msg') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-body">

                                    <form action="/update-password" method="post">
                                        @csrf
                                        <div class="mb-3 form-password-toggle">
                                            <label class="form-label" name="fullname_user">Password Lama</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password"
                                                    class="form-control @error('current_password') is-invalid @enderror"
                                                    name="current_password" id="password"
                                                    placeholder="Masukkan Password Lama"
                                                    aria-label="Masukkan Nama Lengkap" aria-describedby="password" />
                                                @error('current_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 form-password-toggle">
                                            <label class="form-label" for="basic-icon-default-company">Password
                                                Baru</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password"
                                                    class="form-control @error('new_password') is-invalid @enderror"
                                                    name="new_password" placeholder="Masukkan Password Baru"
                                                    aria-label="Masukkan Username" aria-describedby="password" />
                                            </div>
                                        </div>
                                        <div class="mb-3 form-password-toggle">
                                            <label class="form-label" for="basic-icon-default-company">Konfirmasi
                                                Password Baru</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" name="new_password_confirmation"
                                                    id="password" class="form-control"
                                                    placeholder="Masukkan Kembali Password Baru"
                                                    aria-label="Masukkan Username" aria-describedby="password" />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit">Ganti</button>
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
