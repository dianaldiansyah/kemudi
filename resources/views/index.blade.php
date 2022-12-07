<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kemudi.</title>

        <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/apps.css') }}">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Kemudi">
                </div>
    
                <div class="navigation">    
                    <ul class="navigation-list">
                        <li class="navigation-item active">
                            <a href="">About Us</a>
                        </li>
                        <li class="navigation-item">
                            <a href="">Our Services</a>
                        </li>
                        <li class="navigation-item">
                            <a href="">Course & Pricing</a>
                        </li>
                        <li class="navigation-item">
                            <a href="">Our Instructors</a>
                        </li>
                        <li class="navigation-item">
                            <a href="">Our Vehicles</a>
                        </li>
                        <li class="navigation-item">
                            <a href="">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <section class="hero">
            <img class="wave" src="{{ asset('assets/img/wave-color.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="caption">
                    <h1 class="caption__title">Ingin belajar mengemudi dengan instructor yang professional? <span>Hanya di Kemudi.</span></h1>

                    <p class="caption__subtitle">
                        Bagi anda yang ingin belajar mengemudi mobil, kami telah mempunyai pengalaman selama 48 tahun untuk kursus mengemudi.
                    </p>

                    <button class="caption__btn">Hubungi Kami</button>
                </div>

                <div class="image">
                    <img src="{{ asset('assets/img/hero.svg') }}" alt="Kemudi - Hero">
                </div>
            </div>
        </section>

        <section class="about">
            <img class="wave" src="{{ asset('assets/img/wave-white.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <h1 class="title">About Us</h1>

                <div class="description">
                    <p>Kemudi adalah sebuah lembaga pendidikan kursus mengemudi yang berdiri sejak tahun 2020 dan berpusat di Jakarta. </p>
                    <p>Selain berpengalaman lebih dari 48 tahun dengan jumlah lulusan siswa sebanyak lebih dari 800 siswa pertahun yang telah mampu mengemudi dengan baik dan benar di seluruh wilayah Jakarta</p>    
                    <p>Kami adalah Lembaga Pendidikan Kursus Mengemudi yang telah berhasil meningkatkan kemampuan SDM baik masyarakat umum, instansi pemerintahan maupun swasta melalui pendidikan dan pelatihan mengemudi yang tersedia.</p>
                </div>
            </div>
        </section>

        <section class="section section--services">
            <img class="wave" src="{{ asset('assets/img/wave-color.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="head">
                    <h1 class="head__title">Pelayanan Kami</h1>
                    <h2 class="head__subtitle">Pelayanan yang kami berikan dapat menjadi alasan mengapa harus memilih kami, sebagai tempat pelatihan kursus mengemudi.
                    </h2>
                </div>

                <div class="content">
                    <div class="list">
                        <div class="item">
                            <div class="item__icon">
                                <img src="{{ asset('assets/img/icon-trusted.svg') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__title">Terpercaya</h1>
                                <p class="detail__caption">Hingga saat ini Kemudi. sudah mengajarkan ribuan siswa kursus di Jakarta. Kami menjadi salah satu kursus mengemudi yang terpercaya.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__icon">
                                <img src="{{ asset('assets/img/icon-cheap.svg') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__title">Harga Relatif Murah</h1>
                                <p class="detail__caption">Mengajarkan kursus mengemudi dengan baik dan benar dengan biaya yang terjangkau dan murah adalah tujuan kami.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__icon">
                                <img src="{{ asset('assets/img/icon-good-service.svg') }}" alt="">
                            </div>
                            <div class="item__detail">
                                <h1 class="detail__title">Pelayanan Terbaik</h1>
                                <p class="detail__caption">Staff dan Instruktur kami memiliki sertifikat kompetensi dibidangnya sehingga selalu bekerja dengan sepenuh hati.
                                </p>
                            </div>
                        </div>
                        <div class="item">
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
                    <h1 class="head__title">Paket Jasa Kami</h1>
                    <h2 class="head__subtitle">Beberapa paket jasa yang kami tawarkan dengan harga terjangkau untuk memberi keringanan kepada Anda.
                    </h2>
                </div>

                <div class="content">
                    <div class="packages">
                        <div class="item">
                            <h4 class="item__subtitle">Private</h4>
                            <h1 class="item__title">
                                <sup>Rp</sup>
                                450k
                            </h1>

                            <ul class="item__list">
                                <li>Administrasi 20rb</li>
                                <li>10x Pertemuan</li>
                                <li>max 1 jam / ±20km</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h4 class="item__subtitle">VIP</h4>
                            <h1 class="item__title">
                                <sup>Rp</sup>
                                550k
                            </h1>

                            <ul class="item__list">
                                <li>Administrasi 20rb</li>
                                <li>5x Pertemuan</li>
                                <li>max 2 jam / ±40km</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h4 class="item__subtitle">VVIP</h4>
                            <h1 class="item__title">
                                <sup>Rp</sup>
                                650k
                            </h1>

                            <ul class="item__list">
                                <li>Administrasi 20rb</li>
                                <li>5x Pertemuan</li>
                                <li>max 2 jam / ±40km</li>
                                <li>Antar-Jemput (Max 10km PP)</li>
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
                    <h1 class="head__title">Instruktur Kami</h1>
                    <h2 class="head__subtitle">Instruktur yang kami punya sudah terlatih secara professional untuk memastikan kenyamanan dan keselamatan Anda.
                    </h2>
                </div>

                <div class="content">
                    <div class="list">
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
                    <h1 class="head__title">Kendaraan Kami</h1>
                    <h2 class="head__subtitle">Beberapa kendaaran yang kami punya dengan di maintenance secara rutin untuk memastikan kenyamanan dan keselamatan Anda.
                    </h2>
                </div>
            </div>
            <!-- Slider main container -->
            <div class="swiper">
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
            <img class="wave" src="{{ asset('assets/img/wave-color-bold.svg') }}" alt="Kemudi - Wave">

            <div class="container">
                <div class="head">
                    <h1 class="head__title">Jadwal Belajar</h1>
                    <h2 class="head__subtitle">Jadwal Belajar yang kami punya sudah tersusun secara rapi untuk memudahkan Anda.
                    </h2>
                </div>

                <div class="content">
                    <div class="list">
                        <div class="item">
                            <h1 class="item__title">Senin</h1>
                            <div class="item__list">
                                <li>09.00 - 10.00</li>
                                <li>10.00 - 11.00</li>
                                <li>11.00 - 12.00</li>
                                <li>13.00 - 14.00</li>
                                <li>14.00 - 15.00</li>
                                <li>15.00 - 16.00</li>
                                <li>16.00 - 17.00</li>
                            </div>
                        </div>
                        <div class="item">
                            <h1 class="item__title">Selasa</h1>
                            <div class="item__list">
                                <li>09.00 - 10.00</li>
                                <li>10.00 - 11.00</li>
                                <li>11.00 - 12.00</li>
                                <li>13.00 - 14.00</li>
                                <li>14.00 - 15.00</li>
                                <li>15.00 - 16.00</li>
                                <li>16.00 - 17.00</li>
                            </div>
                        </div>
                        <div class="item">
                            <h1 class="item__title">Rabu</h1>
                            <div class="item__list">
                                <li>09.00 - 10.00</li>
                                <li>10.00 - 11.00</li>
                                <li>11.00 - 12.00</li>
                                <li>13.00 - 14.00</li>
                                <li>14.00 - 15.00</li>
                                <li>15.00 - 16.00</li>
                                <li>16.00 - 17.00</li>
                            </div>
                        </div>
                        <div class="item">
                            <h1 class="item__title">Kamis</h1>
                            <div class="item__list">
                                <li>09.00 - 10.00</li>
                                <li>10.00 - 11.00</li>
                                <li>11.00 - 12.00</li>
                                <li>13.00 - 14.00</li>
                                <li>14.00 - 15.00</li>
                                <li>15.00 - 16.00</li>
                                <li>16.00 - 17.00</li>
                            </div>
                        </div>
                        <div class="item">
                            <h1 class="item__title">Jum'at</h1>
                            <div class="item__list">
                                <li>09.00 - 10.00</li>
                                <li>10.00 - 11.00</li>
                                <li>11.00 - 12.00</li>
                                <li>13.00 - 14.00</li>
                                <li>14.00 - 15.00</li>
                                <li>15.00 - 16.00</li>
                                <li>16.00 - 17.00</li>
                            </div>
                        </div>
                        <div class="item">
                            <h1 class="item__title">Sabtu</h1>
                            <div class="item__list">
                                <li>09.00 - 10.00</li>
                                <li>10.00 - 11.00</li>
                                <li>11.00 - 12.00</li>
                                <li>13.00 - 14.00</li>
                                <li>14.00 - 15.00</li>
                                <li>15.00 - 16.00</li>
                                <li>16.00 - 17.00</li>
                            </div>
                        </div>
                        <div class="item">
                            <h1 class="item__title">Minggu</h1>
                            <div class="item__list">
                                <li>09.00 - 10.00</li>
                                <li>10.00 - 11.00</li>
                                <li>11.00 - 12.00</li>
                                <li>13.00 - 14.00</li>
                                <li>14.00 - 15.00</li>
                                <li>15.00 - 16.00</li>
                                <li>16.00 - 17.00</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--color section--contact">
            <div class="container">
                <div class="head">
                    <h1 class="head__title">Kontak Kami</h1>
                    <h2 class="head__subtitle">Jika memiliki pertanyaan dan juga saran anda bisa menghubungi kami
                    </h2>
                </div>
                <div class="content">
                    <div class="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.302986461661!2d107.75847181536496!3d-6.6092233952204795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6923730ff7a7af%3A0xce44933e73762e27!2sBangun%20Teknologi!5e0!3m2!1sen!2sid!4v1670385294768!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="contact">
                        <h1>PT Kemudi Lancar Indonesia</h1>
                        <h2>Jl. Kepu Dalam VII No. 91A Kelurahan Kemayoran, Jakarta Pusat, DKI Jakarta</h2>
                        
                        <div class="socmed">
                            <div class="item">
                                <span>Email</span>
                                <h5>021 23456788</h5>
                            </div>
                            <div class="item">
                                <span>Telepon / Fax</span>
                                <h5>info@kemudi.com</h5>
                            </div>
                            <div class="item">
                                <span>WhatsApp</span>
                                <h5>083816779933</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
        <script src="{{ asset('assets/js/apps.js') }}"></script>
    </body>
</html>