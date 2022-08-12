@include('head')
@include('header')

    <section class="wrapper">
      <div class="container pt-0 pb-12 pt-md-6 pb-md-12 text-center">
        <div class="card bg-soft-ash rounded-4 mt-2 mb-14 mb-md-14">
          <div class="card-body py-10 px-0">
            <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
              <div class="col-lg-6 order-lg-2 d-flex position-relative">
                <img width="100%" src="{{ $content['image_header'] }}" alt="">  
              </div>
              <!--/column -->
              <div class="col-lg-6 text-center text-lg-start px-10">
                <h1 class="display-2 mb-5">{{ $content['h1'] }}</h1>
                <p class="lead fs-lg lh-sm mb-7 pe-xl-10">{{ $content['h1_sub'] }}</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                  <span><a href="https://app.agendapro.com/sign_up" class="btn btn-lg btn-primary rounded-pill me-2">{{ __('Prueba Gratis') }}</a></span>
                </div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2 class="display-1 fs-24 mb-4 px-md-15 px-lg-0">{{ $content['h2'] }}</h2>
            <p class="lead fs-16 lh-sm mb-7 mx-md-13 mx-lg-10">{{ $content['h2_sub'] }}</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-md-8 gy-8 text-center mb-0">

        @foreach ($other_features as $feature)
          <div class="col-md-6 col-lg-3">
            <div class="mb-5"> <img src="{{ $feature['image'] }}"> </div>
            <h4>{{ $feature['title'] }}</h4>
            <p class="mb-3">{{ $feature['text'] }}</p>
            <a href="{{ $feature['url'] }}" class="more hover">{{ __('Saber más') }}</a>
          </div>
          <!--/column -->
        @endforeach

        </div>
        <!--/.row -->
      </div>
    </section>

  

    @foreach ($features_content as $feature_content)
      @if ($loop->even)
        @include('features_section_img_left')
      @endif
      @if ($loop->odd)
        @include('features_section_img_right')
      @endif
    @endforeach

    <section class="wrapper bg-light">  
      <div class="container text-center mb-14">
        <div class="row">
            <div>
              <a href="/" class="btn btn-lg btn-primary rounded">{{ __('Prueba Gratis') }}</a>
            </div>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
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
                <img  data-src="https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones_4.png" class="me-4 lazyload" alt="" />
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
                <img  data-src="https://agendapro.com/wp-content/uploads/2020/12/Control-de-inventarios_3.png" class="me-4 lazyload" alt="" />
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
                <img  data-src="https://agendapro.com/wp-content/uploads/2020/12/Fichas-clinicas.png" class="me-4 lazyload" alt="" />
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
                <img  data-src="https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja_4-2.png" class="me-4 lazyload" alt="" />
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
                <img  data-src="https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3.png" class="me-4 lazyload" alt="" />
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
                <img  data-src="https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3.png" class="me-4 lazyload" alt="" />
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
    

    <section class="wrapper bg-light angled lower-end">
      <div class="container py-14 py-md-16">
        <div class="row mb-5">
          <div class="col-md-10 col-xl-10 col-xxl-10 mx-auto text-center">
            <h2 class="display-4 mb-4 px-lg-14">{{ __('Un aliado digital pionero en Rebound Marketing.') }}</h2>
            <h3 class="fs-15 text-uppercase text-muted mb-3">{{ __('Sabías qué el 80% de tus ingresos proviene del 20% de tus clientes, y el Rebound Marketing sabe cómo encontrarlos y hacerlos crecer.') }}</h3>
            </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-8 order-lg-2">
            <div class="card me-lg-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">01</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">{{ __('CAPTA') }}</h4>
                    <p class="mb-0">{{ __('Crea tu agenda online e intégrala con todas tus redes sociales y tu publicidad digital. De esta manera comienzas a construir tu base de datos.') }}</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card ms-lg-8 me-lg-4 mt-2">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">02</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">{{ __('GESTIONA') }}</h4>
                    <p class="mb-0">{{ __('Simplifica y automatiza toda las tareas de tu negocio para dedicarte a lo más importante, su crecimiento.') }}</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card ms-lg-13 me-lg-2 mt-2">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">03</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">{{ __('RETIENE') }}</h4>
                    <p class="mb-0">{{ __('Retiene y fideliza a ese 20% de clientes que te genera el 80% de tus ingresos con herramientas de Marketing Automático.') }}</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card mx-lg-6 mt-2">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">04</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">{{ __('CRECE') }}</h4>
                    <p class="mb-0">{{ __('Transforma a esos clientes que vienen solo una vez a tu local en clientes fieles y frecuentes, y haz crecer tu negocio de la mano de AgendaPro.') }}</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-lg-4">
            <div class="row">
              <img class="lazyload" data-src="/assets/img/rocket_ap.png">
            </row>  
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
      <div class="container py-12 py-md-12">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-6">
          <h2 class="display-4 mb-4 px-lg-14 text-center">{{ __('¡Miles de profesionales confían en nosotros!') }} <i class="uil uil-heart"></i></h2>
          <div class="col-md-8 col-lg-6 position-relative">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="fE39Y0h7_Ng"></div>
          </div>
          <!--/column -->
          <div class="col-lg-5 col-xl-4 offset-lg-1">
            <blockquote class="icon fs-lg">
              <p>“Hemos utilizado varios software y han dejado mucho que desear. Hemos magnetizado con AgendaPro porque es muy amigable y me motiva a organizarme y mantener un orden.”</p>
              <div class="blockquote-details">
                <div class="info ps-0">
                  <h5 class="mb-1">Cristián Fogar</h5>
                  <p class="mb-0">Kifit Recovery – Centro de kinesiología</p>
                </div>
              </div>
            </blockquote>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@include('pre_footer')
@include('footer')
