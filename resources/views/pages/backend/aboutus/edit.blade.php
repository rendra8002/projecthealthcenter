@extends('layouts.backend.app')
@section('content')
    <div class="card card-primary content-wrapper">
        <div class="card-header">
            <h3 class="card-title">Edit About</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form action="{{ route('aboutus.update', $aboutuses->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="photo">File input</label>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="photo"
                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                    </div>

                    @if ($aboutuses->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $aboutuses->photo) }}" alt="photo" width="120">
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Title</label>
                    <input type="text" class="form-control" name="description" id="description"
                        value="{{ old('title', $aboutuses->description) }}" placeholder="Description">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('aboutus.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection