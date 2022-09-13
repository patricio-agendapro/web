@include('head')

@include('header_strip')

@include('header')

    <section class="wrapper">
      <div class="container pt-0 pb-12 pt-md-6 pb-md-12 text-center">
        <div class="card bg-soft-aqua rounded-4 mt-2 mb-14 mb-md-14">
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
              <a href="https://app.agendapro.com/sign_up" class="btn btn-lg btn-primary rounded">{{ __('Prueba Gratis') }}</a>
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
      <div class="container py-14 py-md-14">
        <!-- /.row -->
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">{{ __('Tenemos todo lo que necesitas para digitalizar tu negocio') }}</h2>
            <h3 class="display-4 mb-10">{{ __('¿Qué otras funcionalidades podrás encontrar dentro de AgendaPro?') }}</h3>
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
            <a href="/{{ $locale }}{{ $feature['url'] }}" class="more hover">{{ __('Saber más') }}</a>
          </div>
          <!--/column -->
        @endforeach

        </div>
        <!--/.row -->
        
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
     

    <section class="wrapper bg-white">
      <div class="container pt-14 pt-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7">
            <div class="row gx-md-5 gy-5">
                <img src="https://agendapro.com/wp-content/uploads/2021/04/Agenda-online@2x-1.png">

            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h3 class="display-4 mb-5">{{ __('¿Por qué utilizar un sistema para agendar horas?') }}</h3>
            <p>{{ __('Un software con agenda online funciona como un ERP para pymes. Es versátil, puede funcionar cómo agenda en tu peluquería o como herramienta para guardar la ficha clínica de los pacientes de un centro médico. El sistema te da la opción de crear tus propias aplicaciones para celular (aplicaciones móviles) como google app y tener el control de gestión de tu negocio.') }}</p>

            <p>{{ __('Además de poseer control de inventarios y ayudar a tu marketing. Todo en el mismo software administrativo para negocios. Agenda una demo y descubre cómo podemos ayudarte.') }}</p>
            <a href="/{{ $locale }}/testimonios" class="btn btn-primary rounded-pill mt-3">{{ __('Ver testimonios de nuestros clientes') }}</a>
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
