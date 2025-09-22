@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Media Sosial</h3>
                        </div>

                        <form action="{{ route('mediasocial.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body" style="max-height:70vh; overflow-y:auto;">
                                {{-- Photo --}}
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file mb-2">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="previewPhoto(this)">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                                    </div>

                                    <div class="mt-3">
                                        <p>Preview:</p>
                                        <div
                                            style="width:auto; height:300px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center;">
                                            <img id="photo-preview"
                                                src="{{ !empty($dataMedia->photo) ? asset('storage/' . $dataMedia->photo) : '' }}"
                                                alt="Preview" style="max-width:100%; max-height:100%; object-fit:contain;">
                                        </div>
                                    </div>
                                </div>

                                {{-- Name Account --}}
                                <div class="form-group">
                                    <label for="name_account">Name Account</label>
                                    <input type="text" class="form-control" name="name_account" id="name_account"
                                        placeholder="Masukkan nama akun" value="{{ old('name_account') }}">
                                </div>

                                {{-- Link --}}
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="url" class="form-control" name="link" id="link"
                                        placeholder="Masukkan link" value="{{ old('link') }}">
                                </div>

                                {{-- Name Mediasocial --}}
                                <div class="form-group">
                                    <label for="name_mediasocial">Name Media Social</label>
                                    <input type="text" class="form-control" name="name_mediasocial" id="name_mediasocial"
                                        placeholder="Masukkan nama media social" value="{{ old('name_mediasocial') }}">
                                </div>
                            </div>

                            <div class="card-footer d-flex">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('mediasocial.index') }}" class="btn btn-secondary ml-2">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
