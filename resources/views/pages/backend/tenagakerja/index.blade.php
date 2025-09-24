@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Our Doctors</h3>
                            <div class="card-tools">
                                <a href="{{ route('tenagakerja.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 200px">Photo</th>
                                            <th>Name</th>
                                            <th>Speciality</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th style="width: 150px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tenagakerjas as $index => $tenagakerja)
                                            <tr>
                                                <td>{{ $index + 1 }}.</td>
                                                <td>
                                                    @if ($tenagakerja->photo)
                                                        <img src="{{ asset('storage/' . $tenagakerja->photo) }}"
                                                            alt="photo" class="rounded-circle mr-2" width="150"
                                                            height="150">>
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $tenagakerja->name }}</td>
                                                <td>{{ $tenagakerja->speciality }}</td>
                                                <td>{{ $tenagakerja->phone }}</td>
                                                <td>{{ $tenagakerja->email }}</td>
                                                <td class="action">
                                                    <div class="d-flex justify-content-center mt-2">
                                                        <form action="{{ route('tenagakerja.delete', $tenagakerja->id) }}"
                                                            method="POST" style="display:inline"
                                                            onsubmit="return confirm('Apakah yakin ingin menghapus?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                        <a href="{{ route('tenagakerja.edit', $tenagakerja->id) }}"
                                                            class="btn btn-warning btn-sm ml-2">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-2">
                                                        <label class="toggle-switch mb-0">
                                                            <input type="checkbox" class="toggle-status"
                                                                data-id="{{ $tenagakerja->id }}"
                                                                {{ $tenagakerja->status === 'active' ? 'checked' : '' }}>
                                                            <span class="toggle-slider"></span>
                                                        </label>
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Data dokter belum tersedia</td>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('change', '.toggle-status', function() {
            let checkbox = $(this);
            let tenagaId = checkbox.data('id');
            let status = checkbox.is(':checked') ? 'active' : 'inactive';

            $.ajax({
                url: "{{ route('tenagakerja.toggle-status', ['id' => ':id']) }}".replace(':id', tenagaId),
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status
                },
                success: function(res) {
                    if (res.success) {
                        alert("✅ Status dokter berhasil diubah menjadi: " + status);
                    } else {
                        alert(res.message);
                        checkbox.prop('checked', !checkbox.is(':checked')); // balikin toggle
                    }
                },
                error: function() {
                    alert("❌ Terjadi kesalahan saat mengubah status.");
                    checkbox.prop('checked', !checkbox.is(':checked')); // balikin toggle
                }
            });
        });
    </script>
@endsection
