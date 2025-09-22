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
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($aboutuses as $index => $aboutus)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($aboutus->photo)
                                                        <img src="{{ asset('storage/' . $aboutus->photo) }}" alt="photo"
                                                            width="150">
                                                    @else
                                                        <span>null</span>
                                                    @endif
                                                </td>
                                                <td>{{ $aboutus->description }}</td>
                                                <td class="action">
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
@endsection
