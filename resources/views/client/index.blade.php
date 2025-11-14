@extends('layouts.client.app')

@section('title', 'Beranda')

@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="company-badge mb-4">
                                <i class="bi bi-gear-fill me-2"></i>
                                Kelola konten dalam satu tempat
                            </div>

                            <h1 class="mb-4">
                                Automasi Posting <br>
                                dan Sinkronisasi <br>
                                <span class="accent-text">Konten</span>
                            </h1>

                            <p class="mb-4 mb-md-5">
                                Platform auto posting kami membantu Anda menjadwalkan, mempublikasikan, dan memantau konten
                                di berbagai sosial media secara otomatis. Hemat waktu, tingkatkan produktivitas, dan fokus
                                pada hal yang paling penting: mengembangkan brand Anda.
                            </p>

                            <div class="hero-buttons">
                                <a href="{{ route('register') }}" class="btn btn-primary me-0 me-sm-2 mx-1">Daftar
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('assets/img/illustration-1.webp') }}" alt="Hero Image" class="img-fluid">

                            <div class="customers-badge">
                                <div class="customer-avatars">
                                    <img src="{{ asset('assets/img/avatar-1.webp') }}" alt="Customer 1" class="avatar">
                                    <img src="{{ asset('assets/img/avatar-2.webp') }}" alt="Customer 2" class="avatar">
                                    <img src="{{ asset('assets/img/avatar-3.webp') }}" alt="Customer 3" class="avatar">
                                    <img src="{{ asset('assets/img/avatar-4.webp') }}" alt="Customer 4" class="avatar">
                                    <img src="{{ asset('assets/img/avatar-5.webp') }}" alt="Customer 5" class="avatar">
                                    <span class="avatar more">12+</span>
                                </div>
                                <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

    </main>
@endsection
