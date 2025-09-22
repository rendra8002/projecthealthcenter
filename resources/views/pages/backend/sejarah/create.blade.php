@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Sejarah</h3>
                        </div>

                        <form action="{{ route('sejarah.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body" style="max-height:70vh; overflow-y:auto;">
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file mb-2">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="previewPhoto(this)">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                                    </div>

                                    <div class="mt-3">
                                        <p>Preview:</p>
                                        <div
                                            style="width:auto; height:300px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center;">
                                            <img id="photo-preview"
                                                src="{{ !empty($datasejarah->photo) ? asset('storage/' . $datasejarah->photo) : '' }}"
                                                alt="Preview" style="max-width:100%; max-height:100%; object-fit:contain;">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="4" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="card-footer d-flex">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('sejarah.index') }}" class="btn btn-secondary ml-2">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
