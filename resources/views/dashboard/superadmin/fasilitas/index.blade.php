@extends('dashboard.superadmin.layouts.app')
@section('admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="d-flex mb-4 justify-content-between align-items-center">
                            <h5 class="mb-0 fw-bold">Fasilitas</h5>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#createFasilitasModal">Tambah Fasilitas</button>
                        </div>

                        <div class="table-responsive" data-simplebar>
                            <table id="dataTableHover" class="table table-borderless align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">ID</th>
                                        <th scope="col" class="text-center">Nama Lokasi</th>
                                        <th scope="col" class="text-center">Alamat</th>
                                        <th scope="col" class="text-center">Latitude</th>
                                        <th scope="col" class="text-center">Longitude</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas as $item)
                                        <tr>
                                            <td class="text-center">{{ $item->id }}</td>
                                            <td class="text-center">{{ $item->nama_toko }}</td>
                                            <td class="text-center">{{ $item->alamat }}</td>
                                            <td class="text-center">{{ $item->latitude }}</td>
                                            <td class="text-center">{{ $item->longitude }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-warning btn-sm"
                                                    onclick="openEditModal({{ $item }})">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete({{ $item->id }})">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                                <form id="delete-form-{{ $item->id }}"
                                                    action="{{ route('fasilitas.destroy', $item->id) }}" method="POST"
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

    <!-- Modal Tambah Fasilitas -->
    <div class="modal fade" id="createFasilitasModal" tabindex="-1" aria-labelledby="createFasilitasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('fasilitas.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="createFasilitasModalLabel">Tambah Fasilitas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="namaTokoCreate" class="form-label">Nama Lokasi</label>
                            <input type="text" class="form-control" id="namaTokoCreate" name="nama_toko" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamatCreate" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamatCreate" name="alamat" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="latitudeCreate" class="form-label">Latitude</label>
                            <input type="text" class="form-control" id="latitudeCreate" name="latitude" required>
                        </div>
                        <div class="mb-3">
                            <label for="longitudeCreate" class="form-label">Longitude</label>
                            <input type="text" class="form-control" id="longitudeCreate" name="longitude" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Fasilitas -->
    <div class="modal fade" id="editFasilitasModal" tabindex="-1" aria-labelledby="editFasilitasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="editFasilitasForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editFasilitasModalLabel">Edit Fasilitas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="namaTokoEdit" class="form-label">Nama Lokasi</label>
                            <input type="text" class="form-control" id="namaTokoEdit" name="nama_toko" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamatEdit" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamatEdit" name="alamat" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="latitudeEdit" class="form-label">Latitude</label>
                            <input type="text" class="form-control" id="latitudeEdit" name="latitude" required>
                        </div>
                        <div class="mb-3">
                            <label for="longitudeEdit" class="form-label">Longitude</label>
                            <input type="text" class="form-control" id="longitudeEdit" name="longitude" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(item) {
            document.getElementById('editFasilitasForm').action = `/fasilitas/${item.id}`;
            document.getElementById('namaTokoEdit').value = item.nama_toko;
            document.getElementById('alamatEdit').value = item.alamat;
            document.getElementById('latitudeEdit').value = item.latitude;
            document.getElementById('longitudeEdit').value = item.longitude;

            var editModal = new bootstrap.Modal(document.getElementById('editFasilitasModal'));
            editModal.show();
        }

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
