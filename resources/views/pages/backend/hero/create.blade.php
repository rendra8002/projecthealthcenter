@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Halaman Tambah Data Hero</h3>
                </div>

                <!-- Form Start -->
                <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body" style="max-height:70vh; overflow-y:auto;">
                        <!-- Upload Foto -->
                        <div class="form-group">
                            <label for="photo">File input</label>
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
                                        src="{{ !empty($datahero->photo) ? asset('storage/' . $datahero->photo) : '' }}"
                                        alt="Preview" style="max-width:100%; max-height:100%; object-fit:contain;">
                                </div>
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                        </div>

                        <!-- Subtitle -->
                        <div class="form-group">
                            <label for="subtitle">Subtitle</label>
                            <input type="text" class="form-control" name="subtitle" id="subtitle"
                                placeholder="Subtitle">
                        </div>

                        <!-- Button Text -->
                        <div class="form-group">
                            <label for="button_text">Button Text</label>
                            <input type="text" class="form-control" name="button_text" id="button_text"
                                placeholder="Button Text">
                        </div>

                        <!-- Button Link -->
                        <div class="form-group">
                            <label for="button_link">Button Link</label>
                            <input type="text" class="form-control" name="button_link" id="button_link"
                                placeholder="Button Link">
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer d-flex">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('hero.index') }}" class="btn btn-secondary ml-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
