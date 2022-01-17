@extends('layouts.main')

@section('container')
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center" style="height: 100vh !important">
    
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Selamat datang di website kami</h1> 

        <p class="masthead-subheading font-weight-light mb-0 mt-4">Nikmati berbagai artikel di website kami</p>

        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="/posts">
                <i class="fas fa-download me-2"></i>
                Cari Artikel!
                {{-- nanti ganti sendiri kontennya --}}
            </a>
        </div>
    </div>
</header>
@endsection
