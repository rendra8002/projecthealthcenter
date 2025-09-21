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
            <h3 class="card-title">Tambah Data Sejarah</h3>
        </div>

        <form action="{{ route('sejarah.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="custom-file mb-2">
                        <input type="file" name="photo" class="custom-file-input @error('photo') is-invalid @enderror" 
                               id="photo" onchange="previewImage(event)">
                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                        @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <img id="preview" src="#" alt="Preview" class="img-thumbnail d-none" width="150">
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                           name="title" id="title" placeholder="Masukkan Judul" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              name="description" id="description" rows="4" placeholder="Masukkan Deskripsi">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('sejarah.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');
            const label = document.getElementById('photo-label');

            if (input.files && input.files[0]) {
                label.innerText = input.files[0].name;
                preview.src = URL.createObjectURL(input.files[0]);
                preview.classList.remove('d-none');
            }
        }
    </script>
@endsection
