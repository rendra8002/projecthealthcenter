@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Halaman Testimonial</h3>
                            <a href="{{ route('testimonials.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 200px">Photo</th>
                                            <th>Name</th>
                                            <th>Detail</th>
                                            <th>Rating</th>
                                            <th style="width: 150px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($testimonials as $index => $testimonial)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($testimonial->photo)
                                                        <img src="{{ asset('storage/' . $testimonial->photo) }}"
                                                            alt="photo" class="rounded-circle mr-2" width="150"
                                                            height="150">>
                                                    @else
                                                        <span>null</span>
                                                    @endif
                                                </td>
                                                <td>{{ $testimonial->name }}</td>
                                                <td>{{ $testimonial->detail }}</td>
                                                <td>
                                                    {{-- tampilkan rating bintang --}}
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $testimonial->rating)
                                                            ⭐
                                                        @else
                                                            ☆
                                                        @endif
                                                    @endfor
                                                </td>
                                                <td class="action">
                                                    <div class="d-flex justify-content-center mt-2">
                                                        <form action="{{ route('testimonials.delete', $testimonial->id) }}"
                                                            method="POST" style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                                Hapus
                                                            </button>
                                                        </form>

                                                        <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                            class="btn btn-warning btn-sm ml-2">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-2">
                                                        <label class="toggle-switch mb-0">
                                                            <input type="checkbox" class="toggle-status"
                                                                data-id="{{ $testimonial->id }}"
                                                                {{ $testimonial->status === 'active' ? 'checked' : '' }}>
                                                            <span class="toggle-slider"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Data testimonial belum tersedia</td>
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
            let id = checkbox.data('id');
            let status = checkbox.is(':checked') ? 'active' : 'inactive';

            $.ajax({
                url: "{{ route('testimonials.toggle-status', ['id' => ':id']) }}".replace(':id', id),
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status
                },
                success: function(res) {
                    if (res.success) {
                        alert("✅ Status testimonial berhasil diubah menjadi: " + status);
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
