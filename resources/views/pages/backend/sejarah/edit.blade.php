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

                            <div class="card-body" style="min-height: 400px;"> {{-- tinggi minimal biar ga goyang --}}
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file mb-2">
                                        <input type="file" name="photo"
                                            class="custom-file-input @error('photo') is-invalid @enderror" id="photo"
                                            onchange="previewImage(event)">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose
                                            file</label>
                                        @error('photo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mt-2">
                                        <img id="preview"
                                            src="{{ $sejarahs->photo ? asset('storage/' . $sejarahs->photo) : '#' }}"
                                            alt="Preview" class="img-thumbnail {{ $sejarahs->photo ? '' : 'd-none' }}"
                                            width="150">
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