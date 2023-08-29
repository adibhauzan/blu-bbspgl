@extends('user.layout.main')


@section('title')
    <title>
        BBSPGL | Pesanan
    </title>
@endsection
@section('container')
    <div class="container_status">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Nama Layanan</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->serviceDetail->name }}</td>
                        <td>Rp {{ number_format($order->total_price) }}</td>
                        <td>{{ $order->Status->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
