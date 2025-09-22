@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Halaman Tambah Testimonial</h3>
                        </div>

                        <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body" style="max-height:70vh; overflow-y:auto;">
                                {{-- Upload Foto --}}
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="previewPhoto(this)">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                                    </div>

                                    <div class="mt-3">
                                        <p>Preview:</p>
                                        <div
                                            style="width:auto; height:300px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center;">
                                            <img id="photo-preview"
                                                src="{{ !empty($datatestimonial->photo) ? asset('storage/' . $datatestimonial->photo) : '' }}"
                                                alt="Preview" style="max-width:100%; max-height:100%; object-fit:contain;">
                                        </div>
                                    </div>
                                </div>

                                {{-- Nama --}}
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ old('name') }}" placeholder="Masukkan nama">
                                </div>

                                {{-- Detail --}}
                                <div class="form-group">
                                    <label for="detail">Detail</label>
                                    <textarea class="form-control" name="detail" id="detail" rows="3" placeholder="Masukkan detail">{{ old('detail') }}</textarea>
                                </div>

                                {{-- Rating --}}
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <input type="number" class="form-control" name="rating" id="rating"
                                        value="{{ old('rating') }}" min="1" max="5" placeholder="1 - 5">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('testimonials.index') }}" class="btn btn-secondary ml-2">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
