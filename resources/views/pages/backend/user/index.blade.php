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
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($datauser as $index => $user)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($user->photo)
                                                        <img src="{{ asset('storage/' . $user->photo) }}" alt="photo"
                                                            width="150">
                                                    @else
                                                        <span>null</span>
                                                    @endif
                                                </td>
                                                <td data-label="title">{{ $user->username }}</td>
                                                <td data-label="header">{{ $user->email }}</td>
                                                <td class="action">
                                                    <form action="{{ route('user.delete', $user->id) }}" method="POST"
                                                        style="display:inline">
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
@endsection
