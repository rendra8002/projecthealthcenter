@extends('layouts.backend.app')
@section('content')
    <div class="card card-primary content-wrapper">
        <div class="card-header">
            <h3 class="card-title">Edit Gallery</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="photo">Upload Photo</label>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="photo"
                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                    </div>

                    @if ($gallery->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $gallery->photo) }}" alt="photo" width="120">
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title"
                        value="{{ old('title', $gallery->title) }}" placeholder="Masukkan judul">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Masukkan deskripsi">{{ old('description', $gallery->description) }}</textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection
