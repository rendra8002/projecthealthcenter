@extends('layouts.backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Media Sosial</h3>
                        </div>
                        <!-- /.card-header -->

                        <form action="{{ route('mediasocial.update', $mediasocial->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                {{-- Photo --}}
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="document.getElementById('photo-label').innerText = this.files[0].name">
                                        <label class="custom-file-label" id="photo-label" for="photo">Choose file</label>
                                    </div>
                                </div>

                                {{-- Name Account --}}
                                <div class="form-group">
                                    <label for="name_account">Name Account</label>
                                    <input type="text" class="form-control" name="name_account" id="name_account"
                                        value="{{ old('name_account', $mediasocial->name_account) }}"
                                        placeholder="Masukkan nama akun">
                                </div>

                                {{-- Link --}}
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="url" class="form-control" name="link" id="link"
                                        value="{{ old('link', $mediasocial->link) }}" placeholder="Masukkan link">
                                </div>

                                {{-- Name Mediasocial --}}
                                <div class="form-group">
                                    <label for="name_mediasocial">Name Media Social</label>
                                    <input type="text" class="form-control" name="name_mediasocial" id="name_mediasocial"
                                        value="{{ old('name_mediasocial', $mediasocial->name_mediasocial) }}"
                                        placeholder="Masukkan nama media social">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('mediasocial.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
