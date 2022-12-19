@extends('layout.main')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}">
@endsection

@section('content')
    <div class="forum">
        <div class="forum-content">
            <div class="forum-header">
                <div class="search-content">
                    <input type="text" name="" id="search-bar" placeholder="Type to search"><a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
                </div>
                <div class="category-content">
                    <div class="category-title">
                        <h3>Category:</h3>
                        <div class="category-check">
                            <input type="checkbox">
                            <p>Hoax</p>
                        </div>
                        <div class="category-check">
                            <input type="checkbox">
                            <p>Fakta</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="forum-nodata">
                <img class="nodata-image" src="{{ asset('assets/ABOUT US 1.png') }}" alt="">
                <h2 class="nodata-text">Pencarian tidak ditemukan :(</h2>
                <p class="nodata-detail-up">Kami tidak dapat menemukan yang Anda cari.</p>
                <p class="nodata-detail-bot">Coba cari kata kunci lain.</p>
            </div> --}}
            <div class="forum-list">
                <a href="/forum-detail-page">
                    <div class="forum-card">
                        <div class="forum-card-content">
                            <div class="left-forum-card">
                                <div class="left-forum-card-content">
                                    <div class="up-arrow">
                                        <button class="arrow">&uarr;</button>
                                    </div>
                                    <div class="left-number">
                                        <p>238</p>
                                    </div>
                                    <div class="down-arrow">
                                        <button class="arrow">&darr;</button>
                                    </div>    
                                </div>
                            </div>
                            <div class="middle-forum-card">
                                <div class="card-image">
                                    <img src="{{ asset('assets/ABOUT US 1.png') }}" alt="" width="100%">
                                </div>
                            </div>
                            <div class="right-forum-card">
                                <div class="right-card-header">
                                    <h3><span>[HOAX]</span> Tragedi Halloween di itaewon disebabkan oleh Vaksin AstraZeneca</h3>
                                </div>
                                <div class="right-card-desc">
                                    <p>Beredar narasi bahwa tragedi yang menewaskan ratusan orang di tengah pesta Halloween di Itaewon, Seoul, Korea Selatan berkaitan 
                                        dengan vaksin Covid-19, Astra Zeneca. Dari hasil penelusuran, klaim tersebut adalah Hoax. Faktanya, tidak ada informasi rersmi dan 
                                        valid mengenai hal tersebut. Tragedi di Itaewon masih diselidiki. Otoritas setempat masih menyelidiki penyebab sehingga terjadi ...</p>
                                </div>
                                <div class="right-card-posted">
                                    <p>Diposting oleh JohnCena</p>
                                </div>
                                <div class="right-card-date">
                                    <p>02 November 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="forum-card">
                        <div class="forum-card-content">
                            <div class="left-forum-card">
                                <div class="left-forum-card-content">
                                    <div class="up-arrow">
                                        <button class="arrow">&uarr;</button>
                                    </div>
                                    <div class="left-number">
                                        <p>238</p>
                                    </div>
                                    <div class="down-arrow">
                                        <button class="arrow">&darr;</button>
                                    </div>    
                                </div>
                            </div>
                            <div class="middle-forum-card">
                                <div class="card-image">
                                    <img src="{{ asset('assets/ABOUT US 1.png') }}" alt="" width="100%">
                                </div>
                            </div>
                            <div class="right-forum-card">
                                <div class="right-card-header">
                                    <h3><span>[HOAX]</span> Tragedi Halloween di itaewon disebabkan oleh Vaksin AstraZeneca</h3>
                                </div>
                                <div class="right-card-desc">
                                    <p>Beredar narasi bahwa tragedi yang menewaskan ratusan orang di tengah pesta Halloween di Itaewon, Seoul, Korea Selatan berkaitan 
                                        dengan vaksin Covid-19, Astra Zeneca. Dari hasil penelusuran, klaim tersebut adalah Hoax. Faktanya, tidak ada informasi rersmi dan 
                                        valid mengenai hal tersebut. Tragedi di Itaewon masih diselidiki. Otoritas setempat masih menyelidiki penyebab sehingga terjadi ...</p>
                                </div>
                                <div class="right-card-posted">
                                    <p>Diposting oleh JohnCena</p>
                                </div>
                                <div class="right-card-date">
                                    <p>02 November 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="forum-card">
                        <div class="forum-card-content">
                            <div class="left-forum-card">
                                <div class="left-forum-card-content">
                                    <div class="up-arrow">
                                        <button class="arrow">&uarr;</button>
                                    </div>
                                    <div class="left-number">
                                        <p>238</p>
                                    </div>
                                    <div class="down-arrow">
                                        <button class="arrow">&darr;</button>
                                    </div>    
                                </div>
                            </div>
                            <div class="middle-forum-card">
                                <div class="card-image">
                                    <img src="{{ asset('assets/ABOUT US 1.png') }}" alt="" width="100%">
                                </div>
                            </div>
                            <div class="right-forum-card">
                                <div class="right-card-header">
                                    <h3><span>[HOAX]</span> Tragedi Halloween di itaewon disebabkan oleh Vaksin AstraZeneca</h3>
                                </div>
                                <div class="right-card-desc">
                                    <p>Beredar narasi bahwa tragedi yang menewaskan ratusan orang di tengah pesta Halloween di Itaewon, Seoul, Korea Selatan berkaitan 
                                        dengan vaksin Covid-19, Astra Zeneca. Dari hasil penelusuran, klaim tersebut adalah Hoax. Faktanya, tidak ada informasi rersmi dan 
                                        valid mengenai hal tersebut. Tragedi di Itaewon masih diselidiki. Otoritas setempat masih menyelidiki penyebab sehingga terjadi ...</p>
                                </div>
                                <div class="right-card-posted">
                                    <p>Diposting oleh JohnCena</p>
                                </div>
                                <div class="right-card-date">
                                    <p>02 November 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <button class="load-more">Load more...</button>
        </div>
    </div>
@endsection