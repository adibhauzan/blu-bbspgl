@extends('user.layout.main')

@section('title')
    <title>BBSPGL | Home</title>
@endsection

@section('container')
    <section>
        <div class="image-container1">
            <div class="overlay-image-container1">
                <h2>SURVEI &amp; PEMETAAN</h2>
                <a href="/view/about/sejarah.html" class="btn btn-yellow">TENTANG SURVEI DAN PEMETAAN</a>
            </div>
            <img src="../components/geomarine3.jpg" alt="geomarine3" id="gambar-container1">
        </div>
    </section>
    <section class="text-lg-start" style="margin-top: 10%; margin-bottom: 10%; margin-left: 0.5px;">
        <div class="container">
            <div class="row" style="margin-left: 5px;">
                <div class="col-md-6" style="margin-top: 50px;">
                    <img src="../components/kapal.jpg" class="geomarine3" alt="geomarine3">
                </div>
                <div class="col-md-6" style="margin-left: 5;">
                    <h3 style="margin-top: 5px;  margin-bottom: 0.5px; color: yellowgreen;">KAPAL SURVEI</h3>
                    <h2 style="font-size: 40px; color: rgb(43, 86, 213); margin-bottom: 5px;">GEOMARIN III</h2>
                    <p>Geomarin III merupakan&nbsp;<em>multipurpose</em>&nbsp;<em>vessel&nbsp;</em>yang dapat dimanfaatkan
                        untuk pemetaan hidrografi, oseanografi, geologi, maupun geofisika. Kapal dilengkapi dengan fasilitas
                        DPS/DP-1 (Dynamic Positioning System), yaitu sistem manuver pergerakan relatif terhadap gerakan
                        sensor bawah laut saat pengoperasian Remotely Operated Vehicle (ROV), dan posisi diam absolut saat
                        pengambilan contoh dasar laut, pengukuran arus dan gelombang laut). Kapal ini mulai beroperasi sejak
                        tahun 2009, menggunakan sertifikasi&nbsp;<em>ClassNK</em>&nbsp;(Jepang) dan BKI, dengan waktu
                        jelajah 30 hari. Kapal ini memiliki&nbsp;<em>back deck layout</em>, kapasitas airgun dan sistim
                        navigasi dalam mendukung&nbsp;<em>2D Seismic High Resolution</em>, serta peningkatan kemampuan
                        pengambilan data geologi dan oseanografi.</p>
                    <a href="/kapalsurvei"><button class="btn btn-warning"
                            style="border-radius: 5px; margin:1em 0;">KAPAL SURVEI</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="text-lg-start" style="margin-top: 10%; margin-bottom: 10%; margin-left: 0.5px;">
        <div class="container">
            <div class="row" style="margin-left: 5px;">
                <div class="col-md-6" style="margin-top: 50px;">
                    <img src="../components/peralatansurvei.jpg" class="img-fluid mb-3 ms-md-3" alt="peralatansurvei">
                </div>
                <div class="col-md-6">
                    <h3 style="margin-top: 5px; margin-bottom: 0.5px; color: yellowgreen;">PERALATAN SURVEI</h3>
                    <p>Peralatan survei geologi kelautan kami&nbsp; memungkinkan perolehan informasi geoteknik yang cepat
                        dan akurat yang kemudian dapat digunakan untuk membuat keputusan tentang tindakan terbaik dalam
                        proyek-proyek seperti membangun fondasi, menentukan kesesuaian lokasi, merancang fondasi, dan
                        menilai risiko.</p>
                    <a href="/peralatansurvei" class="btn btn-warning" style="border-radius: 5px; margin:1em 0;">Peralatan
                        Survei</a>
                </div>
            </div>
        </div>
    </section>
@endsection
