@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Setting Halaman User</h3>
                            <div class="card-tools">
                                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                                <ul class="pagination pagination-sm float-right">
                                </ul>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            {{-- Menambahkan div agar tabel dapat di-scroll vertikal --}}
                            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 200px">Photo</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th style="width: 150px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($datauser as $index => $user)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($user->photo)
                                                        <img src="{{ asset('storage/' . $user->photo) }}" alt="photo"
                                                            class="rounded-circle mr-2" width="150" height="150">
                                                    @else
                                                        <span>null</span>
                                                    @endif
                                                </td>
                                                <td data-label="title">{{ $user->username }}</td>
                                                <td data-label="header">{{ $user->email }}</td>
                                                <td class="action">
                                                    @if ($user->email === 'adminraja.gmail.com')
                                                        <span class="badge bg-primary">Superadmin</span>
                                                    @else
                                                        <div class="d-flex justify-content-center mt-2">
                                                            <form action="{{ route('user.delete', $user->id) }}"
                                                                method="POST" style="display:inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                            <a href="{{ route('user.edit', $user->id) }}"
                                                                class="btn btn-warning btn-sm ml-2">
                                                                Edit
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-center mt-2">
                                                            <label class="toggle-switch mb-0">
                                                                <input type="checkbox" class="toggle-status"
                                                                    data-id="{{ $user->id }}"
                                                                    {{ $user->status === 'active' ? 'checked' : '' }}>
                                                                <span class="toggle-slider"></span>
                                                            </label>
                                                        </div>
                                                    @endif
                                                </td>
                                            </tr>

                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Data User belum tersedia</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.backend.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('change', '.toggle-status', function() {
            let checkbox = $(this);
            let userId = checkbox.data('id');
            let status = checkbox.is(':checked') ? 'active' : 'inactive';

            $.ajax({
                url: "{{ route('user.toggle-status', ['id' => ':id']) }}".replace(':id', userId),
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status
                },
                success: function(res) {
                    if (res.success) {
                        alert("✅ Status user berhasil diubah menjadi: " + status);
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
