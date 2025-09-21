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
            <h3 class="card-title">Halaman Tambah Gallery</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="photo">Upload Photo</label>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="photo"
                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan judul">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Masukkan deskripsi"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('gallery.index') }}">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </form>
    </div>
@endsection
