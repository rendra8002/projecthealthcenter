@extends('layouts.backend.app')
@section('content')
    <div class="card card-primary content-wrapper">
        <div class="card-header">
            <h3 class="card-title">Halaman Edit Hero/Dashboard</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">

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
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="button_text">Button Text</label>
                    <input type="text" class="form-control" name="button_text" id="button_text"
                        placeholder="Button Text">
                </div>
                <div class="form-group">
                    <label for="button_link">Button Link</label>
                    <input type="text" class="form-control" name="button_link" id="button_link"
                        placeholder="Button Link">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('hero.index') }}"><button type="button" class="btn btn-primary">back</button></a>
                </div>
        </form>
    @endsection
