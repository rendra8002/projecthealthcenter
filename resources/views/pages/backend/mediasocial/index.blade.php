@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Media Sosial</h3>
                            <div class="card-tools">
                                <a href="{{ route('mediasocial.create') }}" class="btn btn-primary btn-sm">Tambah
                                    Data</a>
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
                                            <th>Name</th>
                                            <th>Link</th>
                                            <th>App</th>
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($mediasocials as $index => $media)
                                            <tr>
                                                <td>{{ $index + 1 }}.</td>
                                                <td>
                                                    @if ($media->photo)
                                                        <img src="{{ asset('storage/' . $media->photo) }}" alt="photo"
                                                            width="150">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
