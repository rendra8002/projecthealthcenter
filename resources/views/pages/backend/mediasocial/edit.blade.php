@extends('layouts.backend.app')
@section('content')
    <div class="card card-primary content-wrapper">
        <div class="card-header">
            <h3 class="card-title">Edit Media Social</h3>
        </div>

        <form action="{{ route('mediasocial.update', $mediasocial->id) }}" method="POST" enctype="multipart/form-data">
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

                    @if ($mediasocial->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $mediasocial->photo) }}" alt="photo" width="120"
                                class="img-thumbnail">
                        </div>
                    @endif
                </div>

                {{-- Name Account --}}
                <div class="form-group">
                    <label for="name_account">Name Account</label>
                    <input type="text" class="form-control" name="name_account" id="name_account"
                        value="{{ old('name_account', $mediasocial->name_account) }}" placeholder="Masukkan nama akun">
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

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('mediasocial.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection
