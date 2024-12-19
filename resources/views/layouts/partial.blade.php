<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assetsA/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assetsA/css/styles.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

</head>
<style>
    .card-body {
        max-height: 80vh;
        overflow-y: auto;
    }

    .container-fluid {
        height: 100vh;
        overflow-y: auto;
    }

    .left-sidebar {
        z-index: 1;
        /* Sidebar tetap di bawah modal */
    }



    .modal-backdrop {
        z-index: 1040 !important;
        /* Pastikan backdrop modal berada di bawah modal */
    }

    .left-sidebar {
        z-index: 1;
        /* Turunkan prioritas sidebar */
        position: fixed;
        /* Pastikan sidebar tetap di posisi tetap */
    }

    .modal {
        z-index: 1050 !important;
        /* Sesuaikan dengan Bootstrap default */
    }

    .modal-backdrop {
        z-index: 1040 !important;
        /* Tambahkan lapisan backdrop di bawah modal */
    }

    html,
    body {
        height: 100%;
        overflow-y: auto;
        /* Aktifkan scroll */
    }

    .body-wrapper {
        margin-left: 250px;
        /* Sesuaikan dengan lebar sidebar */
        overflow-y: auto;
        /* Pastikan scroll diaktifkan */
    }
</style>


<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-simplebar>
                <div class="d-flex mb-4 align-items-center mr-4">
                    <a href="" class="d-flex align-items-center text-nowrap logo-img ms-0 ms-md-1">
                        {{-- <img src="{{ asset('assetsA/images/logos/logo1.png') }}" width="30" alt="Logo"> --}}
                        <h2 class="ms-3 mb-0 text-bold">Manuntung</h2>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="mb-4 pb-2">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                            <span class="hide-menu">Beranda</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="{{ route('superadmin') }}"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-primary rounded-3">
                                    <i class="ti ti-layout-dashboard fs-7 text-primary"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                            <span class="hide-menu">CRUD</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link warning-hover-bg" href="{{ route('fasilitas.index') }}"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-warning rounded-3">
                                    <i class="ti ti-article fs-7 text-warning"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">fasilitas</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link danger-hover-bg"
                href="{{ route("fasilitas.index") }}"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-danger rounded-3">
                  <i class="ti ti-alert-circle fs-7 text-danger"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Fasilitas</span>
              </a>
            </li> --}}
                        {{-- <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link success-hover-bg"
                href="{{ route("admin.orders.index") }}"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-success rounded-3">
                  <i class="ti ti-cards fs-7 text-success"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Ordering</span>
              </a>
            </li> --}}
                        {{-- <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link primary-hover-bg"
                href="./ui-forms.html"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-primary rounded-3">
                  <i class="ti ti-file-description fs-7 text-primary"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link indigo-hover-bg"
                href="./ui-typography.html"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-indigo rounded-3">
                  <i class="ti ti-typography fs-7 text-indigo"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Typography</span>
              </a>
            </li> --}}
                        {{-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
              <span class="hide-menu">Auth</span>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link warning-hover-bg"
                href="./authentication-login.html"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-warning rounded-3">
                  <i class="ti ti-login fs-7 text-warning"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link danger-hover-bg"
                href="./authentication-register.html"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-danger rounded-3">
                  <i class="ti ti-user-plus fs-7 text-danger"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Register</span>
              </a>
            </li> --}}
                        {{-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
              <span class="hide-menu">Extra</span>
            </li> --}}
                        {{-- <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link success-hover-bg"
                href="./icon-tabler.html"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-success rounded-3">
                  <i class="ti ti-mood-happy fs-7 text-success"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Icons</span>
              </a>
            </li> --}}
                        {{-- <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link primary-hover-bg"
                href="./sample-page.html"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-primary rounded-3">
                  <i class="ti ti-aperture fs-7 text-primary"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Sample Page</span>
              </a>
            </li> --}}
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
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assetsA/images/profile/user1.jpg') }}" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a> --}}
                                        {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a> --}}
                                        {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a> --}}
                                        <a href="javascript:void(0)"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block shadow-none"
                                            id="logout-btn">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                @yield('admin')
            </header>
            <!--  Header End -->



            <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
            <script src="{{ asset('assetsA/libs/jquery/dist/jquery.min.js') }}"></script>
            <script src="{{ asset('assetsA/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assetsA/js/sidebarmenu.js') }}"></script>
            <script src="{{ asset('assetsA/js/app.min.js') }}"></script>
            <script src="{{ asset('assetsA/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
            <script src="{{ asset('assetsA/libs/simplebar/dist/simplebar.js') }}"></script>
            <script src="{{ asset('assetsA/js/dashboard.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="{{ asset('assets2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('#dataTable').DataTable(); // ID From dataTable
                    $('#dataTableHover').DataTable(); // ID From dataTable with Hover
                });
            </script>

            @if (session()->has('success'))
                <script>
                    Swal.fire({
                        title: 'Berhasil!',
                        text: '{{ session('success') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                </script>
            @endif
            <script>
                document.getElementById('logout-btn').addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah default action (link)

                    Swal.fire({
                        title: 'Konfirmasi Logout',
                        text: "Apakah Anda yakin ingin keluar?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Keluar',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Kirim request POST ke route logout menggunakan AJAX
                            fetch("{{ route('logout') }}", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}" // CSRF Token untuk Laravel
                                    }
                                })
                                .then(response => response.json()) // Anggap response dalam bentuk JSON
                                .then(data => {
                                    if (data.success) {
                                        // Redirect atau lakukan tindakan setelah logout sukses
                                        window.location.href = data.redirect_url || "/";
                                    } else {
                                        // Tampilkan error jika ada masalah
                                        Swal.fire({
                                            title: 'Gagal!',
                                            text: 'Terjadi kesalahan saat logout.',
                                            icon: 'error'
                                        });
                                    }
                                })
                                .catch(error => {
                                    Swal.fire({
                                        title: 'Gagal!',
                                        text: 'Terjadi kesalahan.',
                                        icon: 'error'
                                    });
                                });
                        }
                    });
                });

                // document.getElementById('logout-btn').addEventListener('click', function () {
                //   Swal.fire({
                //     title: 'Konfirmasi Logout',
                //     text: "Apakah Anda yakin ingin keluar?",
                //     icon: 'warning',
                //     showCancelButton: true,
                //     confirmButtonColor: '#3085d6',
                //     cancelButtonColor: '#d33',
                //     confirmButtonText: 'Ya, Keluar',
                //     cancelButtonText: 'Batal'
                //   }).then((result) => {
                //     if (result.isConfirmed) {
                //       // Redirect ke route logout jika dikonfirmasi
                //       window.location.href = "{{ route('logout') }}";
                //     }
                //   });
                // });
            </script>

            @if (session()->has('error'))
                <script>
                    Swal.fire({
                        title: 'Gagal!',
                        text: '{{ session('error') }}',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                </script>
            @endif
</body>

</html>
