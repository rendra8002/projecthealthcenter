@extends('layouts.backend.app')
@section('content')
<style>
        /* Sidebar fix biar selalu nempel sampai bawah */
        .main-sidebar {
            position: fixed !important;
            top: 0;
            left: 0;
            bottom: 0;
            height: 100vh !important;
            min-height: 100vh !important;
        }

        .sidebar {
            height: 100% !important;
            overflow-y: auto;
        }

        /* Content wrapper geser lebih jauh dari sidebar */
        .content-wrapper {
            min-height: 100vh !important;
            padding: 20px !important;
            margin-left: 300px !important;  /* lebar sidebar */
            margin-right: 70px !important;  /* spasi kanan */
        }

        /* Bungkus konten biar lebih center */
        .content-container {
            max-width: 850px;
            margin: 0 auto;
            padding: 0 60px;
        }

        /* Jarak antar field form */
        .card-body .form-group {
            margin-bottom: 20px;
        }
    </style>
    <div class="card card-primary content-wrapper">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Dokter</h3>
        </div>
        <!-- /.card-header -->

        <!-- form start -->
        <form action="{{ route('tenagakerja.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="photo"
                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Nama Dokter</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama Dokter">
                </div>

                <div class="form-group">
                    <label for="speciality">Spesialisasi</label>
                    <input type="text" class="form-control" name="speciality" id="speciality" placeholder="Spesialisasi">
                </div>

                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Nomor Telepon">
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('tenagakerja.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection
