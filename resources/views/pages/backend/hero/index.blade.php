@extends('layouts.backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="card">
                        </div>
                        {{-- konten --}}
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <h5 class="card-title">Welcome To Dashboard Page</h5>

                                <p class="card-text">
                                  Ini adalah halaman dashboard admin health center.
                                    Silakan gunakan menu di sebelah kiri untuk mengelola data dan fitur yang tersedia.<br>
                                    <br>
                                    Di halaman dashboard ini, Anda dapat memantau statistik dan informasi penting terkait Health Center. Pastikan untuk selalu memperbarui data agar sistem tetap akurat dan up-to-date.<br>
                                    <br>
                                    Fitur yang tersedia meliputi:<br>
                                    <ul>
                                    <li>Manajemen Data Pasien</li>
                                    <li>Manajemen Jadwal Dokter</li>
                                    <li>Rekapitulasi Kunjungan</li>
                                    <li>Laporan Kesehatan</li>
                                    </ul>
                                    <br>
                                    Untuk memulai, pilih salah satu menu di sidebar kiri sesuai kebutuhan Anda. Jika membutuhkan bantuan, silakan akses dokumentasi atau hubungi admin.<br>
                                    Selamat bekerja dan semoga sukses dalam mengelola Health Center!
                                </p>
                            </div>
                        </div>
                        {{-- end konten --}}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
@endsection
