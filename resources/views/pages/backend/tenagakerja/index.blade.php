@extends('layouts.backend.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Our Doctors</h3>
                                <a href="{{ route('tenagakerja.create') }}" class="btn btn-primary float-right">Tambah
                                    Data</a>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 120px">Photo</th>
                                            <th>Name</th>
                                            <th>Speciality</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tenagakerjas as $index => $tenagakerja)
                                            <tr>
                                                <td>{{ $index + 1 }}.</td>
                                                <td>
                                                    @if ($tenagakerja->photo)
                                                        <img src="{{ asset('storage/' . $tenagakerja->photo) }}"
                                                            alt="photo" width="100">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $tenagakerja->name }}</td>
                                                <td>{{ $tenagakerja->speciality }}</td>
                                                <td>{{ $tenagakerja->phone }}</td>
                                                <td>{{ $tenagakerja->email }}</td>
                                                <td class="action">
                                                    <form action="{{ route('tenagakerja.delete', $tenagakerja->id) }}"
                                                        method="POST" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('tenagakerja.edit', $tenagakerja->id) }}"
                                                        class="btn btn-warning btn-sm ml-2">
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Data dokter belum tersedia</td>
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
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('layouts.backend.footer')
@endsection
