<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dclic-pro</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/02.png') }}" style=" width: 400px;" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">




</head>
<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- header section start here -->
    <header class="header-section bg-white">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            
                            
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom ">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{ route('accueil') }}"><img src="assets/images/logo/oif.png" style="   height: 30pt;
  width: 80pt; " alt="logo"></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="#0">Home</a>
                                    <ul class="lab-ul">
                                        <li><a href="{{ route('evenement') }}" class="active">Publier un evènements</a></li>
                                        

                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#0">Forum</a>
                                    <ul class="lab-ul">
                                        <li><a href="course.html">D-CLIC
                                            PRO</a></li>
                                        <li><a href="course-single.html">Programme DCLIC</a></li>
                                        <li><a href="course-single.html">Partenaire</a></li>
    
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Apprenants</a>
                                    <ul class="lab-ul">
                                        <li><a href="{{ route('cvtheque') }}">CVthèque </a></li>
                                        <li><a href="{{ route('offre') }}">Offres d'emploi </a></li>
                                        <li><a href="">Volontariat </a></li>
                                        <li><a href="">Promotion de service</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Blog</a>
                                    <ul class="lab-ul">
                                        <!-- <li><a href="blog.html">Blog Grid</a></li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Entreprise</a>
                                    <ul class="lab-ul">                                                                            
                                        <li><a href="{{ route('index2') }}">Listes des entreprises</a></li>                                        
                                    </ul>
                                </li>
                                <li><a href="{{ route('chatify') }}">Chats</a></li>
                            </ul>
                        </div>
                        @guest
                            @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="login"><i class="icofont-user"></i> <span>Connexion</span> </a>
                        @endif

                        @if (Route::has('register'))

                        <a href="{{ route('register') }}" class="signup"><i class="icofont-users"></i> <span>Inscription</span> </a>
                        @endif
                        <br>
                        @else
                        <a href="" class="login"><i></i>{{ Auth::user()->name }} </a>
                        <a href="{{ route('logout') }}" class="login"><i onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnexion </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                         </form>
                         @endguest
                    
                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                            
                        </div>

                    </div>
                    <div class="logo">
                        <a href="{{ route('accueil') }}"><img src="assets/images/logo/auf.png" style="   height: 30pt;
  width: 80pt; " alt="logo"></a>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header section ending here -->
    @yield('content')

            <!-- Footer Section Start Here -->
            <footer>
            <div class="footer-top padding-tb pt-0">
                <div class="container">
                    <div class="row g-4 row-cols-xl-4 row-cols-md-2 row-cols-1 justify-content-center">
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Liens utiles</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">AUF</a></li>
                                                <li><a href="#">OIF</a></li>
                                                <li><a href="#">D-CLIC</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Menu</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Evènements</a></li>
                                                <li><a href="#">Offre d'emplois</a></li>
                                                <li><a href="#">CVthèque</a></li>
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Apprenants</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="section-wrapper">
                        <p>&copy; 2023 <a href="index.html">D-CLIC PRO</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section Ending Here -->
    </div>
    <!-- footer -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress.js') }}"></script>
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('style/javaStyle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>