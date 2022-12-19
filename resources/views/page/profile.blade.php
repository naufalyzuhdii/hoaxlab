@extends('layout.main')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('js/password-toggle.js') }}">
@endsection

@section('content')
    <div class="profile-page">
        <div class="profile-content">
            <div class="profile-left">
                <div class="profile-left-content">
                    <div class="profile-left-pd">
                        <div class="profile-left-1">
                            <div class="profile-image">
                                <img class="image" src="{{ asset('assets/profile.png') }}" alt="" width="70%">
                            </div>
                            <div class="profile-detail">
                                <h3 class="name">Muhammad Rizky Sudrajat</h3>
                                <p class="member">Member sejak 13 Maret 2022</p>
                                <div class="laporan">
                                    <p class="laporan-text">31 Laporan</p>
                                </div>
                                <div class="upvoters">
                                    <p class="upvoters-text">999 Upvoters</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="profile-line-1">
                <div class="profile-left-2">
                    <a href="" class="change-info-user">Ubah Info Pengguna</a>
                    <a href="" class="my-report">Laporan Saya</a>
                </div>
                <div class="keluar">
                    <hr class="profile-line-2">
                    <a href="" class="signout-button">Keluar</a>
                </div>
            </div>

            <div class="profile-right-content">
                <div class="profile-right-content-wrap">
                    <div class="profile-form">
                        <form action="">
                            <div class="profile-right-title account-information">
                                <p class="informasi-akun">Informasi Akun</p>
                            </div>
                            <div class="account-form input-name">
                                <div class="nama-depan">
                                    <p class="input-title">Nama Depan</p>
                                    <input type="text">
                                </div>
                                <div class="nama-belakang">
                                    <p class="input-title">Nama Belakang</p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="account-form input-username">
                                <p class="input-title">Username</p>
                                <input type="text">
                            </div>
                            <div class="account-form input-email">
                                <p class="input-title">Email</p>
                                <input type="text">
                            </div>
                            <div class="account-form input-phone-number">
                                <p class="input-title">Nomor Telepon</p>
                                <input type="text">
                            </div>
                            <div class="profile-right-title change-password">
                                <p class="ganti-kata-sandi">Ganti Kata Sandi</p>
                            </div>
                            <div class="change-password-form input-password-now">
                                <p class="input-title">Kata Sandi Sekarang</p>
                                <input type="password">
                                {{-- <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i> --}}
                            </div>
                            <div class="change-password-form input-password-new">
                                <p class="input-title">Kata Sandi Baru</p>                                
                                <input type="password">
                            </div>
                            <div class="change-password-form input-confirmation-password-new">
                                <p class="input-title">Konfirmasi Kata Sandi Baru</p>
                                <input type="password">
                            </div>
                            <div class="account-save-button">
                                <button class="batal">batal</button>                                
                                <button class="simpan">simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection