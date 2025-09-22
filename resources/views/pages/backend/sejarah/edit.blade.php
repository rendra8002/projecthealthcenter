@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-primary center-card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Sejarah</h3>
                        </div>

                        <form action="{{ route('sejarah.update', $sejarahs->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body" style="max-height:70vh; overflow-y:auto;">
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file mb-2">
                                        <input type="file" name="photo"
                                            class="custom-file-input @error('photo') is-invalid @enderror" id="photo"
                                            id="photo"onchange="previewPhoto(this)">

                                        {{-- Label default: tampilkan nama file lama dari database (kalau ada) --}}
                                        <label class="custom-file-label" id="photo-label" for="photo">
                                            {{ $sejarahs->photo ?? 'Choose File' }}
                                        </label>
                                    </div>

                                    <div class="mt-3">
                                        <p>Preview:</p>
                                        <div
                                            style="width:auto; height:300px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center;">
                                            <img id="photo-preview"
                                                src="{{ !empty($sejarahs->photo) ? asset('storage/' . $sejarahs->photo) : '' }}"
                                                alt="Preview" style="max-width:100%; max-height:100%; object-fit:contain;">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" id="title" placeholder="Title"
                                        value="{{ old('title', $sejarahs->title) }}">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                        rows="4">{{ old('description', $sejarahs->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('sejarah.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
