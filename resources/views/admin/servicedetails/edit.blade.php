@extends('admin.layouts.main')

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Service Details</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('updateservicedetail', ['id' => $servicedetail->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ $servicedetail->name }}" placeholder="Service Detail Name">
                </div>
                <div class="form-group">
                    <label for="services_id">Jenis Service</label>
                    <select class="form-control" id="service_id" name="services_id">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}" {{ $service->id === $servicedetail->services_id ? 'selected' : '' }}>
                                {{ $service->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Gambar Layanan</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <label class="custom-file-label" for="image"></label>
                            <input type="file" class="custom-file-input" id="image"  name="image" accept="image/*">
                        </div>
                    </div>
                    <img id="image-preview" src=""  style="max-width: 100%; max-height: 200px; margin-top:10px;">  
                </div>
                <div class="form-group">
                    <label for="price_per_day">Harga Per Hari</label>
                    <input type="text" class="form-control" id="price_per_day" name="price_per_day"
                        value="{{ $servicedetail->price_per_day }}" placeholder="Harga Per Hari">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" rows="4" name="description"
                        placeholder="Enter Description">{{ $servicedetail->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-10">Save</button>
            </form>
        </div>
    </div>

    <script>
        // Dapatkan elemen input file dan pratinjau gambar
        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');

        // Tambahkan event listener ke input file
        imageInput.addEventListener('change', function() {
            // Dapatkan file yang dipilih dari input
            const selectedFile = imageInput.files[0];

            if (selectedFile) {
                // Buat FileReader untuk membaca file yang dipilih
                const reader = new FileReader();

                // Atur event onload pada FileReader
                reader.onload = function(event) {
                    // Perbarui pratinjau gambar dengan gambar yang dipilih
                    imagePreview.src = event.target.result;
                }

                // Baca file yang dipilih sebagai data URL
                reader.readAsDataURL(selectedFile);
            } else {
                // Bersihkan pratinjau gambar jika tidak ada file yang dipilih
                imagePreview.src = '';
            }
        });
    </script>
@endsection
