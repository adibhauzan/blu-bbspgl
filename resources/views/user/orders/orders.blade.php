@extends('user.layout.main')

@section('title')
    <title>BBSPGL | Orders</title>
@endsection

@section('container')
    <div class="orders-container">
        <div class="orders-content">
            <div class="orders-image">
                <img src="{{ asset('storage/images/'. $orders->image) }}
                "
                    alt="">
            </div>
            <div class="orders-description">
                {{ $orders->description }}
            </div>
        </div>

        <form action="{{ route('order.store', ['service_details_id' => $orders->id]) }}" method="post"
            style="background-color: #ffc64b; padding:40px; border-radius:20px;  box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
            -webkit-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
            -moz-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);">
            @csrf
            <h1 style="text-align: center; margin-bottom: 1em; font-size: 30px; font-weight:bold;">Melakukan Order</h1>
            <div class="form-group">
                <label for="started_at" style="font-weight:bold">Tanggal Mulai</label>
                <input type="text" id="started_at" name="started_at" class="form-control datepicker">
            </div>
            <div class="form-group">
                <label for="ended_at" style="font-weight:bold">Tanggal Selesai</label>
                <input type="text" id="ended_at" name="ended_at" class="form-control datepicker">
            </div>

            <div class="form-group">
                <label style="font-weight:bold;">Harga Peminjaman</label>
                <input type="number" disabled class="form-control" name="total_price" id="total_price"
                    style="border-radius:5px;" placeholder="Kalkulasi Harga">
            </div>

            <div class="form-group">
                <label for="ended_at" style="font-weight:bold">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat">
            </div>
            <button type="submit" class="orders-btn btn-warning">Orders</button>
        </form>
    </div>


    @include('user.partials.datepicker')
@endsection