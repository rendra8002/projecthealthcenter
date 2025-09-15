@extends('layouts.backend.app')
@section('content')
    <div class="card card-primary content-wrapper">
        <div class="card-header">
            <h3 class="card-title">Halaman Edit About</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('aboutus.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="photo">File input</label>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="photo"
                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="description">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('hero.index') }}"><button type="button" class="btn btn-primary">back</button></a>
                </div>
        </form>
    @endsection
