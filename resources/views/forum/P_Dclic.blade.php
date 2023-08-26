
<body>

<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/x-icon.png') }}" type="image/x-icon">

<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            <!-- <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span> -->
                        </li>
                        <li>
                            <!-- <i class="icofont-location-pin"></i> Beverley, New York 224 USA -->
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href=""><img src="assets/images/logo/02.png" style="   height: 50pt;
  width: 150pt; " alt="logo"></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="#0">Home</a>
                                    <ul class="lab-ul">
                                        <li><a href="index.html" class="active">Evènements</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>

                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#0">Forum</a>
                                    <ul class="lab-ul">
                                        <li><a href="course.html">D-CLIC
                                            PRO</a></li>
                                        <li><a href="course-single.html">Programme DCLIC d</a></li>
                                        <li><a href="course-single.html">Partenaire</a></li>
    
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Apprenants</a>
                                    <ul class="lab-ul">
                                        <li><a href="course.html">Portfolio</a></li>
                                        <li><a href="course-single.html">Demonstration</a></li>
                                        <li><a href="course-single.html">CVthèque </a></li>
                                        <li><a href="course-single.html">Offres d'emploi </a></li>
                                        <li><a href="course-single.html">Volontariat </a></li>
                                        <li><a href="course-single.html">Promotion de service</a></li>
    
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Blog</a>
                                    <ul class="lab-ul">
                                        <li><a href="blog.html">Blog Grid</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Entreprise</a>
                                    <ul class="lab-ul">
                                        <li><a href="about.html">Job dating</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="instructor.html">Instructor</a></li>
                                        <li>
                                            <a href="#0">Shop Pages</a>
                                            <ul class="lab-ul">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-single.html">Shop Details Page</a></li>
                                                <li><a href="cart-page.html">Shop Cart Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="search-page.html">Search Page</a></li>
                                        <li><a href="search-none.html">Search None</a></li>
                                        <li><a href="404.html">404</a></li>
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
                        @else
                        <a href="" class="signup"><i class="icofont-users"></i>{{ Auth::user()->name }} </a>
                        <a href="{{ route('logout') }}" class="signup"><i onclick="event.preventDefault();
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
                </div>
            </div>
        </div>
    </header>
