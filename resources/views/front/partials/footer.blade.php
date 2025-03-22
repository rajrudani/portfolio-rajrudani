<footer id="footer" class="footer position-relative light-background">
    <div class="container">
        <h3 class="sitename">{{ $personalData['name'] }}</h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.
        </p>
        <div class="social-links d-flex justify-content-center">
            @isset($socialMedia['facebook'])
                <a href="{{ $socialMedia['facebook'] }}"><i class="bi bi-facebook"></i></a>
            @endisset
            @isset($socialMedia['twitter'])
                <a href="{{ $socialMedia['twitter'] }}"><i class="bi bi-twitter-x"></i></a>
            @endisset
            @isset($socialMedia['instagram'])
                <a href="{{ $socialMedia['instagram'] }}"><i class="bi bi-instagram"></i></a>
            @endisset
            @isset($socialMedia['linkedin'])
                <a href="{{ $socialMedia['linkedin'] }}"><i class="bi bi-linkedin"></i></a>
            @endisset
            @isset($socialMedia['github'])
                <a href="{{ $socialMedia['github'] }}"><i class="bi bi-github"></i></a>
            @endisset
            @isset($socialMedia['skype'])
                <a href="{{ $socialMedia['skype'] }}"><i class="bi bi-skype"></i></a>
            @endisset
        </div>
        <div class="container">
            <div class="copyright">
                <span>Copyright</span> <strong class="px-1 sitename">{{ $personalData['name'] }}</strong> <span>All Rights
                    Reserved</span>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distribuited by <a
                    href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</footer>
