@extends('user.layout.main')

@section('title')
    <title>BBSPGL | Kegiatan</title>
@endsection

@section('container')
    <section>
        <div class="image-container4">

            <img src="{{ asset('components/kegiatan.png') }}" alt="geomarine3" id="gambar-container4">
        </div>
    </section>

    <div class="kegiatan">
        
        <div>
            <p class="card-header" style="font-weight: 400;   background-color: #ff8432;
            border-radius: 6px; padding: 10px; color:#fff; text-align:center; margin: 1em 0;  box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
    -webkit-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
    -moz-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
}"><strong>SURVEI GEOLOGI KELAUTAN</strong></p>
            <ul>
                <li><strong>Survei geologi kelautan menjadi sangat penting </strong>karena sebagian besar proses-proses
                    geologi berada di laut, seperti: bukti-bukti lempeng tektonik (pemekaran lantai samudera, penunjaman dan
                    penumbukan antar lempeng).</li>
                <li><strong>Di Indonesia, survei geologi kelautan sangat penting dilakukan </strong>karena Wilayah darat
                    (1,9 juta km<sup>2</sup> ) Indonesia sesungguhnya hanya sepertiga luas dari keseluruhan wilayah
                    Indonesia, sehingga sangat mungkin sebagian sumber daya migas dan mineral akan lebih banyak berada di
                    laut (6,2 juta km<sup>2</sup>)</li>
                <li><strong>Salah satu agenda Pemerintah adalah mendorong percepatan pembangunan ekonomi nasional berbasis
                        maritim dengan memanfaatkan sumber daya kelautan</strong></li>
                <li>Survei dan inventarisasi sumber daya maritim secara mandiri harus dapat dilakukan oleh Indonesia</li>
                <li>Kebutuhan akan peningkatan kualitas data dasar Geologi, Geofisika dan Geokimia meningkatkan minat
                    investasi di bidang hulu migas</li>
                <li><strong>Kegiatan Survei Geologi Kelautan:</strong></li>
                <li>Survei mitigasi bencana geologi kelautan, tsunami, penurunan tanah, abrasi, akrasi;</li>
                <li>Survei potensi sumber daya mineral pantai, laut dan pulau kecil;</li>
                <li>Survei mineral hidrotermal dasar laut;</li>
                <li>Survei potensi mineral plaser, timah, pasir laut dan material agregat dasar laut;</li>
                <li>Survei mineral berat pembawa unsur tanah jarang kelautan;</li>
                <li>Survei mineral strategis di perairan dalam dan luar teritorial;</li>
                <li>Survei eksplorasi minyak dan gas <em>offshore;</em></li>
                <li>Survei geologi dan geofisika <em>offshore serta seabed clearance</em>;</li>
                <li>Survei potensi energi baru terbarukan kelautan;</li>
                <li>Survei Infrastruktur dan lingkungan geologi wilayah pesisir &amp; laut</li>
                <li>Survei Geowisata dan geopark kelautan.</li>
            </ul>
            <p class="card-header"  style="font-weight: 400;   background-color: #ff8432;
            border-radius: 6px; padding: 10px; color:#fff; text-align:center; margin: 1em 0;  box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
    -webkit-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
    -moz-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
}"><strong>PEMETAAN GEOLOGI KELAUTAN</strong></p>
            <ul>
                <li>Pemetaan geologi kelautan secara sistematik untuk memperoleh indikasi keterdapatan sumber daya geologi
                    kelautan di seluruh wilayah perairan Indonesia</li>
                <li>Inventarisasi data geologi dan geofisika kelautan wilayah Indonesia (batimetri, sebaran sedimen
                    permukaan dasar laut, ketebalan sedimen Resen, anomali magnet total, gaya berat, dan geologi bawah
                    permukaan)</li>
            </ul>
            <ul>
                <p class="card-header"  style="font-weight: 400;   background-color: #ff8432;
                border-radius: 6px; padding: 10px; color:#fff; text-align:center; margin: 1em 0;  box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
        -webkit-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
        -moz-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
    }"><strong>2 jenis Pemetaan Geologi Kelautan</strong></p>
                <li><strong>PEMETAAN SISTEMATIS: </strong></li>
            </ul>
            <p>Pemetaan geologi kelautan untuk evaluasi potensi ESDM, kebencanaan, keteknikan, lingkungan dankewilayahan
                (Pantai, ZEE dan LKI)</p>
            <ul>
                <li><strong>PEMETAAN TEMATIK: </strong></li>
            </ul>
            <p" >Pemetaan energi dan sumber daya mineral, kebencanaan, keteknikan, lingkungan &amp; kewilayahan (Pantai, ZEE
                &amp; LKI)</p>
                <p class="card-header"  style="font-weight: 400;   background-color: #ff8432;
                border-radius: 6px; padding: 10px; color:#fff; text-align:center; margin: 1em 0;  box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
        -webkit-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
        -moz-box-shadow: -1px 3px 23px -3px rgba(109, 109, 109, 0.75);
    }"><strong>Kegiatan Pemetaan Geologi Kelautan</strong></p>
                <ul class="function-list">
                    <li>Pemetaan geologi dan geofisika kelautan sistematik</li>
                    <li>Pemetaan permukaan dasar laut;</li>
                    <li>Pemetaan toponimi geologi bawah laut;</li>
                    <li>Pemetaan karakterisasi gunung api dan endapan hidrotermal bawah laut;</li>
                    <li>Pemetaan tipologi dan model mineralisasi granitoid lepas pantai;</li>
                    <li>Pemetaan lembah sungai purba dasar laut;</li>
                    <li>Pemetaan sedimen penutup dasar laut;</li>
                    <li>Pemetaan untuk mendukung kebijakan satu peta geologi kelautan (<em>one map policy).</em></li>
                </ul>
                <p><img decoding="async" loading="lazy" class="size-large wp-image-1951 aligncenter" style="margin: 1em 0"
                        src="https://mgi.esdm.go.id/wp-content/uploads/2022/06/Screenshot-2023-05-09-at-10.21.05-1024x436.png"
                        alt="" width="800" height="341"></p>
        </div>
    </div>
@endsection
