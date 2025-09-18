@extends('layouts.backend.app')
@section('content')
    <div class="card card-primary content-wrapper">
        <div class="card-header">
            <h3 class="card-title">Edit Testimonial</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                {{-- Upload Foto --}}
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="photo"
                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                    </div>

                    @if ($testimonial->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="photo" width="120"
                                class="img-thumbnail">
                        </div>
                    @endif
                </div>

                {{-- Nama --}}
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name"
                        value="{{ old('name', $testimonial->name) }}" placeholder="Masukkan nama">
                </div>

                {{-- Detail --}}
                <div class="form-group">
                    <label for="detail">Detail</label>
                    <textarea class="form-control" name="detail" id="detail" rows="3" placeholder="Masukkan detail">{{ old('detail', $testimonial->detail) }}</textarea>
                </div>

                {{-- Rating --}}
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" class="form-control" name="rating" id="rating"
                        value="{{ old('rating', $testimonial->rating) }}" min="1" max="5" placeholder="1 - 5">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection
