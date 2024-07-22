<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SALAFIYAH</title>
    <link rel="stylesheet" href="{{asset('/landing-user/style.css')}}" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /><link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="icon" href="{{asset('/landing-user/image/SMK Salafiyah (1)-min.png')}}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&family=Readex+Pro:wght@200;300;400;500;600;700&family=Uncial+Antiqua&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="navbar">
      <img src="{{asset('/landing-user/image/SMK Salafiyah (1)-min.png')}}" />
      <a href="{{ route('home.index') }}" class="navbar-logo">SMK SALAFIYAH</a>
      <div class="navbar-nav">
        <a href="{{ route('home.index') }}">Beranda</a>
        <a href="{{ route('tefa.index') }}">Tefa</a>
        <a href="{{ route('profil.index') }}">Profil</a>
        <a href="{{ route('prestasi.index') }}">Berita</a>
        <a href="{{ route('galeri.index') }}">Galeri</a>
        <a href="#contact">Kontak</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
      <!-- serach form start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- serach form end -->
    </nav>