@extends('user.layout.main')

@section('title')
    <title>BBSPGL | Contact </title>
@endsection

@section('container')
    <div class="container-kontak">
        <div class="contact-info">
            <h1><strong> Bekerja Sama Dengan <br> Kami.</strong></h1>
            <h3>Kontak Kami</h3>
            <p>+62-022-6032020, +62-022-6032201</p>
            <h3>Email</h3>
            <p>bbspgl@esdm.go.id</p>
            <h3>Kantor Pusat</h3>
            <p>Jl. Dr. Djunjunan No.236 Pasteur, Bandung</p>
            <h3>Kantor Penunjang</h3>
            <p>Jl. Kalijaga No. 101 Cirebon - 45113</p>
        </div>
        <div class="map-container">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="size:50cm"; class="embed-responsive-item"
                    src="https://maps.google.com/maps?q=pusat penelitian dan pengembangan geologi kelautan&t=m&z=15&output=embed&iwloc=near"></iframe>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        footer {
            background-color: #ffffff;
        }

        .footer-left p{
          color: black
        }
    </style>
@endsection