<br><br><br><br><br><br>
    <div class="container-fluid bloc1">
  <div class="container-fluid bloc2 py-5">
    <p class="dclic" id="A propos">D-CLIC : Formez-vous au numérique</p>
    <div class="trait1 "> <br></div>
    <p class="programme">Notre programme est une initiative qui a pour objectif <br>
      de renforcer les compétences numériques dans les communautés <br>
      francophones, en particulier dans les pays en développement. <br>
      Le programme se concentre sur des enseignants, des étudiants <br>
      et des travailleurs, pour leur permettre de mieux comprendre <br>
      et de mieux utiliser les (TIC) dans leur vie <br>
      professionnelle et personnelle.
    </p>
  </div>
  <div class="container-fluid bloc3">
    <p class="formation1" id="Les formations offertes">Les formations offertes</p>
    <div class="trait2 "> <br></div>
    <div id="carouselExampleIndicators" class="carousel slide">
      
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="imggroupe1" width="70%" height="500px" src="assets/images/Groupe 1.png" class="d-block imgformation "
            alt="...">
        </div>
        <div class="carousel-item">
          *
          <div class="container cardformation">
            <div class="row">
              <div class="col-6">
                <div class="card text- mb-3" style="max-width: 18rem;">
                  <div class="card-header">
                    <h4>1. Formation en développement web</h4>
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Cette formation est conçue pour aider les
                      apprenants à apprendre les compétences de base pour la création de sites web simples. Les sujets
                      couverts incluent HTML, CSS et JavaScript.
                    <br></h6>

                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card text- mb-3" style="max-width: 18rem;">
                  <div class="card-header">
                    <h4>2. Formation en marketing Digital </h4>
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Cette formation est conçue pour aider les apprenants à comprendre les
                      concepts de base du marketing numérique et à utiliser des outils tels que Google AdWords, les
                      médias sociaux et le référencement pour promouvoir des produits et services en ligne.</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          *

          *
          <div class="container cardformation">
            <div class="row">
              <div class="col-6">
                <div class="card text- mb-3" style="max-width: 18rem;">
                  <div class="card-header">
                    <h4>3. Formation en informatique</h4>
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Cette formation vise à fournir des connaissances de base sur l'informatique et
                      les technologies de l'information, y compris la navigation sur le web, l'utilisation des courriels et
                      la sécurité en ligne ainsi que la bureautique.</h6>

                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card text- mb-3" style="max-width: 18rem;">
                  <div class="card-header">
                    <h4>4. Formation en cyber-sécurité </h4>
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Cette formation est destinée à aider les apprenants à comprendre les menaces de
                      sécurité en ligne et à adopter des pratiques de sécurité appropriées pour se protéger contre les
                      cyberattaques.</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          *
        </div>

      </div>

  <!-- Formations -->
  <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100 formDclic">
        <img src="imgDCLIC/Imgform01.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Développement web et 
            application mobile</h5>
          <p class="card-text">            
            Si vous débutez complètement, le développement web peut être un réel défi — notre but est de simplifier suffisamment le sujet pour que vous appreniez facilement, tout en vous fournissant assez de détails pour que vous soyez autonome. 
          </div>
          <div class="col-12 bsLirePlus" style="display: flex; justify-content: center;"><button type="button" class="btn btn-success">LIRE PLUS</button></div> <br>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 formDclic">
        <img src="imgDCLIC/Imgform1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cloud computing</h5>
          <p class="card-text">
            Le cloud computing est la mise à disposition de ressources informatiques (comme la puissance de calcul, le stockage, les bases de données, les applications, etc.) à la demande via Internet, sans avoir à les installer et à les gérer sur site. Le cloud computing est un service tarifé en fonction de votre utilisation et accessible à tout moment.
            </p>
        </div>
        <div class="col-12 bsLirePlus" style="display: flex; justify-content: center;"><button type="button" class="btn btn-success bsvoirplus">LIRE PLUS</button></div> <br>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 formDclic">
        <img src="imgDCLIC/Imgform2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Electronique et IOT</h5>
          <p class="card-text">
            L’Internet of Things (IoT) décrit le réseau de terminaux physiques, les « objets », qui intègrent des capteurs, des softwares et d’autres technologies en vue de se connecter à d’autres terminaux et systèmes sur Internet et d’échanger des données avec eux. 
            </p>
        </div>
        <div class="col-12 bsLirePlus" style="display: flex; justify-content: center;"><button type="button" class="btn btn-success bsvoirplus">LIRE PLUS</button></div> <br>
      </div>
    </div>
  </div> -->
  <!-- formation -->
  <br>
  <br><br><br><br> <br>
  <!-- les pays -->
  <section class="carousel">
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 LesPaysAfricain" style="text-align: center; ">
          <p><strong>LES PAYS BENEFICIAIRES</strong></p>
        </div>
      </div>
    </div>
   
    <div class="carousel__slider">
      <ul class="carousel__list">
        <div>
        <li class="carousel__item">
          <span><img class="dpbfaso" src="Drapeau/bf.jpg" alt=""></span>

        </li>
        <p><strong>Burkina Faso</strong></p>
        </div>
        <div>
          <li class="carousel__item">
            <span><img class="dpbfaso" src="Drapeau/ci.png" alt=""></span>
          </li>
          <p><strong>Côte d'Ivoire</strong></p>
        </div>
        <div>
          <li class="carousel__item">
            <span><img class="dpbfaso" src="Drapeau/mali.jpg" alt=""></span>
          </li>
          <p><strong>Mali</strong></p>
        </div>
        <div>
          <li class="carousel__item">
            <span><img class="dpbfaso" src="Drapeau/Cameroun.png" alt=""></span>
          </li>
          <p><strong>Cameroun</strong></p>
        </div>
        <div>
          <li class="carousel__item">
            <span><img class="dpbfaso" src="Drapeau/kissMauritanie.jpg" alt=""></span>
          </li>
          <p><strong>Mauritanie</strong></p>
        </div>
        <div>
          <li class="carousel__item">
            <span><img class="dpbfaso" src="Drapeau/togo.png" alt=""></span>
          </li>
          <p><strong>Togo</strong></p>
        </div>
      </ul>
    </div>
  </section>
  <!-- les pays fin -->
  
  <div class="category-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                
                <h2 class="title">Nos partenaires</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/PartenairesProgramme/2DIGITALES.jpeg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Computer Science</h6></a>
                                    <span>24 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/PartenairesProgramme/3incubuo.png" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Civil Engineering</h6></a>
                                    <span>40 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/PartenairesProgramme/4UniversitéNaziboni.jpeg" alt="category">
                                </div>
                                <div class="category-content">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/PartenairesProgramme/5Wakatlab-Truelogo.jpeg" alt="category">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/Entreprises_partenaires_insertion_apprenants/2pubbix tech.png" alt="category">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/Entreprises_partenaires_insertion_apprenants/1Cidoc.png" alt="category">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

  
<!-- fin footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!-- font awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- lien js -->
    <script src="js/javaStyle.js"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress.js') }}"></script>
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('style/javaStyle.js') }}"></script>
    <!-- boostrap -->
    
</body>
</html>