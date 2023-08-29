@extends('user.layout.main')

@section('title')
<title>BBSPGL | Peralatan Survei</title>
@endsection


    @section('container')
        
    <div class="layar">
        <section>
            <div class="image-container5">
                <img src="{{ asset('components/layananperalatansurvei.png') }}" alt="geomarine3" id="gambar-container5"
                    class="img-fluid mx-auto d-block">
            </div>
        </section>
        <div id="canvas" style="margin-bottom: 50em">
            <div id="book-zoom">
                <div class="sample-docs">
               
                    <div class="hard"></div>
                    <div class="hard"></div>
                    <div class="hard p29"></div>
                    <div class="hard p30"></div>
                </div>
            </div>
        </div>

    </div>
    
    
 
    @include('user.partials.flipbook')
    @endsection


