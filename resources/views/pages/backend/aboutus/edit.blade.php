@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title">Halaman Edit Data About</h3>
                        </div>

                        <form action="{{ route('aboutus.update', $aboutuses->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body" style="max-height:70vh; overflow-y:auto;">
                                {{-- File Input --}}
                                <div class="form-group">
                                    <label for="photo">File input</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo"
                                            onchange="previewPhoto(this)">

                                        {{-- Label default: tampilkan nama file lama dari database (kalau ada) --}}
                                        <label class="custom-file-label" id="photo-label" for="photo">
                                            {{ $aboutuses->photo ?? 'Pilih file' }}
                                        </label>
                                    </div>

                                    {{-- Gambar preview (awalnya gambar lama dari DB, nanti bisa berubah jadi file baru) --}}
                                    <div class="mt-3">
                                        <p>Preview:</p>
                                        <div
                                            style="width:auto; height:300px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center;">
                                            <img id="photo-preview"
                                                src="{{ !empty($aboutuses->photo) ? asset('storage/' . $aboutuses->photo) : '' }}"
                                                alt="Preview" style="max-width:100%; max-height:100%; object-fit:contain;">
                                        </div>
                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea type="text" class="form-control" name="description" id="description" value=""
                                        placeholder="Description">{{ old('description', $aboutuses->description) }}</textarea>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('aboutus.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
