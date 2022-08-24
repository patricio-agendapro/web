@include('head')
@include('header')



    <section class="wrapper">
      <div class="container pb-14 pt-4 pt-md-14">
        <div class="row text-center">
          <div class="col-md-12 col-lg-12 mx-auto">
            <h3 class="display-3 ls-sm mb-4 px-xl-15">{{ __('Optimiza tu tiempo y digitaliza tu negocio.') }}</h3>
            <p class="fs-20 d-none d-md-block">{{ __('Miles de negocios en Latinoamérica han optimizado su gestión con AgendaPro, ¿Eres tú el próximo?') }}</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->

        <p class="mb-0 mb-md-0 mt-2 annual_text"><mark class="me-0 me-md-8">{{ __('Paga anual y obtén 2 meses Gratis') }}</mark></p>
        <div class="pricing-switcher-wrapper mt-2">
          <ul class="tabs_pricing nav nav-tabs nav-pills bg-soft-ash">
            <li class="nav-item"> 
              <a class="nav-link active" data-bs-toggle="tab">
                <span>{{ __('Mensual') }}</span>
              </a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" data-bs-toggle="tab">
                <span>{{ __('Anual') }}</span>
              </a> 
            </li>
          </ul>
          <!-- /.nav-tabs -->
        </div>  
        

        <div class="pricing-wrapper mb-10 mt-6 mb-md-14 ">
          <span class="text-selection-plan d-block d-md-none ps-2 text-dark">{{ __('Elige un plan a tu medida') }}</span>
          <div class="pricing-wrapper-mobile mb-10 mt-2 mb-md-14 d-block d-md-none bg-soft-ash">
            <ul class="tabs_pricing nav nav-tabs nav-pills bg-soft-ash">
              <li class="nav-item"> 
                <a class="nav-link" data-bs-toggle="tab" href="#tab1-1">
                  <span>{{ __('Individual') }}</span>
                </a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
                  <span>{{ __('Básico') }}</span>
                </a> 
              </li>
              <li class="nav-item"> 
                <a class="nav-link active" data-bs-toggle="tab" href="#tab1-3">
                  <span>{{ __('Premium') }}</span>
                </a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" data-bs-toggle="tab" href="#tab1-4">
                  <span>{{ __('Pro') }}</span>
                </a> 
              </li>
            </ul>
            <!-- /.nav-tabs -->
            <div class="tab-content">
              <div class="tab-pane fade" id="tab1-1">
                <div class="pricing card shadow-none">
                  <div class="card-body">
                    <h4 class="card-title ls-sm">{{ __('Individual') }}</h4>
                    <p>{{ __('Para independientes que necesitan de un aliado para controlar y hacer crecer su negocio.') }}</p>
                    <span class="text-dark">{{ __('Desde') }}:</span>
                    <div class="prices text-dark">
                      <div class="price justify-content-start"><span class="price-currency">$</span><span class="price-value">19.990</span></div>
                    </div>
                    <!--/.prices -->
                    <span class="text-dark">mes / CLP + IVA</span>
                    <div class="form-select-wrapper mt-2">
                      <select class="form-select" aria-label="Elija cantidad">
                        <option value="1" selected>1 profesional</option>
                        <option value="2">2 profesionales</option>
                        <option value="3">3 profesionales</option>
                      </select>
                    </div>
                    <a href="#" class="btn-pricing btn btn-primary rounded mt-4 mb-4">{{ __('Prueba Gratis') }}</a>
                    <span class="fs-16 text-dark">{{ __('Incluye') }}</span>
                    <ul class="icon-list bullet-green mt-2 mb-0">
                      <li><i class="uil uil-check"></i><span>Agenda online de citas y clases ilimitadas</span></li>
                      <li><i class="uil uil-check"></i><span>Gestión de clientes y CRM</span></li>
                      <li><i class="uil uil-check"></i><span>Recordatorios automáticos</span></li>
                      <li><i class="uil uil-check"></i><span><strong>50</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span><strong>1000</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span>Reportes de gestión</span></li>
                      <li><i class="uil uil-check"></i><span>Notificaciones y alertas diarias</span></li>
                      <li><i class="uil uil-check"></i><span>Pagos online</span></li>
                    </ul>
                    
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/.tab-pane -->
              <div class="tab-pane fade" id="tab1-2">
                <div class="pricing card shadow-none">
                  <div class="card-body">
                    <h4 class="card-title ls-sm">{{ __('Básico') }}</h4>
                    <p>{{ __('Para negocios que buscan organizarse, controlar su administración y hacer crecer sus ventas.') }}</p>
                    <span class="text-dark">{{ __('Desde') }}:</span>
                    <div class="prices text-dark">
                      <div class="price justify-content-start"><span class="price-currency">$</span><span class="price-value">29.900</span></div>
                    </div>
                    <!--/.prices -->
                    <span class="text-dark">mes / CLP + IVA</span>
                    <div class="form-select-wrapper mt-2">
                      <select class="form-select" aria-label="Elija cantidad">
                        <option value="1" selected>2 profesional</option>
                        <option value="2">2 profesionales</option>
                        <option value="3">3 profesionales</option>
                      </select>
                    </div>
                    <a href="#" class="btn-pricing btn btn-primary rounded mt-4 mb-4">{{ __('Prueba Gratis') }}</a>
                    <span class="fs-16 text-dark">{{ __('Incluye') }}</span>
                    <ul class="icon-list bullet-green mt-2 mb-0">
                      <li class="mb-3"><i class="fs-22 uil uil-arrow-circle-left"></i><span class="text-dark">Todas las funcionalidades de individual, más:</span></li>
                      <li><i class="uil uil-check"></i><span><strong>50</strong> confirmaciones de Whatsapp</span></li>
                      <li><i class="uil uil-check"></i><span><strong>5000</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span>Inventario</span></li>
                      <li><i class="uil uil-check"></i><span>Comisiones</span></li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/.tab-pane -->
              <div class="tab-pane fade show active" id="tab1-3">
                <div class="pricing card shadow-none">
                  <div class="card-body">
                    <span class="btn-bestchoise btn btn-secondary rounded-pill fs-14"><i class="uil uil-star me-1"></i> {{ __('Más popular') }}</span>
                    <h4 class="card-title ls-sm">{{ __('Premium') }}</h4>
                    <p>{{ __('Para empresas que buscan tener el control y llevar un seguimiento de pacientes/ clientes personalizable.') }}</p>
                    <span class="text-dark">{{ __('Desde') }}:</span>
                    <div class="prices text-dark">
                      <div class="price justify-content-start"><span class="price-currency">$</span><span class="price-value">49.900</span></div>
                    </div>
                    <!--/.prices -->
                    <span class="text-dark">mes / CLP + IVA</span>
                    <div class="form-select-wrapper mt-2">
                      <select class="form-select" aria-label="Elija cantidad">
                        <option value="1" selected>5 profesional</option>
                        <option value="2">2 profesionales</option>
                        <option value="3">3 profesionales</option>
                      </select>
                    </div>
                    <a href="#" class="btn-pricing btn btn-primary rounded mt-4 mb-4">{{ __('Prueba Gratis') }}</a>
                    <span class="fs-16 text-dark">{{ __('Incluye') }}</span>
                    <ul class="icon-list bullet-green mt-2 mb-0">
                      <li class="mb-3"><i class="fs-22 uil uil-arrow-circle-left"></i><span class="text-dark">Todas las funcionalidades de básico, más:</span></li>
                      <li><i class="uil uil-check"></i><span><strong>100</strong> confirmaciones de Whatsapp</span></li>
                      <li><i class="uil uil-check"></i><span><strong>10000</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span>Encuestas de satisfacción</span></li>
                      <li><i class="uil uil-check"></i><span>Fichas personalizables</span></li>
                      <li><i class="uil uil-check"></i><span>Personalización de diseño</span></li>
                      <li><i class="uil uil-check"></i><span>Giftcards</span></li>
                      <li><i class="uil uil-check"></i><span>Presupuestos</span></li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/.tab-pane -->
              <div class="tab-pane fade" id="tab1-4">
                <div class="pricing card shadow-none">
                  <div class="card-body">
                    <h4 class="card-title ls-sm">{{ __('Pro') }}</h4>
                    <p>{{ __('Para empresas que requieren integrar sistemas y utilizar todo el poder de AgendaPro para llegar al último nivel.') }}</p>
                    <span class="text-dark">{{ __('Desde') }}:</span>
                    <div class="prices text-dark">
                      <div class="price justify-content-start"><span class="price-currency">$</span><span class="price-value">129.900</span></div>
                    </div>
                    <!--/.prices -->
                    <span class="text-dark">mes / CLP + IVA</span>
                    <div class="form-select-wrapper mt-2">
                      <select class="form-select" aria-label="Elija cantidad">
                        <option value="1" selected>15 profesional</option>
                        <option value="2">2 profesionales</option>
                        <option value="3">3 profesionales</option>
                      </select>
                    </div>
                    <a href="#" class="btn-pricing btn btn-primary rounded mt-4 mb-4">{{ __('Prueba Gratis') }}</a>
                    <span class="fs-16 text-dark">{{ __('Incluye') }}</span>
                    <ul class="icon-list bullet-green mt-2 mb-0">
                      <li class="mb-3"><i class="fs-22 uil uil-arrow-circle-left"></i><span class="text-dark">Todas las funcionalidades del premium, más:</span></li>
                      <li><i class="uil uil-check"></i><span><strong>200</strong> confirmaciones de Whatsapp</span></li>
                      <li><i class="uil uil-check"></i><span><strong>20000</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span>Acceso a API</span></li>
                      <li><i class="uil uil-check"></i><span>Soporte personalizado por teléfono</span></li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <div class="d-none d-md-block">
            <div class="row gy-6 mt-3 mt-md-5">
              <div class="col-md-6 col-lg-3">
                <div class="pricing card shadow-none">
                  <div class="card-body">
                    <h4 class="card-title ls-sm">{{ __('Individual') }}</h4>
                    <p>{{ __('Para independientes que necesitan de un aliado para controlar y hacer crecer su negocio.') }}</p>
                    <span class="text-dark">{{ __('Desde') }}:</span>
                    <div class="prices text-dark">
                      <div class="price justify-content-start"><span class="price-currency">$</span><span class="price-value">19.990</span></div>
                    </div>
                    <!--/.prices -->
                    <span class="text-dark">mes / CLP + IVA</span>
                    <div class="form-select-wrapper mt-2">
                      <select class="form-select" aria-label="Elija cantidad">
                        <option value="1" selected>1 profesional</option>
                        <option value="2">2 profesionales</option>
                        <option value="3">3 profesionales</option>
                      </select>
                    </div>
                    <a href="#" class="btn-pricing btn btn-primary rounded mt-4 mb-4">{{ __('Prueba Gratis') }}</a>
                    <span class="fs-16 text-dark">{{ __('Incluye') }}</span>
                    <ul class="icon-list bullet-green mt-2 mb-0">
                      <li><i class="uil uil-check"></i><span>Agenda online de citas y clases ilimitadas</span></li>
                      <li><i class="uil uil-check"></i><span>Gestión de clientes y CRM</span></li>
                      <li><i class="uil uil-check"></i><span>Recordatorios automáticos</span></li>
                      <li><i class="uil uil-check"></i><span><strong>50</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span><strong>1000</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span>Reportes de gestión</span></li>
                      <li><i class="uil uil-check"></i><span>Notificaciones y alertas diarias</span></li>
                      <li><i class="uil uil-check"></i><span>Pagos online</span></li>
                    </ul>
                    
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/column -->
              <div class="col-md-6 col-lg-3">
                <div class="pricing card shadow-none">
                  <div class="card-body">
                    <h4 class="card-title ls-sm">{{ __('Básico') }}</h4>
                    <p>{{ __('Para negocios que buscan organizarse, controlar su administración y hacer crecer sus ventas.') }}</p>
                    <span class="text-dark">{{ __('Desde') }}:</span>
                    <div class="prices text-dark">
                      <div class="price justify-content-start"><span class="price-currency">$</span><span class="price-value">29.900</span></div>
                    </div>
                    <!--/.prices -->
                    <span class="text-dark">mes / CLP + IVA</span>
                    <div class="form-select-wrapper mt-2">
                      <select class="form-select" aria-label="Elija cantidad">
                        <option value="1" selected>2 profesional</option>
                        <option value="2">2 profesionales</option>
                        <option value="3">3 profesionales</option>
                      </select>
                    </div>
                    <a href="#" class="btn-pricing btn btn-primary rounded mt-4 mb-4">{{ __('Prueba Gratis') }}</a>
                    <span class="fs-16 text-dark">{{ __('Incluye') }}</span>
                    <ul class="icon-list bullet-green mt-2 mb-0">
                      <li class="mb-3"><i class="fs-22 uil uil-arrow-circle-left"></i><span class="text-dark">Todas las funcionalidades de individual, más:</span></li>
                      <li><i class="uil uil-check"></i><span><strong>50</strong> confirmaciones de Whatsapp</span></li>
                      <li><i class="uil uil-check"></i><span><strong>5000</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span>Inventario</span></li>
                      <li><i class="uil uil-check"></i><span>Comisiones</span></li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/column -->
              <div class="col-md-6 col-lg-3">
                <div class="pricing card bg-soft-aqua">
                  <div class="card-body">
                    <span class="btn-bestchoise btn btn-secondary rounded-pill fs-14"><i class="uil uil-star me-1"></i> {{ __('Más popular') }}</span>
                    <h4 class="card-title ls-sm">{{ __('Premium') }}</h4>
                    <p>{{ __('Para empresas que buscan tener el control y llevar un seguimiento de pacientes/ clientes personalizable.') }}</p>
                    <span class="text-dark">{{ __('Desde') }}:</span>
                    <div class="prices text-dark">
                      <div class="price justify-content-start"><span class="price-currency">$</span><span class="price-value">49.900</span></div>
                    </div>
                    <!--/.prices -->
                    <span class="text-dark">mes / CLP + IVA</span>
                    <div class="form-select-wrapper mt-2">
                      <select class="form-select" aria-label="Elija cantidad">
                        <option value="1" selected>5 profesional</option>
                        <option value="2">2 profesionales</option>
                        <option value="3">3 profesionales</option>
                      </select>
                    </div>
                    <a href="#" class="btn-pricing btn btn-primary rounded mt-4 mb-4">{{ __('Prueba Gratis') }}</a>
                    <span class="fs-16 text-dark">{{ __('Incluye') }}</span>
                    <ul class="icon-list bullet-green mt-2 mb-0">
                      <li class="mb-3"><i class="fs-22 uil uil-arrow-circle-left"></i><span class="text-dark">Todas las funcionalidades de básico, más:</span></li>
                      <li><i class="uil uil-check"></i><span><strong>100</strong> confirmaciones de Whatsapp</span></li>
                      <li><i class="uil uil-check"></i><span><strong>10000</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span>Encuestas de satisfacción</span></li>
                      <li><i class="uil uil-check"></i><span>Fichas personalizables</span></li>
                      <li><i class="uil uil-check"></i><span>Personalización de diseño</span></li>
                      <li><i class="uil uil-check"></i><span>Giftcards</span></li>
                      <li><i class="uil uil-check"></i><span>Presupuestos</span></li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/column -->
              <div class="col-md-6 col-lg-3">
                <div class="pricing card shadow-none">
                  <div class="card-body">
                    <h4 class="card-title ls-sm">{{ __('Pro') }}</h4>
                    <p>{{ __('Para empresas que requieren integrar sistemas y utilizar todo el poder de AgendaPro para llegar al último nivel.') }}</p>
                    <span class="text-dark">{{ __('Desde') }}:</span>
                    <div class="prices text-dark">
                      <div class="price justify-content-start"><span class="price-currency">$</span><span class="price-value">129.900</span></div>
                    </div>
                    <!--/.prices -->
                    <span class="text-dark">mes / CLP + IVA</span>
                    <div class="form-select-wrapper mt-2">
                      <select class="form-select" aria-label="Elija cantidad">
                        <option value="1" selected>15 profesional</option>
                        <option value="2">2 profesionales</option>
                        <option value="3">3 profesionales</option>
                      </select>
                    </div>
                    <a href="#" class="btn-pricing btn btn-primary rounded mt-4 mb-4">{{ __('Prueba Gratis') }}</a>
                    <span class="fs-16 text-dark">{{ __('Incluye') }}</span>
                    <ul class="icon-list bullet-green mt-2 mb-0">
                      <li class="mb-3"><i class="fs-22 uil uil-arrow-circle-left"></i><span class="text-dark">Todas las funcionalidades del premium, más:</span></li>
                      <li><i class="uil uil-check"></i><span><strong>200</strong> confirmaciones de Whatsapp</span></li>
                      <li><i class="uil uil-check"></i><span><strong>20000</strong> correos mensuales de marketing</span></li>
                      <li><i class="uil uil-check"></i><span>Acceso a API</span></li>
                      <li><i class="uil uil-check"></i><span>Soporte personalizado por teléfono</span></li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
            </div>
            <!--/.row -->
          </div>  
        </div>
        <!--/.pricing-wrapper -->
        
        <h2 class="display-4 mb-3 text-center">{{ __('Preguntas frecuentes') }}</h2>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">{{ __('Si no ves una respuesta a tu pregunta, no dudes en contactarnos.') }}</p>
        <div class="row mb-14 mb-md-18">
          <div class="col-lg-12 mb-0">
            <div id="accordion-1" class="accordion-wrapper">
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">{{ __('¿Los datos de mis clientes están seguros?') }}</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <p>{{ __('Si, tus datos están seguros, ya que seguimos estándares internacionales de seguridad. AgendaPro está alojado en Amazon Web Services, sin permisos de conexión pública, y además forzamos todas las transacciones para que sean a través de un protocolo seguro (TLS).') }}</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">{{ __('¿Cuáles son las modalidades de pago?') }}</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <p>{{ __('Puedes pagar con tarjetas de crédito, tarjetas de débito y PayPal.') }}</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">{{ __('¿Cómo funciona la suscripción?') }}</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <p>{{ __('Es un pago recurrente mensual o el equivalente anual.') }}</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">{{ __('¿Es necesario hacer un pago extra por el soporte o las asesorías?') }}</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <p>{{ __('El soporte está incluido en el precio junto a una asesoría para resolver dudas.') }}</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.accordion-wrapper -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <h2 class="display-4 mb-3 text-center">{{ __('Clientes felices') }}</h2>
        <p class="lead text-center mb-6 px-md-16 px-lg-0">{{ __('Nuestra satisfacción es ver a nuestros clientes crecer. Mira lo que dicen sobre AgendaPro.') }}</p>
        <div class="grid">
          <div class="row isotope gy-6">
            <div class="item col-md-6 col-xl-4">
              <div class="card">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>{{ __('“Con AgendaPro hemos logrado mantener el orden, la fiabilidad de los datos, que cada profesional pueda ver su agenda en el celular.”') }}</p>
                    <div class="blockquote-details">
                      <img class="rounded-circle w-12" src="https://dcx13p9dsx90t.cloudfront.net/uploads/logos/page_logo_6f4d17db1a79e451.png" alt="" />
                      <div class="info">
                        <h5 class="mb-1">Club de la Barba</h5>
                        <p class="mb-0">{{ __('Barbería') }}</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4">
              <div class="card">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>{{ __('“Con AgendaPro nuestro servicio al cliente ha mejorado muchisimo, nos permite estar organizados y hacer mucho seguimiento.”') }}</p>
                    <div class="blockquote-details">
                      <img class="rounded-circle w-12" src="https://agendapro.com/wp-content/uploads/2022/03/logo-casa-magica-colombia.jpg" alt="" />
                      <div class="info">
                        <h5 class="mb-1">Casa Mágica</h5>
                        <p class="mb-0">{{ __('Peluquería') }}</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4">
              <div class="card">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>{{ __('“AgendaPro no solo es un servicio muy profesional, si no también muy amigable que me motiva a organizar mi semana.”') }}</p>
                    <div class="blockquote-details">
                      <img class="rounded-circle w-12" src="https://dcx13p9dsx90t.cloudfront.net/uploads/logos/page_logo_a5ac7247a542849c.png" alt="" />
                      <div class="info">
                        <h5 class="mb-1">Kifit</h5>
                        <p class="mb-0">{{ __('Kinesiología') }}</p>
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

@include('pre_footer')
@include('footer')
