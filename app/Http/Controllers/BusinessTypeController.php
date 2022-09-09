<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

class BusinessTypeController extends Controller
{
    public function __construct()
    {
        ////se setea el locale para el lenguaje
        set_locale();

        $this->seo = seo();
        $this->seo = app(SeoService::class);
        $this->seo = Seo::make();

        $this->seo->meta('robots', 'index, follow');
        $this->seo->canonical('https://agendapro.com/es/' . get_url_without_locale());
        $hreflangs['link'][] = ['rel' => 'alternate','hreflang' => 'x-default','href' => 'https://agendapro.com/es/' . get_url_without_locale()];
        foreach (config('country') as $id_country=>$country){
            $hreflangs['link'][] = ['rel' => 'alternate','hreflang' => $country['lang_location'],'href' => 'https://agendapro.com/' . $id_country . '/' . get_url_without_locale()];
        }
        $this->seo->addFromArray($hreflangs);
  
        $this->testimonials = [
            'fE39Y0h7_Ng' => [
                "id_youtube" => "fE39Y0h7_Ng",
                "testimonial" => "Hemos utilizado varios software y han dejado mucho que desear. Hemos magnetizado con AgendaPro porque es muy amigable y me motiva a organizarme y mantener un orden.",
                "name_testimonial" => "Cristián Fogar",
                "client_testimonial" => "Kifit Recovery – Centro de kinesiología",
            ],
            '1jF-yBrjzMo' => [
                "id_youtube" => "1jF-yBrjzMo",
                "testimonial" => "Hace 10 años atrás utilizaba un cuaderno para apuntar a mis pacientes, era tedioso y se prestaba para errores. Luego empecé a utilizar AgendaPro y todo cambió. Siempre me responden cuando tengo un problema, es una agenda práctica y super amigable.",
                "name_testimonial" => "Pamela Barrientos",
                "client_testimonial" => "NCA – Nutrición Cuerpo y Alma",
            ],
            'LFQM39UXpdI' => [
                "id_youtube" => "LFQM39UXpdI",
                "testimonial" => "Llevo 3 años y medio con AgendaPro, me gusta el orden, la fiabilidad y la constante actualización. Manejo todo con el software, hemos logrado mantener el orden, la estructura y la fiabilidad en los datos.",
                "name_testimonial" => "Lukas Parolin",
                "client_testimonial" => "Club de la barba – Barbería",
            ],
            'Zqjt_lr1fBU' => [
                "id_youtube" => "Zqjt_lr1fBU",
                "testimonial" => "Al principio anotábamos todo en papeles y los clientes se molestaban por la falta de organización.
                Con AgendaPro es mucho más fácil y rápido. Nuestra atención al cliente ha mejorado mucho.",
                "name_testimonial" => "Jennifer Durango",
                "client_testimonial" => "Casa Mágica – Salón de belleza",
            ],
            
        ];

    }

