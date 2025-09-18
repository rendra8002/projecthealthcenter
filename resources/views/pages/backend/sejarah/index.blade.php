@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Setting Halaman Sejarah</h3>
                                <a href="{{ route('sejarah.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 50px">#</th>
                                                <th style="width: 150px">Photo</th>
                                                <th style="width: 200px">Title</th>
                                                <th>Description</th>
                                                <th style="width: 200px">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($sejarahs as $sejarah)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        @if ($sejarah->photo)
                                                            <img src="{{ asset('storage/' . $sejarah->photo) }}" 
                                                                 alt="photo" width="100" class="img-thumbnail">
                                                        @else
                                                            <img src="{{ asset('images/no-image.png') }}" 
                                                                 alt="no-photo" width="100" class="img-thumbnail">
                                                        @endif
                                                    </td>
                                                    <td>{{ $sejarah->title }}</td>
                                                    <td>{{ Str::limit($sejarah->description, 100) }}</td>
                                                    <td class="action">
                                                        <form action="{{ route('sejarah.delete', $sejarah->id) }}" 
                                                              method="POST" style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                                Hapus
                                                            </button>
                                                        </form>

                                                        <a href="{{ route('sejarah.edit', $sejarah->id) }}" 
                                                           class="btn btn-warning btn-sm ml-2">
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">Data Sejarah belum tersedia</td>
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
    </div>
@endsection
