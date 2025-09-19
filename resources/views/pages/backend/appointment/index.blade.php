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
                                <h3 class="card-title">Data Appointment</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th style="width: 200px">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($appointments as $key => $appointment)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $appointment->first_name }}</td>
                                                <td>{{ $appointment->last_name }}</td>
                                                <td>{{ $appointment->email }}</td>
                                                <td class="action">
                                                    <a href="{{ route('appointment.show', $appointment->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        Detail
                                                    </a>
                                                    <form action="{{ route('appointment.delete', $appointment->id) }}" 
                                                        method="POST" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah yakin ingin menghapus data ini?')">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Data appointment belum tersedia</td>
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
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.backend.footer')
@endsection
