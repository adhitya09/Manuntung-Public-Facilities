@extends('dashboard.superadmin.layouts.app')
@section('admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center text-center justify-content-between mb-10">
                            <div class="text-center">
                                <h5 class="card-title fw-semibold">Users</h5>
                            </div>
                        </div>

                        <div class="table-responsive" data-simplebar>
                            <table id="dataTableHover" class="table table-borderless align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">ID</th>
                                        <th scope="col" class="text-center">Nama</th>
                                        <th scope="col" class="text-center">Username</th>
                                        <th scope="col" class="text-center">Email</th>
                                        <th scope="col" class="text-center">Dibuat</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $user->name }}</td>
                                            <td class="text-center">{{ $user->username }}</td>
                                            <td class="text-center">{{ $user->email }}</td>
                                            <td class="text-center">{{ $user->created_at }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete({{ $user->id }})">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                                <form id="delete-form-{{ $user->id }}"
                                                    action="{{ route('user.destroy', $user->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
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
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak dapat membatalkan tindakan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        }
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@endsection
