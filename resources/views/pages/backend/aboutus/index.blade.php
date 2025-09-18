@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">

        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Setting Halaman About</h3>
                                <a href="{{ route('aboutus.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 250px">Photo</th>
                                            <th>Title</th>
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($aboutuses as $aboutus)
                                            <tr>
                                                <td>1.</td>
                                                <td>
                                                    @if ($aboutus->photo)
                                                        <img src="{{ asset('storage/' . $aboutus->photo) }}" alt="photo"
                                                            width="100">
                                                    @else
                                                        <span>null</span>
                                                    @endif
                                                </td>
                                                <td data-label="description">{{ $aboutus->description }}
                                                </td>
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
                                                <td colspan="5" class="text-center">Data About Us belum tersedia</td>
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
    </div>
    <!-- /.content-wrapper -->
@endsection
