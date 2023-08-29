@extends('user.layout.main')

@section('title')
    <title>BBSPGL | Services</title>
@endsection

@section('container')
<div class="flex-container mt-5 mb-5">
    @foreach ($servicesList as $service)
        <div class="flex-item-gambar mr-5">
            <a href="{{ route('service-details', ['service_id' => $service->id]) }}">
                <img src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->name }}">
            </a>
        </div>
    @endforeach
</div>



@endsection