    public function software_para_gimnasio($locale)
    {
        $this->seo->title(__('Software para gimnasio') . " - AgendaPro");
        $this->seo->meta('description', __('Fideliza a tus clientes, y aumenta los ingresos de tu Centro con el software para Gimnasio de AgendaPro. Haz click acá y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para gimnasio"),
            "h1_sub" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2_sub" => __("Cambia la forma de gestionar tu gimnasio y preocúpate de lo más importantes ¡Tus Clientes!"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Gimnasios@3x-8-1.png",
            "other_features_text" => "Nunca había sido tan fácil dirigir un gimnasio",
            "testimonial" => $this->testimonials['fE39Y0h7_Ng'],
        );

        $business_features = [
            [
                'title' => __('Seguimiento de pagos'), 
                'text' => __('¿No sabes que miembros han pagado y cuales no?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-15.png',
            ],
            [
                'title' => __('Agenda organizada'), 
                'text' => __('¿No sabes quien va a tus clases, ni cuantos cupos te quedan?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-16.png',
            ],
            [
                'title' => __('Orden total de caja'), 
                'text' => __('¿No sabes cuales son tus ingresos?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-17.png',
            ],
            [
                'title' => __('Comsiones automatizadas'), 
                'text' => __('¿No tienes una herramienta que calcule de manera automática las comisiones?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-18.png',
            ],
        ];

        $features_content[] = [
            'title' => __('MEMBRESÍAS O PLANES'), 
            'sub_title' => __('Ofrece planes con cobro mensual o anual'), 
            'text' => __('Con AgendaPro podrás llevar el conteo de las clases de tus clientes y el vencimiento de su plan contratado. Lo cual te permitirá tener al día todos los ingresos de tu gimnasio.'), 
            'text_mark' => __('Planes personalizados'), 
            'text_2' => __('Con los planes de AgendaPro podrás crear grupos de clases que se adapten a las necesidades de tus clientes, de esta manera podrás crear ofertas atractivas y que sean pensadas para que tu cliente enganche con tu gimnasio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gimnasio-1-8.png',
            'url' => '/planes',
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Permite a tus clientes reservar directamente en tu agenda online'), 
            'text' => __('Con el sitio de reservas de AgendaPro, tus clientes tendrán un lugar digital para agendar una clase. Podrás integrarlo con tu página web y agregarlo a tus redes sociales.'), 
            'text_mark' => __('Mantén tu agenda actualizada y accesible'), 
            'text_2' => __('Una vez tus clientes agenden, se actualizará automáticamente tu agenda y podrás realizar modificaciones desde cualquier dispositivo con acceso a internet.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gimnasio-2-8.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('CONTROL DE CAJA'), 
            'sub_title' => __('Lleva en tiempo real tus recaudaciones'), 
            'text' => __('Mantén al día todos los ingresos y egresos de tu negocio para tener un flujo de caja saludable. De esta manera podrás tomar decisiones financieras inteligentes.'), 
            'text_mark' => __('Caja conectada con la gestión de tu negocio'), 
            'text_2' => __('AgendaPro conecta las reservas, los pagos y la facturación con la caja de tu negocio. De esta manera no tendrás que preocuparte por más nada, solo dedicarte a tus clientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Sistema-de-caja-AgendaPro-1.png',
            'url' => '/sistema-de-caja',
        ];

        $features_content[] = [
            'title' => __('CÁLCULO DE COMISIONES'), 
            'sub_title' => __('Obtén el cálculo exacto de las comisiones de tus instructores'), 
            'text' => __('Cácula de manera automática y en todo momento las comisiones de tus instructores por los asistentes a sus clases. De esta manera evitarás errores y mantendrás tus prestadores felices.'), 
            'text_mark' => __('No pierdas tiempo y evita dolores de cabeza'), 
            'text_2' => __('Como el cálculo de las comisiones es automático, no perderas tiempo sacando cuentas y no tendrás que hacer el mach entre las clases, los asistentes y los pagos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gimnasio-4-8.png',
            'url' => '/reporte-de-comisiones',
        ];

        $other_features = [
            [
                'title' => __('Email Marketing'), 
                'text' => __('Envía correos masivos a tu base de clientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Mail_5-2.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Reportes de gestión'), 
                'text' => __('Mantén al día el funcionamiento de tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3-1.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Charly'), 
                'text' => __('Tu asistente de marketing inteligente'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Charly_4-1.png',
                'url' => '/charly',
            ],
            [
                'title' => __('App personalizada'), 
                'text' => __('Tu negocio directamente en el celular de tus clientes.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Aplicacion-movil_3-1.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Fidelización de clientes'), 
                'text' => __('Fideliza a tus clientes para aumentar tus reservas'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-clientes_3-3.png',
                'url' => '/fidelizacion-de-clientes',
            ],
            [
                'title' => __('Rebound marketing'), 
                'text' => __('La nueva manera de aumentar tus reservas a través de tus clientes fieles'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function centros_de_estetica($locale)
    {
        $this->seo->title(__('Software para centros de estética') . " - AgendaPro");
        $this->seo->meta('description', __('Ahorra tiempo y aumenta los ingresos de tu Centro con el Software para Centros de Estética de AgendaPro. Haz click acá y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para centros de estética"),
            "h1_sub" => __("Gestión tratamientos, pacientes y ventas en un mismo lugar"),
            "h2" => __("Simplificamos tu día a día y hacemos crecer tu estética"),
            "h2_sub" => __("Gestión de tratamientos, pacientes y ventas en un mismo lugar"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Banner-Mobile_-Centros-de-estetica-50-1.jpg",
            "other_features_text" => "Todas las funcionalidades para dirigir tu centro de estética en automático.",
            "testimonial" => $this->testimonials['1jF-yBrjzMo'],
        );

        $business_features = [
            [
                'title' => __('Controla al 100% los tratamientos'), 
                'text' => __('¿El registro de uso y pago de los tratamientos es confuso y desordenado?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Mantén un registro digital'), 
                'text' => __('¿Pierdes tiempo buscando las fichas del paciente que estás atendiendo?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Ficha-clinica-1.png',
            ],
            [
                'title' => __('Evita las inasistencias de pacientes'), 
                'text' => __('¿Tus pacientes olvidan y no completan sus tratamientos lo que repercute en una mala experiencia?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Integra tu agenda con redes sociales'), 
                'text' => __('¿Tienes poca interacción con redes sociales, y con tus pacientes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-18.png',
            ],
        ];

        $features_content[] = [
            'title' => __('CONTROL DE TRATAMIENTOS'), 
            'sub_title' => __('Controla la cantidad de sesiones de un tratamiento directamente en tu agenda'), 
            'text' => __('El control de tratamientos de AgendaPro integra directamente tu ficha clínica electrónica con tu agenda online para que puedas ver la cantidad de sesiones utilizadas por cada paciente.'), 
            'text_mark' => __('Se vincula con tu caja de ventas'), 
            'text_2' => __('La agenda online se vincula también a la caja de ventas, lo que te permite ver los tratamientos pagados en su totalidad, los pagados parcialmente, y los no pagados.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Imagen-1_-Centro-de-estetica-100-1.jpg',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('FICHAS DE PACIENTE ONLINE'), 
            'sub_title' => __('Organiza toda la información de tus pacientes de forma digital, segura y accesible'), 
            'text' => __('Con la ficha de AgendaPro podrás tener toda la información relevante de tus pacientes en un solo lugar. Tendrás la posibilidad de anexar exámenes con imágenes directamente a la ficha.'), 
            'text_mark' => __('La ficha es 100% personalizable'), 
            'text_2' => __('Si ya utilizas una o más fichas en papel, las fichas de AgendaPro son 100% personalizables y se adaptan a tu Centro de estética. Podemos replicar el formato que estás acostumbrada a utilizar de una forma digital, de manera que tengas todo en la nube.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Imagen-2_-Centro-de-estetica-8-3.png',
            'url' => '/ficha-clinica',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Evita las inasistencias con recordatorios a través de Whatsapp, SMS, o correo electrónico'), 
            'text' => __('Automatiza los recordatorios de cita de tus pacientes y libera tiempo cada mañana y tarde de tu día a día, no más errores ni inasistencias. Los recordatorios están integrados directamente con tu agenda online.'), 
            'text_mark' => __('Deja de sufrir con las inasistencias o “no-shows”'), 
            'text_2' => __('Al recibir un recordatorio, el paciente podrá confirmar, re-agendar, o cancelar su reserva, lo que se refleja automáticamente en tu calendario de AgendaPro.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Imagen-3_-Centro-de-estetica-8-3.png',
            'url' => '/recordatorios-automaticos',
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Permite a tus pacientes reservar una cita a través de redes sociales o tu sitio web'), 
            'text' => __('Tus pacientes podrán agendar citas durante las 24 horas del día. La agenda online se integra directamente con redes sociales, tu página web, o tu sitio de reservas de AgendaPro.'), 
            'text_mark' => __('Consigue más reservas'), 
            'text_2' => __('No importa si estás realizando un tratamiento y no puedes contestar el teléfono, el chat o Whatsapp. Tus pacientes ven tu disponibilidad en tiempo real y pueden agendar directamente.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Imagen-4_-Centro-de-estetica-8-3.png',
            'url' => '/centros-de-estetica/software-para-centros-de-estetica#',
        ];

        $other_features = [
            [
                'title' => __('Control de caja'), 
                'text' => __('Lleva el control de tu recaudación cada día. Cierra la caja con un clic y todo cuadra.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja_4-2.png',
                'url' => '/control-de-pagos',
            ],
            [
                'title' => __('Control de inventario'), 
                'text' => __('Mantén un registro de tus existencias en tiempo real, y evita los tediosos días de inventario.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Control-de-inventarios_3-7.png',
                'url' => '/control-de-inventarios',
            ],
            [
                'title' => __('Cálculo de comisiones'), 
                'text' => __('Controla automáticamente las comisiones de tus colaboradores y ahorra tiempo semana a semana.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reporte-de-comisiones_4-2.png',
                'url' => '/reporte-de-comisiones',
            ],
            [
                'title' => __('Rebound marketing'), 
                'text' => __('Utiliza la nueva forma de hacer marketing para aumentar tus reservas.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Charly'), 
                'text' => __('Atrae y retiene a tus clientes fieles y frecuentes con Charly tu experto en marketing digital.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Charly_4-1.png',
                'url' => '/charly',
            ],
            [
                'title' => __('Pago online'), 
                'text' => __('Permite a tus pacientes pagar directamente sus reservas al agendar.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_spa($locale)
    {
        $this->seo->title(__('Software para spa') . " - AgendaPro");
        $this->seo->meta('description', __('¡Miles de profesionales confían en nosotros!'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para Spa"),
            "h1_sub" => __("Gestión de citas, clientes y ventas en un mismo lugar"),
            "h2" => __("Simplificamos tu día a día y hacemos crecer tu Spa"),
            "h2_sub" => __("La experiencia única de tu Spa empieza por ti"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Banner-Mobile_-Spa@3x-8-1.png",
            "other_features_text" => "AgendaPro automatiza todas las tareas para que dirijas tu spa sin problemas.",
            "testimonial" => $this->testimonials['1jF-yBrjzMo'],
        );

        $business_features = [
            [
                'title' => __('Mantén el orden de tu agenda'), 
                'text' => __('¿Rompes la experiencia de tu Spa al cometer errores como citas duplicadas a la misma hora?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Comunícate con tus clientes'), 
                'text' => __('¿Pierdes contacto con tus clientes luego de su visita y no encuentras la forma de hacerlos volver?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-Clientes-1.png',
            ],
            [
                'title' => __('Evita las inasistencias de clientes'), 
                'text' => __('¿Tus clientes simplemente faltan a sus citas o reagendan a último minuto y te hacen perder dinero?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Atrae más clientes a tu spa'), 
                'text' => __('¿Estás buscando la manera de atraer y retener más clientes fieles y frecuentes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Marketing.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDAMIENTO DE CITAS ONLINE'), 
            'sub_title' => __('Organiza tu agenda de forma automática'), 
            'text' => __('Permite a tus clientes reservar una hora directamente en tu calendario, y automáticamente se mantendrá actualizado en tiempo real.'), 
            'text_mark' => __('La mejor manera de llevar tu spa al mundo digital'), 
            'text_2' => __('La agenda online de AgendaPro te entrega un sitio de reservas para que tus clientes agenden, y se integra directamente con tus redes sociales y página web.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Spa-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('FIDELIZACIÓN DE CLIENTES'), 
            'sub_title' => __('Utiliza las herramientas para comunicarte de forma personal con tus clientes'), 
            'text' => __('Envía correos electrónicos personalizados con información relevante para los clientes de tu spa, encuestas de satisfacción después de cada servicio, y adicionalmente recordatorios automáticos para cada una de las reservas realizada en tu spa.'), 
            'text_mark' => __('Recordatorios automáticos del día de cumpleaños'), 
            'text_2' => __('Entrega a tus clientes una experiencia única con recordatorios automáticos para el día de su cumpleaños con la promoción que quieras entregar a cada uno.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Spa-2.png',
            'url' => '/fidelizacion-de-clientes',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Aumenta la tasa de asistencia a tu spa'), 
            'text' => __('Activa el envío de recordatorios automáticos y evita que a tus clientes se les olvide su reserva, además de esto ellos podrán confirmar o cancelar sus citas para que puedas reutilizar esas horas vacantes.'), 
            'text_mark' => __('Whatsapp, SMS, y/o emai'), 
            'text_2' => __('Los recordatorios son configurables por día, y pueden ser enviados a través del canal que más utilicen tus clientes para aumentar la asistencia.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Spa-3@2x.png',
            'url' => '/recordatorios-automaticos',
        ];
        
        $features_content[] = [
            'title' => __('REBOUND MARKETING'), 
            'sub_title' => __('Aumenta las reservas de tu spa con técnicas de marketing avanzado'), 
            'text' => __('Atrae y retiene a tus clientes fieles y frecuentes con Rebound Marketing. Fideliza a las personas que han asistido a tu Spa con promociones automáticas e inteligentes.'), 
            'text_mark' => __('Promociones según el comportamiento de tus clientes'), 
            'text_2' => __('La misma tecnología que utilizan la aerolíneas al alcance de tu Spa. La metodología del Rebound Marketing te permite ahorrar dinero en campañas y retener a tus mejores clientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Spa-4.png',
            'url' => '/marketing',
        ];

        $other_features = [
            [
                'title' => __('Control de caja'), 
                'text' => __('Mira y analiza el el flujo de caja de tu Spa en la palma de tu mano'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja_4-2.png',
                'url' => '/sistema-de-caja',
            ],
            [
                'title' => __('Control de inventario'), 
                'text' => __('Controla tu stock de productos en todo momento, y evita quiebres de stock.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Control-de-inventarios_3-7.png',
                'url' => '/sistema-de-inventario',
            ],
            [
                'title' => __('Email marketing'), 
                'text' => __('Envía campañas de mail marketing a tu base de datos y aumenta tus ventas'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Mail_5-2.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Reportes de gestión'), 
                'text' => __('Mira el desempeño de tu Spa en tiempo real, y toma las mejores decisiones.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3-1.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Charly'), 
                'text' => __('Tu asistente de campañas de marketing inteligente 100% automatizado'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Charly_4-1.png',
                'url' => '/charly',
            ],
            [
                'title' => __('Pago online'), 
                'text' => __('Permite a tus clientes pagar directamente sus reservas y evitar inasistencias'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_barberias($locale)
    {
        $this->seo->title(__('Software para barberías') . " - AgendaPro");
        $this->seo->meta('description', __('Aumenta tus ingresos y Ahorra tiempo con el Software para Barberías de AgendaPro. Agendamiento y mucho más. Click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para barberías"),
            "h1_sub" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2" => __("Simplificamos tu día a día y hacemos crecer tu barbería"),
            "h2_sub" => __("¡Digitaliza la agenda de tu Barbería! Mantén el control total de tu negocio"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Banner-Mobile_-Barberia-50-1.jpg",
            "other_features_text" => "Solo necesitarás AgendaPro para poner toda la gestión de tu barbería en automático",
            "testimonial" => $this->testimonials['LFQM39UXpdI'],
        );

        $business_features = [
            [
                'title' => __('Mantén el orden de tu agenda'), 
                'text' => __('¿Pierdes clientes por errores al momento de agendar?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Calcula las comisiones automáticamente'), 
                'text' => __('¿Cometes errores y pierdes tiempo al calcular las comisiones de tus barberos cada semana?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones-5.png',
            ],
            [
                'title' => __('Consigue más reservas'), 
                'text' => __('¿Te faltan clientes, y además los que agendan olvidan asistir a sus citas?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Controla tu stock de productos'), 
                'text' => __('Se acaba tu stock de productos sin que te des cuenta'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Control-de-Inventarios-2.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA DE CITAS ONLINE'), 
            'sub_title' => __('Mantén una agenda organizada sin esfuerzo'), 
            'text' => __('Digitaliza tu barbería ofreciendo reservas en todas tus redes sociales, página web, y sitio de reservas de AgendaPro. Cada reserva se actualizará automáticamente en tu Calendario.'), 
            'text_mark' => __('Se actualiza en tiempo real'), 
            'text_2' => __('Olvídate de gestionar tu agenda de forma manual, evita errores como tener dos clientes a la misma hora, y enfócate en lo más importante: atender a tus clientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Barberia-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('CÁLCULO AUTOMÁTICO DE COMISIONES'), 
            'sub_title' => __('Recibe reportes con el cálculo de comisiones de forma automática e instantánea'), 
            'text' => __('Despreocúpate del cálculo de comisiones que realizas de forma semanal, quincenal, o mensual. Evita realizar esos complejos cálculos que te quitan tiempo que no tienes.'), 
            'text_mark' => __('Los cálculos son automáticos y 100% confiables'), 
            'text_2' => __('Los barberos estarán felices y confiados con sus pagos, y tendrás todo el detalle de forma simple y ordenado.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Barberia-2.png',
            'url' => '/reporte-de-comisiones',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMATIZADOS'), 
            'sub_title' => __('Evita las inasistencias con recordatorios a través de Whatsapp, SMS, o email para todos tus clientes'), 
            'text' => __('Reduce la tasa de inasistencias a través de recordatorios previos a la cita de tus clientes. LLega a los lugares en los que ellos están más tiempo: Whatsapp y su correo electrónico.'), 
            'text_mark' => __('Deja de sufrir con las inasistencias o “no-shows”'), 
            'text_2' => __('Los recordatorios se pueden configurar para enviarse desde el mismo día de la cita hasta 3 días antes, y se puede complementar email + Whatsapp para una dupla imbatible.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Imagen-3-barberia@2x-100.jpg',
            'url' => '/recordatorios-automaticos',
        ];
        
        $features_content[] = [
            'title' => __('CONTROL DE INVENTARIO'), 
            'sub_title' => __('Conoce tu stock de productos en tiempo real y evita perder ventas por falta de productos'), 
            'text' => __('Mantén tu inventario de productos conectado con tu caja de ventas y agenda online. Cada vez que realices una venta, se descuenta el producto de tu stock.'), 
            'text_mark' => __('Crea alarmas de stock bajo'), 
            'text_2' => __('Tendrás alarmas que te avisarán cuando un producto esté cerca de agotarse. De esta manera no perderás más ventas por falta de productos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Barberia-4.png',
            'url' => '/control-de-inventarios',
        ];

        $other_features = [
            [
                'title' => __('Facturación Electrónica'), 
                'text' => __('Entrega una factura legal digital y automática a tus clientes. Disponible en Colombia y Chile'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Facturacio%CC%81n-electro%CC%81nica_3-6.png',
                'url' => '/facturacion-electronica',
            ],
            [
                'title' => __('Pago online'), 
                'text' => __('Permite a tus clientes pagar directamente sus reservas al agendar.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
            [
                'title' => __('APP móvil'), 
                'text' => __('Obtén una aplicación en iOS y Android con tu marca para tus clientes.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Aplicacion-movil_3-1.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Rebound Marketing'), 
                'text' => __('Transforma a todos tus clientes que van a tu barbería en clientes fieles y frecuentes.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Control de caja'), 
                'text' => __('Controla tus ingresos y egresos en tiempo real para ver cuánto ganas cada día.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja_4-2.png',
                'url' => '/sistema-de-caja',
            ],
            [
                'title' => __('Charly'), 
                'text' => __('Envía campañas de email marketing automáticas para retener a tus clientes.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Charly_4-1.png',
                'url' => '/charly',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_peluquerias($locale)
    {
        $this->seo->title(__('Software para peluquerías') . " - AgendaPro");
        $this->seo->meta('description', __('Aumenta tus ingresos y Ahorra tiempo con el Software para Peluquerías de AgendaPro. Agendamiento y mucho más. Click acá y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para peluquerías"),
            "h1_sub" => __("Gestión de citas, clientes y ventas en un mismo lugar"),
            "h2" => __("Simplificamos tu día a día y hacemos crecer tu peluquería"),
            "h2_sub" => __("Digitaliza tu peluquería y deja atrás el COVID"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Peluqueria@3x-8-1.png",
            "other_features_text" => "Cada una diseñada para brindarte una experiencia excelente!",
            "testimonial" => $this->testimonials['Zqjt_lr1fBU'],
        );

        $business_features = [
            [
                'title' => __('Digitaliza tu agenda'), 
                'text' => __('¿No tienes control de tu agenda, y pierdes clientes por problemas de agendar?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Automatiza las comisiones'), 
                'text' => __('¿Pierdes mucho tiempo calculando las comisiones de lo/as estilistas de tu peluquería?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones-5.png',
            ],
            [
                'title' => __('Consigue más reservas'), 
                'text' => __('¿Tus clientes no asisten a su cita sin previo aviso?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Stock de productos en línea'), 
                'text' => __('¿No tienes el control de tu inventario de productos y pierdes ventas por quiebres de stock?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-18.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Digitaliza tu agenda e intégrala con tus redes sociales'), 
            'text' => __('Podrás acceder a tu agenda online desde cualquier dispositivo (celular, computador, tablet) y cualquier lugar, solo necesitas conexión a internet. La agenda se actualiza automáticamente con cada reserva.'), 
            'text_mark' => __('Se integra con redes sociales'), 
            'text_2' => __('Tus clientes podrán agendar directamente en tus redes sociales, página web, y sitio de reservas de AgendaPro, y las reservas estarán automáticamente sincronizadas con tu agenda.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Peluquerias-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('REPORTE DE COMISIONES'), 
            'sub_title' => __('Descarga reportes de comisiones de tus profesionales en el periodo de tiempo que necesites'), 
            'text' => __('Delega la gestión de comisiones en AgendaPro, y libera el tiempo que utilizabas calculando comisiones cada semana para preocuparte de lo más importante: tus clientes.'), 
            'text_mark' => __('Las comisiones son configurables'), 
            'text_2' => __('Asigna comisiones específicas para cada profesional por la venta de servicios y/o productos, y obtén un reporte automático según sus ventas.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Peluquerias-2.png',
            'url' => '/reporte-de-comisiones',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Disminuye las inasistencias con recordatorios por email, SMS, o Whatsapp'), 
            'text' => __('Recuerda a tus clientes el día de sus citas para disminuir las inasistencias involuntarias, y aumenta los ingresos de tu peluquería. El 98% de los clientes que confirman sus cita, asisten a ella.'), 
            'text_mark' => __('Deja de perder dinero con las inasistencias o “no-shows”'), 
            'text_2' => __('Los recordatorios se adaptan a la operación de tu peluquería y pueden ser enviados el mismo día, 1, 2, o 3 días antes de la cita. Utiliza Whatsapp, SMS y/o emails.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Peluquerias-3-8.png',
            'url' => '/recordatorios-automaticos',
        ];
        
        $features_content[] = [
            'title' => __('INVENTARIO ONLINE'), 
            'sub_title' => __('Maneja el stock de tus productos en línea y evita quiebres de stock'), 
            'text' => __('Crea alarmas automáticas que te avisan cuando te quedan pocas unidades de un producto. Los productos se descuentas automáticamente de tu inventario al realizar una venta.'), 
            'text_mark' => __('Evita quiebres de stock'), 
            'text_2' => __('La integración de inventario, caja de ventas, y calendario te permite mantener un control total y evitar perder ingresos por falta de productos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Peluquerias-4.png',
            'url' => '/control-de-inventarios',
        ];

        $other_features = [
            [
                'title' => __('Email marketing'), 
                'text' => __('Segmenta a tus clientes y envía promociones según sus preferencias.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Pago online'), 
                'text' => __('Permite a tus clientes pagar tus servicios por adelantado y evita inasistencias'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
            [
                'title' => __('APP móvil'), 
                'text' => __('Crea una app personalizada exclusiva para tu peluquería. Tu marca, tus clientes.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Rebound marketing'), 
                'text' => __('Transforma a todos tus clientes, en clientes fieles y frecuentes.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Facturación electrónica'), 
                'text' => __('Envía facturas por correo electrónico a tus clientes de forma automática'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Facturacio%CC%81n-electro%CC%81nica_3-6.png',
                'url' => '/facturacion-electronica',
            ],
            [
                'title' => __('Charly'), 
                'text' => __('Genera más ventas y retiene a tus clientes a través de campañas automáticas.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Charly_4-1.png',
                'url' => '/charly',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_salon_de_belleza($locale)
    {
        $this->seo->title(__('Software para salón de belleza') . " - AgendaPro");
        $this->seo->meta('description', __('Aumenta tus ingresos y Ahorra tiempo con el Software para Salon de Belleza de AgendaPro. Agendamiento y mucho más. Click acá y pide tu demo.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para salón de belleza"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu salón de belleza"),
            "h2" => __("Gestiona tus citas, clientes, y ventas en un mismo lugar"),
            "h2_sub" => __("Digitaliza tu salón de belleza y empieza a recibir reservas online"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Banner-Mobile_-Salones-de-belleza-50-1.jpg",
            "other_features_text" => "Todo lo que necesitas para dirigir tu salón de belleza en automático",
            "testimonial" => $this->testimonials['Zqjt_lr1fBU'],
        );

        $business_features = [
            [
                'title' => __('Ordena tu agenda'), 
                'text' => __('Tu agenda está desorganizada y pierdes clientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-15.png',
            ],
            [
                'title' => __('Comisiones automáticas'), 
                'text' => __('No sabes que le corresponde a cada uno y pagas de manera errónea'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-16.png',
            ],
            [
                'title' => __('Consigue más reservas'), 
                'text' => __('¿Tus clientes te dejan esperando o simplemente no llegan a sus citas?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-17.png',
            ],
            [
                'title' => __('Controla tu inventario'), 
                'text' => __('¿Te has quedado sin productos en el momento de una venta o no sabes que productos hacen faltan?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/09/Group-18.png',
            ],
        ];

        $features_content[] = [
            'title' => __('RESERVAS ONLINE'), 
            'sub_title' => __('Permite a tus clientes agendar online y recibe reservas 24/7'), 
            'text' => __('Tus clientes podrán agendar sus citas desde cualquiera de tus redes sociales, página web, o sitio de reservas de AgendaPro. Automáticamente tu agenda quedará organizada y actualizada con la nueva cita.'), 
            'text_mark' => __('Recibe reservas aunque tu Salón este cerrado'), 
            'text_2' => __('Podrás ofrecer tus horas disponibles a tus clientes aunque tu Salón esté cerrado ya que tu sitio de reservas trabaja las 24 horas el día y los 7 días de la semana y se mantiene actualizado.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Salones-de-belleza-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('REPORTE DE COMISIONES'), 
            'sub_title' => __('Automatiza las comisiones de tus profesionales y obten el cálculo automáticamente'), 
            'text' => __('Deja de gastar tiempo y energías en calcular las comisiones de tu equipo. Las comisiones serán asociadas automáticamente a los servicios y clientes realizados por cada profesional.'), 
            'text_mark' => __('Las comisiones se calculan en tiempo real'), 
            'text_2' => __('Podrás acceder al informe y revisar el período que necesites, ya sea semanal, quincenal, o mensual. El reporte de comisiones se actualiza automáticamente y en tiempo real.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Salones-de-belleza-2.png',
            'url' => '/reporte-de-comisiones',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Recuerda a tus clientes sus citas un día antes'), 
            'text' => __('Enviando recordatorios automáticos podrás aumentar la tasa de asistencia a tu Salón, y así aumentarás los ingresos y tus reservas. Los recordatorios pueden ser por Whatsapp, SMS, o Email.'), 
            'text_mark' => __('Evita las inasistencias de clientes'), 
            'text_2' => __('Podrás configurar tus recordatorios para enviarlos el mismo día, 1, 2, o hasta 3 días antes de la cita. El 98% de los clientes que confirma su cita asiste a la misma.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Salones-de-belleza-3-8.png',
            'url' => '/recordatorios-automaticos',
        ];
        
        $features_content[] = [
            'title' => __('INVENTARIO ONLINE'), 
            'sub_title' => __('Recibe alarmas de inventario cuando tengas un stock bajo'), 
            'text' => __('Lleva los movimientos de tu inventario en tiempo real, mira los productos con mayor rotación y asegúrate de tenerlo siempre en stock. De igual manera, recibirás alarmas cuando tu stock se este agotando.'), 
            'text_mark' => __('Planifica tus pedidos de productos'), 
            'text_2' => __('Tendrás tu stock de productos conectado a tu caja de ventas y agenda online. Por cada venta realizada, se descuentan las unidades correspondientes, lo que te permite planificar tus pedidos sin tener que hacer inventario.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Salones-de-belleza-4.png',
            'url' => '/control-de-inventarios',
        ];

        $other_features = [
            [
                'title' => __('Control de caja'), 
                'text' => __('Lleva el control de tu recaudación cada día. Cierra la caja con un clic y todo cuadra.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja_4-2.png',
                'url' => '/sistema-de-caja',
            ],
            [
                'title' => __('Control de inventario'), 
                'text' => __('Mantén un registro de tus existencias en tiempo real, y evita los tediosos días de inventario.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Control-de-inventarios_3-7.png',
                'url' => '/control-de-inventarios',
            ],
            [
                'title' => __('Cálculo de comisiones'), 
                'text' => __('Controla automáticamente las comisiones de tus colaboradores y ahorra tiempo semana a semana.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reporte-de-comisiones_4-2.png',
                'url' => '/reporte-de-comisiones',
            ],
            [
                'title' => __('Rebound Marketing'), 
                'text' => __('Utiliza la nueva forma de hacer marketing para aumentar tus reservas.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Charly'), 
                'text' => __('Interactúa con tus clientes fieles y frecuentes con Charly tu experto en marketing digital.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Charly_4-1.png',
                'url' => '/charly',
            ],
            [
                'title' => __('Pago online'), 
                'text' => __('Permite a tus pacientes pagar directamente sus reservas al agendar.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_salon_de_manicure_pedicure($locale)
    {
        $this->seo->title(__('Agenda Online') . " - AgendaPro");
        $this->seo->meta('description', __('Controla tu Salón de manicure con el software todo en uno de AgendaPro, Agenda Online y mucho más. Click aquí y pide una demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para salones de manicure y pedicure"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu negocio"),
            "h2" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2_sub" => __("Ofrece a tus clientes una experiencia única, digitalizando tu agenda y enviando recordatorios automáticos a tus clientes sobre sus citas"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Salones-de-manos-y-pies@3x-8-1.png",
            "other_features_text" => "Todas las funcionalidades que necesitas para manejar tu salón en automático",
            "testimonial" => $this->testimonials['Zqjt_lr1fBU'],
        );

        $business_features = [
            [
                'title' => __('Mantén el orden de tu agenda'), 
                'text' => __('¿Utilizas lapiz y papel para organizar tu agenda y las reservas de tu centro?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Agenda-Online-10.png',
            ],
            [
                'title' => __('Calcula comisiones automáticamente'), 
                'text' => __('¿Pierdes tiempo calculando las comisiones y tiendes a cometer errores?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones-5.png',
            ],
            [
                'title' => __('Evita inasistencias'), 
                'text' => __('¿Pierdes horas de trabajo y mucho dinero por las inasistencias?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Retiene a tus clientes'), 
                'text' => __('¿Ninguno de tus clientes vuelve a tu Salón en busca de nuevos servicios?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-Clientes-1.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Automatiza tu agenda y organiza tus citas'), 
            'text' => __('Entendemos que tu recurso más importante es el tiempo. Por eso con AgendaPro ahorrarás muchas horas que antes invertías en la organización de tu consulta'), 
            'text_mark' => __('Web de reservas integrado con tus redes'), 
            'text_2' => __('Tus pacientes podrán agendar directamente desde tu web de reservas y automáticamente se actualizará en tu agenda. Podrás consultar tus reservas desde cualquier dispositivo con acceso a internet y realizar cualquier modificación que consideres necesaria. Únete a nosotros y comienza a invertir tu tiempo en lo más importante, tus pacientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Manicure-y-pedicure-1-8.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('REPORTE DE COMISIONES'), 
            'sub_title' => __('Calcula las comisiones en un instante y de manera exacta en cualquier momento'), 
            'text' => __('Establece comisiones personalizadas para cada uno de los servicios que realizas, ahorra tiempo con el cálculo automatizado y mantén a tus manicuristas felices.'), 
            'text_mark' => __('Obtén el reporte con un clic'), 
            'text_2' => __('Con AgendaPro podrás crear un reporte de comisiones cuando lo necesites, de esta manera ahorrarás tiempo y evitarás confusiones haciendo el mach de los servicios con el dinero ingresado.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Manicure-y-pedicure-2.png',
            'url' => '/reporte-de-comisiones',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Disminuye las inasistencias y aumenta los ingresos en tu Salón'), 
            'text' => __('Integra a tu negocio un sistema de confirmación de citas para tus clientes. Envía recordatorios automaticos a través de Whatsapp y correo electrónico con el detalle de su hora agendada, servicio a realizar, hora y centro en el cual será atendido.'), 
            'text_mark' => __('Evita perdidas de ingresos en tu negocio'), 
            'text_2' => __('En cada recordatorio existirá la opción de confirmar o cancelar la reserva. En el caso de tener horas canceladas podrás agendar a un nuevo cliente con anticipación. ¡Evita que tus pacientes falten a sus citas y aumenta los ingresos de tu salón.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Manicure-y-pedicure-3-8.png',
            'url' => '/recordatorios-automaticos',
        ];
        
        $features_content[] = [
            'title' => __('FIDELIZACIÓN DE CLIENTES'), 
            'sub_title' => __('Convierte a todos tus clientes en clientes fieles y frecuentes'), 
            'text' => __('Llega a tus clientes de una manera personalizada con nuestras herramientas de email marketing, encuestas de satisfacción y el envío de giftcards online.'), 
            'text_mark' => __('Automatiza tus campañas de retención de clientes'), 
            'text_2' => __('Convierte a tus clientes, en clientes fieles y frecuentes de forma automatizada. ¡Haz que vuelven a tu salón constantemente!'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Manicure-y-pedicure-4.png',
            'url' => '/fidelizacion-de-clientes',
        ];

        $other_features = [
            [
                'title' => __('Rebound marketing'), 
                'text' => __('Atrae más ventas a través de la fidelización de clientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Control de caja'), 
                'text' => __('Mira tus ingresos y egresos en tiempo real'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja_4-2.png',
                'url' => '/sistema-de-caja',
            ],
            [
                'title' => __('APP móvil'), 
                'text' => __('App personalizada exclusivamente para tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Inventario online'), 
                'text' => __('Tu stock de productos actualizado y accesible'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Control-de-inventarios_3-7.png',
                'url' => '/sistema-de-inventario',
            ],
            [
                'title' => __('Reportes de gestión'), 
                'text' => __('Toma decisiones inteligentes e informadas basadas en los datos de la gestión de tu Salón'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3-1.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Pago online'), 
                'text' => __('Permite a tus clientes pagar directamente desde su reserva'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_centro_medico($locale)
    {
        $this->seo->title(__('Software para centro médico') . " - AgendaPro");
        $this->seo->meta('description', __('Mantén el orden con la Ficha Clínica, y Agenda Médica del software para Centro Médico de AgendaPro. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para centro médico"),
            "h1_sub" => __("Gestión de citas, pacientes y ventas en un mismo lugar"),
            "h2" => __("Simplificamos tu día a día y hacemos crecer tu centro médico"),
            "h2_sub" => __("Controla tus citas, pacientes y ventas en un mismo lugar"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Banner-Mobile_-Centros-medico-50-1.jpg",
            "other_features_text" => "Todo lo que necesitas para mantener el control de tu centro médico de manera sencilla",
            "testimonial" => $this->testimonials['1jF-yBrjzMo'],
        );

        $business_features = [
            [
                'title' => __('Organiza tu agenda online'), 
                'text' => __('¿Sufres constantemente con el desorden de citas de tus pacientes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Ficha clínica electrónica'), 
                'text' => __('¿No puedes acceder a la información de la ficha de tus pacientes desde cualquier lugar?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Ficha-clinica-1.png',
            ],
            [
                'title' => __('Evita las inasistencias'), 
                'text' => __('¿Tus pacientes faltan usualmente a sus citas y te generan una pérdida de tiempo y dinero?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Controla los ingresos y egresos'), 
                'text' => __('¿Buscas una manera simple de llevar los ingresos y egresos de tus pacientes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Digitaliza y automatiza el proceso de agendamiento'), 
            'text' => __('Podrás acceder a la agenda del Centro Médico desde cualquier dispositivo (computador, celular o tablet) sin importar dónde estés, ya sea en el centro, en tu casa o en la playa. Cada médico puede acceder a ver su agenda.'), 
            'text_mark' => __('La agenda se mantiene sincronizada en tiempo real'), 
            'text_2' => __('Además, ofrece a tus pacientes la posibilidad de agendar directamente en tu centro a través de redes sociales, sitio web, o sitio de reservas de AgendaPro.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Centros-medicos-1-8.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('FICHA CLÍNICA'), 
            'sub_title' => __('Lleva un registro consolidado de tus pacientes'), 
            'text' => __('La ficha clínica de AgendaPro te permite consolidar toda la información de tus pacientes en el mismo lugar. Se sincroniza automáticamente con la agenda online y la caja de ventas guardando toda la información en el perfil del paciente.'), 
            'text_mark' => __('La ficha es 100% personalizable'), 
            'text_2' => __('La ficha digital se adapta a las necesidades de tu centro, y replica el formato de las fichas de papel que utilizas actualmente. Cumple con la normativa de tu país.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Centros-medicos-2-8.png',
            'url' => '/ficha-clinica',
        ];

        $other_features = [
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('Mantén los datos de tus pacientes en un lugar seguro y accesible 24/7'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Almacenamiento-en-la-nube_4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
            [
                'title' => __('Pago online'), 
                'text' => __('Recibe pagos de forma rápida y segura al momento en que tus pacientes reservan.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
            [
                'title' => __('Encuestas de satisfacción'), 
                'text' => __('Descubre lo que opinan tus pacientes y mejora la experiencia de tu centro.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Encuestas-de-satisfaccio%CC%81n_2.png',
                'url' => '/fidelizacion-de-clientes',
            ],
            [
                'title' => __('Teleconsulta'), 
                'text' => __('Brinda una atención online y segura desde la comodidad de tu casa.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Teleconsultas-2.png',
                'url' => '/teleconsulta',
            ],
            [
                'title' => __('App personalizada'), 
                'text' => __('Entrega una experiencia personalizada. Tu centro, Tus pacientes.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Aplicacion-movil_3-1.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Facturación electrónica'), 
                'text' => __('Envía facturas digitales de forma automática al momento de la venta de un producto o servicio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Facturacion-electronica_3-1.png',
                'url' => '/facturacion-electronica',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_clinica($locale)
    {
        $this->seo->title(__('Software para clínica') . " - AgendaPro");
        $this->seo->meta('description', __('Mantén el orden con la Ficha Clínica, Agenda Médica y más del software para Clínica de AgendaPro. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para clínica"),
            "h1_sub" => __("Recupera el control de tus horas y clientes"),
            "h2" => __("Gestiona tus citas, pacientes y ventas en un mismo lugar"),
            "h2_sub" => __("Adapta tu clínica al mundo digital y visualiza toda la información en tiempo real"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Banner-Mobile_-Clinica-50-1-1.jpg",
            "other_features_text" => "Todas las funcionalidades que necesitas para simplificar las gestión de tu clínica",
            "testimonial" => $this->testimonials['1jF-yBrjzMo'],
        );

        $business_features = [
            [
                'title' => __('Agenda virtual'), 
                'text' => __('¿Sientes que pierdes el control de las citas de tus pacientes, y agenda de profesionales?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Historia Clínica'), 
                'text' => __('¿Sufres de perder tiempo buscando el historial clínico de pacientes, o siempre está desactualizado?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Ficha-clinica-1.png',
            ],
            [
                'title' => __('Evita inasistencias'), 
                'text' => __('¿Tus pacientes faltan a sus citas sin previo aviso generando una pérdida monetaria para tu clínica?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Calidad de atención'), 
                'text' => __('¿Desconoces lo que opinan tus pacientes sobre la calidad de atención de tu clínica?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-Clientes-1.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDAMIENTO ONLINE'), 
            'sub_title' => __('Automatiza el proceso de agendamiento y súmate al mundo digital.'), 
            'text' => __('Ofrece una experiencia de agendamiento única, para que tus pacientes encuentren rápidamente la especialidad y/o al médico que buscan.'), 
            'text_mark' => __('Tus pacientes pueden agendar en línea'), 
            'text_2' => __('Una vez que tu paciente agende de forma online, las citas se actualizarán en tu calendario AgendaPro en tiempo real, y evitarás estar buscando bloques disponibles entre distintos médicos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Clinica-1-8.png',
            'url' => '/agenda-medica',
        ];

        $features_content[] = [
            'title' => __('HISTORIA CLÍNICA'), 
            'sub_title' => __('Mantén la información de tus pacientes en un mismo lugar de forma segura, y accesible'), 
            'text' => __('Podrás mantener las historias clínicas de tus pacientes ordenadas y actualizadas en tiempo real. Si un médico realiza un cambio, este se reflejará automáticamente en el registro del paciente.'), 
            'text_mark' => __('Puedes acceder a las historias desde cualquier lugar'), 
            'text_2' => __('Si necesitas acceder a la información de un paciente, y ya no te encuentras en la Clínica, podrás acceder con tu usuario y contraseña ya sea desde tu casa, teléfono, o en la playa.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Clinica-2-8.png',
            'url' => '/historia-clinica',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTIZADOS'), 
            'sub_title' => __('Aumenta las probabilidades de asistencia de tus pacientes'), 
            'text' => __('Recuerda a tus pacientes sus citas de forma automática, y evita perder tiempo confirmando cada día de forma manual. Los recordatorios son configurables para el mismo día hasta 3 días antes.'), 
            'text_mark' => __('Recordatorios por Whatsapp, SMS y/o Email'), 
            'text_2' => __('Aumenta la tasa de asistencia a tu Clínica con los recordatorios. Cuando un paciente haya confirmado, la cita automáticamente cambia de color en tu Calendario, y te notifica.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Clinica-3-8.png',
            'url' => '/recordatorios-automaticos',
        ];
        
        $features_content[] = [
            'title' => __('ENCUESTAS DE SATISFACCIÓN'), 
            'sub_title' => __('Evalúa los servicios de tu Clínica con encuestas de satisfacción automáticas'), 
            'text' => __('Diseña la encuesta que más se acomode a la operación de tu Clínica, y envía automáticamente una encuesta después de cada atención a los pacientes.'), 
            'text_mark' => __('Las encuestas son personalizables'), 
            'text_2' => __('Mide y mejora la experiencia de los pacientes en tu Clínica según el análisis y evolución de los resultados de la encuesta en el tiempo.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Clinica-4-8.png',
            'url' => '/fidelizacion-de-clientes',
        ];

        $other_features = [
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('Mantén los datos de tus pacientes en un lugar seguro y accesible'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Almacenamiento-en-la-nube_4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
            [
                'title' => __('Pago online'), 
                'text' => __('Permite que tus pacientes puedan pagar al momento de reservar'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
            [
                'title' => __('Facturación electrónica'), 
                'text' => __('Genera facturas digitales de forma automática al momento del pago de pacientes.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Facturacio%CC%81n-electro%CC%81nica_3-6.png',
                'url' => '/facturacion-electronica',
            ],
            [
                'title' => __('Teleconsulta'), 
                'text' => __('Atiende a tus pacientes de forma online con nuestro sistema único y seguro de teleconsultas.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Teleconsultas-2.png',
                'url' => '/teleconsulta',
            ],
            [
                'title' => __('Email marketing'), 
                'text' => __('Envía promociones e información importante de tu clínica de forma masiva a tus pacientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('App personalizada'), 
                'text' => __('Conecta con tus pacientes directamente con tu marca. Tu marca, tus pacientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_centro_de_fisioterapia($locale)
    {
        $this->seo->title(__('Software para centro de fisioterapia') . " - AgendaPro");
        $this->seo->meta('description', __('Controla tu centro de fisioterapia con AgendaPro, Software de gestión intuitivo con Agenda online y ficha clínica. Haz click aquí y pide una demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para Centros de Fisioterapia"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu centro de Fisioterapia"),
            "h2" => __("Gestiona tus citas, pacientes y ventas en un mismo lugar"),
            "h2_sub" => __("Lleva el control total de tu centro de Fisioterapia y digitaliza toda la gestión"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Fisioterapia@3x-8-1-1.png",
            "other_features_text" => "Solo necesitarás AgendaPro para poner toda la gestión de tu centro de fisioterapia en automático",
            "testimonial" => $this->testimonials['fE39Y0h7_Ng'],
        );

        $business_features = [
            [
                'title' => __('Agenda online actualizada'), 
                'text' => __('¿No sabes cuando y a que hora agendaste a tus pacientes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Evolución e historial de pacientes actualizados'), 
                'text' => __('¿No llevas el control de los tratamientos de tus pacientes de forma digitalizada y actualizados?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Ficha-clinica-1.png',
            ],
            [
                'title' => __('Disminuye las inasistencias de tus pacientes'), 
                'text' => __('¿Tus pacientes faltan reiteradas veces a sus sesiones generándote una perdida de tiempo y dinero?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Inasistencias-de-clientes.png',
            ],
            [
                'title' => __('Flujo de caja automatizado'), 
                'text' => __('¿Llevas los cálculos de tu negocio de forma manual, generándote muchas horas de trabajo?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Maneja las reservas de tus pacientes y sesiones de forma organizada'), 
            'text' => __('Permite a tus pacientes reservar desde tu sitio web o redes sociales conectados directamente con tu agenda online , donde podrán seleccionar día, hora, sucursal y profesional.'), 
            'text_mark' => __('Tu agenda conectada con tu negocio en tiempo real'), 
            'text_2' => __('Podrás ver la agenda actualizada del día a día y saber quien es el próximo paciente.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fisioterapia-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('FICHA CLÍNICA'), 
            'sub_title' => __('Mantén la información de tus pacientes organizada y actualizada'), 
            'text' => __('Registra toda la información de tus pacientes con las fichas clínicas personalizadas de AgendaPro, donde podrás mantener actualizada toda la información e historial de tus pacientes en un solo lugar.'), 
            'text_mark' => __('Documentación alojada en la nube'), 
            'text_2' => __('Toda la información de tus pacientes estará alojada en la nube de forma segura, permitiéndote acceder desde cualquier computador. ¡Únete a la revolución digital y no te quedes en el pasado!'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fisioterapia-2.png',
            'url' => '/ficha-clinica',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Aumenta las asistencias en tu centro y evita perdidas de dinero'), 
            'text' => __('Con los recordatorios automáticos de AgendaPro, podrás enviar a tus pacientes mensajes automatizados con información de su reserva.'), 
            'text_mark' => __('Aumenta la tasa de asistencia'), 
            'text_2' => __('Tus pacientes podrán confirmar o cancelar la reserva desde el correo o WhatsApp, permitiendo reagendar las horas canceladas, generando un aumento en tu tasa de asistencia y aumento en los ingresos del centro.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fisioterapia-3-8.png',
            'url' => '/recordatorios-automaticos',
        ];
        
        $features_content[] = [
            'title' => __('SISTEMA DE CAJA'), 
            'sub_title' => __('Lleva el control de las recaudaciones de tu negocio en tiempo real'), 
            'text' => __('Lleva de forma automatizada los ingresos y gastos de tu centro, ahorrando tiempo y evitando errores. La caja de AgendaPro está conectada directamente con las reservas, de esta manera se mantiene actualizada permitiéndote conocer tu flujo de caja y dándote la oportunidad de tomar decisiones financieras de forma acertada.'), 
            'text_mark' => __('Toda la información de tu negocio en un solo lugar'), 
            'text_2' => __('Podrás saber cuales son tus ingresos proyectados, los reales y obtener reportes de tu negocio para tomar mejores decisiones. ¡Únete a AgendaPro y comienza a simplificar tu día a día!'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fisioterapia-4.png',
            'url' => '/sistema-de-caja',
        ];

        $other_features = [
            [
                'title' => __('Email Marketing'), 
                'text' => __('Envía correos a tus pacientes con información relevante de tu centro.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/fisioterapia/software-para-centro-de-fisioterapia#',
            ],
            [
                'title' => __('Encuesta de satisfacción'), 
                'text' => __('Conoce que opinan tus pacientes de tu centro y potencia tus servicios con su feedback.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Encuestas-de-satisfaccio%CC%81n_2.png',
                'url' => '/encuesta-de-satisfaccion',
            ],
            [
                'title' => __('Reportes de gestión'), 
                'text' => __('Toma decisiones inteligentes basadas en los datos de la gestión de tu negocio.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reportes-de-gestio%CC%81n_3-2.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('App móvil'), 
                'text' => __('App personalizada únicamente para tu negocio.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('Almacena y accede a toda la información de tu negocio desde cualquier lugar.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Almacenamiento-en-la-nube_4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
            [
                'title' => __('Fidelización de clientes'), 
                'text' => __('Enamora a tus clientes y aumentas las ventas de tu centro.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-clientes_3-3.png',
                'url' => '/fidelizacion-de-clientes',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }
/////////////////////////////////////////////////////
/////////////////////////////////////////////////////

    public function software_para_kinesiologos($locale)
    {
        $this->seo->title(__('Software para kinesiólogos') . " - AgendaPro");
        $this->seo->meta('description', __('Controla tu centro de kinesiología con AgendaPro, Software de gestión intuitivo con Agenda online y ficha clínica. Haz click aquí y pide una demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para kinesiólogos"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu centro de kinesiología"),
            "h2" => __("Gestiona tus citas, pacientes y ventas en un mismo lugar"),
            "h2_sub" => __("Cambia tu agenda en papel por una agenda online que te ayude a captar, gestionar y retener a tus clientes. Todo eso y más con AgendaPro"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Kinesiologia@3x-8-1-1.png",
            "other_features_text" => "Todo lo que necesitas para llevar la gestión de tu centro de manera automática",
            "testimonial" => $this->testimonials['fE39Y0h7_Ng'],
        );

        $business_features = [
            [
                'title' => __('Agenda virtual organizada'), 
                'text' => __('¿No tienes el control de las reservas y horas de atención de los profesionales en tu centro de kinesiología?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Fichas clínica'), 
                'text' => __('¿No llevas de forma organizada el seguimiento y evolución de los tratamientos de tus pacientes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Ficha-clinica-1.png',
            ],
            [
                'title' => __('Reduce las inasistencias'), 
                'text' => __('¿La inasistencia de pacientes sin previo aviso te genera perdidas de dinero y desorganización en tu centro?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Organiza tu caja'), 
                'text' => __('¿Tienes un desorden en la caja por la gran cantidad de tratamientos y pago por sesiones que esto conlleva?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Organiza las reservas y atención de los prefesionales en una agenda online'), 
            'text' => __('Con AgendaPro podrás tener una agenda organizada de manera automática, facilitando la gestión del día a día en tu centro de kinesiología.'), 
            'text_mark' => __('Integra tu agenda con tus redes sociales'), 
            'text_2' => __('Tendrás un sitio web de reservas y podrás integrarlo a tus redes sociales, en donde todos tus pacientes podrán reservar una hora en tu centro y tus profesionales sabrán quien es su próximo paciente.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Kinesiologos-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('FICHAS CLÍNICAS ONLINE'), 
            'sub_title' => __('Crea fichas personalizadas y mantén la información de tu paciente actualizada en la nube.'), 
            'text' => __('Con las fichas Clínicas de AgendaPro podrás tener toda la información de tu paciente actualizada en un solo lugar.'), 
            'text_mark' => __('Personaliza las fichas según las necesidades de tus pacientes'), 
            'text_2' => __('Cada ficha es personalizable de acuerdo a las necesidades de tus pacientes, permitiendo adjuntar documentos y exámenes importantes a la ficha de cada paciente y visualizarla cuando y donde quieras.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Kinesiologos-2.png',
            'url' => '/ficha-clinica',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Reduce las inasistencias con recordatorios automáticos'), 
            'text' => __('Envía recordatorios automáticos a través de Whatsapp o Email y evita que tus pacientes olviden sus citas de seguimiento.'), 
            'text_mark' => __('Llena los espacios de citas canceladas a tiempo'), 
            'text_2' => __('Una vez llegue el recordatorio podrán confirmar o cancelar sus citas, esto te permitirá llenar esos espacios vacios en tu agenda y de esta manera aumentarás los ingresos de tu consultorio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Kinesiologos-3-8.png',
            'url' => '/recordatorios-automaticos',
        ];
        
        $features_content[] = [
            'title' => __('CONTROL DE CAJA'), 
            'sub_title' => __('Lleva los pagos e ingresos que generas de manera ordenada'), 
            'text' => __('Manten un registro actualizado y en tiempo real de tus ingresos y egresos. Maneja descuentos, envía presupuestos, cálcula tus impuestos y envía comprobantes de pagos digitales.'), 
            'text_mark' => __('Flujo de caja actualizado día a día'), 
            'text_2' => __('Todo lo necesario para mantener la administración de tu consultorio al día. Adicionalmente, al tener las proyecciones y el dinero en caja en tiempo real podrás manejar de una mejor manera las finanzas de tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Kinesiologos-4.png',
            'url' => '/sistema-de-caja',
        ];

        $other_features = [
            [
                'title' => __('Pago online'), 
                'text' => __('Recibe pagos de forma sencilla una vez que tus clientes agenden en tu centro'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
            [
                'title' => __('Facturación Electrónica'), 
                'text' => __('Facturas digitales o recibos para cada pago de las reservas de tus clientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Facturacio%CC%81n-electro%CC%81nica_3-6.png',
                'url' => '/facturacion-electronica',
            ],
            [
                'title' => __('Encuestas de satisfacción'), 
                'text' => __('Mira lo que tus clientes piensan acerca de tus servicios'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Encuestas-de-satisfaccio%CC%81n_2.png',
                'url' => '/fidelizacion-de-clientes',
            ],
            [
                'title' => __('APP móvil'), 
                'text' => __('Lleva tu negocio al celular de tus clientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('La forma más segura de guardar la información de tus pacientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Almacenamiento-en-la-nube_4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
            [
                'title' => __('Reportes de gestión'), 
                'text' => __('Haz crecer tu negocio de la forma inteligente'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3-1.png',
                'url' => '/reportes-de-gestion',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_psicologos($locale)
    {
        $this->seo->title(__('Software para psicólogos') . " - AgendaPro");
        $this->seo->meta('description', __('¡Miles de profesionales confían en nosotros!'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para centros de psicología"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu centro de psicología"),
            "h2" => __("Gestiona tus citas, pacientes y ventas en un mismo lugar"),
            "h2_sub" => __("Digitaliza la gestión de tu centro de Psicología"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Psicologos@3x-8-1-1.png",
            "other_features_text" => "Solo necesitarás AgendaPro para poner toda la gestión de tu centro de psicología en automático",
            "testimonial" => $this->testimonials['1jF-yBrjzMo'],
        );

        $business_features = [
            [
                'title' => __('Agenda actualizada de forma automática'), 
                'text' => __('¿No tienes claridad cuando viene cada paciente y con que profesional se atiende?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Evita inasistencias'), 
                'text' => __('¿Tus paciente faltan seguido a su consulta sin previo aviso, generando perdidas en tu negocio?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Inasistencias-de-clientes.png',
            ],
            [
                'title' => __('Fichas clínicas online'), 
                'text' => __('¿Te cuesta encontrar la ficha de tu paciente entre tantas carpetas y papeles con información importante?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Ficha-clinica-1.png',
            ],
            [
                'title' => __('Control total de los ingresos'), 
                'text' => __('¿Anotas en papel los ingresos de tu negocio y sumas con calculadora al finalizar el día, perdiendo horas de trabajo?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Digitaliza la agenda de tu consulta'), 
            'text' => __('Ofrece a tus pacientes una forma digital de agendar una hora en tu consulta a través de tus redes sociales o sitio web, podrán agendar aunque tu centro este cerrado ya que la agenda se encuentra activa 24/7 de manera online.'), 
            'text_mark' => __('Información actualizada y en tiempo real'), 
            'text_2' => __('Todas las reservas que realizan tus clientes se actualizarán automáticamente en tu calendario y de esta forma evitarás confusiones y pérdida de tiempo. ¡Únete a AgendaPro y simplifica tu día a día!'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Psicologos-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Envía recordatorios de citas de forma automatizada'), 
            'text' => __('Permite a tus pacientes confirmar o modificar su cita de forma anticipada, evitando así pérdidas de dinero y tiempo, además de desorganización en las agendas de tus profesionales.'), 
            'text_mark' => __('Aumenta la tasa de asistencia a tu centro'), 
            'text_2' => __('Podrás aplicar estrategias para ocupar las horas que fueron canceladas, lo cual se traduce directamente en más ingresos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Psicologos-2.png',
            'url' => '/recordatorios-automaticos',
        ];

        $features_content[] = [
            'title' => __('FICHA CLÍNICA'), 
            'sub_title' => __('Actualiza la forma de llevar la información de tus pacientes'), 
            'text' => __('Lleva organizada la información de tus pacientes con fichas personalizadas y de forma digital. Tendrás en el perfil del paciente todas las consultas y reservas realizadas, sus exámenes y cualquier dato que sea relevante para su terapia.'), 
            'text_mark' => __('Historial de pacientes alojados en la nube'), 
            'text_2' => __('Podrás hacer un seguimiento continuo y tener todo el historial y evolución de tus pacientes guardado en la nube, permitiendo ver toda la información desde cualquier computador. La ficha clínica de AgendaPro cumple con las normativas de tu país y es la más segura del mercado.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Psicologos-3-8.png',
            'url' => '/ficha-clinica',
        ];
        
        $features_content[] = [
            'title' => __('PAGO ONLINE'), 
            'sub_title' => __('Integra pago online a tus reservas'), 
            'text' => __('Permite a tus pacientes pagar sus reservas de forma anticipada a través de una plataforma segura con AgendaPro.'), 
            'text_mark' => __('Experiencia completamente digital'), 
            'text_2' => __('Tus pacientes podrán agendar a través de tu sitio de reservas y pagar al instante, aumentando la tasa de asistencia al asegurar el pago. Olvídate de perseguir a tus pacientes para que realicen el pago, únete a AgendaPro y simplifica tu día a día.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Psicologos-4.png',
            'url' => '/pago-online',
        ];

        $other_features = [
            [
                'title' => __('Email Marketing'), 
                'text' => __('Mantén informado a tus pacientes, envía promociones, nuevos servicios o simplemente agradéceles por preferirte.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('Mantén actualizada toda la información de tus pacientes de forma online.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Almacenamiento-en-la-nube_4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
            [
                'title' => __('Reportes de gestión'), 
                'text' => __('Analiza los reportes y toma decisiones con datos confiables.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3-1.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Comisiones automáticas'), 
                'text' => __('Lleva de forma automatizada la comisión de cada profesional en tu centro.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reporte-de-comisiones_4-2.png',
                'url' => '/reporte-de-comisiones',
            ],
            [
                'title' => __('Encuesta de Satisfacción'), 
                'text' => __('Mejora tu servicio con el feedback de tus pacientes.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Encuestas-de-satisfaccio%CC%81n_2.png',
                'url' => '/encuesta-de-satisfaccion',
            ],
            [
                'title' => __('Facturación electrónica'), 
                'text' => __('Envía factura electrónica a tus pacientes de forma automatizada.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Facturacion-electronica_3-1.png',
                'url' => '/facturacion-electronica',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_consulta_medica($locale)
    {
        $this->seo->title(__('Software para consulta médica') . " - AgendaPro");
        $this->seo->meta('description', __('¡Miles de profesionales confían en nosotros!'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para consulta médica"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu Consulta Médica"),
            "h2" => __("Gestiona tus citas, pacientes y ventas en un mismo lugar"),
            "h2_sub" => __("Adapta tu consulta al mundo digital y visualiza toda la información en tiempo real"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Banner-Mobile_-Consulta-medica-50-1.jpg",
            "other_features_text" => "Todo lo que necesitas para llevar la gestión de tu consulta en piloto automático",
            "testimonial" => $this->testimonials['1jF-yBrjzMo'],
        );

        $business_features = [
            [
                'title' => __('Mantén el orden de tu agenda'), 
                'text' => __('Agenda desordenada y poco colaborativa con tus profesionales'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Me%CC%81dica-1.png',
            ],
            [
                'title' => __('Ordena la información'), 
                'text' => __('Tienes poco control de la información, historiales y expedientes de tus pacientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Ficha-clinica-1.png',
            ],
            [
                'title' => __('Recordatorios automáticos'), 
                'text' => __('Tus pacientes faltan sin avisar y pierdes horas de trabajo'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Control de ingresos'), 
                'text' => __('Desorden en tus cobranzas y facturación'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Automatiza tu agenda y organiza tus citas'), 
            'text' => __('Entendemos que tu recurso más importante es el tiempo. Por eso con AgendaPro ahorrarás muchas horas que antes invertías en la organización de tu consulta.'), 
            'text_mark' => __('Web de reservas integrado'), 
            'text_2' => __('Tus pacientes podrán agendar directamente desde tu web de reservas y automáticamente se actualizará en tu agenda. Podrás consultar tus reservas desde cualquier dispositivo con acceso a internet y realizar cualquier modificación que consideres necesaria. Únete a nosotros y comienza a invertir tu tiempo en lo más importante, tus pacientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Consulta-medica-1-8.png',
            'url' => '/agenda-medica',
        ];

        $features_content[] = [
            'title' => __('FICHA CLÍNICA'), 
            'sub_title' => __('Obtén fichas modernas y personalizadas que se adaptan a tu negocio'), 
            'text' => __('Nuestras fichas te ayudarán a tener un mejor control de la información de tus pacientes. Podrás anexar archivos e imágenes y además cumplen con las normativas de tu país.'), 
            'text_mark' => __('Actualízate y lleva tus fichas al mundo digital'), 
            'text_2' => __('No pierdas tiempo escribiendo en papel largas fichas que ocupan espacio y pueden ser extraviadas. Con AgendaPro toda la información de tus pacientes estará en la nube y accesible desde cualquier lugar con internet.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Consulta-medica-2-8.png',
            'url' => '/ficha-clinica',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Reduce las inasistencias con recordatorios automáticos'), 
            'text' => __('Envía recordatorios automáticos a través de Whatsapp o Email y evita que tus pacientes olviden sus citas de seguimiento.'), 
            'text_mark' => __('Llena los espacios de citas canceladas a tiempo'), 
            'text_2' => __('Una vez llegue el recordatorio podrán confirmar o cancelar sus citas, esto te permitirá llenar esos espacios vacios en tu agenda y de esta manera aumentarás los ingresos de tu consultorio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Consulta-medica-3-8.png',
            'url' => '/consulta-medica/software-para-consulta-medica#',
        ];
        
        $features_content[] = [
            'title' => __('SISTEMA DE CAJA'), 
            'sub_title' => __('Mantén actualizado todos los ingresos y egresos de tu centro en tiempo real'), 
            'text' => __('Lleva el control de tu caja en tiempo real, permitiendo ver el detalle de las recaudaciones por medio y forma de pago que se realizan en tu negocio.'), 
            'text_mark' => __('Toma decisiones inteligentes consultando tu flujo de caja'), 
            'text_2' => __('Tener el flujo de caja claro en todo momento te ayudará a tomar decisiones relevantes de forma rápida y segura. Mira cómo está la salud de tu negocio viendo los movimientos de dinero en tiempo real.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Consulta-medica-4-8.png',
            'url' => '/sistema-de-caja',
        ];

        $other_features = [
            [
                'title' => __('Pago online'), 
                'text' => __('Recibe pagos de forma fácil al momento en que tus pacientes reservan'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Pago-online_3-9.png',
                'url' => '/pago-online',
            ],
            [
                'title' => __('Facturación electrónica'), 
                'text' => __('Envía facturas digitales de manera rápida a tus pacientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Facturacio%CC%81n-electro%CC%81nica_3-6.png',
                'url' => '/facturacion-electronica',
            ],
            [
                'title' => __('Encuestas de satisfacción'), 
                'text' => __('App personalizada exclusivamente para tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Encuestas-de-satisfaccio%CC%81n_2.png',
                'url' => '/fidelizacion-de-clientes',
            ],
            [
                'title' => __('APP móvil'), 
                'text' => __('App personalizada exclusivamente para tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('Accede a la información de tu negocio desde cualquier lugar'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Almacenamiento-en-la-nube_4-4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
            [
                'title' => __('Reportes de gestión'), 
                'text' => __('Toma decisiones informadas y haz crecer tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3-1.png',
                'url' => '/reportes-de-gestion',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_de_medicina_alternativa($locale)
    {
        $this->seo->title(__('Software de medicina alternativa') . " - AgendaPro");
        $this->seo->meta('description', __('Mantén el control con la Ficha de paciente y Agenda del software para Centro de Medicina Alternativa de AgendaPro. Demo gratis Aquí.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software de medicina alternativa"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu centro"),
            "h2" => __("Gestiona tus citas, pacientes y ventas en un mismo lugar"),
            "h2_sub" => __("Empieza a llevar tu centro al mundo digital y capta nuevos clientes con AgendaPro"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Medicina-alternativa@3x-8-1-1.png",
            "other_features_text" => "Toda las herramientas que necesitas para automatizar la gestión de tu centro",
            "testimonial" => $this->testimonials['fE39Y0h7_Ng'],
        );

        $business_features = [
            [
                'title' => __('Agenda actualizada de forma automática'), 
                'text' => __('¿Te cuesta tener al día el agendamiento de tus pacientes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Fichas clínicas'), 
                'text' => __('¿Tienes las fichas clíinicas desorganizadas y en algunos casos no las encuentras?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Ficha-clinica-1.png',
            ],
            [
                'title' => __('Evita inasistencias'), 
                'text' => __('¿Tus clientes no asisten a tus reservas?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Manejo automático de ingresos'), 
                'text' => __('¿Tienes errores en el manejo de los pagos y las comisiones?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Automatiza la agenda de tu centro'), 
            'text' => __('Crea tu agenda online para que tus pacientes reserven en tu centro y observa cómo se llena automáticamente tu calendario.'), 
            'text_mark' => __('Tu agenda enlazada con tus redes'), 
            'text_2' => __('Podrás integrar tu agenda con tus redes sociales y tu página web. Esta es la mejor forma de llevar tu centro de Medicina Alternativa al mundo digital.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Medicina-alternativa-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('FICHA CLÍNICA'), 
            'sub_title' => __('Lleva la información de tus pacientes de manera online y segura'), 
            'text' => __('Nuestra Ficha clínica te permite agregar todos los campos que necesites según las características de tus pacientes y las necesidades de tu centro.'), 
            'text_mark' => __('Ficha clínica alojada en la nube'), 
            'text_2' => __('Nuestra ficha está alojada en la nube y por esta razón es más segura y accesible que cualquier otra. Podrás tener todos los datos de las reservas, pagos, diagnósticos y cualquier exámen de tus pacientes de manera online.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Medicina-alternativa-2.png',
            'url' => '/ficha-clinica',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS DE CITAS'), 
            'sub_title' => __('Disminuye la tasa de inasistencias de tu centro'), 
            'text' => __('Envía recordatorios automáticos a tus pacientes a través del correo o de Whatsapp para que puedan confirmar o posponer sus citas. Esto disminuirá la tasa de inasistencias a tu centro.'), 
            'text_mark' => __('Llena tu calendario con estrategias de marketing'), 
            'text_2' => __('En el caso que tengas citas canceladas podrás utilizar diferentes estrategias de marketing para llenar esas horas y de esta manera maximizar tus ingresos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Medicina-alternativa-3-8.png',
            'url' => '/recordatorios-automaticos',
        ];
        
        $features_content[] = [
            'title' => __('FLUJO DE CAJA ORGANIZADO'), 
            'sub_title' => __('Conoce tus ingresos y egresos en tiempo real'), 
            'text' => __('Lleva un seguimiento detallado de cómo está tu flujo de caja, de esta manera podrás tomar decisiones que beneficien las finanzas de tu negocio.'), 
            'text_mark' => __('Información detallada en cualquier período de tiempo'), 
            'text_2' => __('Además puedes ver el total de tus recaudaciones diarias, semanales o mensuales. Podrás enviar presupuestos y comprobantes de pago a todos tus clientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Medicina-alternativa-4.png',
            'url' => '/sistema-de-caja',
        ];

        $other_features = [
            [
                'title' => __('Fidelización de pacientes'), 
                'text' => __('Asegura que tus pacientes terminen sus tratamientos y vuelvan a tu consulta.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-clientes_3-3.png',
                'url' => '/fidelizacion-de-clientes',
            ],
            [
                'title' => __('Reportes de gestión'), 
                'text' => __('Mira el desempeño de tu centro de medicina alternativa y toma acciones inteligentes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3-1.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Encuestas de satisfacción'), 
                'text' => __('Conoce lo que tus pacientes piensan de tu centro y aprovecha esa información para optimizar tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Encuestas-de-satisfaccio%CC%81n_2.png',
                'url' => '/encuesta-de-satisfaccion',
            ],
            [
                'title' => __('Comisiones automáticas'), 
                'text' => __('Cálculo automatizado de las comisiones de tus profesionales'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reporte-de-comisiones_4-2.png',
                'url' => '/reporte-de-comisiones',
            ],
            [
                'title' => __('App móvil'), 
                'text' => __('App personalizada para que tus pacientes lleguen directamente desde el celular a tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('Mantén los datos de tus pacientes en un lugar seguro y accesible'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Almacenamiento-en-la-nube_4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_centro_de_podologia($locale)
    {
        $this->seo->title(__('Software para centro de podología') . " - AgendaPro");
        $this->seo->meta('description', __('¡Miles de profesionales confían en nosotros!'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para centros de podología"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu centro de podología"),
            "h2" => __("Gestiona tus citas, pacientes y ventas en un mismo lugar"),
            "h2_sub" => __("Actualiza la forma de llevar tu centro de Podología y destaca frente a tu competencia llevando tu centro a otro nivel"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Podologos@3x-8-1.png",
            "other_features_text" => "Solo necesitarás AgendaPro para poner toda la gestión de tu centro de podología en automático",
            "testimonial" => $this->testimonials['1jF-yBrjzMo'],
        );

        $business_features = [
            [
                'title' => __('Agenda organizada y digital'), 
                'text' => __('¿Se te dificulta llevar una agenda ordenada y no tienes forma que te agenden de manera online?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Evita las inasistencia de tus pacientes'), 
                'text' => __('¿Pierdes tiempo y dinero con las inasistencias recurrente de tus pacientes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Recordatorios-automa%CC%81ticos.png',
            ],
            [
                'title' => __('Historia Clínica actualizada'), 
                'text' => __('¿Te cuesta encontrar las historias clínicas y mantener el orden de todos los documentos?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Ficha-clinica-1.png',
            ],
            [
                'title' => __('Flujo de caja automatizado'), 
                'text' => __('¿Pierdes dinero por no tener un total control de tu caja?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Mantén toda tu agenda organizada de manera automática'), 
            'text' => __('Todos tus pacientes podrán agendar una hora de manera online a través de tus redes sociales o tu página web. Cada hora agendada se actualizará automáticamente en el calendario de tu centro con todos los datos necesarios.'), 
            'text_mark' => __('Control total de tu negocio'), 
            'text_2' => __('Con AgendaPro puedes manejar todo tu negocio desde un solo lugar, permitiendo realizar proyecciones para tomar mejores decisiones y simplificar tu trabajo, dejando tiempo libre para dedicarte a tus pacientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Podologia-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS DE CITAS'), 
            'sub_title' => __('Envía recordatorio a través de WhatsApp y correo electrónico'), 
            'text' => __('Asegura la asistencia de tus pacientes al centro con los recordatorios automáticos de AgendaPro, enviando un correo o mensaje de WhatsApp con el detalle de su cita.'), 
            'text_mark' => __('Evita perdidas de dinero'), 
            'text_2' => __('Con la confirmación de horas podrás completar las horas canceladas con anticipación, evitando perdidas de dinero, horas en blanco de tu agenda y profesionales sin pacientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Podologia-2.png',
            'url' => '/recordatorios-automaticos',
        ];

        $features_content[] = [
            'title' => __('HISTORIA CLÍNICA ONLINE'), 
            'sub_title' => __('Lleva toda la información de tus pacientes de manera online'), 
            'text' => __('Digitaliza todos los documentos de tus pacientes y maneja toda la información en las fichas personalizables de AgendaPro, para mantener todos esos documentos actualizados y así lograr una correcta atención del paciente.'), 
            'text_mark' => __('Enlazada con la agenda Online'), 
            'text_2' => __('Las historias clínicas están enlazada a la agenda y caja de tu centro, de esta manera tendrás toda la información de reservas y pagos consolidada en un mismo lugar. Todo almacenado en la nube de forma segura y accesible desde cualquier computadora con acceso a internet ¡Mantén el control de centro estés donde estés!.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Podologia-3-8.png',
            'url' => '/ficha-clinica',
        ];
        
        $features_content[] = [
            'title' => __('SISTEMA DE CAJA'), 
            'sub_title' => __('Conoce todos tus ingresos y egresos en tiempo real'), 
            'text' => __('Con nuestra caja automatizada podrás ver el estado de pago de tus citas o reservas en tiempo real, además de todos los gastos de tu centro de podología para que tomes decisiones acertadas y al instante. La caja está enlazada directamente a tu agenda, así podrás ver cuánto dinero tienes proyectado y cuánto está realmente cobrado.'), 
            'text_mark' => __('Comisiones automatizadas'), 
            'text_2' => __('Con AgendaPro se calculan automáticamente las comisiones de tus profesionales, entregando la seguridad en los cálculos que tus profesionales se merecen por el trabajo que desempeñan día adía. ¡Evita errores y llevar los cálculos manual!.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Podologia-4.png',
            'url' => '/sistema-de-caja',
        ];

        $other_features = [
            [
                'title' => __('Fidelización de pacientes'), 
                'text' => __('Crea pacientes fieles que regresen a tu consulta.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-clientes_3-3.png',
                'url' => '/fidelizacion-de-clientes',
            ],
            [
                'title' => __('Reportes de Gestión'), 
                'text' => __('Toda la información de la gestión de tu centro actualizada y en tiempo real.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reportes-de-gestio%CC%81n_3-2.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Encuestas de Satisfacción'), 
                'text' => __('Mira que opinan tus pacientes de tu consulta y toma decisiones a partir de eso.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Encuestas-de-satisfaccio%CC%81n_2.png',
                'url' => '/encuesta-de-satisfaccion',
            ],
            [
                'title' => __('Comisiones automáticas'), 
                'text' => __('No pierdas tiempo calculando manualmente las comisiones de tus profesionales.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reporte-de-comisiones_4-2.png',
                'url' => '/reporte-de-comisiones',
            ],
            [
                'title' => __('App móvil para tu negocio'), 
                'text' => __('Crea una app móvil para tu centro y permite que tus pacientes puedan reservar rápidamente desde el celular.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('Todos los datos de tu centro seguros y accesibles.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Almacenamiento-en-la-nube_4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_centro_deportivo($locale)
    {
        $this->seo->title(__('Software para centro deportivo') . " - AgendaPro");
        $this->seo->meta('description', __('Controla toda la gestión de tu centro deportivo con AgendaPro, Software de gestión sencillo e intuitivo. Click aquí para recibir una demo gratuita.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para centro deportivo"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu centro deportivo"),
            "h2" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2_sub" => __("Lleva el control total de tu centro deportivo y digitaliza toda la gestión"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Centro-de-deportes@3x-8-1.png",
            "other_features_text" => "Solo necesitarás AgendaPro para poner toda la gestión de tu centro deportivo en automático",
            "testimonial" => $this->testimonials['fE39Y0h7_Ng'],
        );

        $business_features = [
            [
                'title' => __('Digitaliza la agenda de tu negocio'), 
                'text' => __('¿Pierdes la cuenta de quienes te agendan y no llevas el control de tus horarios?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Control en los pagos'), 
                'text' => __('¿No tienes un seguimiento de quiénes han pagado sus clases?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Control-de-pagos-3.png',
            ],
            [
                'title' => __('Flujo de caja actualizado'), 
                'text' => __('¿No sabes cómo va el flujo de caja de tu negocio?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
            [
                'title' => __('Comisiones automatizadas'), 
                'text' => __('¿Pierdes mucho tiempo realizando el cálculo de las comisiones y nunca te cuadra?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones-5.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Recibe reservas online desde tus redes sociales o sitio web'), 
            'text' => __('Mantén tu agenda organizada automáticamente con las reservas que realizan tus clientes en la web de agendamiento. Con AgendaPro podrás tener una web de reservas en donde tus clientes podrán conocer y agendar tus servicios desde cualquier dispositivo.'), 
            'text_mark' => __('Agenda conectada con toda la gestión de tu negocio'), 
            'text_2' => __('La organización es primordial para el éxito de tu centro, con AgendaPro podrás manejar clientes, ventas, inventarios, marketing todo esto para facilitar tu día a día y lograr el crecimiento de tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Deportivos-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('CONTROL DE PAGOS'), 
            'sub_title' => __('Identifica automáticamente quien ha pagado sus clases en todo momento'), 
            'text' => __('Muchas veces el seguimiento de los pagos, de las personas que asisten a cada clase es un dolor de cabeza. Con AgendaPro tienes control total en el seguimiento de los pagos de cada clases de tu centro deportivo, más nunca dejes que se pase alguien sin pagar tus clases.'), 
            'text_mark' => __('Flujo de caja en tiempo real'), 
            'text_2' => __('AgendaPro te permite mantener un control de caja de manera sencilla y efectiva, permitiendo ver cuales son los ingresos y los egresos de tu negocio en tiempo real, calculando automáticamente las comisiones de tus profesionales, aplicar descuentos y revisar las recaudaciones desde cualquier lugar.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Deportivos-2.png',
            'url' => '/control-de-pagos',
        ];

        $features_content[] = [
            'title' => __('SISTEMA DE CAJA'), 
            'sub_title' => __('Controla y automatiza los ingresos y egresos de tu centro'), 
            'text' => __('Mira cómo está el flujo de caja de tu negocio y toma decisiones inteligentes que te ayuden a optimizar tu centro. Evita los gastos fuertes en los momentos de crisis y espera tener liquidez para realizar las compras necesarias.'), 
            'text_mark' => __('Reportes digitales automatizados'), 
            'text_2' => __('Obtén un resumen automático de la caja de tu negocio en el periodo de tiempo que desees, conociendo todos los ingresos, egresos, productos y servicios más vendidos en tu negocio etc. ¡Olvídate de calcular en Excel y actualiza la forma de llevar tus ventas!.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Control-de-pagos-AgendaPro-1.png',
            'url' => '/sistema-de-caja',
        ];
        
        $features_content[] = [
            'title' => __('CÁLCULO DE COMISIONES AUTOMÁTICAS'), 
            'sub_title' => __('Automatiza el calculo de comisiones de todos los instructores de tu centro'), 
            'text' => __('No pierdas tiempo calculando manualmente las comisiones y haciendo que cuadren con toda las clases impartidas en tu centro.'), 
            'text_mark' => __('Información en tiempo real'), 
            'text_2' => __('Con AgendaPro tendrás comisiones calculadas automáticamente y relacionadas directamente con cada clase y su respectivo instructor.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Deportivos-4.png',
            'url' => '/reporte-de-comisiones',
        ];

        $other_features = [
            [
                'title' => __('Fidelización de clientes'), 
                'text' => __('Enamora a tus clientes y haz que vuelvan por tus servicios.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-clientes_3-3.png',
                'url' => '/fidelizacion-de-clientes',
            ],
            [
                'title' => __('Reportes de Gestión'), 
                'text' => __('Todo lo que necesitas para llevar una gestión al día.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3-1.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Encuestas de Satisfacción'), 
                'text' => __('Mira la opinión de tus alumnos acerca de tu centro deportivo.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Encuestas-de-satisfaccio%CC%81n_2.png',
                'url' => '/encuesta-de-satisfaccion',
            ],
            [
                'title' => __('Email marketing'), 
                'text' => __('Envío de email masivo a tu base de datos segmentada.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('App móvil para tu centro deportivo'), 
                'text' => __('App con tu marca y servicios, para que tus alumnos lleguen directamente desde el celular a tu negocio.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('Datos seguros y accesibles en todo momento y desde cualquier lugar.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Almacenamiento-en-la-nube_4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_centro_de_crossfit($locale)
    {
        $this->seo->title(__('Software para centro de crossfit') . " - AgendaPro");
        $this->seo->meta('description', __('Controla la gestión de tu Gimnasio de crossfit con AgendaPro, Software de gestión integral sencillo e intuitivo. Haz click aquí para una demo gratuita.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para centros de crossfit"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu gimnasio"),
            "h2" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2_sub" => __("Más organización y más clientes fieles para tu negocio. Con AgendaPro digitalizas tu centro, atraes más clientes y fidelizas a los antiguos."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Crossfit@3x-8-1.png",
            "other_features_text" => "Solo necesitarás AgendaPro para poner toda la gestión de tu gimnasio de Crossfit en automático",
            "testimonial" => $this->testimonials['fE39Y0h7_Ng'],
        );

        $business_features = [
            [
                'title' => __('Agenda virtual organizada'), 
                'text' => __('¿Tienes tu agenda organizada en un Excel y pierdes tiempo llenando tus clases?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Control de pagos'), 
                'text' => __('¿Se te dificulta saber quien ha pagado tus clases y no llevas un seguimiento de los pagos en tu centro?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Control-de-pagos-3.png',
            ],
            [
                'title' => __('Flujo de caja organizada y actualizada'), 
                'text' => __('¿Desconoces cuales son tus ingresos y egresos de tu negocio, perdiendo mucho tiempo cuadrando la caja a fin de mes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
            [
                'title' => __('Comisiones automatizadas'), 
                'text' => __('¿Pierdes muchas horas realizando el cálculo de comisiones de forma manual?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones-5.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDAMIENTO ONLINE DE TUS CLIENTES'), 
            'sub_title' => __('Crea tu Web de reservas para tus clases'), 
            'text' => __('No pierdas tiempo organizando tu agenda, solo preocúpate por la felicidad de tus clientes. Con AgendaPro mejorarás la experiencia de tus clientes ofreciéndole la oportunidad de agendar en tus clases a través de internet.'), 
            'text_mark' => __('Sincronización de las reservas online con tu agenda'), 
            'text_2' => __('Estas reservas se sincronizan automáticamente con tu agenda mostrando solo los cupos disponibles. Podrás hacer seguimiento de los inscritos y aplicar técnicas de marketing para llenar tus clases que veas con menos asistentes. Todo eso y más desde AgendaPro.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Crossfit-1@2x.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('CONTROL DE PAGOS'), 
            'sub_title' => __('Conoce quién ha pagado tu clase'), 
            'text' => __('Te ha pasado que asisten a tu centro y no llevas control de quién ha pagado y quién no. Con AgendaPro nunca tendrás este problema, tendrás todos los pagos directamente asociados a las reservas.'), 
            'text_mark' => __('Acceso sencillo y desde cualquier lugar'), 
            'text_2' => __('Fácilmente podrás consultar quienes faltan por pagar y podrás hacer el mach mensual con las asistencias. Ten el control total de tus recaudaciones y simplifica tu día a día con nosotros.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Crossfit-2.png',
            'url' => '/control-de-pagos',
        ];

        $features_content[] = [
            'title' => __('CONTROL DE CAJA'), 
            'sub_title' => __('Visualiza todos tus ingresos y egresos en tiempo real'), 
            'text' => __('Conoce el flujo de caja de tu negocio en todo momento y toma cualquier decisión con los datos correctos.'), 
            'text_mark' => __('La caja está enlazada automáticamente con el sistema de agendamiento'), 
            'text_2' => __('Gracias a esto podrás ver tus ingresos en tiempo real, así como las proyecciones de reservas futuras. Recupera el control de las finanzas de tu centro con AgendaPro.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Crossfit-3-8.png',
            'url' => '/sistema-de-caja',
        ];
        
        $features_content[] = [
            'title' => __('CONTROL DE COMISIONES'), 
            'sub_title' => __('Calcula las comisiones de tus instructores a un click'), 
            'text' => __('Obtén en tiempo récord el cálculo de comisiones de todos los instructores de tu centro de crossfit.'), 
            'text_mark' => __('Ten en todo momento un reporte de comisiones de tus prestadores'), 
            'text_2' => __('Las comisiones están enlazadas con la asistencia de los alumnos a tus clases. De esta manera no tendrás que invertir tiempo haciendo el cálculo y no habrá confusiones con los instructores.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Crossfit-4.png',
            'url' => '/reporte-de-comisiones',
        ];

        $other_features = [
            [
                'title' => __('Email Marketing'), 
                'text' => __('Correos masivos a toda tu base de datos.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Reportes de Gestión'), 
                'text' => __('Haz los cambios necesarios a partir de los datos generados por tu negocio.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reportes-de-gestio%CC%81n_3-2.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Charly'), 
                'text' => __('Email marketing inteligente para tu base de datos.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Charly_4-1.png',
                'url' => '/charly',
            ],
            [
                'title' => __('Rebound Marketing'), 
                'text' => __('La revolución del marketing para los negocios que trabajan con reservas.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/03/rebound-AgendaPro-2.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('App móvil personalizada'), 
                'text' => __('Una app que posiciona tu negocio entre los mejores.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Fidelización de clientes'), 
                'text' => __('Haz que tus clientes retornen infinitamente a tu negocio.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-clientes_3-3.png',
                'url' => '/fidelizacion-de-clientes',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_estudio_de_pilates($locale)
    {
        $this->seo->title(__('Software para estudio de pilates') . " - AgendaPro");
        $this->seo->meta('description', __('Controla toda la gestión de tu estudio de pilates con AgendaPro, Software de gestión sencillo e intuitivo. Click aquí para recibir una demo gratuita.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para estudio de pilates"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu Estudio de Pilates"),
            "h2" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2_sub" => __("Adapta tu estudio al mundo digital y visualiza toda la información en tiempo real"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Pilates@3x-8-1.png",
            "other_features_text" => "Solo necesitarás AgendaPro para poner toda la gestión de tu Estudio de Pilates en automático",
            "testimonial" => $this->testimonials['fE39Y0h7_Ng'],
        );

        $business_features = [
            [
                'title' => __('Agenda online para tu negocio'), 
                'text' => __('¿Aún llevas la agenda de tu negocio con lápiz y papel, perdiendo tiempo y confusiones en las reservas?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Agenda-Online-10.png',
            ],
            [
                'title' => __('Registro automatizado'), 
                'text' => __('¿Pierdes dinero al no llevar un seguimiento automático de los pagos en tu negocio?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Control-de-pagos-3.png',
            ],
            [
                'title' => __('Controla ingresos y egresos'), 
                'text' => __('¿No sabes cuánto ganas y cuánto gastas en el día a día?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
            [
                'title' => __('Comisiones automatizadas'), 
                'text' => __('¿Inviertes mucho tiempo calculando las comisiones y en muchos casos no cuadran?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones-5.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Automatiza la organización de tus clases'), 
            'text' => __('Tu agenda se actualizará automáticamente con las horas agendadas desde tu sitio de reservas o redes sociales, de esta manera podrás organizar simultáneamente todas las agendas de tus instructores y tus clientes podrán ver solo los horarios que tienes disponibles para cada una de tus clases.'), 
            'text_mark' => __('Aumenta el factor de ocupación'), 
            'text_2' => __('Mantén siempre tu agenda disponible para tus clientes, así aumentarás tu factor de ocupación y por lo tanto también tus ingresos. ¡Únete a nosotros y comienza a hacer crecer tu estudio!.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Pilates-1-8.png',
            'url' => '/agenda-online',
        ];

        $features_content[] = [
            'title' => __('MANEJO DE PAGOS'), 
            'sub_title' => __('Conoce al instante quién falta por pagar tu clase'), 
            'text' => __('Te ha pasado que después de cada clase que das cuenta que falta mucha gente por pagar, aparte al final de mes no cuadran tus cuentas y faltando dinero en tu caja. Hemos observado este dolor en muchos estudios de pilates y queremos ayudarte.'), 
            'text_mark' => __('Estado de pagos en tiempo real'), 
            'text_2' => __('Con AgendaPro puedes seguir en tiempo real el estado de pagos de tus clases agendadas, de esta manera no quedarán alumnos sin pagar y podrás llevar un control sencillo del flujo de caja.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Pilates-2.png',
            'url' => '/control-de-pagos',
        ];

        $features_content[] = [
            'title' => __('SISTEMA DE CAJA'), 
            'sub_title' => __('Lleva el flujo de caja de manera automática'), 
            'text' => __('Mira tus ingresos y egresos en tiempo real y desde cualquier dispositivo con acceso a internet, así podrás tener un especial cuidado con los gastos de tu día a día para evitar malos ratos.'), 
            'text_mark' => __('Reportes de caja automatizados'), 
            'text_2' => __('Consulta tus ingresos en el período que prefieras: días, semanas o meses. Ingresa abonos y crea promociones dentro del sistema sin mayores complicaciones. ¡Todos los datos que necesitas directamente en AgendaPro!.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Pilates-3-8.png',
            'url' => '/sistema-de-caja',
        ];
        
        $features_content[] = [
            'title' => __('CÁLCULO DE COMISIONES AUTOMÁTICAS'), 
            'sub_title' => __('Evita perder el tiempo calculando comisiones de forma manual'), 
            'text' => __('Con el cálculo de comisiones automático no tendrás que preocuparte por perder tiempo haciendo cálculos innecesarios, ajusta directamente el % de comisión que quieres utilizar para cada instructor y AgendaPro hará el resto.'), 
            'text_mark' => __('Reporte de comisiones'), 
            'text_2' => __('Por cada pago realizado registrado en AgendaPro automáticamente el sistema lo acumula en la cuenta de comisiones del instructor que impartió la clase. De esta manera al final de mes o cuando consideres necesario podrás sacar un reporte de comisiones y tendrás el total de comisiones a pagar.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Pilates-4.png',
            'url' => '/reporte-de-comisiones',
        ];

        $other_features = [
            [
                'title' => __('Fidelización de clientes'), 
                'text' => __('Asegura que tus clientes contraten más clases, y vuelvan una y otras vez'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-clientes_3-3.png',
                'url' => '/fidelizacion-de-clientes',
            ],
            [
                'title' => __('Reportes de Gestión'), 
                'text' => __('Mira el desempeño de tu estudio de pilates y toma acciones inteligentes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reportes-de-gestio%CC%81n_3-2.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Encuestas de Satisfacción'), 
                'text' => __('Conoce lo que tus clientes piensan de tu estudio y aprovecha esa información para optimizar tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Encuestas-de-satisfaccio%CC%81n_2.png',
                'url' => '/encuesta-de-satisfaccion',
            ],
            [
                'title' => __('Comisiones automáticas'), 
                'text' => __('Cálculo automatizado de las comisiones de tus instructores'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Reporte-de-comisiones_4-2.png',
                'url' => '/reporte-de-comisiones',
            ],
            [
                'title' => __('App móvil para tu estudio'), 
                'text' => __('App personalizada para que tus alumnos lleguen directamente desde el celular a tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Aplicacio%CC%81n-movil_3-2.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('Mantén los datos de tus alumnos en un lugar seguro y accesible'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Almacenamiento-en-la-nube_4.png',
                'url' => '/almacenamiento-en-la-nube',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function software_para_estudio_de_yoga($locale)
    {
        $this->seo->title(__('Software para estudio de yoga') . " - AgendaPro");
        $this->seo->meta('description', __('Controla tu Estudio de Yoga con AgendaPro, Software de gestión todo en uno sencillo e intuitivo. Haz click aquí y pide una demo gratis.'));

        $meta = array(
            "bodyclass" => "businesstype",
        );

        $content = array(
            "h1" => __("Software para Estudio de Yoga"),
            "h1_sub" => __("Simplifica tu día a día y haz crecer tu Estudio de Yoga"),
            "h2" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2_sub" => __("Llego la hora de organizar tu negocio y llevarlo al mundo digital. AgendaPro te ayuda a captar, gestionar y retener a tus clientes desde un mismo lugar."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Yoga@3x-8-1.png",
            "other_features_text" => "Solo necesitarás AgendaPro para poner toda la gestión de tu Estudio de Yoga en automático",
            "testimonial" => $this->testimonials['fE39Y0h7_Ng'],
        );

        $business_features = [
            [
                'title' => __('Mantén tu agenda organizada y digitalizada'), 
                'text' => __('¿Aún llevas tu agenda con lápiz y papel, perdiendo gran parte de tu tiempo organizando todas tus clases?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Agenda-Online-1.png',
            ],
            [
                'title' => __('Control total de los ingresos'), 
                'text' => __('¿No tienes el control y seguimiento de los pagos de tus clientes?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Control-de-pagos-3.png',
            ],
            [
                'title' => __('Flujo de caja automatizada'), 
                'text' => __('¿Desconoces el detalle de los ingresos totales y cuánto dinero está egresando de tu negocio?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Sistema-de-caja.png',
            ],
            [
                'title' => __('Comisiones automatizadas'), 
                'text' => __('¿Cometes errores y pierdes mucho tiempo calculando las comisiones de tus instructores?'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reporte-de-comisiones-5.png',
            ],
        ];

        $features_content[] = [
            'title' => __('AGENDA ONLINE'), 
            'sub_title' => __('Organiza todas tus citas de manera automática'), 
            'text' => __('Agendamiento online que te permitirá tener tu agenda organizada de forma automática y permitir a tus clientes agendar desde tus redes sociales y/o página web.'), 
            'text_mark' => __('Genera una experiencia agradable e intuitiva a tus clientes'), 
            'text_2' => __('La agenda online de AgendaPro te proporciona una manera de llegar a tus clientes de manera digital generando una experiencia intuitiva y accesible desde cualquier dispositivo con acceso a internet. Tus clientes podrán reservar a cualquier hora del día, sin que estés preocupado de hacer un seguimiento o llenar una lista manualmente. Todo es automatizado y sencillo.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Yoga-1@2x.png',
            'url' => '/yoga/software-para-estudio-de-yoga#:~:text=automatizado%20y%20sencillo.-,SABER%20M%C3%81S,-CONTROL%20DE%20PAGOS',
        ];

        $features_content[] = [
            'title' => __('CONTROL DE PAGOS'), 
            'sub_title' => __('Lleva tus recaudaciones en tiempo real'), 
            'text' => __('No permitas que el cobro de tus clases te quite la tranquilidad. Mira quienes faltan por pagar y organiza todas tus recaudaciones en tiempo real.'), 
            'text_mark' => __('Control total sobre los cobros'), 
            'text_2' => __('En AgendaPro todos los pagos están asociados de forma automática con las reservas en tu agenda, de esta forma evitarás que alguien olvidé su pago y mantendrás el control de tu estudio. Respira profundo y deja que AgendaPro haga el trabajo.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Yoga-2.png',
            'url' => '/control-de-pagos',
        ];

        $features_content[] = [
            'title' => __('SISTEMA DE CAJA'), 
            'sub_title' => __('Mantén actualizado automáticamente todos tus ingresos'), 
            'text' => __('Debes conocer cuales son tus ingresos y tus egresos en tiempo real para mantener el equilibro de tus finanzas.'), 
            'text_mark' => __('AgendaPro te ayuda a tener tu flujo de caja al día'), 
            'text_2' => __('Con AgendaPro tendrás toda la información necesaria para tomar decisiones financieras de manera inteligente tomando en cuenta tu flujo de caja actualizado en tiempo real. Podrás mantener tu estudio bien administrado mientras tu te dedicas a tus alumnos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Yoga-3-8.png',
            'url' => '/sistema-de-caja',
        ];
        
        $features_content[] = [
            'title' => __('COMISIONES AUTOMATIZADAS'), 
            'sub_title' => __('Evita perder tiempo con el cálculo de comisiones'), 
            'text' => __('Mantén el cálculo de comisiones de todos tus instructores de forma instantánea y evita errores en el pago. Con AgendaPro podrás tener No perderás ni un segundo realizando el cálculo y el mach entre los asistentes a la clase y los pagos realizados.'), 
            'text_mark' => __('Reporte de comisiones'), 
            'text_2' => __('Filtra las comisiones de tus profesiones por el periodo que desees visualizar, actualizándose automáticamente y accediendo a toda la información en tiempo real.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Yoga-4.png',
            'url' => '/reporte-de-comisiones',
        ];

        $other_features = [
            [
                'title' => __('Email Marketing'), 
                'text' => __('Segmenta y envía correos masivos.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Marketing_4-1.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('Reportes de Gestión'), 
                'text' => __('Todo lo que necesitas para tener al día tu negocio.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Reportes-de-gestion_3-1.png',
                'url' => '/reportes-de-gestion',
            ],
            [
                'title' => __('Charly'), 
                'text' => __('Tu asistente de marketing inteligente.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Charly_4-1.png',
                'url' => '/charly',
            ],
            [
                'title' => __('Rebound Marketing'), 
                'text' => __('La nueva manera de aumentar tus reservas a través de tus clientes fieles.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/03/rebound-AgendaPro-2.png',
                'url' => '/marketing',
            ],
            [
                'title' => __('App móvil personalizada'), 
                'text' => __('Una app exclusiva para tu negocio.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/12/Aplicacion-movil_3-1.png',
                'url' => '/aplicacion-movil',
            ],
            [
                'title' => __('Fidelización de clientes'), 
                'text' => __('Haz que tus clientes queden enganchados con tu marca.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2021/01/Fidelizacio%CC%81n-de-clientes_3-3.png',
                'url' => '/fidelizacion-de-clientes',
            ],
        ];

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'business_features' => $business_features, 'features_content' => $features_content, 'other_features' => $other_features]);

    }
}
