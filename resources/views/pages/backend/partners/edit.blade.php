@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Partner</h3>
                            </div>
                            <!-- /.card-header -->

                            <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="photo">Photo</label>
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="photo"
                                                onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                                            <label class="custom-file-label" id="photo-label" for="photo">Choose
                                                file</label>
                                        </div>

                                        @if ($partner->photo)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $partner->photo) }}" alt="photo"
                                                    width="120">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ old('name', $partner->name) }}" placeholder="Enter partner name">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" rows="3"
                                            placeholder="Enter partner description">{{ old('description', $partner->description) }}</textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('partners.index') }}" class="btn btn-secondary">Back</a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
