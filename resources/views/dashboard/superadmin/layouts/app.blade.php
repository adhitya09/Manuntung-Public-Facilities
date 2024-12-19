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
    }

    .modal-backdrop {
        z-index: 1040 !important;
    }

    .left-sidebar {
        z-index: 1;
        position: fixed;
    }

    .modal {
        z-index: 1050 !important;
    }

    .modal-backdrop {
        z-index: 1040 !important;
    }

    html,
    body {
        height: 100%;
        overflow-y: auto;
    }

    .body-wrapper {
        margin-left: 250px;
        overflow-y: auto;
    }
</style>


<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('dashboard.superadmin.layouts.partials.aside')
        <div class="body-wrapper">
            <header class="app-header">
                @include('dashboard.superadmin.layouts.partials.navbar')
                @yield('admin')
            </header>
        </div>
    </div>

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
            $('#dataTable').DataTable();
            $('#dataTableHover').DataTable();
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
            event.preventDefault();

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
                    fetch("{{ route('logout') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                window.location.href = data.redirect_url || "/";
                            } else {
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
