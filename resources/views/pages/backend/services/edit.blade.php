@extends('layouts.backend.app')
@section('content')
    <div class="card card-primary content-wrapper">
        <div class="card-header">
            <h3 class="card-title">Edit Service</h3>
        </div>
        <!-- form start -->
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="photo"
                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                    </div>

                    @if ($service->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $service->photo) }}" alt="photo" width="120" class="img-thumbnail">
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title"
                        value="{{ old('title', $service->title) }}" placeholder="Enter title">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"
                        placeholder="Enter description">{{ old('description', $service->description) }}</textarea>
                </div>
            </div>

            <!-- footer -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection