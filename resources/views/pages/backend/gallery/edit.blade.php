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

<div class="content-wrapper">
    <div class="content">
        <div class="container content-container">
            <div class="row">
                <div class="col-md-10"> {{-- bisa diatur 8 / 10 biar balance --}}
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title">Halaman Edit Gallery</h3>
                        </div>

                        <form action="{{ route('gallery.update', $galleries->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                {{-- Upload Photo --}}
                                <div class="form-group">
                                    <label for="photo">Upload Photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                                    </div>

                                    @if ($galleries->photo)
                                        <div class="mt-2 text-center">
                                            <img src="{{ asset('storage/' . $galleries->photo) }}" alt="photo"
                                                width="120" class="img-thumbnail">
                                        </div>
                                    @endif
                                </div>

                                {{-- Title --}}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        value="{{ old('title', $galleries->title) }}" placeholder="Masukkan judul">
                                </div>

                                {{-- Description --}}
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" placeholder="Masukkan deskripsi">{{ old('description', $galleries->description) }}</textarea>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-start">
                         <button type="submit" class="btn btn-primary mr-2">Update</button>
                         <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
