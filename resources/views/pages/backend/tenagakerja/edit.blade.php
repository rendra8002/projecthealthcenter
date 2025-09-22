@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('tenagakerja.update', $tenagakerjas->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body" style="min-height: 400px;">
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Nama Dokter</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ old('name', $tenagakerjas->name) }}" placeholder="Nama Dokter">
                                </div>

                                <div class="form-group">
                                    <label for="speciality">Spesialisasi</label>
                                    <input type="text" class="form-control" name="speciality" id="speciality"
                                        value="{{ old('speciality', $tenagakerjas->speciality) }}"
                                        placeholder="Spesialisasi">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Nomor Telepon</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        value="{{ old('phone', $tenagakerjas->phone) }}" placeholder="Nomor Telepon">
                                </div>

                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ old('email', $tenagakerjas->email) }}" placeholder="Alamat Email">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('tenagakerja.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
