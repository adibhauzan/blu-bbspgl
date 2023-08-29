@extends('user.layout.main')

@section('title')
    <title>BBSPGL | Kapal Survei</title>
@endsection

@section('container')
    <section>
        <div class="image-container5">
            <img src="{{ asset('components/kapalsurvei.png') }}" alt="geomarine3" id="gambar-container5"
                class="img-fluid mx-auto d-block">
        </div>
    </section>

    <div class="layanankapalsurvei">
        <div>
            <p style="font-size: 45px; text-align: center; margin: 1em 0;"><strong>KAPAL SURVEI GEOMARIN III</strong></p>
            <div class="layanan-kapal-survei">
                <img src="{{ asset('components/layanankapalsurvei.png') }}" alt="layanankapalsurvei"
                    id="layanankapalsurvei-image">
            </div>
            <div class="column-container" style="margin: 2em 0">
                <div class="column-left" style="text-align:justify">
                    <p>Balai Besar Survei dan Pemetaan Geologi Kelautan (BBSPGL) merupakan satu-satunya instansi yang
                        bertugas melakukan survei dan pemetaaan di bidang geologi kelautan. Jika diartikan bahwa laut
                        merupakan wilayah yang dibatasi oleh garis pantai dan garis terluar ZEE, maka tugas BBSPGL bukan
                        hanya karena luas wilayah yang harus dipetakan melainkan juga bahwa letak sumber daya yang tidak
                        hanya berada di kolom air, tetapi juga hingga beberapa ribu meter di bawah dasar laut.</p>
                </div>
                <div class="column-right" style="text-align:justify">
                    <p>Kapal Survei Geomarin III merupakan multipurpose vessel yang dapat dimanfaatkan untuk pemetaan
                        hidrografi, oseanografi, geologi, maupun geofisika. Kapal dilengkapi dengan fasilitas DPS/DP-1
                        (Dynamic Positioning System), yaitu sistem manuver pergerakan relatif terhadap gerakan sensor bawah
                        laut saat pengoperasian Remotely Operated Vehicle (ROV), dan posisi diam absolut saat pengambilan
                        contoh dasar laut, pengukuran arus dan gelombang laut). Kapal ini mulai beroperasi sejak tahun 2009,
                        menggunakan sertifikasi ClassNK (Jepang) dan BKI, dengan waktu jelajah 30 hari. Kapal ini mengalami
                        perubahan back deck layout, kapasitas airgun dan sistem navigasi dalam mendukung 2D Seismic High
                        Resolution, serta peningkatan kemampuan pengambilan data geologi dan oseanografi.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .layanankapalsurvei {
            text-align: center;
            margin-top: 20px;
        }

        .layanan-kapal-survei img {
            display: block;
            margin: 0 auto;
        }

        .column-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            padding: 0 150px;
        }

        .column-left,
        .column-right {
            width: 50%;
        }

        .column-left {
            margin-right: 5%;
        }

        .column-right {
            margin-left: 5%;
        }

        @media screen and (max-width: 570px) and (max-height: 620px) {
            .layanan-kapal-survei img {
                display: none;
            }
        }

        @media screen and (max-width: 768px) {
            .column-container {
                flex-direction: column;
                padding: 0;
            }

            .column-left,
            .column-right {
                width: 100%;
                margin: 0;
            }
        }

        @media screen and (max-width: 992px) {
            .image-container5 {
                max-width: 80%;
                margin: 0 auto;
            }
        }
    </style>
@endsection
