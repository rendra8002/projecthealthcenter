@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Hero</h3>
                        </div>
                        <form action="{{ route('hero.update', $heroes->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="photo">File input</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose
                                            file</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        value="{{ old('title', $heroes->title) }}" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label for="subtitle">Subtitle</label>
                                    <input type="text" class="form-control" name="subtitle" id="subtitle"
                                        value="{{ old('subtitle', $heroes->header) }}" placeholder="Subtitle">
                                </div>

                                <div class="form-group">
                                    <label for="button_text">Button Text</label>
                                    <input type="text" class="form-control" name="button_text" id="button_text"
                                        value="{{ old('button_text', $heroes->button_text) }}" placeholder="Button Text">
                                </div>

                                <div class="form-group">
                                    <label for="button_link">Button Link</label>
                                    <input type="text" class="form-control" name="button_link" id="button_link"
                                        value="{{ old('button_link', $heroes->button_link) }}" placeholder="Button Link">
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('hero.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
