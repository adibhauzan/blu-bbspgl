@extends('admin.layouts.main')

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Pesanan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('updateorder', ['id' => $order->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="penyewa">Penyewa</label>
                    <input type="text" disabled class="form-control" id="penyewa" name="penyewa"
                        value="{{ $order->user->name }}" placeholder="Nama Penyewa">
                </div>
                <div class="form-group">
                    <label for="started_at">Mulai</label>
                    <input type="text" disabled class="form-control" id="started_at" name="started_at"
                        value="{{ $order->started_at }}" placeholder="Tanggal Mulai">
                </div>
                <div class="form-group">
                    <label for="ended_at">Selesai</label>
                    <input type="text" disabled class="form-control" id="ended_at" name="ended_at"
                        value="{{ $order->ended_at }}" placeholder="Tanggal Selesai">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" disabled class="form-control" id="alamat" name="alamat"
                        value="{{ $order->alamat }}" placeholder="Tanggal Mulai">
                </div>
                <div class="form-group">
                    <label for="bukti_pembayaran" style="margin-right: 20px">Bukti Pembayaran</label>
                    <img src="{{ asset('storage/images/' . $order->bukti_pembayaran) }}" alt="Bukti Pembayaran">
                </div>

                <div class="form-group">
                    <label for="services_id">Jenis Service</label>
                    <select class="form-control" id="status_id" name="status_id">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}" {{ $status->id === $order->status_id ? 'selected' : '' }}>
                                {{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-10">Simpan</button>
            </form>
        </div>
    </div>
@endsection
