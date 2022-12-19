@extends('layout.main')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="home-content">
        <div class="head-home">
            <div class="head-home-content">
                <div class="left-text">
                    <p class="head-text">deteksi konten <br><span>yang terindikasi</span> HOAKS</p>
                    <p class="text-desc">Kami membantu para pengguna untuk mendeteksi<br>
                        konten-konten yang terindikasi sebagai hoaks yang<br>
                        Anda temukan di internet.
                    </p>
                    <button class="scan-sekarang">scan sekarang</button>
                </div>
                <img src="{{ asset('assets/image-header.png') }}" alt="" width="50%">
            </div>
        </div>
        <div class="home-content-about">
            <img src="{{ asset('assets/ABOUT US 1.png') }}" alt="" width="45%">
            <div class="right-text about">
                <p class="about-title">Apa itu Hoaxlab?</p>
                <p class="about-desc">
                    Hoaxlab merupakan sistem yang dirancang dan dibangun
                    dengan menggunakan teknologi terkini berbasis website
                    sebagai pendeteksi konten hoaks yang bermunculan di internet.
                    <br><br>
                    Hoaxlab menawarkan kemudahan untuk pengguna dalam
                    menggunakan website ini. Kami percaya bahwa internet dapat
                    menjadi tempat yang bebas dengan konten hoaks, sehat bagi
                    kita semua.
                    <br><br>
                    Hoaxlab mengajak kamu untuk turut serta mewujudkannya. Kini
                    setiap orang dapat turut berperan memerangi hoaks dengan
                    mudah.
                </p>
            </div>
        </div>
        <div class="home-content-carakerja">
            <div class="left-text carakerja">
                <p class="carakerja-title">Cara Kerja Hoaxlab</p>
                <p class="carakerja-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime cupiditate, doloremque reiciendis numquam aut dolorum suscipit laudantium. Dignissimos, inventore voluptates est quod necessitatibus officiis aliquam distinctio possimus, ducimus vel itaque.
                    <br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime cupiditate, doloremque reiciendis numquam aut dolorum suscipit laudantium. Dignissimos, inventore voluptates est quod necessitatibus officiis aliquam distinctio possimus, ducimus vel itaque.
                </p>
            </div>
            <img src="{{ asset('assets/CARA KERJA 1.png') }}" alt="" width="45%">
        </div>
    </div>

    {{-- @include('template.footer') --}}
@endsection