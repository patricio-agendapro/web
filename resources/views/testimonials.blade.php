@include('head')
@include('header')

    <section id="snippet-7" class="wrapper bg-light">
      <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Clientes felices</h2>
            <h3 class="display-4 mb-10 px-xl-10 px-xxl-15">No lo decimos nosotros, lo dicen nuestros clientes.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="grid">
          <div class="row isotope gy-6">
          @foreach ($testimonials as $testimonial)
            <div class="item col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body px-6 py-6">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p class="fs-16">“{{ $testimonial['text'] }}”</p>
                    <div class="info">
                      <h5 class="mb-1 fs-16">{{ $testimonial['name'] }}</h5>
                      <p class="mb-0 fs-16">{{ $testimonial['name_2'] }}</p>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            @endforeach
          </div>
          <!-- /.row -->
        </div>
        <!-- /.grid-view -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    
    <section class="wrapper bg-light">
      <div class="container py-12 py-md-12">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">El aliado perfecto</h2>
            <h3 class="display-4 mb-10 px-xl-10 px-xxl-15">¿Sigues sin convencerte? Conoce la experiencia de éxito de nuestros clientes.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      @foreach ($testimonials_video as $testimonial_video)
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14">
          <div class="col-md-8 col-lg-6 position-relative">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{ $testimonial_video['id_youtube'] }}"></div>
          </div>
          <!--/column -->
          <div class="col-lg-5 col-xl-4 offset-lg-1">
            <blockquote class="icon fs-lg">
              <p>“{{ $testimonial_video['testimonial'] }}”</p>
              <div class="blockquote-details">
                <div class="info ps-0">
                  <h5 class="mb-1">{{ $testimonial_video['name_testimonial'] }}</h5>
                  <p class="mb-0">{{ $testimonial_video['client_testimonial'] }}</p>
                </div>
              </div>
            </blockquote>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      @endforeach
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@include('pre_footer')
@include('footer')
