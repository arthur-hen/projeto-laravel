<!DOCTYPE html>
<html lang="en">

    <head>

    @if(session('status'))
<div class="alert alert-info text-center">
    {{ session('status') }}
</div>
@endif


    @if(isset($user_name))
        <div class="alert alert-info text-center">
            Bem-vindo, {{ $user_name }}!
        </div>
    @endif

  <style>
.profile-avatar {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #1e3a5f;
    overflow: hidden;
    border: 2px solid #ffffff;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.25);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.profile-avatar:hover {
    transform: scale(1.1);
    box-shadow: 0 0 10px rgba(30, 58, 95, 0.6);
}

.profile-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>



        <meta charset="utf-8">
        <title>iCarros - Car Rent Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">  -->

        <!-- Icon Font Stylesheet -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/> -->
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->
        
        <!-- Libraries Stylesheet -->
        <link href="{{('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{('assets/css/style.css')}}" rel="stylesheet">

        <div class="text-center my-4">
    <a href="{{ route('register') }}" class="btn btn-outline-primary rounded-pill px-4 py-2 me-2">
        <i class="fas fa-user-plus me-2"></i> Registrar
    </a>
    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-4 py-2">
    <i class="fas fa-sign-in-alt me-2"></i> Login
</a>

</div>


    </head>

    <body>
        
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
         @yield("conteudo")
 <!-- Topbar Start -->
<div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
    <div class="container">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            

            <div class="col-lg-6 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">

                    <!-- Bolinha dinâmica de perfil -->
@auth
<a href="{{ route('profile.show') }}" class="profile-avatar">
    <img src="{{ asset('assets/img/avatar.png') }}" alt="Perfil" class="profile-img">
</a>
@endauth

<!-- Visitante (sem login) -->
<!-- Visitante (sem login) -->
@guest
<a href="#" class="profile-avatar" id="guestProfileBtn">
    <img src="{{ asset('assets/img/avatar.png') }}" alt="Registrar" class="profile-img">
</a>

<!-- Alerta que aparece quando o visitante tenta acessar -->
<div id="guestAlert" 
     style="display:none; position:fixed; top:20px; right:20px; z-index:1050; 
            background:#1e3a5f; color:white; padding:15px 20px; border-radius:10px; 
            box-shadow:0 0 10px rgba(0,0,0,0.4);">
    <strong>⚠️ Atenção:</strong> Crie um usuário para acessar o perfil.
</div>

<script>
document.getElementById('guestProfileBtn').addEventListener('click', function (e) {
    e.preventDefault();
    const alertBox = document.getElementById('guestAlert');
    alertBox.style.display = 'block';
    setTimeout(() => {
        alertBox.style.display = 'none';
        window.location.href = "{{ route('register') }}"; // Redireciona após exibir
    }, 2500); // Mostra por 2.5 segundos e depois redireciona
});
</script>
@endguest





                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i></i>iCarros</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

      

        <!-- Carousel Start -->
<div class="header-carousel mb-5">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <img src="{{('assets/img/carousel-2.jpg')}}" class="img-fluid w-100" alt="Slide 1" />
                <div class="carousel-caption d-flex justify-content-center align-items-center">
                    <h1 class="display-4 text-white bg-dark bg-opacity-50 px-4 py-3 rounded">
                        Confira nossos carros!
                    </h1>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <img src="{{('assets/img/carousel-1.jpg')}}" class="img-fluid w-100" alt="Slide 2" />
                <div class="carousel-caption d-flex justify-content-center align-items-center">
                    <h1 class="display-4 text-white bg-dark bg-opacity-50 px-4 py-3 rounded">
                        Confira nossos carros!
                    </h1>
                </div>
            </div>

        </div>

        <!-- CONTROLES DE NAVEGAÇÃO -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

       

       <!-- Car categories Start -->
<div class="container-fluid categories py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Nossos <span class="text-primary">Veículos</span></h1>
        </div>

        @if(isset($carros) && count($carros) > 0)
            <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach($carros as $carro)
                    <div class="categories-item p-4">
                        <div class="categories-item-inner">
                            <div class="categories-img rounded-top">
                                <img src="{{ $carro->foto1 }}" class="img-fluid w-100 rounded-top" alt="{{ $carro->modelo }}">
                            </div>
                            <div class="categories-content rounded-bottom p-4">
                                <h4>{{ $carro->marca }} {{ $carro->modelo }}</h4>

                                <div class="categories-review mb-4">
                                    <div class="me-3">{{ rand(3,5) }}.{{ rand(0,9) }} Review</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">
                                        R$ {{ number_format($carro->valor, 2, ',', '.') }}
                                    </h4>
                                </div>

                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">4 Seat</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">AT/MT</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">Petrol</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-calendar text-dark"></i> <span class="text-body ms-1">{{ $carro->ano_fabricacao }}</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">AUTO</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">{{ number_format($carro->quilometragem, 0, ',', '.') }} km</span>
                                    </div>
                                </div>

                                <a href="{{ route('public.carros.show', $carro->id) }}"
                                   class="btn btn-primary rounded-pill d-flex justify-content-center py-3">
                                    Saiba mais
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-muted">Nenhum veículo disponível no momento.</p>
        @endif
    </div>
</div>
<!-- Car categories End -->



        
      

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 mt-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">About Us</h4>
                                <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Cars</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Car Types</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Team</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Business Hours</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Mon - Friday:</h6>
                                <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Saturday:</h6>
                                <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Vacation:</h6>
                                <p class="text-white mb-0">All Sunday is our vacation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** The author’s attribution link must remain intact in the template. ***/-->
                        <!--/*** If you wish to remove this credit link, please purchase the Pro Version . ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>

</html>