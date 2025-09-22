@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title">Halaman Edit Data About</h3>
                        </div>

                        <form action="{{ route('aboutus.update', $aboutuses->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                {{-- File Input --}}
                                <div class="form-group">
                                    <label for="photo">File input</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose
                                            file</label>
                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea type="text" class="form-control" name="description" id="description" value="{{ old('description', $aboutuses->description) }}" placeholder="Description"></textarea>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('aboutus.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection