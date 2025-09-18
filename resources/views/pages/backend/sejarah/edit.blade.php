@extends('layouts.backend.app')

@section('content')
    <div class="card card-primary content-wrapper">
        <div class="card-header">
            <h3 class="card-title">Edit Data Sejarah</h3>
        </div>

        <form action="{{ route('sejarah.update', $sejarahs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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

                    <div class="mt-2">
                        <img id="preview" 
                             src="{{ $sejarahs->photo ? asset('storage/' . $sejarahs->photo) : '#' }}" 
                             alt="Preview" class="img-thumbnail {{ $sejarahs->photo ? '' : 'd-none' }}" width="150">
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                           name="title" id="title" placeholder="Masukkan Judul" 
                           value="{{ old('title', $sejarahs->title) }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              name="description" id="description" rows="4">{{ old('description', $sejarahs->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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
