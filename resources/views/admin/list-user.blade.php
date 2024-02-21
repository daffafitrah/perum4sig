<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard PERUM SIG</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-home.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <script src="https://kit.fontawesome.com/7ed443f6a6.js" crossorigin="anonymous"></script>
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
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold mb-4">List User</h5>
                                @if (session()->has('msg'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        {{ session('msg') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0 align-middle">
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0 text-center">No.</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0 text-center">Username</h6>
                                                </th>

                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0 text-center">
                                                        Fullname
                                                    </h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0 text-center">
                                                        Action
                                                    </h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $key => $users)
                                                <tr align="center">
                                                    <td class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">{{ $key + 1 }}</h6>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-1">{{ $users->username }}</h6>
                                                    </td>

                                                    <td class="border-bottom-0">
                                                        <div
                                                            class="d-flex align-items-center gap-2 justify-content-center">
                                                            <span
                                                                class="badge bg-primary rounded-3 fw-semibold">{{ $users->fullname }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" title="Reset Password"
                                                            data-bs-target="#detailModal{{ $users->id }}">
                                                            <i class="fa-solid fa-key"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="detailModal{{ $users->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <form action="/resetpassuser/{{ $users->id }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="modalCenterTitle">Reset
                                                                                Password Pengguna</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">Apakah anda yakin ingin
                                                                            mereset
                                                                            password pengguna ini?
                                                                            <input type="text" hidden
                                                                                name="id"
                                                                                value="{{ $users->id }}"
                                                                                id="">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-secondary"
                                                                                data-bs-dismiss="modal">
                                                                                Tidak
                                                                            </button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Reset</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="/edit-user/{{ $users->id }}" title="Edit User"
                                                            class="btn btn-outline-primary"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <button type="button" class="btn btn-danger"
                                                            title="Delete User" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{ $users->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="deleteModal{{ $users->id }}"
                                                            tabindex="-1" aria-labelledby="deleteModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel">Delete User
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Apakah Anda Yakin Ingin Menghapus User
                                                                            Ini ?</p>

                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-primary"
                                                                            data-bs-dismiss="modal"><i
                                                                                class="fa-regular fa-circle-xmark"></i></button>

                                                                        <form
                                                                            action="/delete-user/{{ $users->id }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <input type="text" hidden
                                                                                name="id"
                                                                                value="{{ $users->id }}"
                                                                                id="">
                                                                            <button type="submit" type="button"
                                                                                value="Hapus"
                                                                                class="btn btn-danger"><i
                                                                                    class="fa-solid fa-trash-can"></i></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">
                        Design and Developed by Kelompok 5 Distributed by SIG
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>
