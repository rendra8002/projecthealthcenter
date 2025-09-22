@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Messages</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Email</th>
                                            <th style="width: 200px">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($appointments as $key => $appointment)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>{{ $appointment->first_name }}</td>
                                                <td>{{ $appointment->last_name }}</td>
                                                <td>{{ $appointment->email }}</td>
                                                <td class="action">
                                                    <form id="delete-form-{{ $appointment->id }}" action="{{ route('appointment.delete', $appointment->id) }}" method="POST"
                                                        style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            onclick="showDeleteModal('{{ $appointment->id }}')">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('appointment.show', $appointment->id) }}"
                                                        class="btn btn-warning btn-sm ml-2">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Data janji temu belum tersedia</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.backend.footer')

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Confirmation Modal -->

    <script>
        function showDeleteModal(id) {
            var modal = $('#deleteModal');
            modal.modal('show');
            $('#confirmDeleteButton').off('click').on('click', function() {
                document.getElementById('delete-form-' + id).submit();
            });
        }
    </script>
@endsection
