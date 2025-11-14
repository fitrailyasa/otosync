<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-6 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">{{ config('app.name') }}</span>
                </a>
                <div class="footer-contact">
                    <p>Otosync adalah platform auto posting yang membantu Anda menjadwalkan, mempublikasikan, dan
                        memantau konten di berbagai sosial media secara otomatis. Hemat waktu, tingkatkan produktivitas,
                        dan fokus pada hal yang paling penting: mengembangkan brand Anda.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Navigasi</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('blog') }}">Artikel</a></li>
                    <li><a href="{{ route('contact') }}">Hubungi Kami</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Kebijakan Legal</h4>
                <ul>
                    <li><a href="{{ route('terms-of-service') }}">Persyaratan layanan</a></li>
                    <li><a href="{{ route('privacy-policy') }}">Kebijakan Privasi</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ config('app.name') }}</strong> <span>All Rights
                Reserved</span></p>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
