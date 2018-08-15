<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Xscript Indonesia</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
                <div class="container">
                    <a class="navbar-brand navbar-brand-custom" href="{{ route('welcome-page') }}">Xscript Indonesia</a>
                    <button class="navbar-toggler hidden-lg-up border-0" type="button" data-toggle="collapse" data-target="#collapsible-navigation-bar" aria-controls="collapsible-navigation-bar"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsible-navigation-bar">
                        <ul class="navbar-nav text-capitalize mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('welcome-page') }}">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Metode Belajar</a>
                            </li>
                        </ul>
                        <a href="{{ route('login') }}" class="btn btn-outline-custom">Masuk</a>
                        <a href="{{ route('register') }}" class="btn btn-custom">Daftar</a>
                    </div>
                </div>
            </nav>
            <header class="welcome-banner-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 welcome-banner-inner">
                            <div class="welcome-banner-context">
                                <h1 class="display-3">Xscript Indonesia</h1>
                                <p class="lead">Bersama membangun bangsa melalui bahasa yang tak biasa untuk nusantara.</p>
                                <a href="{{ route('register') }}" class="btn btn-custom">Daftar Gratis</a>
                                <a href="{{ route('login') }}" class="btn btn-outline-custom">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <section class="company-vision">
                    <div class="container">
                        <div class="row wrapper">
                            <div class="col-md-12 company-vision-inner">
                                <div class="company-vision-context">
                                    <h2>Tentang Xscript</h2>
                                    <p>Xscript adalah media belajar pemrograman online yang disediakan khusus untuk seluruh tingkat pelajar di Indonesia.</p>
                                    <p>Dengan bergabung, kalian telah resmi menjadi pahlawan pejuang bangsa modern untuk masa depan negeri ini. Disini kalian dapat berdiskusi, berbagi pengalaman, maupun belajar melalui artikel atau video tutorial programming yang disediakan secara gratis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="learning-method">
                    <div class="container">
                        <div class="row wrapper">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="learning-method-title">
                                    <h2 class="text-capitalize">Metode pembelajaran</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row wrapper">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 learning-method-inner">
                                <div class="learning-method-context">
                                    <i class="fas fa-book py-4"></i>
                                    <h3 class="text-capitalize context-title">Belajar melalui artikel</h3>
                                    <p>Disini tersedia banyak artikel yang membahas tentang berbagai bahasa pemrograman dan akan selalu update tiap minggunya. Semuanya dapat dibaca secara gratis tanpa syarat apapun.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 learning-method-inner">
                                <div class="learning-method-context">
                                    <i class="fas fa-video py-4"></i>
                                    <h3 class="text-capitalize context-title">Belajar melalui video</h3>
                                    <p>Selain pembelajaran dengan artikel, disini juga ada media pembelajaran dalam bentuk video lho! Kamu juga bisa dapat live support dari mentor dan akses ke video premium jika mendaftar sebagai premium member.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 learning-method-inner">
                                <div class="learning-method-context">
                                    <i class="fas fa-comments py-4"></i>
                                    <h3 class="text-capitalize context-title">Diskusi</h3>
                                    <p>Kalian sudah mahir? Mari saling bantu sesama untuk menggapai impian sebagai pahlawan masa depan. Dengan berdiskusi, kalian dapat menambah relasi dan menambah wawasan lebih dalam terhadap apa yang sudah kalian pelajari.</p>
                                </div>
                            </div>
                            <div class="clearfix bg-info"></div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 learning-method-inner">
                                <div class="learning-method-context">
                                    <i class="fas fa-star py-4"></i>
                                    <h3 class="text-capitalize context-title">Kumpulkan poin & dapatkan reward</h3>
                                    <p>Dengan menyelesaikan tutorial, kalian akan mendapat poin yang nantinya bisa ditukar dengan reward menarik yang kami sediakan. Semakin sering kalian belajar, semakin banyak poin yang didapatkan, semakin pandai pula kalian di masa yang akan datang.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="invitation">
                    <div class="container">
                        <div class="row wrapper">
                            <div class="col-xs-12 col-sm-12 col-md-12 invitation-inner">
                                <div class="invitation-context">
                                    <h2>Tunggu apa lagi?</h2>
                                    <p>Mari bersama - sama kita wujudkan cita - cita pahlawan yang telah mendahului kita dengan menjadi masyarakat yang cerdas, paham teknologi dan mampu beradaptasi sesuai perkembangan zaman. Belajar sekarang dan tunjukkan bahwa kalian bukan orang biasa!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="footer">
                <div class="container">
                    <div class="row wrapper">
                        <div class="col-xs-12 col-sm-6 col-md-4 footer-inner">
                            <div class="footer-context">
                                <ul class="list-unstyled">
                                    <li class="list-item">
                                        <h4>Xscript Indonesia</h4>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="text-dark">Lisensi & Persetujuan</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="text-dark">Kebijakan Privasi</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="text-dark">Persyaratan & Administrasi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 footer-inner">
                            <div class="footer-context">
                                <div class="list-unstyled">
                                    <li class="list-item list-item-social">
                                        Find us on
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="https://www.facebook.com/Xscript-Indonesia" class="fab fa-facebook"></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://www.instagram.com/Xscript-Indonesia" class="fab fa-instagram"></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://www.youtube.com/channel/UCBcQeOxnT51B9WbBDqjQgqA" class="fab fa-youtube"></a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                                <p class="text-center">Copyright<sup>&copy;</sup> Xscript Indonesia {{ date('Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
