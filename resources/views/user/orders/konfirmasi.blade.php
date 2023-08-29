@extends('user.layout.main')

@section('container')
    <main class="main-konfirmasi">
        <article class="article-konfirmasi">
            <h2>Konfirmasi Pesanan</h2>
            <p>Nama : {{ $order->user->name }}</p>
            <p>Tanggal Mulai: {{ date('Y-m-d', strtotime($order->started_at)) }}</p>
            <p>Tanggal Selesai: {{ date('Y-m-d', strtotime($order->ended_at)) }}</p>
            <p>Alamat: {{ $order->alamat }}</p>
            <p>Total Harga: Rp.{{ number_format($order->total_price) }}</p>

            <form action="{{ route('confirmation.store', ['order_id' => $order->id]) }}" method="post" enctype="multipart/form-data">
                @csrf

                <p style="margin-top: 2em; margin-bottom: 1em">Bayar ke Bank adib : 123-123-123-123</p>

                <div class="form-group">
                    <label for="bukti_pembayaran">Unggah Bukti Pembayaran</label>
                    <input type="file" class="form-control-file" id="bukti_pembayaran" name="bukti_pembayaran">
                </div>

                <div class="form-group">
                    <img id="image-preview" style="display: none; max-width: 200px; max-height: 200px;">
                </div>

                <button type="submit" class="btn btn-primary" style="font-display: fixed">Kirim Bukti Pembayaran</button>
            </form>
        </article>
    </main>

    <script>
        document.getElementById("bukti_pembayaran").addEventListener("change", function() {
            const fileName = this.files[0].name;
            const label = document.querySelector("label[for='bukti_pembayaran']");
            label.textContent = fileName;

            const preview = document.getElementById("image-preview");
            preview.style.display = "block";
            preview.src = URL.createObjectURL(this.files[0]);
        });
    </script>
@endsection
