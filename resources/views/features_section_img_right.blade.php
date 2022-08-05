    <section class="wrapper bg-light">
      <div class="container py-14 py-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6 position-relative">
            <h2 class="fs-15 text-uppercase text-muted mb-3">{{ $feature_content['title'] }}</h2>
            <h3 class="display-4 mb-5">{{ $feature_content['sub_title'] }}</h3>
            <p class="mb-5">{{ $feature_content['text'] }}</p>
            <p class="mb-5"><mark class="text-dark">{{ $feature_content['text_mark'] }}</mark><br>{{ $feature_content['text_2'] }}</p>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <div class="row">
                <img src="{{ $feature_content['image'] }}">
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
    </section>    
