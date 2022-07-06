<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="AgendaPro.">
  <meta name="author" content="elemis">
  <title>AgendaPro - Agenda online y Software de gestión</title>
  <link rel="shortcut icon" href="./assets/img/favicon.ico">

  <!---<link rel="preload" href="./assets/fonts/roboto/roboto-400.woff2" as="font" crossorigin="anonymous" />
  <link rel="preload" href="./assets/fonts/roboto/roboto-500.woff2" as="font" crossorigin="anonymous" />
  <link rel="preload" href="./assets/fonts/roboto/roboto-700.woff2" as="font" crossorigin="anonymous" />--->

  <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2" as="font" crossorigin="anonymous" />
  <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2" as="font" crossorigin="anonymous" />
  <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2" as="font" crossorigin="anonymous" />
  <link rel="preload" href="./assets/fonts/unicons/Unicons.woff2" as="font" crossorigin="anonymous" />

  <style>

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Unicons';
    src: url('assets/fonts/unicons/Unicons.woff2') format('woff2');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
  }
  </style>
  
  <link rel="stylesheet" href="./assets/css/style.css" rel="preload" as="style">

</head>


<body class="home">
  <div class="content-wrapper">
    <header class="wrapper">
      <div class="bg-soft-yellow text-leaf fs-13 mb-2 d-none d-lg-block">
        <div class="container py-2 d-md-flex flex-md-row">
          <div class="d-flex flex-row align-items-center">
            <span>Desde nuestro Blog: <a class="link-leaf hover-3 more" href="#">Pérdida de clientes: Causas y cómo evitarlas</a></span>
          </div>
          <div class="d-flex flex-row align-items-center me-6 ms-auto">
            <div class="icon text-leaf fs-18 mt-0 me-1"> <i class="uil uil-phone-volume"></i></div>
            <p class="mb-0">+562 2938 1145</p>
          </div>
          <div class="d-flex flex-row align-items-center">
            <div class="icon text-leaf fs-18 mt-0 me-1"> <i class="uil uil-message"></i></div>
            <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-leaf hover">contacto@agendapro.com</a></p>
          </div>
        </div>
        <!-- /.container -->
      </div>
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              <img src="./assets/img/logo.png" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">AgendaPro</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column h-100 nav-agendapro-menu">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Rubros</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Funcionalidades</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="dropdown">Precios</a>
                </li>
                
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">contacto@agendapro.com</a>
                  <br /> +562 2938 1145<br />
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!--<li class="nav-item d-none d-md-block">
                <a class="nav-link link-green" href="tel:56229381145">+562 2938 1145</a>
              </li>-->
              <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-outline-primary rounded">Login</a>
              </li>
              <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-primary rounded">Prueba Gratis</a>
              </li>
              <li class="nav-item dropdown language-select">
                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img width="24" src="https://agendapro.com/wp-content/uploads/flags/cl-bandera.png" alt=""></a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="#"><img width="24" src="https://agendapro.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/co.png" alt=""> Colombia</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#"><img width="24" src="https://agendapro.com/wp-content/uploads/flags/mx-bandera.png" alt=""> México</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#"><img width="24" src="https://agendapro.com/wp-content/uploads/flags/ar-bandera.png" alt=""> Argentina</a></li>
                </ul>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      
    </header>
    <!-- /header -->
    <section class="wrapper clients-section">
      <div class="container pt-10 pb-0 pt-md-18 pb-md-0 text-center">
        <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-14 mb-md-14 mb-lg-16 align-items-center">
          <div class="col-md-9 offset-md-1 col-lg-7 offset-lg-1 position-relative order-lg-2">
            <figure class="rounded"><img src="https://agendapro.com/wp-content/uploads/2021/03/Home_-Crea-tu-agenda-online@2x-8.png" srcset="https://agendapro.com/wp-content/uploads/2021/03/Home_-Crea-tu-agenda-online@2x-8.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-4 mt-lg-n10 text-center text-lg-start">
            <h1 class="display-1 mb-5">Crea tu agenda online y haz <span class="underline-3 style-3 primary">crecer</span> tu negocio.</h1>
            <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">Gestiona tus citas, clientes y ventas en un mismo lugar.</p>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <span><a class="btn btn-green rounded">Prueba Gratis</a></span>
            </div>
          </div>
          <!--/column -->
        </div>
        <!-- /.row -->
        <h2 class="fs-20 text-uppercase text-muted text-center mb-8">Más de <span class="underline-3 style-1 green clients_qty">4.000</span> clientes confían en nosotros</h2>
        <div class="px-lg-5 mb-0 mb-md-16 clients">
          <div class="row gx-0 gx-md-8 gx-xl-6 gy-8 align-items-center">
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="https://dcx13p9dsx90t.cloudfront.net/uploads/logos/logo_c4227e3319b972c4.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="https://dcx13p9dsx90t.cloudfront.net/uploads/logos/logo_a3bbd07b19cc81e7.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="https://dcx13p9dsx90t.cloudfront.net/uploads/logos/logo_44b3d414e287d740.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="https://dcx13p9dsx90t.cloudfront.net/uploads/logos/logo_ee7e2d2aaa007684.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="https://dcx13p9dsx90t.cloudfront.net/uploads/logos/logo_a9ed188ea9777b21.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="https://dcx13p9dsx90t.cloudfront.net/uploads/logos/logo_b0f3661469318162.png" alt="" /></figure>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /div -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light features-section">
      <div class="container py-8 py-md-0 mb-2 mb-md-14 mt-md-16">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">La única forma de crecer es manteniendo el orden</h2>
            <h3 class="display-4 mb-10">Simplifica tu <mark>día a día</mark> y haz crecer tu negocio</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-10 mb-lg-12 align-items-center">
          <div class="col-lg-12 features-icons">
            <div class="row gx-lg-4 gx-xl-4 mt-10 mb-4 process-wrapper arrow text-center">
              <div class="col-md-4"> <img src="https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja_4-2.png" class="mb-4" alt="" />
                <h3 class="fs-18">Toma el control</h3>
                <p>Mantén a tu agenda, equipo, clientes e ingresos en orden.</p>
              </div>
              <!--/column -->
              <div class="col-md-4"> <img src="https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones_4.png" class="mb-4" alt="" />
                <h3 class="fs-18">Ahorra tiempo</h3>
                <p>Deja que tus clientes agenden por si mismos.</p>
              </div>
              <!--/column -->
              <div class="col-md-4"> <img src="https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3.png" class="mb-4" alt="" />
                <h3 class="fs-18">Aumenta ingresos</h3>
                <p>Evita inasistencias con recordatorios.</p>
              </div>
              <!--/column -->
            </div>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-aqua">
      <div class="container py-14 pt-md-14 pb-md-19">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 align-items-center">
          <div class="col-lg-5 text-center text-lg-start">
            <h3 class="display-4 mb-3 text-navy">¡Miles de profesionales confían en nosotros!</h3>
          </div>
          <!-- /column -->
          <div class="col-lg-7 mt-lg-2">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
              <div class="col-md-4">
                <h3 class="counter counter-md text-green">+30.000</h3>
                <p class="text-leaf">Profesionales</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <h3 class="counter counter-md text-green">+4.000</h3>
                <p class="text-leaf">Clientes</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <h3 class="counter counter-md text-green">+1.800.000</h3>
                <p class="text-leaf">Reservas al mes</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
      <div class="container pt-16 pt-md-17">
        <div class="mb-14 mb-md-17">
          <div class="row gy-6 mt-n19 mt-md-n22">
            <div class="item col-sm-12 col-md-4 col-xl-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>“AgendaPro es más que una agenda, es un sistema de gestión de tu negocio y es mi varita mágica para poder crecer.”</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">Pamela Barrientos</h5>
                        <p class="mb-0">NCA – Centro de Estética</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-sm-12 col-md-4 col-xl-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>“Con AgendaPro se me ha facilitado mucho el trabajo con los clientes y mantenemos un proceso totalmente organizado.”</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">Jennifer Durango</h5>
                        <p class="mb-0">Casa Mágica – Salón de Belleza</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-sm-12 col-md-4 col-xl-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>“Con AgendaPro van a optimizar sus tiempos y van a tener una mejor calidad en la atención de sus clientes.”</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">Javier Balmori</h5>
                        <p class="mb-0">Balmori Aesthetics Center</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.grid-view -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-white growth-section">
      <div class="container pt-10">
        <div class="row gx-3 gy-10 gy-lg-0 mb-12 mb-md-17 align-items-center">
          <div class="col-lg-5 mx-auto order-lg-2">
            <div class="row gx-md-5 gy-5 position-relative">
              <img src="./assets/img/crecer.png">
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
          <div class="col-lg-5 me-auto">
            <h2 class="fs-16 text-uppercase text-leaf mb-3">¿Cómo hacemos crecer tu negocio?</h2>
            <h3 class="display-4 mb-5 pe-xxl-5">Nosotros nos encargamos de hacer crecer tu negocio.</h3>
            <p class="mb-6">Sabías qué el 80% de tus ingresos proviene del 20% de tus clientes, y el Rebound Marketing sabe cómo encontrarlos y hacerlos crece </p>
            <div class="row align-items-center counter-wrapper gy-6">
              <div class="col-6">
                <h3 class="counter counter-lg mb-1 text-green">+49%</h3>
                <h6 class="fs-20 mb-1 text-leaf">12 Meses</h6>
              </div>
              <!--/column -->
              <div class="col-6">
                <h3 class="counter counter-lg mb-1 text-green">+82%</h3>
                <h6 class="fs-20 mb-1 text-leaf">24 Meses</h6>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light more-section">
      <div class="container py-10 mb-0 mb-md-10 mt-8">

        <div class="row text-center">
          <div class="col-lg-9 col-xl-8 mx-auto">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Y aún tenemos mucho más para gestionar tu negocio.</h2>
            <h3 class="display-4 mb-10 px-xxl-10">Automatiza y ahorra con las siguientes herramientas.</h3>
          </div>
          <!-- /column -->
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-8">
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div class="more-image">
                <img src="https://agendapro.com/wp-content/uploads/2020/12/Fichas-clinicas.png" class="me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Ficha/Historia Clínica</h4>
                <p class="mb-0">Lleva toda la información de tus pacientes de forma segura y accesible en la nube.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div class="more-image">
                <img src="https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones_4.png" class="me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Control de comisiones</h4>
                <p class="mb-0">Calcula automáticamente las comisiones de de los profesionales de tu centro.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div class="more-image">
                <img src="https://agendapro.com/wp-content/uploads/2020/12/Control-de-inventarios_3.png" class="me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Sistema de inventario online</h4>
                <p class="mb-0">Lleva el control de tu inventario en tiempo real.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div class="more-image">
                <img src="https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja_4-2.png" class="me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Control de caja</h4>
                <p class="mb-0">Controla tus ingresos y egresos en tiempo real para ver cuánto ganas cada día.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div class="more-image">
                <img src="https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3.png" class="me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Pago online</h4>
                <p class="mb-0">DPermite a tus clientes pagar directamente desde la página web.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div class="more-image">
                <img src="https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3.png" class="me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Reportes y estadísticas</h4>
                <p class="mb-0">Toma decisiones inteligentes a partir de los reportes de tu negocio.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
    </section>

    <section class="wrapper bg-light cta-section mt-15 mb-0">
      <div class="container">
        <div class="card image-wrapper bg-full bg-image signup_cta" data-image-src="./assets/img/photos/bg2.jpg">
          <div class="card-body p-9 py-xl-15">
            <div class="row align-items-center gy-6">
              <div class="col-lg-7">
                <h3 class="display-5 text-navy">¿Ya estás listo para empezar?</h3>
                <p class="lead pe-lg-12 mb-0 text-navy">Si aún tienes dudas, nos encantaria mostrarte todas nuestras funcionalidades en una breve demo online. ¡Contáctanos!.</p>
              </div>
              <!-- /column -->
              <div class="col-lg-5 col-xl-5">
                <div class="newsletter-wrapper">
                  <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup2">
                      <div class="d-flex justify-content-center">
                      <span><a class="btn btn-primary rounded mx-1">Empezar!</a></span>
                      <span><a class="btn btn-outline-primary rounded mx-1">Agenda una Demo</a></span>
                    </div>
                  </div>
                  <!--End mc_embed_signup-->
                </div>
                <!-- /.newsletter-wrapper -->
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="row gy-6 gy-lg-0 mt-17 mb-0">
          <div class="col-md-3 col-lg-3">
            <div class="widget">
              <h4 class="widget-title  mb-3">Estética</h4>
              <ul class="list-unstyled text-reset mb-4">
                <li><a href="#">Centros de estética</a></li>
                <li><a href="#">Spas</a></li>
              </ul>
              <h4 class="widget-title  mb-3">Salud</h4>
              <ul class="list-unstyled text-reset mb-4">
                <li><a href="#">Centros médicos</a></li>
                <li><a href="#">Clínicas</a></li>
                <li><a href="#">Centros de fisioterapia</a></li>
                <li><a href="#">Kinesiólogos</a></li>
                <li><a href="#">Psicólogos</a></li>
                <li><a href="#">Consulta médica particular</a></li>
                <li><a href="#">Medicina alternativa</a></li>
                <li><a href="#">Centros de podología</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <div class="col-md-3 col-lg-3">
            <div class="widget">
              <h4 class="widget-title  mb-3">Belleza</h4>
              <ul class="list-unstyled text-reset mb-4">
                <li><a href="#">Barberías</a></li>
                <li><a href="#">Peluquerías</a></li>
                <li><a href="#">Salones de belleza</a></li>
                <li><a href="#">Salones de manicure</a></li>
              </ul>
              <h4 class="widget-title  mb-3">Bienestar</h4>
              <ul class="list-unstyled text-reset mb-4">
                <li><a href="#">Centros deportivos</a></li>
                <li><a href="#">Centros de crossfit</a></li>
                <li><a href="#">Estudios de yoga</a></li>
                <li><a href="#">Gimnasios</a></li>
              </ul>
              <h4 class="widget-title  mb-3">Negocios</h4>
              <ul class="list-unstyled text-reset mb-4">
                <li><a href="#">Otros negocios</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
          <div class="col-md-3 col-lg-3">
            <div class="widget">
              <h4 class="widget-title  mb-3">Capta</h4>
              <ul class="list-unstyled text-reset mb-4">
                <li><a href="#">Agenda Online</a></li>
                <li><a href="#">Agenda Médica</a></li>
                <li><a href="#">Reservas Online</a></li>
                <li><a href="#">Aplicación móvil</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Integración con redes sociales</a></li>
              </ul>
              <h4 class="widget-title  mb-3">Retiene</h4>
              <ul class="list-unstyled text-reset mb-4">
                <li><a href="#">Encuesta de satisfacción</a></li>
                <li><a href="#">Fidelización de clientes</a></li>
                <li><a href="#">Charly</a></li>
                <li><a href="#">Giftcards</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <div class="col-md-3 col-lg-3">
            <div class="widget">
              <h4 class="widget-title  mb-3">Gestiona</h4>
              <ul class="list-unstyled text-reset mb-4">
                <li><a href="#">Recordatorios automáticos</a></li>
                <li><a href="#">Ficha Clínica</a></li>
                <li><a href="#">Sistema de caja</a></li>
                <li><a href="#">Facturación electrónica</a></li>
                <li><a href="#">Control de inventarios</a></li>
                <li><a href="#">Gestión de clientes</a></li>
                <li><a href="#">Almacenamiento en la nube</a></li>
                <li><a href="#">Teleconsulta</a></li>
                <li><a href="#">Reportes de gestión</a></li>
                <li><a href="#">Integraciones / API</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
        </div>
        <!--/.row -->  
      </div>  
    </section>
  </div>
  <!-- /.content-wrapper -->

 
  <footer class="bg-soft-aqua mt-15">
    <div class="container mt-10 pb-7">
      <div class="row mt-15 mb-12">
        <div class="col-md-4 col-lg-4">
          <div class="widget">
            <img class="mb-4" src="./assets/img/logo@2x.png" srcset="./assets/img/logo@2x.png 2x" alt="" />
            <nav class="nav social ">
              
              <span class="avatar bg-pale-primary text-primary w-9 h-9"><a href="#"><i class="uil text-green uil-instagram"></i></a></span>
              <span class="avatar bg-pale-primary text-primary w-9 h-9"><a href="#"><i class="uil text-green uil-facebook-f"></i></a></span>
              <span class="avatar bg-pale-primary text-primary w-9 h-9"><a href="#"><i class="uil text-green uil-twitter"></i></a></span>
              <span class="avatar bg-pale-primary text-primary w-9 h-9"><a href="#"><i class="uil text-green uil-linkedin"></i></a></span>
              <span class="avatar bg-pale-primary text-primary w-9 h-9"><a href="#"><i class="uil text-green uil-youtube"></i></a></span>
            </nav>
            <!-- /.social -->
          </div>  
          <div class="widget">  
            <h4 class="widget-title mt-6">Contacto</h4>
            <ul class="list-unstyled text-reset mb-4 mt-2">
              <li><i class="uil uil-envelope-alt"></i> <a href="#">contacto@agendapro.com</a></li>
              <li><i class="uil uil-phone"></i> <a href="#">Chile: +56 2 2938 1145</a></li>
              <li><i class="uil uil-phone"></i> <a href="#">Colombia: +57 60 1 5087362</a></li>
              <li><i class="uil uil-phone"></i> <a href="#">México: +52 55 41613780</a></li>
            </ul>
            <p>AgendaPro. Gunei Investment SpA</p>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        
        <div class="col-md-4 col-lg-4">
          <div class="widget">
            <h4 class="widget-title  mb-3">Más en AgendaPro</h4>
            <ul class="list-unstyled text-reset mb-4">
              <li><a href="#">Blog</a></li>
              <li><a href="#">Ayuda</a></li>
              <li><a href="#">Marketplace</a></li>
              <li><a href="#">Políticas de privacidad</a></li>
              <li><a href="#">Términos y condiciones</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget mobile_apps">
            <h4 class="widget-title mb-4">Descarga la app</h4>			
            <a href="https://hubs.ly/H0rf2wQ0"><img src="https://agendapro.com/wp-content/uploads/2021/01/App-Store.png" alt="" width="149" height="50"></a> <a href="https://hubs.ly/H0rdYSd0"><img src="https://agendapro.com/wp-content/uploads/2021/01/Google-Play-1.png" alt="" width="149" height="50"></a>
          </div>
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-4">
          <div class="widget investors">
            <h4 class="widget-title mb-3">Nos están apoyando</h4>
            <div class="row">
              <div class="logo col-6">
                <img src="./assets/img/investors/ycombinator.png">
              </div>
              <div class="logo col-6">
                <img src="https://agendapro.com/wp-content/uploads/2021/01/Corfo.png">
              </div>
            </div>  
            <div class="row">
              <div class="logo col-6">
                <img src="https://agendapro.com/wp-content/uploads/2021/01/Imagine-lab.png">
              </div>
              <div class="logo col-6">
                <img src="https://agendapro.com/wp-content/uploads/2021/01/UDD-Ventures.png">
              </div>
            </div>  
          </div>
          <div class="widget">
            <h4 class="widget-title mt-6">Subscribete a nuestro newsletter</h4>
            <p class="mb-3">Te enviaremos las últimas noticias, ofertas y promociones.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate " target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">Correo electrónico</label>
                      <input type="submit" value="Subscribirse" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
          
        </div>
        <!-- /column -->   
      </div>    
      <hr class="mt-0 mb-0" />
      
    </div>
    <!-- /.container -->
  </footer>
  <section class="wrapper bg-soft-aqua sub-footer">
    <div class="container mt-4 pb-7">
      <div class="d-md-flex align-items-center justify-content-between">
        <p class="mb-2 mb-lg-0">AgendaPro se hace con <i class="uil uil-heart text-red"></i> desde <span class="typer" data-words="Chile,Colombia,México,Argentina" data-delay="100" data-deleteDelay="1000"></span></p>


        <span class="comodo"><img src="./assets/img/comodo.png"></span>
        <!-- /.social -->
      </div>
      <!-- /div -->
    </div>
  </section>

  <script src="./assets/js/app.js"></script>
</body>

</html>