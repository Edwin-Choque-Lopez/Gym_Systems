<!DOCTYPE html>
<html lang="en">
<head>

     <title>Gymso Fitness HTML Template</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/font-awesome.min.css")}}>

    <link rel="stylesheet" href={{asset("css/aos.css")}}>
    
    <link rel="stylesheet" href={{asset("css/tooplate-gymso-style.css")}}>

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">Olimpo Gym</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="nav-link smoothScroll">Iniciar Sesión</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">Sobre nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Nuestros Ambientes</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">¡Una nueva forma de construir un estilo de vida saludable!</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Transforma tu cuerpo en <b>Olimpo Gym</b></h1>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Comencemos</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Sobre nosotros</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h3 class="mb-3 text-white" data-aos="fade-up">FORJA TU LEYENDA EN EL OLIMPO</h3>

                    <p class="text-justify" data-aos="fade-up" data-aos-delay="200" >Bienvenido a <b>Olimpo Gym</b>. Usted ha ingresado a la estancia de los titanes, donde la disciplina forja el carácter y el entrenamiento define el destino. Le invitamos a descubrir un sistema creado por y para quienes no se conforman con menos que la cima.</p>

                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h3 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Nuestros Horarios</h3>

                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Domingo</strong>
                               
                               <p data-aos="fade-up" data-aos-delay="800">09:00 AM - 05:00 PM</p>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Lunes - Viernes</strong>

                                <p data-aos="fade-up" data-aos-delay="800">06:00 AM - 12:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Sabado</strong>

                                <p data-aos="fade-up" data-aos-delay="800">06:00 AM - 10:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Acerca de nosotros</h2>

                                <p class="text-justify" data-aos="fade-up" data-aos-delay="400">Estamos ubicados en la ciudad de Oruro, Bolivia, en la calle Aroma #536, somos una institución dedicada a promover la salud y el bienestar a través de un servicio de entrenamiento físico de alta calidad. El gimnasio se enfoca en brindar a nuestros clientes un espacio óptimo para que alcanzen sus objetivos.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/perfil1.jpg') }}" class="img-fluid" style="width:100%" alt="Trainer">


                                    <div class="team-info d-flex flex-column">

                                        <h6><b>Edwin Huarachi Quispe</b></h6>
                                        <span>Gerente</span>

                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="{{ asset('images/perfil2.jpg') }}" class="img-fluid" style="width:100%" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h6><b>Barbara Ballesteros Padilla</b></h6>
                                        <span>Recepcionista</span>

                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CLASS -->
    <section class="class section" id="class">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-5">
                    <h2 data-aos="fade-up" data-aos-delay="200">Ambientes de Entrenamiento</h2>
                </div>
                <div class="col-lg-10 col-12 mx-auto">
                    <div id="gymCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#gymCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#gymCarousel" data-slide-to="1"></li>
                            <li data-target="#gymCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner shadow-lg rounded">                                            
                            <div class="carousel-item active">
                                <img src="images/class/yoga-class.jpg" class="d-block w-100 carousel-img" alt="Sala de Yoga">
                                <div class="carousel-caption">
                                    <h3 class="text-white">Zona de Flexibilidad</h3>
                                    <p class="text-white">Encuentra el equilibrio mental y físico en nuestro santuario de calma.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/class/crossfit-class.jpg" class="d-block w-100 carousel-img" alt="Área Crossfit">
                                <div class="carousel-caption">
                                    <h3 class="text-white">Área de Alta Intensidad</h3>
                                    <p class="text-white">Forja tu poder con equipamiento de nivel olímpico para titanes.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/class/cardio-class.jpg" class="d-block w-100 carousel-img" alt="Zona Cardio">
                                <div class="carousel-caption">
                                    <h3 class="text-white">Zona Cardiovascular</h3>
                                    <p  class="text-white">Equipamiento moderno para llevar tu resistencia al siguiente nivel.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#gymCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#gymCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- FOOTER -->
<footer class="site-footer">
    <div class="container">
        <div class="row">

            <!-- Columna 1: Identidad y Eslogan -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h4 class="text-white mb-3">Olimpo <span class="gold-text">Gym</span></h4>
                <p class="text-gray">Usted ha ingresado a la estancia de los titanes. Forjamos el carácter y definimos el destino a través de la disciplina.</p>
                
                <div class="footer-social-icons mt-4">
                    <a href="#" class="fa fa-facebook mr-3"></a>
                    <a href="#" class="fa fa-instagram mr-3"></a>
                    <a href="#" class="fa fa-whatsapp"></a>
                </div>
            </div>

            <!-- Columna 2: Contacto y Ubicación -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h4 class="text-white mb-3">Contacto</h4>
                <p>
                    <i class="fa fa-map-marker mr-2 gold-text"></i> 
                    Calle Aroma #536, Oruro, Bolivia.
                </p>
                <p>
                    <i class="fa fa-phone mr-2 gold-text"></i> 
                    +591 700-00000
                </p>
                <p>
                    <i class="fa fa-envelope-o mr-2 gold-text"></i> 
                    contacto@olimpogym.com
                </p>
            </div>

            <!-- Columna 3: Horarios rápidos -->
            <div class="col-lg-4 col-md-12 col-12">
                <h4 class="text-white mb-3">Horarios</h4>
                <p class="mb-1 text-gray">Lunes a Viernes: <span class="text-white">06:00 AM - 10:00 PM</span></p>
                <p class="mb-1 text-gray">Sábado: <span class="text-white">07:00 AM - 05:00 PM</span></p>
                <p class="mb-1 text-gray">Domingo: <span class="text-white">Cerrado</span></p>
            </div>

        </div>

        <!-- Línea de Copyright -->
        <div class="row mt-5 pt-3 border-top border-secondary">
            <div class="col-12 text-center">
                <p class="copyright-text">
                    Copyright &copy; 2024 Olimpo Gym. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </div>
</footer>


     <!-- SCRIPTS -->
    <script src={{asset("js/jquery.min.js")}}></script>
    <script src={{asset("js/bootstrap.min.js")}}></script> 
    <script src={{asset("js/aos.js")}}></script>
    <script src={{asset("js/smoothscroll.js")}}></script>
    <script src={{asset("js/custom.js")}}></script>
</body>
</html>