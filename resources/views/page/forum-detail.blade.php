@extends('layout.main')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/forum-detail.css') }}">
@endsection

@section('content')
    <div class="forum-detail">
        <div class="forum-detail-header">
            <div class="forum-detail-left">
                <img src="{{ asset('assets/ABOUT US 1.png') }}" alt="" width="100%">
            </div>
            <div class="forum-detail-right">
                <h3 class="forum-detail-title">Tragedi Halloween di Itaewon disebabkan oleh Vaksin AstraZeneca</h3>
                <div class="forum-detail-review">
                    <p class="review category">hoax</p>
                    <p class="review arrow">&uarr;</p>
                    <p class="review upvoters">238 Upvoters</p>
                </div>
                <div class="forum-detail-footer">
                    <p class="forum-author">Diposting oleh JohnCena</p>
                    <p class="forum-date">02 November 2022</p>
                    <div class="forum-share">
                        <h3 class="forum-share">Bagikan: </h3>
                        <img src="{{ asset('assets/fb-icon.png') }}" alt="" width="4%">
                    </div>
                </div>
            </div>
        </div>
        <div class="forum-desc">
            <h3 class="desc-title">Penjelasan:</h3>
            <p class="desc-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est modi nisi dolor perferendis quidem ipsam voluptatibus dicta esse pariatur debitis accusamus repudiandae ullam voluptatum animi deserunt obcaecati reiciendis, hic incidunt?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, asperiores sequi veniam fugiat possimus quam in aliquid dolorem hic corrupti, tempore illum adipisci quas animi quidem excepturi ipsa dicta blanditiis!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, pariatur dolore nesciunt consequuntur aut eum quas a optio voluptatum magni nam qui repudiandae sed neque, minima laboriosam dignissimos cupiditate. Temporibus!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse omnis, ducimus, quod sequi cumque rem aspernatur sed est libero reiciendis pariatur tempore molestias quam veniam provident, voluptatibus dolorum quis impedit!
            </p>
        </div>
        <hr class="to-reference">
        <div class="referensi">
            <h3 class="referensi-title">Referensi (1)</h3>
            <div class="referensi-content">
                <div class="referensi-left">
                    <img src="{{ asset('assets/ABOUT US 1.png') }}" alt="" width="100%">
                </div>
                <div class="referensi-right">
                    <h3 class="reference-name">Kronologi Insiden Halloween Itaewon yang Tewaskan 149 Orang</h3>
                    <a href="" class="reference-link">https://www.cnbcindonesia.com/news/20221030081017-..orang</a>
                </div>
            </div>
        </div>
    </div>
@endsection