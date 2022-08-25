@extends('web.template.main')

@section('main')
    

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">PT Golet Digital Solusi</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Mitra Developer memberikan layanan konsultasi IT dalam lingkup development sistem informasi untuk kemajuan bisnis anda.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>PT Golet Digital Solusi</h3>
                            <h2>Mitra developer sistem digital berdomisili di Kabupaten Cilacap.</h2>
                            <p>
                                Semangat berkembang untuk menjadi lebih baik setiap hari. Tim yang solid menuju kesuksesan bersama.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="{{ asset('') }}/Company_Profile_PT_Golet_Digital_Solusi.pdf" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Company Profile</span>
                                    <i class="bi bi-arrow-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section>
        <!-- End About Section -->





        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">
                <!-- Feature Tabs -->
                <div class="row feture-tabs" data-aos="fade-up">
                    <div class="col-lg-6">
                        <h3>Profil Perusahaan</h3>

                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li>
                                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">KOMITMEN</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Legalitas</a>
                            </li>
                        </ul>
                        <!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mb-2">
                                    <!-- <i class="bi bi-check2"></i> -->
                                    {{-- <h4>PT Golet Digital Solusi atau disingkat GOLET, adalah perusahaan IT yang berdomisili di Kabupaten Cilacap.</h4> --}}
                                </div>
                                <p> Development berbagai jenis projek IT termasuk diantaranya landing page website, virtual tour 360°, sistem informasi, aplikasi dan semua kebutuhan IT untuk mendukung serta memudahkan usaha & bisnis anda. </p>

                                <p>Custom development yang menyesuaikan kebutuhan klien untuk menjadi solusi yang proporsional dan tepat guna.</p>
                                <p>Semangat berkembang untuk menjadi lebih baik setiap hari. Tim yang solid menuju kesuksesan bersama.</p>

                                <!-- <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                </div> -->

                            </div>
                            <!-- End Tab 1 Content -->
                            <style>
                                .jus{
                                    text-align: justify;
                                }
                            </style>
                            <div class="tab-pane fade show" id="tab2">
                                <div class="row jus">
                                    <div class="col-3 col-md-4 col-sm-12">
                                        <h4>Nama Perusahaan</h4>
                                        <p>Golet Digital Solusi</p>
                                    </div>
                                    {{-- <div class="col">
                                        <h4>Bentuk Perusahaan</h4>
                                        <p>PT. (Perseroan Terbatas)
                                        </p>
                                    </div> --}}
                                    <div class="col-3 col-md-4 col-sm-12">
                                        <h4>Bidang Usaha</h4>
                                        <p>Penyedia Jasa Konsultasi dan Pengembangan IT</p>
                                    </div>
                                    <!-- <div class="col">
                                        <h4>Alamat Perusahaan</h4>
                                        <p>Jalan Albiso No. 36B RT 05 RW 06 Tritih Kulon Cilacap Utara Cilacap Jawa Tengah</p>
                                    </div> -->
                                    <div class="col-3 col-md-4 col-sm-12">
                                        <h4>NIB</h4>
                                        <p>0306220046979</p>
                                    </div>
                                    <div class="col-3 col-md-4 col-sm-12">
                                        <h4>NPWP</h4>
                                        <p>63.940.427.6-522.000</p>
                                    </div>
                                    <div class="col-3 col-md-4 col-sm-12">
                                        <h4>Akta Pendirian</h4>
                                        <p>Nomor 38, Tanggal 28 Maret 2022 (Notaris Tri Wahyuni Kristianti, S. H.)
                                        </p>
                                    </div>
                                    <div class="col-3 col-md-4 col-sm-12">
                                        <h4>Pengesahan Kemenhumham</h4>
                                        <p>NOMOR AHU-0023563.AH.01.01.TAHUN 202202 April 2022 </p>
                                    </div>

                                </div>
                                <!-- End Tab 2 Content -->
                                <!-- <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                                </div>
                                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                </div>
                                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p> -->
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <img src="assets/img/features-2.png" class="img-fluid" alt="">
                    </div>

                </div>
                <!-- End Feature Tabs -->

                <!-- Feature Icons -->
                <div class="row feature-icons" data-aos="fade-up">
                    <h3>Bekerja Maksimal Pada Setiap Langkah</h3>

                    <div class="row">

                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                        </div>

                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="ri-line-chart-line"></i>
                                    <div>
                                        <h4>Analisa</h4>
                                        <p>Berpikir kritis menganalisa permasalahan yang ada sebagai dasar pengembangan projek IT</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="ri-stack-line"></i>
                                    <div>
                                        <h4>Ide Kreatif</h4>
                                        <p>Menemukan cara untuk mengatasi permasalahan & kebutuhan yang ada dengan ide-ide kreatif</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="ri-brush-4-line"></i>
                                    <div>
                                        <h4>Pelayanan</h4>
                                        <p>Mengutamakan kepuasan client dengan memberikan pelayanan yang memuaskan</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="ri-magic-line"></i>
                                    <div>
                                        <h4>Komunikasi</h4>
                                        <p>Menjaga komunikasi dengan client agar hasil yang dikerjakan sesuai dengan ekspetasi client</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="ri-command-line"></i>
                                    <div>
                                        <h4>Development</h4>
                                        <p>Menggunakan sumberdaya dan Kerjasama tim terbaik untuk menciptakan sistem & solusi IT yang memudahkan</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <i class="ri-radar-line"></i>
                                    <div>
                                        <h4>Implementasi</h4>
                                        <p>Dukungan serta bimbingan penuh untuk merealisasikan dan menerapkan hasil development projek IT</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <!-- End Feature Icons -->

            </div>

        </section>
        <!-- End Features Section -->
        <!-- ======= Values Section ======= -->
        <section id="services" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>SERVICES</h2>
                    <p>Pelayanan Kami</p>
                </header>

                <div class="row">

                        @php
                            
                        @endphp
                    @foreach ($cat as $cat)
                    @php
                        $no=$loop->iteration
                    @endphp
                             
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="{{ $no }}00">
                        <div class="box">
                            <img src="{{ asset('') }}assets/gambar/{{ $cat->img }}" class="img-fluid" alt="">
                            <h3>{{ $cat->nama_kategori }}</h3>
                            <p>{{ $cat->deskripsi_kategori }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </section>
        <!-- End Values Section -->






        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Portfolio</h2>
                    <p>Hasil Kerja Kami</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($cate as $cats)
                            <li data-filter=".filter-{{ $cats->id }}">{{ $cats->nama_kategori }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($porto as $porto)
                        
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $porto->id_kat }}">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('') }}assets/gambar/{{ $porto->gambar1 }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $porto->nama_portofolio }}</h4>
                                <p>{{ $porto->nama_kategori }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('') }}assets/gambar/{{ $porto->gambar1 }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="={{ $porto->slug }}" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Portfolio Section -->



        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Team Kami</p>
                </header>

                <div class="row gy-4">

                    @foreach($team as $team)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('') }}assets/gambar/{{ $team->img }}" class="img-fluid" alt="">
                                <div class="social">
                                    @if(!empty($team->twit))
                                    <a href="{{ $team->twit }}"><i class="bi bi-twitter"></i></a>
                                    @endif
                                    @if(!empty($team->fb))
                                    <a href="{{ $team->fb }}"><i class="bi bi-facebook"></i></a>
                                    @endif
                                    @if(!empty($team->ig))
                                    <a href="{{ $team->ig }}"><i class="bi bi-instagram"></i></a>
                                    @endif
                                    @if(!empty($team->linkdin))
                                    <a href="{{ $team->linkdin }}"><i class="bi bi-linkedin"></i></a>
                                    @endif
                                    {{-- <a href=""><i class="bi bi-facebook"></i></a> --}}
                                    {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                                    {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $team->nama }}</h4>
                                <span>{{ $team->jabatan }}</span>
                                <p>{{ $team->tulisan }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Surya Aji Suyatno</h4>
                                <span>Front End Developer</span>
                                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ilham Adi Pramono</h4>
                                <span>Fullstack Developer</span>
                                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Raffi Riaudin</h4>
                                <span>Back End Developer</span>
                                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Team Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>klien</h2>
                    <p>Klien Kami</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($klien as $klien )
                        <div class="swiper-slide"><img src="{{ asset('') }}assets/gambar/{{ $klien->gambar }}" class="img-fluid" alt=""></div>
                        @endforeach

                        {{-- <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div> --}}
                        {{-- <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div> --}}
                        {{-- <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div> --}}
                        {{-- <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div> --}}
                        {{-- <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div> --}}
                        {{-- <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div> --}}
                        {{-- <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div> --}}
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>
        <!-- End Clients Section -->





    </main>
    <!-- End #main -->

@endsection
