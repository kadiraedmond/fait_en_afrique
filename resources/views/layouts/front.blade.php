<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FaitEnAfrique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-RHhJ1owOo5eiKioj6lqT2yX5INzB4qZn56fUpQXunReS2UI/ST3ygkEUd3Q7giXzmuCplj4d6HsB5GRf/6xuA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="{{asset('assets/css/variables.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

 
</head>

<body>
<!-- ======= Top Bar ======= -->
<!-- <section id="topbar"  class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>
  </div>
</section> -->
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>FaitEnAfrique</h1>
      </a>
    
      <nav id="navbar" class="navbar">
        <div class="search-form">
          <form action="{{ url('search-result') }}" method="GET">
            <input type="text" name="query" placeholder="Rechercher...">
            <button type="submit"> <i class="bi bi-search"></i> </button>
          </form>
        </div>
        <ul>
          <li><a href="{{url('/')}}">Accueil</a></li>
          
          

          <li><a href="{{url('info')}} ">Informations</a></li>
          <li><a href="{{url('help')}} ">Aide</a></li>
          <li>
            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            {{-- <div class="dropdown">
              <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Register
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Client</a></li>
                <li><a class="dropdown-item" href="#">Grossiste</a></li>
                <li><a class="dropdown-item" href="#"> logisticien </a></li>
              </ul>
            </div> --}}
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown ">
                
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    
                    <button class="btn-vert">{{ Auth::user()->raison_sociale }}</button>
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                       
                    </form>
                </div>
            </li>
            <li> <a id="navbarDropdown" class="nav-link" href="{{url('admin')}}" role="button" data-bs-toggle="" aria-haspopup="true" aria-expanded="false" v-pre>
                    
                <button class="btn-vert">Dashboard</button>
            </a></button></li>
        @endguest
          </li>
        </ul>
        

      </nav><!-- .navbar -->
      <a href="#" class="mx-2 js-search-open"><span class="bi-serch"></span></a>

      <div class="position-relative">
       
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->


    @yield('content')
 

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer mt-4">

    <div class="footer-content">
      <div class="container">

        <div class="row justify-content-center g-5">
           
          <div class="col">
            <h3 class="footer-heading">Informations</h3>
            <ul class="footer-links list-unstyled">
           
              <li><a href="{{url('ccm')}}"><i class="bi bi-chevron-righ"></i> Comment ça marche</a></li>
              <li><a href="{{url('faq')}}"><i class="bi bi-chevron-righ"></i> Foire aux questions</a></li>
              <li><a href="{{url('allcategorie')}}"><i class="bi bi-chevron-righ"></i> Categories</a></li>
              <li><a href="{{url('about')}}"><i class="bi bi-chevron-righ"></i> Qui sommes nous</a></li>
              <li><a href="{{url('si')}}"><i class="bi bi-chevron-righ"></i> Sociétés industrielles</a></li>
              <li><a href="{{url('blog')}}"><i class="bi bi-chevron-righ"></i> Blog</a></li>
            </ul>
          </div>
          <div class=" col">
            <h3 class="footer-heading">Service Client</h3>
         
            <ul class="footer-links list-unstyled">
              <li><a href=" "><i class="bi bi-chevron-righ"></i> Support</a></li>
              <li><a href=" "><i class="bi bi-chevron-righ"></i> Contact</a></li>
              <li><a href=" "><i class="bi bi-chevron-righ"></i> Conditions des membres</a></li>
              <li><a href=" "><i class="bi bi-chevron-righ"></i> Signaler un fournisseur</a></li>
              <li><a href=" "><i class="bi bi-chevron-righ"></i> Réclamations</a></li>
              <li><a href=" "><i class="bi bi-chevron-righ"></i> Commentaires</a></li>
               
            </ul>
          </div>
          <div class=" col">
            <h3 class="footer-heading">Liens rapides</h3>
         
            <ul class="footer-links list-unstyled">
              <li><a href="AgraAgroalimentaire "><i class="bi bi-chevron-righ"></i>Agroalimentaire</a></li>
              <li><a href="Cosmétique "><i class="bi bi-chevron-righ"></i> Cosmétique</a></li>
              <li><a href="Cimenterie "><i class="bi bi-chevron-righ"></i>Cimenterie</a></li>
              <li><a href="Textile "><i class="bi bi-chevron-righ"></i> Textile</a></li>
              <li><a href="Siderurgie "><i class="bi bi-chevron-righ"></i> Siderurgie</a></li>
              <li><a href=" Metallurgie"><i class="bi bi-chevron-righ"></i> Metallurgie</a></li>
              <li><a href=" Mecanique"><i class="bi bi-chevron-righ"></i> Mecanique</a></li>
              <li><a href="Chimique"><i class="bi bi-chevron-righ"></i> Chimique</a></li>
              <li><a href=" Energie"><i class="bi bi-chevron-righ"></i>Energie</a></li>
              <li><a href=" Automobile"><i class="bi bi-chevron-righ"></i> Automobile</a></li>
              <li><a href=" Construction"><i class="bi bi-chevron-righ"></i> Construction</a></li>
               
            </ul>
          </div>

          <div class="col">
            <h3 class="footer-heading">Légales</h3>
         
            <ul class="footer-links list-unstyled">
              <li><a href=""><i class="bi bi-chevron-righ"></i>Politique de confidentialité</a></li>
              <li><a href=""><i class="bi bi-chevron-righ"></i> Termes et conditions </a></li>
              <li><a href=""><i class="bi bi-chevron-righ"></i>Politique de sécurité</a></li>
              <li><a href=""><i class="bi bi-chevron-righ"></i> Limitations de responsabilité</a></li>
               
            </ul>
          </div>
         <div class="col">
            <h3 class="footer-heading">Application mobile</h3>
         
            <ul class="footer-links list-unstyled">
              <li><a href=" "><i class="bi bi-chevron-righ"></i>IOS</a></li>
              <li><a href=" "><i class="bi bi-chevron-righ"></i> Android </a></li>
              
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>FaitEnAfrique</span></strong>. All Rights Reserved
            </div>


          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>