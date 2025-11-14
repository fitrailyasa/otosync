@extends('layouts.client.app')

@section('title', 'Hubungi Kami')

@section('content')
    <div class="container my-5 pt-md-5 pt-3">
        <section id="contact" class="contact section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Hubungi Kami</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4 g-lg-5">
                    <div class="col-lg-5">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Info Kontak</h3>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-geo-alt fs-2"></i>
                                <div class="content">
                                    <h4>Lokasi Kami</h4>
                                    <p>Garut, Jawa Barat</p>
                                    <p>Indonesia</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-whatsapp fs-2"></i>
                                <div class="content">
                                    <h4>Nomor Whatsapp</h4>
                                    <p><a href="https://wa.me/+6282279909994">+6282279909994</a></p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-envelope fs-2"></i>
                                <div class="content">
                                    <h4>Alamat Email</h4>
                                    <p><a href="mailto:otosyncronization@gmail.com">otosyncronization@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>Kritik dan Saran</h3>

                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Nama Anda"
                                            required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email" placeholder="Email Anda"
                                            required="">
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subjek"
                                            required="">
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Pesan Anda telah terkirim!</div>
                                        <button type="submit" class="btn">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
