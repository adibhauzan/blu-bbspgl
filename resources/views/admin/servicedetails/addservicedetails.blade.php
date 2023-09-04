@extends('admin.layouts.main')



@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Layanan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.servicedetails.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Layanan</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan Nama Layanan">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Masukkan stock">
                </div>
                <div class="form-group">
                    <label for="services_id">Jenis Service</label>
                    <select class="form-control" id="services_id" name="services_id">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" rows="4" name="description" placeholder="Masukkan Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="price_per_day">Harga Per Hari</label>
                    <input type="number" class="form-control" id="price_per_day" name="price_per_day"
                        placeholder="Masukkan Harga Per Hari">
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
