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
            <h3 class="card-title">Tambah Media Social</h3>
        </div>

        <form action="{{ route('mediasocial.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                {{-- Photo --}}
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="photo"
                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                    </div>
                </div>

                {{-- Name Account --}}
                <div class="form-group">
                    <label for="name_account">Name Account</label>
                    <input type="text" class="form-control" name="name_account" id="name_account"
                        value="{{ old('name_account') }}" placeholder="Masukkan nama akun">
                </div>

                {{-- Link --}}
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="url" class="form-control" name="link" id="link"
                        value="{{ old('link') }}" placeholder="Masukkan link">
                </div>

                {{-- Name Mediasocial --}}
                <div class="form-group">
                    <label for="name_mediasocial">Name Media Social</label>
                    <input type="text" class="form-control" name="name_mediasocial" id="name_mediasocial"
                        value="{{ old('name_mediasocial') }}" placeholder="Masukkan nama media social">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('mediasocial.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection
