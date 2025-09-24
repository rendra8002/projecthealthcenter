@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Setting Halaman Hero</h3>
                            <div class="card-tools">
                                <a href="{{ route('hero.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
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
                                            <th>Title</th>
                                            <th>Subtitle</th>
                                            <th style="width: 150px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($heroes as $index => $hero)
                                            <tr id="row-{{ $hero->id }}">
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($hero->photo)
                                                        <img src="{{ asset('storage/' . $hero->photo) }}" alt="photo"
                                                            class="rounded-circle mr-2" width="150" height="150">>
                                                    @else
                                                        <span>null</span>
                                                    @endif
                                                </td>
                                                <td>{{ $hero->title }}</td>
                                                <td>{{ $hero->subtitle }}</td>
                                                <td class="action">
                                                    <div class="d-flex justify-content-center mb-2">
                                                        <form action="{{ route('hero.delete', $hero->id) }}" method="POST"
                                                            style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                        <a href="{{ route('hero.edit', $hero->id) }}"
                                                            class="btn btn-warning btn-sm ml-2">
                                                            Edit
                                                        </a>
                                                    </div>

                                                    <div class="d-flex justify-content-center">
                                                        <label class="toggle-switch mb-0">
                                                            <input type="checkbox" class="toggle-status"
                                                                data-id="{{ $hero->id }}"
                                                                {{ $hero->status === 'active' ? 'checked' : '' }}>
                                                            <span class="toggle-slider"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">Data Hero belum tersedia</td>
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
                let heroId = checkbox.data('id');
                let status = checkbox.is(':checked') ? 'active' : 'inactive';

                $.ajax({
                    url: "{{ route('hero.toggle-status', ['id' => ':id']) }}".replace(':id', heroId),
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        status: status
                    },
                    success: function(res) {
                        if (res.success) {
                            alert("✅ Status hero berhasil diubah menjadi: " + res.status);
                        } else {
                            alert(res.message);
                            checkbox.prop('checked', !checkbox.is(':checked'));
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
