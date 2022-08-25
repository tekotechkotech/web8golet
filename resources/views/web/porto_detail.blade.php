@extends('web.template.main')

@section('main')
    
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Detail Portfolio</li>
                </ol>
                <h2>{{ $porto->nama_portofolio }}</h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                @if (!empty($porto->gambar1))
                                <div class="swiper-slide">
                                    <img src="{{ asset('') }}assets/gambar/{{ $porto->gambar1 }}" alt="">
                                </div>
                                @endif
                                
                                @if (!empty($porto->gambar2))
                                <div class="swiper-slide">
                                    <img src="{{ asset('') }}assets/gambar/{{ $porto->gambar2 }}" alt="">
                                </div>
                                @endif
                                
                                @if (!empty($porto->gambar3))
                                <div class="swiper-slide">
                                    <img src="{{ asset('') }}assets/gambar/{{ $porto->gambar3 }}" alt="">
                                </div>
                                @endif

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Informasi Projek</h3>
                            <ul>
                                <li><strong>Kategori</strong>: {{ $porto->nama_kategori }}</li>
                                <li><strong>Klien</strong>: {{ $porto->nama_pelanggan }}</li>
                                <li><strong>Tgl Pemesanan</strong>: {{ $porto->tanggal_pesan }}</li>
                                <li><strong>Link Projek</strong>: <a href="{{ $porto->link }}">{{ $porto->link }}</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Deskripsi Projek {{ $porto->nama_portofolio }}</h2>
                            <p>
                                {{$porto->deskripsi_portofolio}}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Details Section -->

    </main>
    <!-- End #main -->
    @endsection
