@extends('layout.template')

@section('title', 'Web Magang Kota Madiun')

@section('content')

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#home">
            <img src="{{asset('image/logo.png')}}">
        </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#home">Halaman Utama</a></li>
          <li><a href="#alur">Alur</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Home Section
  ============================-->
  <section id="home">
    <div class="home-container">
      <h1>Selamat Datang</h1>
      <h2>Calon Peserta Magang di Organisasi Perangkat Daerah Kota Madiun</h2>
      <a href="/login" class="btn-login">Login</a>
      <p>Belum punya akun? <a href="/registrasi" class="btn-daftar">Daftar</a></p>
    </div>
  </section><!-- #home -->

  <main id="main">

    <!--==========================
      Alur Section
    ============================-->
    <section id="alur">
      <div class="container">
        <h2>Alur Pendaftaran</h2>
        <div class="row alur-container">
          <img src="{{asset('image/alurpendaftaran.png')}}" alt="">
        </div>

      </div>
    </section><!-- #alur -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact Us</h3>
          <p> </p>
        </div>
      </div>
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-6 col-md-6">

            <div class="info">
              <div>
                <i class="fa"><img src="{{asset('image/placeholder.png')}}" alt=""></i>
                <p>Jl. Perintis Kemerdekaan No. 32<br>Kota Madiun, Jawa Timur</p>
              </div>

              <div>
                <i class="fa"><img src="{{asset('image/mail.png')}}" alt=""></i>
                <p>kominfo.madiunkota@gmail.com</p>
              </div>

              <div>
                <i class="fa"><img src="{{asset('image/phone.png')}}" alt=""></i>
                <p>(0351) 467327</p>
              </div>
            </div>

            <div class="logo2">
              <img src="{{asset('image/logo.png')}}" alt="">
            </div>

          </div>

          <div class="col-lg-6 col-md-6">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Kritik & Saran..."></textarea>
                  <div class="validation"></div>
                </div>
                <div class="form-group"><button type="submit">Kirim</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="copyright">
          &copy; Copyright 2020 <strong>Pemerintah Kota Madiun</strong>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  @endsection
