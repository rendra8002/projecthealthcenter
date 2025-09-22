@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Halaman Tambah Data About</h3>
                        </div>
                        <form action="{{ route('aboutus.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body" style="max-height:70vh; overflow-y:auto;">
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input"
                                            id="photo"onchange="previewPhoto(this)">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                                    </div>

                                    <div class="mt-3">
                                        <p>Preview:</p>
                                        <div
                                            style="width:auto; height:300px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center;">
                                            <img id="photo-preview"
                                                src="{{ !empty($aboutuses->photo) ? asset('storage/' . $aboutuses->photo) : '' }}"
                                                alt="Preview" style="max-width:100%; max-height:100%; object-fit:contain;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="5" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('aboutus.index') }}" class="btn btn-secondary ml-2">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </div>
@endsection
