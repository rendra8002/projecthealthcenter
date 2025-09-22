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

                            <div class="card-body" style="max-height:70vh; overflow-y:auto;">
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            id="photo"onchange="previewPhoto(this)">

                                        {{-- Label default: tampilkan nama file lama dari database (kalau ada) --}}
                                        <label class="custom-file-label" id="photo-label" for="photo">
                                            {{ $tenagakerjas->photo ?? 'Pilih file' }}
                                        </label>
                                    </div>

                                    <div class="mt-3">
                                        <p>Preview:</p>
                                        <div
                                            style="width:auto; height:300px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center;">
                                            <img id="photo-preview"
                                                src="{{ !empty($tenagakerjas->photo) ? asset('storage/' . $tenagakerjas->photo) : '' }}"
                                                alt="Preview" style="max-width:100%; max-height:100%; object-fit:contain;">
                                        </div>
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
