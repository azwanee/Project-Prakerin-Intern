<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Detail News Pages</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/logo-abbr.png') }}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/ticker-style.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   </head>

   <body>
       
    {{-- <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start --> --}}

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logoassalaam.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img src="{{ asset ('frontend/assets/img/logo/logo.png') }}" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav style="width: 130%;">                  
                                        <ul id="navigation">    
                                            <li><a href="{{route('welcome')}}">Home</a></li>
                                            <li><a href="{{route('welcome')}}" >Category</a></li>
                                            <li><a href="latest_news.html">About</a></li>
                                            <li style="margin-bottom: -1%; margin-left: 58%;" >
                                                <div class="col-xl-2 col-lg-2 col-md-4">
                                                    <div class="header-right-btn f-right d-none d-lg-block">
                                                        <i class="fas fa-search special-tag"></i>
                                                        <div class="search-box">
                                                            <form action="#">
                                                                <input type="text" placeholder="Search">               
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="text-align: right">@if (Route::has('login'))
                                                @auth
                                                @else
                                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                                {{-- @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                @endif --}}
                                                @endauth
                                                @endif
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->                                          
                            <div class="about-right mb-90">
                                <div class="about-img">
                                    <img src="{{asset('/img/berita/' . $berita->cover)}}" alt="">
                                </div>
                                <div class="section-tittle mb-30 pt-30">
                                    <h3>{{$berita->judul}}</h3>
                                </div>
                                <div class="about-prea">
                                    {{$berita->isi}}
                                </div> 
                                    <div class="social-share pt-30">
                                        <div class="section-tittle">
                                            <h3 class="mr-20">Share:</h3>
                                            <ul>
                                                <li><a href="https://www.youtube.com/@smkassalaambandung4011"><i class="bi bi-youtube"></i></a></li>
                                                <li><a href="https://www.instagram.com/smkassalaam/?hl=en"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="https://smkassalaambandung.sch.id/"><i class="bi bi-browser-chrome"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <!-- From -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-contact contact_form mb-80" action="{{route('login')}}" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Follow Us</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://web.facebook.com/smkassalaam/?locale=id_ID&_rdc=1&_rdr"><img src="{{ asset ('frontend/assets/img/news/icon-fb.png') }}" alt=""></a>
                            </div>
                            <div class="follow-count">  
                                <span>Facebook</span>
                                <p>Smk Assalaam</p>
                            </div>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://smkassalaambandung.sch.id"><img src="{{ asset ('frontend/assets/img/news/icon-tw.png') }}" alt="" width="30px"></a>
                            </div>
                            <div class="follow-count">
                                <span>Website</span>
                                <p>Smk Assalaam</p>
                            </div>
                        </div>
                            <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://www.instagram.com/smkassalaam/?hl=en"><img src="{{ asset ('frontend/assets/img/news/icon-ins.png') }}" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>Instagram</span>
                                <p>Smk Assalaam</p>
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://www.youtube.com/@smkassalaambandung4011"><img src="{{ asset ('frontend/assets/img/news/icon-yo.png') }}" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>Youtube</span>
                                <p>Smk Assalaam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                   </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

   <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-6 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset ('frontend/assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>
                                            Selamat datang di Assalaam News,
                                            di mana pengetahuan ditemukan dan membangun inspirasi bagi kalian yang membaca. Di Website ini,
                                            kami menyediakan banyak artikel yang dapat anda baca. Kami adalah komunitas yang berdedikasi 
                                            untuk memberikan konten - konten yang bersifat mendukung dan inspiratif bagi pembaca.
                                        </p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="https://www.youtube.com/@smkassalaambandung4011"><i class="bi bi-youtube"></i></a>
                                    <a href="https://www.instagram.com/smkassalaam/?hl=en"><i class="fab fa-instagram"></i></a>
                                    <a href="https://smkassalaambandung.sch.id/"><i class="bi bi-browser-chrome"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-80">
                            <div class="footer-tittle">
                                <h1>Tautan Cepat</h1>
                            </div>
                            <div class="instagram-gellay">
                                <ul style="color:dimgrey ;">
                                    <li><a href="#"><p>Home</p></a></li>
                                    <li><a href="#"><p>Category</p></a></li>
                                    <li><a href="#"><p>About</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-12">
                            <div class="footer-copy-right" style="text-align: center">
                                <p>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Portal Website | Assalaam News by <a href="https://www.instagram.com/zwan06s/" target="_blank">Ghazwan</a>
                                </p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="./assets/js/jquery.ticker.js"></script>
        <script src="./assets/js/site.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>