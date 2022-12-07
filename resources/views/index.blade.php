<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kemudi - Kursus Mobil #1 di Jakarta</title>

        <link rel="shortcut icon" href="{{ asset('assets/img/logo-icon.png') }}" type="image/x-icon">

        @include('include.css')
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Kemudi">
                </div>
                
                <div class="navigation">
                    <div class="navigation__action">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </header>

        <div class="menu-overlay"></div>
        <div class="menu-navigation">    
            <div class="menu-navigation__close">
                <img src="{{ asset('assets/img/icon-close.svg') }}" alt="">
            </div>
            <ul class="menu-navigation__list">
                <li class="list__item active">
                    <a href="javascript:void(0)" onclick="scrollToElm('section--about', this)">About Us</a>
                </li>
                <li class="list__item">
                    <a href="javascript:void(0)" onclick="scrollToElm('section--vehicles', this)">Vehicles</a>
                </li>
                <li class="list__item">
                    <a href="javascript:void(0)" onclick="scrollToElm('section--services', this)">Services</a>
                </li>
                <li class="list__item">
                    <a href="javascript:void(0)" onclick="scrollToElm('section--schedules', this)">Schedules</a>
                </li>
                <li class="list__item">
                    <a href="javascript:void(0)" onclick="scrollToElm('section--packages', this)">Packages</a>
                </li>
                <li class="list__item">
                    <a href="javascript:void(0)" onclick="scrollToElm('section--testimonials', this)">Testimonials</a>
                </li>
                <li class="list__item">
                    <a href="javascript:void(0)" onclick="scrollToElm('section--instructors', this)">Instructors</a>
                </li>
                <li class="list__item">
                    <a href="javascript:void(0)" onclick="scrollToElm('section--contact', this)">Contact Us</a>
                </li>
            </ul>

            <a href="tel:083816779933" title="Hubungi Saya" rel="noopener" target="_blank"  class="menu-navigation__btn">
                Talk to Us Now
            </a>
            
            <ul class="menu-navigation__about">
                <li>Kemudi</li>
                <li>Jakarta, Indonesia</li>
                <li>info@kemudi.co</li>
            </li>
        </div>
        
        <section class="hero">
            <img class="wave" src="{{ asset('assets/img/wave-color.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="caption">
                    <h1 class="caption__title">
                        Ingin Kursus Mengemudi?<span>Kemudi Solusinya</span>
                    </h1>

                    <p class="caption__subtitle">
                        Kami menawarkan jasa pelatihan yang khusus untuk belajar mobil dari nol sampai mahir dengan harga bersaing dan pelayanan maksimal.
                    </p>
                    
                    <a href="https://api.whatsapp.com/send/?phone=6283101322866&text=Halo Minmudi, Saya ingin tanya-tanya lebih lanjut terkait kursus mobilnya. :)" title="Hubungi Saya" rel="noopener" target="_blank" class="caption__btn">Mulai Belajar</a>
                </div>

                <div class="image">
                    <img src="{{ asset('assets/img/hero.svg') }}" alt="Kemudi - Hero">
                </div>
            </div>
        </section>

        <section class="section section--about">
            <img class="wave" src="{{ asset('assets/img/wave-white.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="image" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/about.png') }}" alt="">
                </div>
                <div class="detail">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="detail__title">Siapa Kami?</h1>
                        <div class="detail__txt">
                            <p>Kemudi adalah sebuah lembaga pendidikan kursus mengemudi yang berdiri sejak tahun 2020 dan berpusat di Jakarta. Meskipun baru 2 tahun berdiri, jumlah lulusan siswa dari Kemudi telah mencapai lebih dari 500 siswa pertahun.</p>
                            <p>Kami adalah Lembaga Pendidikan Kursus Mengemudi yang telah berhasil meningkatkan kemampuan SDM baik masyarakat umum, instansi pemerintahan maupun swasta melalui pendidikan dan pelatihan mengemudi yang tersedia.</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <div class="detail__list">
                            <div class="list__item">
                                <h1 class="title"><span>500</span>+</h1>
                                <p class="description">Lulusan</p>
                            </div>
                            <div class="list__item">
                                <h1 class="title"><span>10</span>+</h1>
                                <p class="description">Instruktur</p>
                            </div>
                            <div class="list__item">
                                <h1 class="title"><span>100</span>+</h1>
                                <p class="description">Penghargaan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--services">
            <img class="wave" src="{{ asset('assets/img/wave-color.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="head">
                    <h1 class="head__title" data-aos="fade-up" data-aos-duration="800">Pelayanan Kami</h1>
                    <h2 class="head__subtitle"data-aos="fade-up" data-aos-duration="1000">Pelayanan yang kami berikan dapat menjadi alasan mengapa harus memilih kami, sebagai tempat pelatihan kursus mengemudi.
                    </h2>
                </div>

                <div class="content">
                    <div class="list">
                        <div class="item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="item__icon">
                                <img src="{{ asset('assets/img/icon-trusted.svg') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__title">Terpercaya</h1>
                                <p class="detail__caption">Hingga saat ini Kemudi. sudah mengajarkan ribuan siswa kursus di Jakarta. Kami menjadi salah satu kursus mengemudi yang terpercaya.
                                </p>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-up" data-aos-duration="1200">
                            <div class="item__icon">
                                <img src="{{ asset('assets/img/icon-cheap.svg') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__title">Harga Relatif Murah</h1>
                                <p class="detail__caption">Mengajarkan kursus mengemudi dengan baik dan benar dengan biaya yang terjangkau dan murah adalah tujuan kami.
                                </p>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-up" data-aos-duration="1400">
                            <div class="item__icon">
                                <img src="{{ asset('assets/img/icon-good-service.svg') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__title">Pelayanan Terbaik</h1>
                                <p class="detail__caption">Staff dan Instruktur kami memiliki sertifikat kompetensi dibidangnya sehingga selalu bekerja dengan sepenuh hati.
                                </p>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-up" data-aos-duration="1600">
                            <div class="item__icon">
                                <img src="{{ asset('assets/img/icon-trusted.svg') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__title">Maintenance Rutin</h1>
                                <p class="detail__caption">Demi Mengutamakan keselamatan, Kami selalu menjaga kondisi mobil secara berkala agar tidak mengurangi kenyaman anda dalam belajar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--color section--packages">
            <img class="wave" src="{{ asset('assets/img/wave-white.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="head">
                    <h1 class="head__title" data-aos="fade-up" data-aos-duration="800">Paket Jasa</h1>
                    <h2 class="head__subtitle" data-aos="fade-up" data-aos-duration="1000">Beberapa paket jasa yang kami tawarkan dengan harga terjangkau untuk memberi keringanan kepada Anda.</h2>
                </div>

                <div class="content">
                    <div class="packages">
                        <div class="item" data-aos="fade-up" data-aos-duration="1000">
                            <h4 class="item__subtitle">Private</h4>
                            <h1 class="item__title">
                                <sup>Rp</sup>
                                450k
                            </h1>

                            <ul class="item__list">
                                <li>Buku Materi Mengemudi</li>
                                <li>10x Pertemuan / Praktek</li>
                                <li>Maks. 1 jam / ±20km</li>
                                <li>1x Tes Mengemudi</li>
                                <li>10% diskon untuk jam pertemuan tambahan</li>
                            </ul>
                        </div>
                        <div class="item" data-aos="fade-up" data-aos-duration="1500">
                            <h4 class="item__subtitle">VIP</h4>
                            <h1 class="item__title">
                                <sup>Rp</sup>
                                550k
                            </h1>

                            <ul class="item__list">
                                <li>Buku Materi Mengemudi</li>
                                <li>5x Pertemuan / Praktek</li>
                                <li>Maks. 2 jam / ±40km</li>
                                <li>2x Tes Mengemudi</li>
                                <li>15% diskon untuk jam pertemuan tambahan</li>
                            </ul>
                        </div>
                        <div class="item" data-aos="fade-up" data-aos-duration="2000">
                            <h4 class="item__subtitle">VVIP</h4>
                            <h1 class="item__title">
                                <sup>Rp</sup>
                                650k
                            </h1>

                            <ul class="item__list">
                                <li>Buku Materi Mengemudi</li>
                                <li>5x Pertemuan / Praktek</li>
                                <li>Maks. 2 jam / ±40km</li>
                                <li>3x Tes Mengemudi</li>
                                <li>20% diskon untuk jam pertemuan tambahan</li>
                                <li>Gratis Antar Jemput</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--instructors">
            <img class="wave" src="{{ asset('assets/img/wave-color.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="head">
                    <h1 class="head__title" data-aos="fade-up" data-aos-duration="800">Instruktur Kami</h1>
                    <h2 class="head__subtitle" data-aos="fade-up" data-aos-duration="1000">Instruktur yang kami punya sudah terlatih secara professional untuk memastikan kenyamanan dan keselamatan Anda.
                    </h2>
                </div>

                <div class="content">
                    <div class="list" data-aos="fade-up" data-aos-duration="1000">
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/ucok-baba.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Uco Baba</h1>
                                <p class="detail__skill">Manual & Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/udin-gejos.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Udin Gejos</h1>
                                <p class="detail__skill">Manual
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/siti-romlah.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Siti Romlah</h1>
                                <p class="detail__skill">Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/roheti-imas.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Roheti Imas</h1>
                                <p class="detail__skill">Manual & Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/jajang-maulana.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Jajang Maulana</h1>
                                <p class="detail__skill">Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/endang-sopian.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Endang Sopian</h1>
                                <p class="detail__skill">Manual & Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/alexa-sukarsih.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Alexa Sukarsih</h1>
                                <p class="detail__skill">Manual
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/ade-maemunah.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Ade Maemunah</h1>
                                <p class="detail__skill">Manual & Matic
                                </p>
                            </div>
                        </div>
                    </div>

                    <button class="more">
                        Lihat Lebih Banyak
                        <img src="{{ asset('assets/img/icon-angle-down.svg') }}" alt="">
                    </button>

                    <div class="list list-second" data-aos="fade-up" data-aos-duration="1000">
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/ucok-baba.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Uco Baba</h1>
                                <p class="detail__skill">Manual & Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/udin-gejos.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Udin Gejos</h1>
                                <p class="detail__skill">Manual
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/siti-romlah.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Siti Romlah</h1>
                                <p class="detail__skill">Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/roheti-imas.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Roheti Imas</h1>
                                <p class="detail__skill">Manual & Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/jajang-maulana.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Jajang Maulana</h1>
                                <p class="detail__skill">Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/endang-sopian.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Endang Sopian</h1>
                                <p class="detail__skill">Manual & Matic
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/alexa-sukarsih.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Alexa Sukarsih</h1>
                                <p class="detail__skill">Manual
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__img">
                                <img src="{{ asset('assets/img/ade-maemunah.png') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__name">Ade Maemunah</h1>
                                <p class="detail__skill">Manual & Matic
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--color section--vehicles">
            <img class="wave" src="{{ asset('assets/img/wave-white.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="head">
                    <h1 class="head__title" data-aos="fade-up" data-aos-duration="800">Kendaraan Kami</h1>
                    <h2 class="head__subtitle" data-aos="fade-up" data-aos-duration="1000">Beberapa kendaaran yang kami punya dengan di maintenance secara rutin untuk memastikan kenyamanan dan keselamatan Anda.
                    </h2>
                </div>
            </div>
            <!-- Slider main container -->
            <div class="swiper swiper-vehicles" data-aos="fade-up" data-aos-duration="1000">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/hr-v.png') }}">
                        <h1>Honda HR-V</h1>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/pajero-sport.png') }}">
                        <h1>Pajero Sport</h1>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/avanza.png') }}">
                        <h1>Toyota Avanza</h1>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/brio.png') }}">
                        <h1>Honda Brio</h1>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/ertiga.png') }}">
                        <h1>Suzuki Ertiga</h1>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/rush.png') }}">
                        <h1>Toyota Rush</h1>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/yaris.png') }}">
                        <h1>Toyota Yaris</h1>
                    </div>
                </div>
            </div>

        </section>

        <section class="section section--schedules">
            <img class="wave" src="{{ asset('assets/img/wave-color.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="head">
                    <h1 class="head__title" data-aos="fade-up" data-aos-duration="800">Jadwal Belajar</h1>
                    <h2 class="head__subtitle" data-aos="fade-up" data-aos-duration="1000">Jadwal Belajar yang kami punya sudah tersusun secara rapi untuk memudahkan Anda.
                    </h2>
                </div>

                <div class="content">
                    <div class="content__item" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="title">Senin - Jum'at</h1>
                        <h5 class="subtitle">09.00 - 19.00</h5>

                        <div class="instructor">
                            <div class="instructor__list">
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/ucok-baba.png') }}" alt="">
                                    <h1 class="item__name">Ucok Baba</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/udin-gejos.png') }}" alt="">
                                    <h1 class="item__name">Udin Gejos</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/siti-romlah.png') }}" alt="">
                                    <h1 class="item__name">Siti Romlah</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/roheti-imas.png') }}" alt="">
                                    <h1 class="item__name">Roheti Imas</h1>
                                </div>
                            </div>
                            <div class="instructor__list">
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/jajang-maulana.png') }}" alt="">
                                    <h1 class="item__name">Jajang Maulana</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/endang-sopian.png') }}" alt="">
                                    <h1 class="item__name">Endang Sopian</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/alexa-sukarsih.png') }}" alt="">
                                    <h1 class="item__name">Alexa Sukarsih</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/ade-maemunah.png') }}" alt="">
                                    <h1 class="item__name">Ade Maemunah</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content__item" data-aos="fade-up" data-aos-duration="1500">
                        <h1 class="title">Sabtu - Minggu</h1>
                        <h5 class="subtitle">10.00 - 22.00</h5>

                        <div class="instructor">
                            <div class="instructor__list">
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/ucok-baba.png') }}" alt="">
                                    <h1 class="item__name">Ucok Baba</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/udin-gejos.png') }}" alt="">
                                    <h1 class="item__name">Udin Gejos</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/siti-romlah.png') }}" alt="">
                                    <h1 class="item__name">Siti Romlah</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/roheti-imas.png') }}" alt="">
                                    <h1 class="item__name">Roheti Imas</h1>
                                </div>
                            </div>
                            <div class="instructor__list">
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/jajang-maulana.png') }}" alt="">
                                    <h1 class="item__name">Jajang Maulana</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/endang-sopian.png') }}" alt="">
                                    <h1 class="item__name">Endang Sopian</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/alexa-sukarsih.png') }}" alt="">
                                    <h1 class="item__name">Alexa Sukarsih</h1>
                                </div>
                                <div class="item">
                                    <img class="item__img" src="{{ asset('assets/img/ade-maemunah.png') }}" alt="">
                                    <h1 class="item__name">Ade Maemunah</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--color section--testimonials">
            <img class="wave" src="{{ asset('assets/img/wave-color-bold.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="head">
                    <h1 class="head__title" data-aos="fade-up" data-aos-duration="800">Kata Mereka</h1>
                    <h2 class="head__subtitle" data-aos="fade-up" data-aos-duration="1000">Pendapat mereka yang sudah mengikuti pelatihan menjadi bukti dari kami tentang pelayanan yang diberikan kepada anda nantinya.</h2>
                </div>
            </div>
            <!-- Slider main container -->
            <div class="swiper swiper-testimonials" data-aos="fade-up" data-aos-duration="1000">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="content">
                            <div class="content__txt">
                                <p>Kursus Mengemudi dengan legalitas dan perijinan lengkap. Instruktur sabar dan kompeten serta bersertifikat.</p>
                            </div>
                            <div class="content__description">
                                <div class="profile">
                                    <div class="profile__img">
                                        <img src="{{ asset('assets/img/ucok-baba.png') }}" alt="">
                                    </div>
                                    <div class="profile__detail">
                                        <h1 class="name">Jaenudin</h1>
                                        <p class="job">Polisi</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon-quote.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content">
                            <div class="content__txt">
                                <p>Pelayanan memuaskan, instruktur juga sabar dalam mendampingi, rekomen buat yang mau belajar.</p>
                            </div>
                            <div class="content__description">
                                <div class="profile">
                                    <div class="profile__img">
                                        <img src="{{ asset('assets/img/roheti-imas.png') }}" alt="">
                                    </div>
                                    <div class="profile__detail">
                                        <h1 class="name">Ina Suryani</h1>
                                        <p class="job">Ibu RUmah Tangga</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon-quote.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content">
                            <div class="content__txt">
                                <p>Kursus stir mobil disini sangat recommended sekali. Instrukturnya sangat profesional dalam mengajar.</p>
                            </div>
                            <div class="content__description">
                                <div class="profile">
                                    <div class="profile__img">
                                        <img src="{{ asset('assets/img/ade-maemunah.png') }}" alt="">
                                    </div>
                                    <div class="profile__detail">
                                        <h1 class="name">Rizka Jumiasih</h1>
                                        <p class="job">Polwan</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon-quote.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content">
                            <div class="content__txt">
                                <p>Kursus stir mobil disini sangat recommended sekali. Instrukturnya sangat profesional dalam mengajar.</p>
                            </div>
                            <div class="content__description">
                                <div class="profile">
                                    <div class="profile__img">
                                        <img src="{{ asset('assets/img/siti-romlah.png') }}" alt="">
                                    </div>
                                    <div class="profile__detail">
                                        <h1 class="name">Juminten</h1>
                                        <p class="job">Mahasiswi</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon-quote.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content">
                            <div class="content__txt">
                                <p>Kursus stir mobil terdepan dalam inovasi dan layanan. Pioneer sebagai lembaga pelatihan</p>
                            </div>
                            <div class="content__description">
                                <div class="profile">
                                    <div class="profile__img">
                                        <img src="{{ asset('assets/img/jajang-maulana.png') }}" alt="">
                                    </div>
                                    <div class="profile__detail">
                                        <h1 class="name">Juned</h1>
                                        <p class="job">Pengangguran</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon-quote.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section section--color section--contact">
            <div class="container">
                <div class="content-message">
                    <div class="maps" data-aos="fade-up" data-aos-duration="1000">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.723621824224!2d106.8438085!3d-6.1677523999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5b7ae603169%3A0x1c60abb44c969122!2sKemayoran%20Sub-District%20Office!5e0!3m2!1sen!2sid!4v1670418234274!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
    
                    <div class="contact" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="contact__title">Kontak Kami</h1>
                        <h5 class="contact__subtitle">Beritahu kami jika Anda memiliki pertanyaan, memberi komentar, atau mau informasi lebih lanjut.</h5>
    
                        <form action="" class="contact__form">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="" rows="5"></textarea>
                            </div>
    
                            <button>Submit</button>
                        </form>
                    </div>
                </div>

                <div class="content-socmed" data-aos="fade-up" data-aos-duration="1000">
                    <div class="item">
                        <div class="item__icon">
                            <img src="{{ asset('assets/img/icon-maps.svg') }}" alt="Kemudi - Maps">
                        </div>
                        <div class="item__info">
                            <h2 class="info__subtitle">Location</h2>
                            <h2 class="info__title">
                                Jl. Kepu Dalam VII No 91A
                                <span>Kemayoran, DKI Jakarta</span>
                            </h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item__icon">
                            <img src="{{ asset('assets/img/icon-email.svg') }}" alt="Kemudi - Email">
                        </div>
                        <div class="item__info">
                            <h2 class="info__subtitle">Email</h2>
                            <h2 class="info__title">
                                info@kemudi.co
                            </h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item__icon">
                            <img src="{{ asset('assets/img/icon-phone.svg') }}" alt="Kemudi - Phone">
                        </div>
                        <div class="item__info">
                            <h2 class="info__subtitle">Phone</h2>
                            <h2 class="info__title">
                                021 2345678
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--footer">
            <div class="container">
                <span>&copy; 2022 Kemudi. All Right Reserved</span>
            </div>
        </section>

        @include('include.js')
    </body>
</html>