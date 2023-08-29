@extends('user.layout.main')

@section('title')
    <title>BBSPGL | Service Details</title>
@endsection

@section('container')
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Gambar</th>
                    <th>Layanan </th>
                    <th>Deskripsi </th>
                    <th>Aksi </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($serviceDetails as $detail)
                    <tr class="active-row">
                        <td>{{ $loop->iteration }}</td>
                        <td> <img src="{{ asset('storage/images/' .$detail->image) }}" alt="{{ $detail->name }}"></td>
                        <td>{{ $detail->name }}</td>
                        <td>{{ $detail->description }}</td>
                        <td>
                            <a href="{{ route('show.orders', ['service_details_id' => $detail->id]) }}"
                                class="btn btn-warning" style="border-radius: 5px;">Sewa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
