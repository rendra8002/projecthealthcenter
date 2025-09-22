@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Setting Halaman Sejarah</h3>
                            <div class="card-tools">
                                <a href="{{ route('sejarah.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
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
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($sejarahs as $index => $sejarah)
                                            <tr>
                                                <td>{{ $index + 1 }}.</td>
                                                <td>
                                                    @if ($sejarah->photo)
                                                        <img src="{{ asset('storage/' . $sejarah->photo) }}" alt="photo"
                                                            width="150">
                                                    @else
                                                        <span>null</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
