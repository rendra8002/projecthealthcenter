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
                                <h3 class="card-title">Daftar Media Sosial</h3>
                                <a href="{{ route('mediasocial.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 150px">Photo</th>
                                            <th>Name Account</th>
                                            <th>Link</th>
                                            <th>Name Media Social</th>
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($mediasocials as $key => $media)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    @if ($media->photo)
                                                        <img src="{{ asset('storage/' . $media->photo) }}" alt="photo"
                                                            width="80" class="img-thumbnail">
                                                    @else
                                                        <span>null</span>
                                                    @endif
                                                </td>
                                                <td>{{ $media->name_account }}</td>
                                                <td>
                                                    <a href="{{ $media->link }}" target="_blank">{{ $media->link }}</a>
                                                </td>
                                                <td>{{ $media->name_mediasocial }}</td>
                                                <td class="action">
                                                    <form action="{{ route('mediasocial.delete', $media->id) }}"
                                                        method="POST" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                            Hapus
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('mediasocial.edit', $media->id) }}"
                                                        class="btn btn-warning btn-sm ml-2">
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Data belum ada</td>
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
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
