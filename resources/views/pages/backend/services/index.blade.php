@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Setting Halaman Services</h3>
                            <div class="card-tools">
                                <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 200px">Photo</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th style="width: 150px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($services as $index => $service)
                                            <tr>
                                                <td>{{ $index + 1 }}.</td>
                                                <td>
                                                    @if ($service->photo)
                                                        <img src="{{ asset('storage/' . $service->photo) }}" alt="photo"
                                                            class="rounded-circle mr-2" width="150" height="150">>
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ $service->description }}</td>
                                                <td class="action">
                                                    <div class="d-flex justify-content-center">
                                                        <form action="{{ route('services.delete', $service->id) }}"
                                                            method="POST" style="display:inline"
                                                            onsubmit="return confirm('Apakah yakin ingin menghapus?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                Hapus
                                                            </button>
                                                        </form>

                                                        <a href="{{ route('services.edit', $service->id) }}"
                                                            class="btn btn-warning btn-sm ml-2">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-2">
                                                        <label class="toggle-switch mb-0">
                                                            <input type="checkbox" class="toggle-status"
                                                                data-id="{{ $service->id }}"
                                                                {{ $service->status === 'active' ? 'checked' : '' }}>
                                                            <span class="toggle-slider"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Data Services belum tersedia</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.backend.footer')

    {{-- Script Toggle --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('change', '.toggle-status', function() {
            let checkbox = $(this);
            let serviceId = checkbox.data('id');
            let status = checkbox.is(':checked') ? 'active' : 'inactive';

            $.ajax({
                url: "{{ route('services.toggle-status', ['id' => ':id']) }}".replace(':id', serviceId),
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status
                },
                success: function(res) {
                    if (res.success) {
                        alert("✅ Status service berhasil diubah menjadi: " + status);
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
