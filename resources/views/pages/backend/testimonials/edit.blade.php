@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Halaman Edit Testimonial</h3>

                        </div>

                        <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body" style="max-height:70vh; overflow-y:auto;">
                                {{-- Upload Photo --}}
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="previewPhoto(this)">

                                        {{-- Label default: tampilkan nama file lama dari database (kalau ada) --}}
                                        <label class="custom-file-label" id="photo-label" for="photo">
                                            {{ $testimonial->photo ?? 'Pilih file' }}
                                        </label>
                                    </div>

                                    <div class="mt-3">
                                        <p>Preview:</p>
                                        <div
                                            style="width:auto; height:300px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center;">
                                            <img id="photo-preview"
                                                src="{{ !empty($testimonial->photo) ? asset('storage/' . $testimonial->photo) : '' }}"
                                                alt="Preview" style="max-width:100%; max-height:100%; object-fit:contain;">
                                        </div>
                                    </div>
                                </div>

                                {{-- Nama --}}
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ old('name', $testimonial->name) }}" placeholder="Nama">
                                </div>

                                {{-- Detail --}}
                                <div class="form-group">
                                    <label for="detail">Detail</label>
                                    <textarea class="form-control" name="detail" id="detail" rows="3" placeholder="Detail">{{ old('detail', $testimonial->detail) }}</textarea>
                                </div>

                                {{-- Rating --}}
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <input type="number" class="form-control" name="rating" id="rating"
                                        value="{{ old('rating', $testimonial->rating) }}" min="1" max="5"
                                        placeholder="1 - 5">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
