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
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($heroes as $index => $hero)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($hero->photo)
                                                        <img src="{{ asset('storage/' . $hero->photo) }}" alt="photo"
                                                            width="150">
                                                    @else
                                                        <span>null</span>
                                                    @endif
                                                </td>
                                                <td data-label="title">{{ $hero->title }}</td>
                                                <td data-label="header">{{ $hero->subtitle }}</td>
                                                <td class="action">
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
                                                </td>
                                            </tr>

                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Data hero belum tersedia</td>
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
