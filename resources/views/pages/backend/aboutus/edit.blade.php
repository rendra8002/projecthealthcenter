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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title">Halaman Edit About</h3>
                            </div>

                            <form action="{{ route('aboutus.update', $aboutuses->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    {{-- File Input --}}
                                    <div class="form-group">
                                        <label for="photo">File input</label>
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="photo"
                                                onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                                            <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                                        </div>

                                        @if ($aboutuses->photo)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $aboutuses->photo) }}" alt="photo"
                                                    width="120" class="img-thumbnail">
                                            </div>
                                        @endif
                                    </div>

                                    {{-- Description --}}
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            value="{{ old('description', $aboutuses->description) }}"
                                            placeholder="Description">
                                    </div>
                                </div>

                                <div class="card-footer d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                                    <a href="{{ route('aboutus.index') }}" class="btn btn-secondary">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
