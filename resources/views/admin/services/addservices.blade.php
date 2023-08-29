@extends('admin.layouts.main')

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Layanan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Layanan</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Layanan">
                </div>
                <div class="form-group">
                    <label for="image">Gambar Layanan</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                            <label class="custom-file-label" for="image">Pilih Gambar</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
