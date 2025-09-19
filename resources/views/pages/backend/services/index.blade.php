@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Setting Halaman Services</h3>
                                <a href="{{ route('services.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 250px">Photo</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($services as $index => $service)
                                            <tr>
                                                <td>{{ $index + 1 }}.</td>
                                                <td>
                                                    @if ($service->photo)
                                                        <img src="{{ asset('storage/' . $service->photo) }}" alt="photo"
                                                            width="100">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ $service->description }}</td>
                                                <td class="action">
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
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.backend.footer')
@endsection
