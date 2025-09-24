@extends('layouts.backend.app')
@section('content')
    <style>
        tr {
            background-color: white;
        }

        td {
            background-color: white;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Setting Halaman About</h3>
                            <div class="card-tools">
                                <a href="{{ route('aboutus.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width:200px">Photo</th>
                                            <th>Description</th>
                                            <th style="width: 150px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($aboutuses as $index => $aboutus)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($aboutus->photo)
                                                        <img src="{{ asset('storage/' . $aboutus->photo) }}" alt="photo"
                                                            class="rounded-circle mr-2" width="150" height="150">>
                                                    @else
                                                        <span>null</span>
                                                    @endif
                                                </td>
                                                <td>{{ $aboutus->description }}</td>
                                                <td class="action">
                                                    <div class="d-flex justify-content-center mt-2">
                                                        <form action="{{ route('aboutus.delete', $aboutus->id) }}"
                                                            method="POST" style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                        <a href="{{ route('aboutus.edit', $aboutus->id) }}"
                                                            class="btn btn-warning btn-sm ml-2">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-2">
                                                        <label class="toggle-switch mb-0">
                                                            <input type="checkbox" class="toggle-status"
                                                                data-id="{{ $aboutus->id }}"
                                                                {{ $aboutus->status === 'active' ? 'checked' : '' }}>
                                                            <span class="toggle-slider"></span>
                                                        </label>
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10" class="text-center">Data About Us belum tersedia</td>
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
        </div>
    </div>
    @include('layouts.backend.footer')
    {{-- togel abot --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('change', '.toggle-status', function() {
            let checkbox = $(this);
            let aboutusId = checkbox.data('id');
            let status = checkbox.is(':checked') ? 'active' : 'inactive';

            $.ajax({
                url: "{{ route('aboutus.toggle-status', ['id' => ':id']) }}".replace(':id', aboutusId),
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status
                },
                success: function(res) {
                    if (res.success) {
                        alert("✅ Status berhasil diubah menjadi: " + status);
                    } else {
                        alert(res.message);
                        checkbox.prop('checked', !checkbox.is(':checked')); // balikin toggle
                    }
                },
                error: function() {
                    alert("❌ Terjadi kesalahan saat mengubah status.");
                    checkbox.prop('checked', !checkbox.is(':checked'));
                }
            });
        });
    </script>
@endsection
