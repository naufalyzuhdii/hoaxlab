@extends('layout.main')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/scan.css') }}">
    <script defer src="{{ asset('js/popup-scan.js') }}"></script>
@endsection

@section('content')
    <div class="scan-page">
        <div class="scan-content">
            <p class="scan-header">Pindai konten Anda yang Ingin diperiksa:</p>
            <div class="scan-form">
                <form action="">
                    <input type="textarea" name="" id="" class="input-scan" placeholder="input link konten yang anda ingin periksa disini">
                    <div class="submit-scan">
                        <button data-scan-target=#scan type="submit" class="scan-button">scan</button>
                        <div class="scan-result" id="scan-result">
                            <div class="report-condition">
                                <div class="report-text">
                                    Konten belum dikenali, apakah Anda ingin melaporkan?
                                </div>
                                <div class="report-button">
                                    <button class="report-yes-condition">Ya</button>
                                    <button data-close-button class="report-no-condition">Tidak</button>
                                </div>
                            </div>
                        </div>
                        <div id="overlay"></div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
@endsection