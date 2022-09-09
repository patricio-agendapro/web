<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

class FeatureController extends Controller
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

        $this->features = [
            'reservas-online' => [
                'url' => '/reservas-online', 
                'title' => __('Reservas Online'), 
                'text' => __('Permite a tus clientes reservar online'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
            ],
            'gestion-de-clientes' => [
                'url' => '/gestion-de-clientes', 
                'title' => __('Gestión de clientes'), 
                'text' => __('Ten toda la info de tus clientes organizada'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-16.png',
            ],
            'control-de-inventarios' => [
                'url' => '/control-de-inventarios', 
                'title' => __('Control de Inventario'), 
                'text' => __('Controla tu inventario de forma online automática'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-18.png',
            ],
            'agenda-medica' => [
                'url' => '/agenda-medica', 
                'title' => __('Agenda Médica'), 
                'text' => __('Organiza tus reservas online automáticamente'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
            ],
            'reportes-de-gestion' => [
                'url' => '/reportes-de-gestion', 
                'title' => __('Agenda Médica'), 
                'text' => __('Organiza tus reservas online automáticamente'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
            ],
            'fidelizacion-de-clientes' => [
                'url' => '/fidelizacion-de-clientes', 
                'title' => __('Fidelización de clientes'), 
                'text' => __('Haz que tus clientes vuelvan a tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-16.png',
            ],
            'archivos-rips' => [
                'url' => '/archivos-rips', 
                'title' => __('Archivos RIPS'), 
                'text' => __('Todo lo que necesitas para tus RIPS'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-18.png',
            ],
            'sistema-de-caja' => [
                'url' => '/sistema-de-caja', 
                'title' => __('Sistema de caja'), 
                'text' => __('Tu caja actualizada en tiempo real'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
            ],
            'sistema-de-inventario' => [
                'url' => '/sistema-de-inventario', 
                'title' => __('Sistema de Inventario'), 
                'text' => __('Administra tu inventario en tiempo real'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
            ],
            'marketing' => [
                'url' => '/marketing', 
                'title' => __('Marketing'), 
                'text' => __('Aumenta tus reservas de forma inteligente'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-16.png',
            ],
            'encuesta-de-satisfaccion' => [
                'url' => '/encuesta-de-satisfaccion', 
                'title' => __('Encuestas de satisfacción'), 
                'text' => __('Mira lo que tus clientes opinan de tu negocio.'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-18.png',
            ],
            'almacenamiento-en-la-nube' => [
                'url' => '/almacenamiento-en-la-nube', 
                'title' => __('Almacenamiento en la nube'), 
                'text' => __('La forma más segura de almacenar tus datos'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
            ],
            'ficha-clinica' => [
                'url' => '/ficha-clinica', 
                'title' => __('Ficha Clínica'), 
                'text' => __('Ficha clínica online para tus pacientes o clientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-16.png',
            ],
            'aplicacion-movil' => [
                'url' => '/aplicacion-movil', 
                'title' => __('Aplicación Móvil'), 
                'text' => __('Crea tu propia app móvil para tu negocio'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-16.png',
            ],
            'teleconsulta' => [
                'url' => '/teleconsulta', 
                'title' => __('Teleconsulta'), 
                'text' => __('Consulta online desde cualquier lugar'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
            ],
            'giftcards' => [
                'url' => '/giftcards', 
                'title' => __('GiftCard'), 
                'text' => __('La mejor manera de fidelizar a tus clientes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-16.png',
            ],
            'integracion-con-redes-sociales' => [
                'url' => '/integracion-con-redes-sociales', 
                'title' => __('Integración con redes sociales'), 
                'text' => __('Integra tu agenda con todas tus redes'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-18.png',
            ],
            'integraciones-api' => [
                'url' => '/integraciones-api', 
                'title' => __('Integraciones / API'), 
                'text' => __('Envía recordatorios de tus reservas por Whatsapp'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
            ],
            'historia-clinica' => [
                'url' => '/historia-clinica', 
                'title' => __('Historia Clínica'), 
                'text' => __('Historial de tus pacientes online'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-16.png',
            ],
            'control-de-pagos' => [
                'url' => '/control-de-pagos', 
                'title' => __('Control de pagos'), 
                'text' => __('Mira quién ha pagado tus servicios en tiempo real'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-18.png',
            ],
            'agenda-online' => [
                'url' => '/agenda-online', 
                'title' => __('Agenda Online'), 
                'text' => __('Organiza tus reservas online automáticamente'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-18.png',
            ],
        ];

    }

    public function agenda_online($locale)
    {

        $this->seo->title(__('Agenda Online') . " - AgendaPro");
        $this->seo->meta('description', __('Accede a tu Agenda Online desde cualquier lugar y ordena tus citas de forma fácil e intuitiva con AgendaPro. Click acá y pide tu demo personalizada.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Crea tu agenda online y entra al mundo digital"),
            "h1_sub" => __("¡Revisa tu agenda desde cualquier lugar y ordena tu día!"),
            "h2" => __("Digitaliza tu agenda y organiza tu día a día de mejor forma con nuestra agenda online"),
            "h2_sub" => __("Crea tu agenda online con AgendaPro y accede a tus citas en cualquier momento y lugar. Mantén el orden de tu agenda, el control de tus citas, y la información de tus clientes en un mismo lugar."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Agenda-Online-8-1.png",
        );

        $features_content[] = [
            'title' => __('ACCESO DESDE CUALQUIER LUGAR'), 
            'sub_title' => __('Mantén el control de tus citas desde cualquier lugar'), 
            'text' => __('Accede a tu agenda online desde cualquier lugar, ya sea estés en el trabajo, de vacaciones o en otro lugar.'), 
            'text_mark' => __('Acceso desde cualquier dispositivo'), 
            'text_2' => __('Puedes acceder a tu Agenda desde cualquier dispositivo, ya sea un computador, notebook, tablet, o tu smartphone o celular. Puedes descargar la aplicación móvil para Android o iOS para tener el control de tu negocio en la palma de tu mano.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Imagen-beneficio-1_-agenda-online@2x-8.png',
        ];

        $features_content[] = [
            'title' => __('GESTIÓN DE CITAS ONLINE'), 
            'sub_title' => __('Gestiona tu agenda de una manera simple'), 
            'text' => __('Gestiona tu agenda fácilmente. Con pocos clics podrás agregar nuevas citas, bloquear horarios, agregar sobrecupos, revisar la información de un cliente y mucho más.'), 
            'text_mark' => __('No pierdas tiempo y dinero por los errores '), 
            'text_2' => __('Evita los errores administrativos, los pacientes duplicados en el mismo horario, y cualquier error de gestión en tu agenda. Ordena tu negocio junto a AgendaPro y disfruta del trabajo.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Imagen-beneficio-2_-agenda-online@2x-8-2.png',
        ];

        $features_content[] = [
            'title' => __('DISMINUCIÓN DE INASISTENCIAS'), 
            'sub_title' => __('Automatiza los recordatorios de citas'), 
            'text' => __('Envía recordatorios automáticos a tus clientes a través de WhatsApp, email o SMS para cada una de las reservas online realizadas en tu negocio.'), 
            'text_mark' => __('¿Qué ventajas tienes?'), 
            'text_2' => __('Podrás disminuir la tasa de inasistencias y dejar de perder ingresos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Imagen-3_-Centro-de-estetica-8-3.png',
        ];

        $features_content[] = [
            'title' => __('AUMENTO DE FACTOR DE OCUPACIÓN'), 
            'sub_title' => __('Optimiza el uso de tu tiempo'), 
            'text' => __('Aprovecha tu tiempos en las actividades más rentables. Con el cálculo de factor de ocupación automático de AgendaPro podrás calcular el porcentaje de tu tiempo que estás generando ingresos del total disponible.'), 
            'text_mark' => __('Enfócate en las actividades más importantes'), 
            'text_2' => __('Maximizarás tus ingresos al utilizar tu tiempo y focalizar tus esfuerzos en los servicios con mayor demanda. De esta manera cumplirás tu meta mes a mes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/03/Imagen-beneficio-4_-agenda-online@2x-8-2.png',
        ];

        $other_features[] = $this->features['reservas-online'];
        $other_features[] = $this->features['gestion-de-clientes'];
        $other_features[] = $this->features['control-de-inventarios'];
        $other_features[] = $this->features['agenda-medica'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

    public function agenda_medica($locale)
    {
        $this->seo->title(__('Agenda Médica') . " - AgendaPro");
        $this->seo->meta('description', __('Tus pacientes confirmarán online sus citas. Maneja tu Agenda Médica Online desde cualquier lugar con AgendaPro. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Controla tu agenda médica y automatiza tu día a día"),
            "h1_sub" => __("Agenda online, recordatorios por WhatsApp y ficha clínica en un mismo lugar"),
            "h2" => __("Ordena tus citas con nuestra intuitiva Agenda Médica Online"),
            "h2_sub" => __("Con la agenda médica online de AgendaPro tienes el control de tu horarios. Podrás acceder a la información de las citas de tus pacientes desde cualquier lugar para dar una atención especial a cada paciente con poco esfuerzo administrativo."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/AgendaPro_-Agenda-medica-1.png",
        );

        $features_content[] = [
            'title' => __('TU AGENDA MÉDICA EN TU BOLSILLO'), 
            'sub_title' => __('Controla tu horario desde tu computador o teléfono'), 
            'text' => __('Accede a tu agenda médica de forma rápida y segura desde cualquier dispositivo con acceso a internet.'), 
            'text_mark' => __('Ahorra tiempo y enfócate en tus pacientes'), 
            'text_2' => __('Con AgendaPro mantendrás tu agenda organizada sin ningún esfuerzo. Toda la información en un solo lugar.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Agenda-medica-1-8.png',
        ];

        $features_content[] = [
            'title' => __('FICHAS PERSONALIZABLES'), 
            'sub_title' => __('Conecta tu agenda directamente a la ficha de tus pacientes'), 
            'text' => __('Ten a disposición la información más relevante de tus pacientes para ser consultada en todo momento de forma rápida y efectiva.'), 
            'text_mark' => __('Accesibles y personalizables'), 
            'text_2' => __('Cada paciente lo puedes encontrar rápidamente dentro de AgendaPro y puedes personalizar tus fichas para pedir los datos más importantes para tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Agenda-medica-2-8.png',
        ];

        $features_content[] = [
            'title' => __('EVITA LAS INASISTENCIAS DE TUS PACIENTES'), 
            'sub_title' => __('Confirma las horas de tus pacientes automáticamente'), 
            'text' => __('Aumenta los ingresos de tu centro médico o consulta reduciendo la tasa de inasistencias.'), 
            'text_mark' => __('Tu consulta no será olvidada'), 
            'text_2' => __('Mantén a los pacientes atentos a la fecha de tu consulta con nuestros recordatorios automáticos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Agenda-medica-3-8.png',
        ];

        $features_content[] = [
            'title' => __('CONTROLA TU CONSULTA'), 
            'sub_title' => __('Controla la asistencia de tus pacientes'), 
            'text' => __('No pierdas tiempo organizando tu agenda, enfócate en lo más importante, tus pacientes.'), 
            'text_mark' => __('Más tiempo y más ingresos'), 
            'text_2' => __('Con nuestra agenda médica podrás tener toda la gestión de tu consulta en un solo lugar, pacientes, flujo de caja, email marketing y mucho más…'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Agenda-medica-4-8.png',
        ];

        $other_features[] = $this->features['reportes-de-gestion'];
        $other_features[] = $this->features['fidelizacion-de-clientes'];
        $other_features[] = $this->features['archivos-rips'];
        $other_features[] = $this->features['sistema-de-caja'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function reservas_online($locale)
    {
        $this->seo->title(__('Reservas Online') . " - AgendaPro");
        $this->seo->meta('description', __('Tus clientes podrán tomar horas desde tu página web, Facebook, Instagram o app personalizada con la Agenda Online. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Ofrece reservas online y mejora la experiencia de tus clientes"),
            "h1_sub" => __("¡Más reservas con el agendamiento disponible 24/7!"),
            "h2" => __("Tus clientes estarán felices de lo fácil e intuitivo que es reservar en tu negocio"),
            "h2_sub" => __("Ofrece una experiencia digital de primer nivel para que tus clientes se sientan cómodos y confiados a la hora de reservar en tu negocio. Compleméntalo con la experiencia con pago online y recordatorios automáticos que disminuirán la tasa de inasistencias."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/AgendaPro-Reservas-Online-8.png",
        );

        $features_content[] = [
            'title' => __('ACCESO AL MUNDO DIGITAL'), 
            'sub_title' => __('Crea tu presencia digital a través de tu página web de reservas'), 
            'text' => __('Al crear una página web de reservas para tu negocio, tus clientes podrán reservar a cualquier hora y desde cualquier dispositivo. Estarás un paso adelante de tu competencia con una página de reservas impecable e intuitiva para tus clientes.'), 
            'text_mark' => __('Más reservas y más ingresos'), 
            'text_2' => __('Según nuestros datos, el 30% de las reservas online se realiza mientras los negocios están cerrados, es decir, conectando tu web con reservas online obtendrás más reservas.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Reservas-online-1-8.png',
        ];

        $features_content[] = [
            'title' => __('ACERCA TU WEB DE RESERVAS A TUS CLIENTES'), 
            'sub_title' => __('Aumenta tus reservas integrando la agenda con tus redes sociales'), 
            'text' => __('Utiliza Facebook, Instagram y cualquier red social para incentivar las reservas y comenzar a llenar la base de datos de AgendaPro para así, maximizar tus reservas e ingresos.'), 
            'text_mark' => __('Fácil integración'), 
            'text_2' => __('Solo tendrás que agregar el link de tu sitio de reservas y automáticamente tus clientes podrán ingresar y agenda una hora en tu centro.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Reservas-online-2-8.png',
        ];

        $features_content[] = [
            'title' => __('ACTUALIZACIÓN AUTOMÁTICA'), 
            'sub_title' => __('Ahorra tiempo utilizando reservas online'), 
            'text' => __('Tu agenda o la de tus profesionales se actualizará automáticamente con las reservas realizadas por tus clientes.'), 
            'text_mark' => __('Fácil acceso'), 
            'text_2' => __('Podrás editarlas y configurarlas desde cualquier dispositivo brindado agilidad a tu trabajo, y mucho tiempo para dedicarte a tus clientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Reservas-online-3-8.png',
        ];

        $features_content[] = [
            'title' => __('DISMINUYE LAS INASISTENCIAS'), 
            'sub_title' => __('Recordatorios de cita automáticos para cada una de las reservas online'), 
            'text' => __('Envía recordatorios automáticos a tus clientes a través de WhatsApp, email o SMS para cada una de las reservas online realizadas en tu negocio.'), 
            'text_mark' => __('Menos inasistencias = más ingresos'), 
            'text_2' => __('Con el envío de recordatorios tus clientes tendrán la opción de confirmar o cancelar su cita, lo cual se traduce en menor tasa de inasistencias y un aumento de los ingresos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Reservas-online-4-8.png',
        ];

        $other_features[] = $this->features['reportes-de-gestion'];
        $other_features[] = $this->features['fidelizacion-de-clientes'];
        $other_features[] = $this->features['archivos-rips'];
        $other_features[] = $this->features['sistema-de-caja'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function aplicacion_movil($locale)
    {
        $this->seo->title(__('Aplicación móvil') . " - AgendaPro");
        $this->seo->meta('description', __('Deslumbra a tus clientes con la aplicación móvil personalizada de AgendaPro, y aumenta tus ingresos. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Aplicación móvil: Personalizada, fidelización, y más"),
            "h1_sub" => __("¡Obtén la App de tu negocio!"),
            "h2" => __("Haz que tu negocio resalte por encima de la competencia con una app personalizada"),
            "h2_sub" => __("Piensa en dónde tus clientes pasan más tiempo, es ahí donde tu negocio debe tener presencia. Por eso con la app personalizada de AgendaPro tienes la oportunidad de ofrecer un servicio exclusivo y de lujo para que tus clientes agenden desde su celular."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/21-Desktop_-Aplicacion-movil-8.png",
        );

        $features_content[] = [
            'title' => __('APP CON TU MARCA'), 
            'sub_title' => __('Ofrece exclusividad a tus clientes en tu centro'), 
            'text' => __('Con la app personalizada de AgendaPro tendrás una app exclusiva para tus clientes.'), 
            'text_mark' => __('Una APP brinda una imagen profesional para tu negocio'), 
            'text_2' => __('Con una app tu negocio tendrá una imagen exclusiva y de lujo que te diferenciará del resto.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Aplicacio%CC%81n-mo%CC%81vil-1-8.png',
        ];

        $features_content[] = [
            'title' => __('APP ACCESIBLE PARA TU PRESUPUESTO'), 
            'sub_title' => __('Una app a un excelente costo'), 
            'text' => __('El costo de desarrollar una app para tu negocio, en la mayoría de los casos puede ser muy costoso.'), 
            'text_mark' => __('Múltiples beneficios'), 
            'text_2' => __('Con AgendaPro puedes tener una app personalizada profesional en donde tus clientes podrán agendar a un costo accesible. Generarás una buena experiencia y motivarás a tus clientes a ir a tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Aplicacio%CC%81n-mo%CC%81vil-2-8.png',
        ];

        $features_content[] = [
            'title' => __('DISEÑO ADAPTADO A TU MARCA'), 
            'sub_title' => __('Obtén una App personalizada según tu marca'), 
            'text' => __('La app es ajustada a los colores y el tono de tu marca.'), 
            'text_mark' => __('Mayor personalización = mayor engagement'), 
            'text_2' => __('Una vez tus clientes se sientan identificados con tu marca, consumirán más tus productos y servicios. Por eso es muy importante que tu app inspire el mismo sentimiento que tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Aplicacio%CC%81n-mo%CC%81vil-3-8.png',
        ];

        $features_content[] = [
            'title' => __('SE ÚNICO'), 
            'sub_title' => __('Resalta por encima de la competencia'), 
            'text' => __('Es importante que hagas algo que sea diferente. Que mejor manera de ser recordado por ser uno de los únicos que tiene una app personalizada.'), 
            'text_mark' => __('Haz que te recuerden'), 
            'text_2' => __('Con una app personalizada tus clientes te recordarán en todo momento, ya que serás uno de los pocos negocios en el rubro que utilizan esta modalidad. La mejor manera de pensar diferente.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Aplicacio%CC%81n-mo%CC%81vil-4-8-1.png',
        ];

        $other_features[] = $this->features['sistema-de-caja'];
        $other_features[] = $this->features['marketing'];
        $other_features[] = $this->features['encuesta-de-satisfaccion'];
        $other_features[] = $this->features['almacenamiento-en-la-nube'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function integracion_con_redes_sociales($locale)
    {
        $this->seo->title(__('Integración con redes sociales') . " - AgendaPro");
        $this->seo->meta('description', __('Integra AgendaPro con tus redes sociales para que tus clientes agenden una hora en tu negocio de manera rápida y accesible. Click aquí para más info.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Integración con Redes Sociales: Link de reserva para tus redes sociales"),
            "h1_sub" => __("La manera sencilla de llegar a tus clientes"),
            "h2" => __("Integra AgendaPro a tus redes sociales y comienza a recibir reservas al instante"),
            "h2_sub" => __("Cuando integras AgendaPro a tus redes sociales tus clientes tienen la facilidad de agendar en tu negocio en los lugares en donde más pasan tiempo. Incentívalos a ir a tu link de reservas y aumenta tus ingresos."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Integracio%CC%81n-con-redes-sociales-8-2.png",
        );

        $features_content[] = [
            'title' => __('CONSIGUE MÁS RESERVAS'), 
            'sub_title' => __('Tu link de reserva donde más lo necesitas'), 
            'text' => __('Agrega tu link de reservas a todas tus redes y aumenta la asistencia a tu negocio, aprovecha el lugar en el que tus clientes pasan más tiempo.'), 
            'text_mark' => __('Atráelos con tu contenido e incentiva las reservas'), 
            'text_2' => __('Mientras que los atrapas con tu contenido los incentivas a agendar una hora para tus servicios. Podrás utilizarlo en Facebook, Instagram, Tik Tok y cualquier otra red social.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Integracio%CC%81n-con-redes-sociales-1-8.png',
        ];

        $features_content[] = [
            'title' => __('FÁCIL IMPLEMENTACIÓN'), 
            'sub_title' => __('Tan sencillo como copiar y pegar tu link de reservas'), 
            'text' => __('La web de reservas de AgendaPro está diseñada para ser atractiva y de fácil uso.'), 
            'text_mark' => __('Buena interfaz y fácil uso para tus clientes'), 
            'text_2' => __('Con ella incentivarás las reservas en tu negocio y lo mejor es que para utilizarla solo debes agregarla a tus redes sociales.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Integracio%CC%81n-con-redes-sociales-2-8.png',
        ];

        $other_features[] = $this->features['sistema-de-caja'];
        $other_features[] = $this->features['marketing'];
        $other_features[] = $this->features['encuesta-de-satisfaccion'];
        $other_features[] = $this->features['almacenamiento-en-la-nube'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function recordatorios_automaticos($locale)
    {
        $this->seo->title(__('Recordatorios automáticos') . " - AgendaPro");
        $this->seo->meta('description', __('Envía recordatorios automáticos a través de WhatsApp o correo electrónico para que tus clientes no olviden sus citas. Click aquí para la info'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Recordatorios Automáticos: para las reservas online de tus clientes"),
            "h1_sub" => __("Haz que tus clientes no falten a sus citas"),
            "h2" => __("Reduce tu tasa de inasistencias recordando las citas un día antes"),
            "h2_sub" => __("Uno de los grandes dolores que tienen los negocios que funcionan a través de agendamiento, son las inasistencias de los clientes a sus citas agendadas, esto provoca una perdida de dinero porque está ocupando un horario que podría servir para alguien que si asistiría. Con AgendaPro podrás enviar recordatorios de citas un día antes, de esta manera te ayudamos a disminuir tu tasa de inasistencias y damos la oportunidad de reagendar a tus clientes."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Recordatorios-automa%CC%81ticos-8-1.png",
        );

        $features_content[] = [
            'title' => __('ASEGURA LA ASISTENCIA A TU CENTRO'), 
            'sub_title' => __('Envía recordatorios automáticos'), 
            'text' => __('Sabemos que un porcentaje de tus reservas no se llegan a concretar por la inasistencia o no aviso previo de los clientes.'), 
            'text_mark' => __('Aumenta tus ingresos'), 
            'text_2' => __('Con los recordatorios automáticos podrás aumentar la asistencia de tus clientes y por consiguiente aumentarás los ingresos de tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Recordatorios-automaticos-1-8.png',
        ];

        $features_content[] = [
            'title' => __('EVITA PERDIDAS DE DINERO'), 
            'sub_title' => __('Confirma la asistencia de tus clientes antes de la cita'), 
            'text' => __('Conocer si realmente el cliente asistirá a su cita, te permitirá tener organizada las horas de los profesionales y las ventas promedio por día.'), 
            'text_mark' => __('Ten seguridad en tus proyecciones'), 
            'text_2' => __('Con AgendaPro tendrás la proyección del los ingresos estimados a través de las reservas. Los recordatorios automáticos te ayudarán a cumplir con ese estimado, de esta manera tendrás una buena idea de lo que serán tu facturación.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Recordatorios-automaticos-2-8.png',
        ];

        $features_content[] = [
            'title' => __('AGENDAS ORGANIZADAS'), 
            'sub_title' => __('Soluciona rápidamente los imprevistos en la agenda de tus profesionales'), 
            'text' => __('La organización de la agenda de tus profesionales es primordial a la hora de agendar próximas citas, o ver espacios disponibles. Pero en muchas ocasiones la propia organización se complica con los imprevisto y faltas en las reservas de los clientes.'), 
            'text_mark' => __('Tus clientes te dan la oportunidad de ocupar horas'), 
            'text_2' => __('Con los recordatorios automáticos tus clientes podrán confirmar o cancelar su reserva, esto te da una excelente oportunidad para aprovechar esas horas vacantes de los clientes que cancelaron su cita, junto a Charly podrás promocionar esas horas vacantes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Recordatorios-automaticos-3-8.png',
        ];

        $features_content[] = [
            'title' => __('FIDELIZACIÓN'), 
            'sub_title' => __('Haz que tus clientes se sientan valorados'), 
            'text' => __('Muchas veces los clientes no pueden atender su celular a la llamada de confirmar su cita o puede parecer un poco invasivo.'), 
            'text_mark' => __('Comunicación no invasiva'), 
            'text_2' => __('Comunícate con ellos por WhatsApp, SMS o correo electrónico y hazle saber cuando, donde y a que hora es su próxima cita. ¡Lo valoran y agradecen día a día!.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Recordatorios-automaticos-4-8.png',
        ];

        $other_features[] = $this->features['reservas-online'];
        $other_features[] = $this->features['gestion-de-clientes'];
        $other_features[] = $this->features['control-de-inventarios'];
        $other_features[] = $this->features['agenda-medica'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function ficha_clinica($locale)
    {
        $this->seo->title(__('Ficha Clínica') . " - AgendaPro");
        $this->seo->meta('description', __('Controla y accede a toda la información de tus pacientes a través de la ficha clínica de AgendaPro. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Ficha clínica personalizable, manejo de exámenes, y más"),
            "h1_sub" => __("Toda la información de tus pacientes en un mismo lugar"),
            "h2" => __("Guarda los datos de tus pacientes de forma segura y accesible"),
            "h2_sub" => __("Con la ficha clínica de AgendaPro puedes guardar toda la información, datos y documentos correspondientes a cada paciente. De esta manera podrás tener acceso a toda hora y desde cualquier lugar con acceso a internet."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/AgendaPro-Desktop_-Ficha-clinica-8-1.png",
        );

        $features_content[] = [
            'title' => __('FICHAS CLÍNICAS ONLINE'), 
            'sub_title' => __('Súmate al mundo digital y olvídate de las fichas en papel'), 
            'text' => __('Aprovecha todos los beneficios de tener las fichas de pacientes en la nube.'), 
            'text_mark' => __('Accede a la evolución de tus pacientes desde cualquier lugar'), 
            'text_2' => __('Tendrás mayor seguridad, acceso rápido y versatilidad para ajustarla según tu necesidad.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fichas-clinicas-1-8.png',
        ];

        $features_content[] = [
            'title' => __('DOCUMENTOS Y EXÁMENES'), 
            'sub_title' => __('Sube exámenes y documentos de forma rápida y sencilla'), 
            'text' => __('La manera más sencilla de tener todos los exámenes, resonancias, radiografías de tus pacientes en un solo lugar.'), 
            'text_mark' => __('Documentos seguros y accesibles por siempre'), 
            'text_2' => __('Nunca perderás la información y la tendrás a la mano cuando la necesites. AgendaPro te ahorra espacio y dolores de cabeza.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fichas-clinicas-2-8.png',
        ];

        $features_content[] = [
            'title' => __('SEGURIDAD GARANTIZADA'), 
            'sub_title' => __('Asegura la información de tus pacientes'), 
            'text' => __('Las fichas de AgendaPro cumplen con los códigos de seguridad más estrictos que existen actualmente.'), 
            'text_mark' => __('Amazon Web Services'), 
            'text_2' => __('Están alojados en servidores de Amazon (AWS) y garantizan la permanencia y seguridad de la información.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fichas-clinicas-4-8.png',
        ];

        $features_content[] = [
            'title' => __('FICHA PERSONALIZABLE'), 
            'sub_title' => __('Crea una ficha que se adapte a tu tipo de consulta o negocio'), 
            'text' => __('La ficha de AgendaPro es totalmente personalizable, podrás elegir que campos agregar y adaptarla de la mejor forma a tu consulta médica.'), 
            'text_mark' => __('Cumple con las leyes de tu país'), 
            'text_2' => __('Nuestras fichas adicionalmente se ajustan a las exigencias de las leyes de cada país en los que nos encontramos. Evita problemas y simplifica tu trabajo.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fichas-clinicas-3-8.png',
        ];

        $other_features[] = $this->features['sistema-de-inventario'];
        $other_features[] = $this->features['marketing'];
        $other_features[] = $this->features['encuesta-de-satisfaccion'];
        $other_features[] = $this->features['almacenamiento-en-la-nube'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function sistema_de_caja($locale)
    {
        $this->seo->title(__('Integración con redes sociales') . " - AgendaPro");
        $this->seo->meta('description', __('Integra AgendaPro con tus redes sociales para que tus clientes agenden una hora en tu negocio de manera rápida y accesible. Click aquí para más info.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Sistema de Caja: Comisiones, caja diaria, recaudación, y más"),
            "h1_sub" => __("No pierdas tiempo calculando tu flujo de caja"),
            "h2" => __("Mira tu flujo de caja en tiempo real y toma decisiones acertadas"),
            "h2_sub" => __("AgendaPro te permite tener tu flujo de caja monitoreado 24/7 de manera sencilla y efectiva. Mantén un seguimiento de tus ingresos y egresos en tiempo real y toma decisiones financieras inteligentes en base a lo que realmente está ocurriendo en tu negocio."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Integracio%CC%81n-con-redes-sociales-8-2.png",
        );

        $features_content[] = [
            'title' => __('FLUJO DE CAJA EN TIEMPO REAL'), 
            'sub_title' => __('Controla los ingresos y egresos de tu negocio'), 
            'text' => __('Lleva el control de caja de tu centro en la nube y automatiza los reportes de sistema de caja.'), 
            'text_mark' => __('Más control en tiempo real'), 
            'text_2' => __('Mantener un flujo de caja saludable en todo momento es muy importante para la gestión de tu negocio. Con AgendaPro podrás tenerlo monitoreado en todo momento y desde cualquier lugar.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Sistema-de-caja-1-8.png',
        ];

        $features_content[] = [
            'title' => __('CÁLCULO DE COMISIONES AUTOMÁTICAS'), 
            'sub_title' => __('Gana tiempo calculando la ganancia de cada profesional de forma automática'), 
            'text' => __('Sabemos que valoras la confianza de tus profesionales y deseas mantener las cuentas claras con cada uno.'), 
            'text_mark' => __('Ahorra tiempo y malos ratos'), 
            'text_2' => __('Con las comisiones automatizadas, podrás calcular la comisión de cada profesional en cualquier momento y conservar una buena relación laboral con los prestadores de servicio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Sistema-de-caja-2-8.png',
        ];

        $features_content[] = [
            'title' => __('¿NO TIENES NOCIÓN DE TUS INGRESOS DIARIOS?'), 
            'sub_title' => __('Visualiza en detalle las formas de pago diarias'), 
            'text' => __('Estar informado de las ganancias diarias de tu centro, te ayudará a observar en tiempo real con cuanto dinero cuentas.'), 
            'text_mark' => __('Formas de pago'), 
            'text_2' => __('Mira el detalle de la forma en que pagan tus clientes/pacientes.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Sistema-de-caja-13-8.png',
        ];

        $features_content[] = [
            'title' => __('DATOS DE VENTA ONLINE'), 
            'sub_title' => __('Mira las ventas de productos y servicios en un mismo lugar'), 
            'text' => __('¡Conoce los productos y servicios más vendidos en tu negocio! Olvídate de calcular en Excel y actualiza la forma de llevar tus ventas.'), 
            'text_mark' => __('Utiliza los datos para tomar decisiones acertadas'), 
            'text_2' => __('Mira cuales productos o servicios son los preferidos por tus clientes y optimízalos para generar más ingresos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Sistema-de-caja-4-8.png',
        ];

        $other_features[] = $this->features['reservas-online'];
        $other_features[] = $this->features['gestion-de-clientes'];
        $other_features[] = $this->features['control-de-inventarios'];
        $other_features[] = $this->features['agenda-medica'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function facturacion_electronica($locale)
    {
        $this->seo->title(__('Facturación electrónica') . " - AgendaPro");
        $this->seo->meta('description', __('Genera Boletas y/o Facturas digitales automáticamente. Facturación electrónica integrada con tu CRM. Haz click aquí para más información'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Facturación Electrónica: Envía facturas digitales de forma automática"),
            "h1_sub" => __("No te quedes atrás entregando facturas impresas"),
            "h2" => __("Facturas electrónicas automáticas para mantener a tus clientes felices"),
            "h2_sub" => __("En la era digital es importante sustituir todos los procesos arcaicos que conllevan errores y uso de papel innecesario, por esto con AgendaPro podrás facturar electrónicamente o enviar recibos de tus servicios a todos tus clientes."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Facturacio%CC%81n-electro%CC%81nica-8-1.png",
        );

        $features_content[] = [
            'title' => __('SIMPLIFICA TU TRABAJO'), 
            'sub_title' => __('Gestiona todo el proceso de facturación en un solo lugar'), 
            'text' => __('Con nuestro sistema integrarás la gestión de ventas de tu negocio con la emisión de facturas electrónicas.'), 
            'text_mark' => __('Todo en un solo lugar'), 
            'text_2' => __('Evita errores al trabajar con distintas plataformas para enviar la factura a tu cliente. Con AgendaPro el pago del servicio está conectado con el servicio de impuestos internos de tus país.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Facturacion-electronica-1-8.png',
        ];

        $features_content[] = [
            'title' => __('ENVÍO AUTOMATIZADO'), 
            'sub_title' => __('Envío de factura automático para tus clientes'), 
            'text' => __('Cuando tu cliente realiza el pago de un servicio no tendrás que preocuparte por entregar o enviar manualmente su factura.'), 
            'text_mark' => __('Con AgendaPro la factura llegará directamente al correo del cliente'), 
            'text_2' => __('Relájate y utiliza AgendaPro para simplificar la gestión de tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Facturacion-electronica-2-8.png',
        ];

        $features_content[] = [
            'title' => __('GESTIÓN FISCAL COMPLETA'), 
            'sub_title' => __('Mira las recaudaciones y pagos de impuestos asociados'), 
            'text' => __('En el portal de nuestros proveedores podrás ver el total de recaudaciones, los impuestos a pagar y emitir notas de crédito en caso de la anulación de una factura.'), 
            'text_mark' => __('Reportes de ventas facturadas'), 
            'text_2' => __('Con AgendaPro podrás visualizar cuando quieras la facturación de tu negocio en un periodo determinado, y así tomar mejores decisiones.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Facturacion-electronica-3-8.png',
        ];

        $features_content[] = [
            'title' => __('SIMPLE Y ECO-FRIENDLY'), 
            'sub_title' => __('Menos papel al imprimir facturas'), 
            'text' => __('Despreocúpate por tener cientos de facturas para el cálculo de impuestos, con nuestra herramienta de facturación electrónica tendrás todo de manera digital.'), 
            'text_mark' => __('Cuida el medio ambiente'), 
            'text_2' => __('Al utilizar menos papel en tu negocio reduces la contaminación y contribuyes con la conservación de los bosques.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Facturacion-electronica-4-8.png',
        ];

        $other_features[] = $this->features['reportes-de-gestion'];
        $other_features[] = $this->features['ficha-clinica'];
        $other_features[] = $this->features['aplicacion-movil'];
        $other_features[] = $this->features['reservas-online'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function pago_online($locale)
    {
        $this->seo->title(__('Pago online') . " - AgendaPro");
        $this->seo->meta('description', __('Permite a tus clientes pagar en línea al momento de agendar. Menos fricción y más ingresos con el pago online de AgendaPro. Descubre cómo funciona aquí'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Pago Online: Haz que tus clientes paguen sus reservas al instante"),
            "h1_sub" => __("Una forma de pago sencilla para tus clientes"),
            "h2" => __("Ofrece a tus clientes una manera rápida y sencilla de pagar en tu negocio"),
            "h2_sub" => __("En la era digital todos tus clientes buscan tener una experiencia sencilla y completamente online a la hora de agendar en tu negocio, por eso es tan importante que junto a la reserva tu cliente tenga la opción de pagar directamente de manera online. Esto brindará una experiencia completamente digital en tu negocio."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Pago-online-8-2.png",
        );

        $features_content[] = [
            'title' => __('AUMENTA TU TASA DE ASISTENCIA'), 
            'sub_title' => __('Reduce las inasistencias a tu negocio'), 
            'text' => __('¿Es habitual que tus clientes reserven y no lleguen a sus citas? el pago online puede ser la solución a este problema.'), 
            'text_mark' => __('Aumenta la tasa de asistencia a tu centro'), 
            'text_2' => __('Evita la inasistencia de tus clientes y haz que realicen previamente el pago de los servicios reservados.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Pago-online-1-8.png',
        ];

        $features_content[] = [
            'title' => __('PAGO WEB'), 
            'sub_title' => __('Ofrece la facilidad a tus clientes de pagar a través de la web'), 
            'text' => __('Cada vez es mas común que las personas prefieran realizar transacciones rápidas en línea.'), 
            'text_mark' => __('El pago online es la tendencia'), 
            'text_2' => __('Ofrece a tus clientes la posibilidad de pagar previamente sus servicios agendados a través de tu sitio web de forma fácil y segura.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Pago-online-2-8.png',
        ];

        $features_content[] = [
            'title' => __('QUE NO ASISTAN SIN PAGAR'), 
            'sub_title' => __('Evita que tus clientes asistan sin pagar tus servicios'), 
            'text' => __('En muchos casos reservas la hora de un cliente, llega el día y no asiste. Evita dejar sin hora a personas realmente interesadas en asistir a tu centro, asegurando el pago previos de cada reserva.'), 
            'text_mark' => __('Menos inasistencias = Más ingresos'), 
            'text_2' => __('Cuando tienes una demanda considerable es importante que empieces a ponerte más exigente, esta es otra manera de aumentar tus ingresos, obliga a pagar de manera anticipada y de manera online. Tus clientes sentirán que están tomando un servicio de mayor valor y te ayudará a asegurar las ventas.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Pago-online-3-8.png',
        ];

        $features_content[] = [
            'title' => __('SINCRONIZACIÓN CON LA CAJA'), 
            'sub_title' => __('Sincroniza automáticamente el pago online con el sistema de caja de AgendaPro'), 
            'text' => __('¿Tus ventas no cuadran con las reservas agendadas? Asegúrate de obtener datos reales y registros de ventas automatizados.'), 
            'text_mark' => __('Flujo de caja al día'), 
            'text_2' => __('Al tener el pago online de AgendaPro reducirás más los errores asociados al ingreso de los pagos realizados por una persona. Todo funciona de manera automática y gracias a esto tendrás todo organizado y al día.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Pago-online-4-8.png',
        ];

        $other_features[] = $this->features['sistema-de-inventario'];
        $other_features[] = $this->features['marketing'];
        $other_features[] = $this->features['encuesta-de-satisfaccion'];
        $other_features[] = $this->features['almacenamiento-en-la-nube'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function control_de_inventarios($locale)
    {
        $this->seo->title(__('Control de inventarios') . " - AgendaPro");
        $this->seo->meta('description', __('Controla y gestiona tus productos en todo momento con la funcionalidad de control de inventarios de AgendaPro. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Control de Inventarios: Stock, registro, historial y más"),
            "h1_sub" => __("¡Te avisamos cuando quedan pocas unidades!"),
            "h2" => __("Tu inventario actualizado en tiempo real"),
            "h2_sub" => __("Mantén tu inventario ordenado con el uso de productos de forma automática y evita tener inconvenientes como quedarte sin stock o cometer errores de recompras. Mantener tu inventario ordenado y actualizado en tiempo real es parte fundamental de tu negocio."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Control-de-inventarios-8-1-1.png",
        );

        $features_content[] = [
            'title' => __('STOCK ONLINE'), 
            'sub_title' => __('Accede a tu stock de productos desde cualquier lugar'), 
            'text' => __('Con el control de inventario podrás ver tu capacidad de productos en tiempo real y tomar decisiones a partir de ello.'), 
            'text_mark' => __('Fácil acceso'), 
            'text_2' => __('Consulta el inventario desde cualquier computador con acceso a internet, desde tu casa u oficina.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Control-de-inventario-1-8.png',
        ];

        $features_content[] = [
            'title' => __('AVISOS DE INVENTARIO'), 
            'sub_title' => __('Recibe alertas de stock crítico'), 
            'text' => __('Cuando un producto se este acabando en tu inventario, inmediatamente AgendaPro te enviará una alerta para que repongas tu stock.'), 
            'text_mark' => __('Evita el quiebre de stock'), 
            'text_2' => __('Al saber que productos están próximos a terminar, estarás preparado y podrás reponerlo a tiempo para no detener tus servicios y satisfacer la demanda.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Control-de-inventario-2-8.png',
        ];

        $features_content[] = [
            'title' => __('PRODUCTO MÁS VENDIDO'), 
            'sub_title' => __('Descubre cuales son tus productos más utilizado o más vendidos'), 
            'text' => __('Mantente alerta con los productos que tienen mayor rotación en tu inventario y nunca permitas que se agoten.'), 
            'text_mark' => __('Maneja los datos importantes'), 
            'text_2' => __('El conocimiento exacto de lo que pasa con tu inventario te permitirá no solo maximizar tus ingresos sino que también podrás evaluar almacenamiento y rotación.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Control-de-inventario-3-8.png',
        ];

        $features_content[] = [
            'title' => __('ANALITICAS DE VENTAS'), 
            'sub_title' => __('Analiza los reportes de comportamiento de tus productos'), 
            'text' => __('¿Sabes cual es el producto que te genera mayor ganancia? Con los reportes de comportamiento de producto podrás conocer los ítems que más se vendes en tu negocio.'), 
            'text_mark' => __('Toma decisiones de compra inteligentes'), 
            'text_2' => __('Mira el comportamiento de tus productos a través de los reportes de AgendaPro y organiza tu negocio a partir de ello.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Control-de-inventario-4-8.png',
        ];

        $other_features[] = $this->features['teleconsulta'];
        $other_features[] = $this->features['giftcards'];
        $other_features[] = $this->features['integracion-con-redes-sociales'];
        $other_features[] = $this->features['integraciones-api'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function gestion_de_clientes($locale)
    {
        $this->seo->title(__('Gestión de clientes') . " - AgendaPro");
        $this->seo->meta('description', __('Consolida toda la información de tus clientes de una forma organizada y simple a través de nuestro CRM. Haz click aquí y descubre cómo funciona'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Gestión de Clientes: Segmenta, fideliza y analiza el comportamiento de tus clientes"),
            "h1_sub" => __("Tu activo más valioso bien organizado"),
            "h2" => __("La información de tus clientes más relevante en un solo lugar"),
            "h2_sub" => __("No es un secreto que para todo negocio lo más importante son los clientes. Con el sistema de gestión de clientes de AgendaPro tienes todo lo necesario para mantener a tu base de clientes organizada y tengas accionables para segmentarlos, fidelizarlos y analizar su comportamiento."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Gestion-de-clientes-8-1.png",
        );

        $features_content[] = [
            'title' => __('CONTROL DE ASISTENCIAS'), 
            'sub_title' => __('Conoce cuántos clientes tienes en el día a día'), 
            'text' => __('Mira y analiza cuántas personas reservan en tu negocio y en realidad cuántas asisten. De esta manera podrás calcular tu tasa de asistencia promedio y mejorarla con los recordatorios automáticos de AgendaPro.'), 
            'text_mark' => __('En los datos está la clave'), 
            'text_2' => __('Recuerda que el conocimiento de los datos es fundamental para la mejora de tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gestion-de-clientes-1-8.png',
        ];

        $features_content[] = [
            'title' => __('BASE DE DATOS ACTUALIZADA'), 
            'sub_title' => __('Mantén una base de datos actualizada con la información de contacto de tus clientes'), 
            'text' => __('Lo más valioso de tu negocio es tu base de clientes. Con AgendaPro todos los clientes que van agendando en tu negocio se van agregando automáticamente a tu base de datos.'), 
            'text_mark' => __('Ten tu base de datos al día'), 
            'text_2' => __('Gracias a la actualización automática podrás confiar en qué todos tus clientes estarán en tu base de datos y esto permitirá que los fidelices a través de campañas de email marketing.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gestion-de-clientes-2-8.png',
        ];

        $features_content[] = [
            'title' => __('CONTROL DE COMPRAS'), 
            'sub_title' => __('Mira cuales son los productos y servicios que tus clientes han comprado en tu negocio'), 
            'text' => __('Saber lo que tus clientes compran es fundamental para la fidelización y crecimiento de tu negocio.'), 
            'text_mark' => __('Acceso detallado en todo momento y desde cualquier lugar'), 
            'text_2' => __('Ingresa al contacto y mira cual fue el último servicio que tomo. Con esta información podrás enviarle la publicidad correcta para que enganche con tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gestion-de-clientes-3-8.png',
        ];

        $features_content[] = [
            'title' => __('SEGMENTACIÓN DE CLIENTES'), 
            'sub_title' => __('Segmenta tu base de datos para recuperar y fidelizar a los clientes que han asistido a tu negocio'), 
            'text' => __('Una de las cosas más importante de tu base de clientes, es la posibilidad de poder segmentarla.'), 
            'text_mark' => __('Envío de email marketing segmentado'), 
            'text_2' => __('Cuando quieres enviar correos masivos es un plus gigante saber cuales clientes son los que han asistido recientemente o cuales tienen tiempo sin asistir a tu negocio. De esta manera llegarás a las personas con mayor probabilidad de agendar en tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gestion-de-clientes-4-8.png',
        ];

        $other_features[] = $this->features['teleconsulta'];
        $other_features[] = $this->features['giftcards'];
        $other_features[] = $this->features['integracion-con-redes-sociales'];
        $other_features[] = $this->features['integraciones-api'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function almacenamiento_en_la_nube($locale)
    {

        $this->seo->title(__('Almacenamiento en la nube') . " - AgendaPro");
        $this->seo->meta('description', __('Accede a tu agenda, reportes, caja y pagos desde cualquier lugar con el almacenamiento en la nube de AgendaPro. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Almacenamiento en la nube: Usuarios, roles, datos y más"),
            "h1_sub" => __("¡Conéctate desde cualquier dispositivo de forma segura!"),
            "h2" => __("Aprovecha todos los beneficios de tener la gestión de tu negocio en la nube"),
            "h2_sub" => __("Olvídate de cientos de carpetas y estantes en tu negocio, almacena toda la información en la nube de forma segura y accesible. Permitirá que tu negocio sea escalable, eficiente y con respaldo."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Almacenamiento-en-la-nube-8-2.png",
        );

        $features_content[] = [
            'title' => __('SEGURIDAD'), 
            'sub_title' => __('Respalda la información de tu negocio y organiza todos los datos de forma segura'), 
            'text' => __('Controla quién tiene acceso a la información sensible de tu negocio. Con AgendaPro podrás establecer diferentes niveles de permisos para el staff de tu negocio.'), 
            'text_mark' => __('Evita el robo de tu base de datos'), 
            'text_2' => __('Toda la información alojada en AgendaPro está dentro de los servidores de Amazon, por esta razón tiene los más altos estándares de seguridad.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Almacenamiento-en-la-nube-1-8.png',
        ];

        $features_content[] = [
            'title' => __('RESPALDO DE INFORMACIÓN'), 
            'sub_title' => __('Garantiza el respaldo de los datos'), 
            'text' => __('Toda la información ingresada en AgendaPro queda respaldada para que no te preocupes.'), 
            'text_mark' => __('Nunca perderás la información de tus clientes'), 
            'text_2' => __('Nunca pasarás un mal rato porque se perdió la información sobre un paciente o las sesiones realizadas por un cliente.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Almacenamiento-en-la-nube-2-8.png',
        ];

        $features_content[] = [
            'title' => __('ACTUALIZACIONES AUTOMÁTICAS'), 
            'sub_title' => __('Nuestro software en la nube te brinda actualizaciones automáticas para siempre'), 
            'text' => __('Mantente al día con los últimos cambios en la tecnología incluidos en tu suscripción.'), 
            'text_mark' => __('Servicio actualizado a tus clientes'), 
            'text_2' => __('Con AgendaPro ofreces un servicio actualizado con las tendencias mundiales, así tu negocio está a la vanguardia del mercado y de esta manera no perderás ninguna oportunidad.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Almacenamiento-en-la-nube-3-8.png',
        ];

        $features_content[] = [
            'title' => __('ACCESIBILIDAD'), 
            'sub_title' => __('Ingresa a la información de tu negocio desde cualquier lugar con acceso a internet'), 
            'text' => __('Con toda la información de tu negocio en la nube, podrás ingresar desde un computador con acceso a internet desde cualquier lugar, casa, viaje, oficina, etc.'), 
            'text_mark' => __('Lleva tu negocio de manera remota'), 
            'text_2' => __('Tendrás toda la información de las reservas, flujo de caja, control de inventario y mucho más en cualquier lugar donde te encuentres. Es la mejor manera de mantener la gestión de tu negocio monitoreada.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Almacenamiento-en-la-nube-4-8.png',
        ];

        $other_features[] = $this->features['sistema-de-caja'];
        $other_features[] = $this->features['historia-clinica'];
        $other_features[] = $this->features['control-de-pagos'];
        $other_features[] = $this->features['agenda-online'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function teleconsulta($locale)
    {
        $this->seo->title(__('Teleconsulta') . " - AgendaPro");
        $this->seo->meta('description', __('Ofrece consultas online para todos tus pacientes y únete a la era digital con AgendaPro. Más información haciendo click aquí'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Teleconsulta: Herramienta digital especializada en consultas médicas"),
            "h1_sub" => __("La era de la telemedicina llegó para quedarse"),
            "h2" => __("Ofrece consultas médicas online para optimizar tu tiempo y el de tus pacientes"),
            "h2_sub" => __("Llega a tus pacientes en donde ellos se sientan más cómodos, con la herramienta de Teleconsulta de AgendaPro podrás realizar videollamadas privadas y con herramientas especializadas en consultas médicas. Llego la hora de llevar tu centro médico al mundo digital."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/1Desktop_-Teleconsulta_1-8-1.png",
        );

        $features_content[] = [
            'title' => __('ATENCIÓN ONLINE'), 
            'sub_title' => __('Conecta con tus pacientes desde cualquier lugar'), 
            'text' => __('¡Ofrece comodidad a tus pacientes y entrega un gran valor! Muchos centros comenzaron a ofrecer a sus pacientes la posibilidad de seguir atendiéndolos de forma online.'), 
            'text_mark' => __('Una facilidad que tus pacientes valorarán'), 
            'text_2' => __('Con esta funcionalidad no abandonas a tus pacientes, sigues generando reservas y aumentando los ingresos de tu centro médico.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Teleconsulta-1-8.png',
        ];

        $features_content[] = [
            'title' => __('SEGURIDAD EN LA PLATAFORMA'), 
            'sub_title' => __('Atiende a tus pacientes de forma digital a través de AgendaPro'), 
            'text' => __('Sabemos que entregar la seguridad y confidencialidad a tus pacientes es uno de tus principales objetivos. Desde ahora podrás seguir entregando esa misma confiabilidad a través de la atención online.'), 
            'text_mark' => __('Privacidad y seguridad garantizada'), 
            'text_2' => __('Tus pacientes podrán obtener un enlace único de sus citas y tendrán una videollamada segura gracias a la tecnología que utilizamos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Teleconsulta-2-8.png',
        ];

        $other_features[] = $this->features['reportes-de-gestion'];
        $other_features[] = $this->features['fidelizacion-de-clientes'];
        $other_features[] = $this->features['archivos-rips'];
        $other_features[] = $this->features['sistema-de-caja'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function reportes_de_gestion($locale)
    {
        $this->seo->title(__('Reportes de gestión') . " - AgendaPro");
        $this->seo->meta('description', __('Controla tu negocio y aumenta tu rentabilidad con los reportes de gestión automáticos de AgendaPro. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Reportes de gestión: Ventas, marketing, reservas, y más"),
            "h1_sub" => __("¡Todos los indicadores de gestión en un solo lugar!"),
            "h2" => __("Mantén la gestión de tu negocio bajo control"),
            "h2_sub" => __("Toma las decisiones de negocio más asertivas: Conocimiento acabado de tus operaciones en relación a la demanda y ocupación. ¡Reporting de inteligencia de negocios completo y adaptado a tu realidad!"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Reportes-de-gestion-8-1.png",
        );

        $features_content[] = [
            'title' => __('GESTIÓN ONLINE'), 
            'sub_title' => __('Conoce el estatus de lo que está pasando en tu negocio'), 
            'text' => __('Mira en nuestra plataforma online desde cualquier computadora con acceso a internet cómo es el desempeño de las diferentes áreas de gestión de tu negocio.'), 
            'text_mark' => __('Todo los reportes en un solo lugar'), 
            'text_2' => __('Ventas, inventario, comisiones, reservas y mucho más. En AgendaPro tienes todos los datos para que lleves un negocio rentable y exitoso.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Reportes-de-gestion-1-8.png',
        ];

        $features_content[] = [
            'title' => __('ACTIVIDAD EN TIEMPO REAL'), 
            'sub_title' => __('Maneja los indicadores de gestión en tiempo real'), 
            'text' => __('Todo lo que ocurre en tu negocio es actualizado en tiempo real.'), 
            'text_mark' => __('Los datos más importantes en todo momento'), 
            'text_2' => __('Desde la cantidad de reservas hasta las comisiones de tus prestadores de servicios, puedes verlo cuando sea necesario y puedes confiar en que el dato es el correcto.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Reportes-de-gestion-2-8.png',
        ];

        $features_content[] = [
            'title' => __('REPORTE DE COMISIONES'), 
            'sub_title' => __('Mira el informe detallado de los servicios de tus profesionales'), 
            'text' => __('Mira todos los servicios que realizaron tus profesionales con sus comisiones calculadas automáticamente.'), 
            'text_mark' => __('Invierte tu tiempo en lo más importante'), 
            'text_2' => __('No pierdas más tiempo haciendo cálculos tediosos o haciendo la comparación de los servicios con las horas de tus prestadores. AgendaPro lo hace todo automáticamente.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Reportes-de-gestion-3-8.png',
        ];

        $features_content[] = [
            'title' => __('ACCIONABLES AL INSTANTE'), 
            'sub_title' => __('Planea diferentes estrategias a partir de los datos de tu negocio'), 
            'text' => __('Mira rápidamente las métricas más importantes y toma decisiones certeras.'), 
            'text_mark' => __('Más ingresos y menos trabajo'), 
            'text_2' => __('Mira en tiempo récord el funcionamiento de cada una de las áreas de tu negocio desde la comodidad de tu casa.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Reportes-de-gestion-4-8.png',
        ];

        $other_features[] = $this->features['reportes-de-gestion'];
        $other_features[] = $this->features['ficha-clinica'];
        $other_features[] = $this->features['aplicacion-movil'];
        $other_features[] = $this->features['reservas-online'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function integraciones_api($locale)
    {
        $this->seo->title(__('Integraciones / API') . " - AgendaPro");
        $this->seo->meta('description', __('Con la API de AgendaPro podrás utilizar los datos de tus reservas para crear cualquier aplicación para tu negocio. Click aquí para más info'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Integraciones / API: AgendaPro adaptado a la aplicación que necesites"),
            "h1_sub" => __("La información de AgendaPro a la disposición de tus desarrolladores"),
            "h2" => __("La tecnología necesaria para simplificar tu trabajo"),
            "h2_sub" => __("Con nuestra API podrás utilizar todo el poder de AgendaPro para adaptarlo a la aplicación que necesites."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Integraciones-api-8-1.png",
        );

        $features_content[] = [
            'title' => __('UTILIZA AGENDAPRO DE LA MANERA QUE IMAGINAS'), 
            'sub_title' => __('Diseña nuevas experiencias para tus clientes'), 
            'text' => __('Utiliza la API para crear experiencias nuevas junto a las funcionalidades de AgendaPro.'), 
            'text_mark' => __('Crea con el poder de AgendaPro'), 
            'text_2' => __('Podrás integrarla con otras aplicaciones e utilizar la información para complementar las necesidades que tengas en tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Integraciones-API-1-8.png',
        ];

        $features_content[] = [
            'title' => __('PERSONALIZA EL DISEÑO'), 
            'sub_title' => __('Aplica el diseño que desees para tu negocio'), 
            'text' => __('Con la API de AgendaPro podrás customizar el diseño que desees para tu agenda.'), 
            'text_mark' => __('Diseña tu sitio de reservas como desees'), 
            'text_2' => __('Haz las modificaciones que quieras para que el sitio de reservas de tu negocio este personalizado a tu manera.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Integraciones-API-2-8.png',
        ];

        $other_features[] = $this->features['sistema-de-caja'];
        $other_features[] = $this->features['historia-clinica'];
        $other_features[] = $this->features['control-de-pagos'];
        $other_features[] = $this->features['agenda-online'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function gestion_presupuestos($locale)
    {
        $this->seo->title(__('Gestión de presupuestos') . " - AgendaPro");
        $this->seo->meta('description', __('Con la gestión de presupuestos de AgendaPro podrás crear presupuestos digitales para todos tus clientes o pacientes que lo soliciten. Click aquí para más info.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Gestión de Presupuestos: la forma más rápida de enviar presupuestos a tus clientes"),
            "h1_sub" => __("Crea y envía presupuestos de manera sencilla y efectiva"),
            "h2" => __("La mejor forma de incentivar las ventas"),
            "h2_sub" => __("Al enviar presupuestos digitales de manera profesional a tus potenciales clientes, estas aumentando las probabilidades de que te compre"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Gestio%CC%81n-de-presupuestos-8-1.png",
        );

        $features_content[] = [
            'title' => __('MENOS TIEMPO HACIENDO PRESUPUESTOS'), 
            'sub_title' => __('Haz presupuestos rápido y de manera efectiva'), 
            'text' => __('Con AgendaPro puedes crear presupuestos de una forma rápida para dar una respuesta inmediata y entregar la mejor experiencia a tus clientes'), 
            'text_mark' => __('Prepago de los servicios ingresados en el presupuesto'), 
            'text_2' => __('Tus clientes podrán prepagar el servicio incluido en el presupuesto con cualquier medio de pago, tarjeta de crédito, debito o en efectivo, para luego agendar la hora del servicio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gestion-de-presupuestos-1-8.png',
        ];

        $features_content[] = [
            'title' => __('EVITA EL DESORDEN DE PRESUPUESTOS EMITIDOS'), 
            'sub_title' => __('Envía presupuestos por correo y conoce el estado de cada uno'), 
            'text' => __('Con los Presupuesto digitales de AgendaPro, podrás enviar a tus clientes un correo personalizado con los servicios solicitados por el cliente, además podrás ingresar un descuento especial para incentivar el pago de este.'), 
            'text_mark' => __('Mayor control de los presupuestos emitidos'), 
            'text_2' => __('Para tener un mayor control de los presupuesto emitidos en tu negocio, podrás filtrar por presupuestos vigentes, vencidos y vendidos, agregando un responsable quien será el profesional que emitió dicho presupuesto.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gestion-de-presupuestos-2-8.png',
        ];

        $other_features[] = $this->features['reservas-online'];
        $other_features[] = $this->features['gestion-de-clientes'];
        $other_features[] = $this->features['control-de-inventarios'];
        $other_features[] = $this->features['agenda-medica'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function encuesta_de_satisfaccion($locale)
    {
        $this->seo->title(__('Encuesta de satisfacción') . " - AgendaPro");
        $this->seo->meta('description', __('Descubre lo que opinan tus clientes con las encuestas de satisfacción personalizables de AgendaPro. Da click acá y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Encuesta de Satisfacción: Personalizada, medición de calidad, y más"),
            "h1_sub" => __("¡Mira lo que tus clientes piensan de tu negocio!"),
            "h2" => __("Optimiza tu negocio tomando en cuenta la opinión de tus clientes"),
            "h2_sub" => __("El éxito de tu negocio depende exclusivamente de la calidad del servicio que ofreces, y la mejor manera de evaluarlo, es a través de la opinión de tus clientes. Envía encuestas de satisfacción y haz las mejoras necesarias para que tu negocio este en el top del mercado."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Encuesta-de-satisfaccion-8-1-1.png",
        );

        $features_content[] = [
            'title' => __('LA OPINIÓN DE TUS CLIENTES PRIMERO'), 
            'sub_title' => __('Conoce lo que tus clientes opinan de tus servicios'), 
            'text' => __('De todas los factores que influyen en un negocio exitoso, hay uno que es fundamental y sin él no tienes nada.'), 
            'text_mark' => __('La calidad de tu servicio es lo más importante'), 
            'text_2' => __('Sabiendo la opinión de tus clientes puedes hacer los cambios necesarios para tener clientes fieles y que amen tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Encuesta-de-satisfaccio%CC%81n-1-8.png',
        ];

        $features_content[] = [
            'title' => __('¿TIENES PRESTADORES AMABLES?'), 
            'sub_title' => __('Permite evaluar la calidad del servicio que brindan los profesionales de tu negocio'), 
            'text' => __('La atención en tu negocio es uno de los factores más importantes para que tus clientes vuelvan una y otra vez.'), 
            'text_mark' => __('No pierdas clientes por un mal servicio'), 
            'text_2' => __('Más de una vez debes haber escuchado que alguien habla mal de un negocio por un mal servicio. Al detectar esto a través de una encuesta evitarás que aumenten la cantidad de detractores de tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Encuesta-de-satisfaccio%CC%81n-2-8.png',
        ];

        $features_content[] = [
            'title' => __('¿ALGO NO FUNCIONA COMO DEBERÍA?'), 
            'sub_title' => __('Mejora los servicios que tienen malas calificaciones'), 
            'text' => __('Las encuestas de satisfacción puede ser la herramienta más importante para realizar las mejoras en tu negocio.'), 
            'text_mark' => __('Mejora lo malo y potencia lo bueno'), 
            'text_2' => __('A través de las encuestas podrás identificar cuales son tus peores servicios y tomar la decisión de eliminarlo o mejorarlo, pero lo más importante es que podrás potenciar los mejores servicios y de esta manera aumentar tus ingresos rápidamente.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Encuesta-de-satisfaccio%CC%81n-3-8.png',
        ];

        $other_features[] = $this->features['sistema-de-caja'];
        $other_features[] = $this->features['historia-clinica'];
        $other_features[] = $this->features['control-de-pagos'];
        $other_features[] = $this->features['agenda-online'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function fidelizacion_de_clientes($locale)
    {
        $this->seo->title(__('Fidelización de clientes') . " - AgendaPro");
        $this->seo->meta('description', __('Capta y retiene a tus clientes más fieles y frecuentes con las herramientas de marketing automático de AgendaPro. Haz click aquí y pide tu demo gratis.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Fideliza a tus clientes y conviertelos en frecuentes"),
            "h1_sub" => __("Encuestas, Marketing automático y Segmentación de clientes en un mismo lugar"),
            "h2" => __("Toda la información de tus clientes en un mismo lugar"),
            "h2_sub" => __("Revisa el historial de atenciones de tus clientes y decide sobre la mejor estrategia para darles una experiencia única. Crea campañas de marketing automáticas en base al comportamiento de tus clientes y mucho más."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/AgendaPro-Desktop_-Fidelizacion-de-clientes-8-1.png",
        );

        $features_content[] = [
            'title' => __('RECORDATORIOS AUTOMÁTICOS'), 
            'sub_title' => __('Automatiza los recordatorios de citas para tus clientes'), 
            'text' => __('Maximiza los ingresos de tu negocio disminuyendo la tasa de inasistencias. Recuerda a tus clientes la cita en tu negocio un día antes para que lo tengan siempre en cuenta y no olviden su cita.'), 
            'text_mark' => __('Control para tus clientes'), 
            'text_2' => __('Tus clientes podrán confirmar o cancelar su cita lo cual aumentará las asistencias y te da la posibilidad de ocupar las horas que fueron canceladas.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fidelizacio%CC%81n-de-clientes-1-8.png',
        ];

        $features_content[] = [
            'title' => __('EMAIL MARKETING'), 
            'sub_title' => __('Envía correos y promociones para enganchar aún mas con tus clientes'), 
            'text' => __('Segmenta tu base de datos entre tus clientes recientes y los que tienen mucho tienen sin reservar.'), 
            'text_mark' => __('Correos masivos para tu base de datos'), 
            'text_2' => __('Envía promociones a todos los clientes que han reservado y están en tu base de datos, de esta manera los fidelizas y aumentas tus ingresos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fidelizacio%CC%81n-de-clientes-2-8.png',
        ];

        $features_content[] = [
            'title' => __('ENCUESTAS DE SATISFACCIÓN'), 
            'sub_title' => __('Mira lo que tus clientes opinan de tu negocio y tus profesionales'), 
            'text' => __('La base del éxito de cualquier negocio se basa en la satisfacción del cliente con respecto a tu servicio.'), 
            'text_mark' => __('La opinión de tu cliente es lo más importante'), 
            'text_2' => __('Descubre qué opinan los clientes de tu negocio y toma medidas para mejorar la experiencia y aumentar tus ingresos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Encuesta-de-satisfaccio%CC%81n-2-8.png',
        ];

        $features_content[] = [
            'title' => __('RECORDATORIOS DE CUMPLEAÑOS'), 
            'sub_title' => __('Envía felicitaciones de cumpleaños y promociones'), 
            'text' => __('Sorprende a tus clientes recordando la fechas más especial para ellos.'), 
            'text_mark' => __('Felicítalos en su cumpleaños'), 
            'text_2' => __('Ofréceles un descuento que hará que aprecien tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Fidelizacio%CC%81n-de-clientes-4-8.png',
        ];

        $other_features[] = $this->features['reportes-de-gestion'];
        $other_features[] = $this->features['ficha-clinica'];
        $other_features[] = $this->features['aplicacion-movil'];
        $other_features[] = $this->features['reservas-online'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function charly($locale)
    {
        $this->seo->title(__('Charly') . " - AgendaPro");
        $this->seo->meta('description', __('Crea y automatiza tus campañas de email marketing de manera inteligente para llenar la agenda de tu negocio con Charly. Haz click aquí y mira cómo funciona.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Charly: Tu experto en Marketing Inteligente"),
            "h1_sub" => __("La nueva forma de hacer marketing"),
            "h2" => __("Email marketing automatizado para llegar a tus clientes en el momento justo"),
            "h2_sub" => __("¿Estás buscando maneras de llenar la Agenda de tu negocio?. Con Charly, tu experto en marketing inteligente, podrás utilizar técnicas automatizadas para enviar campañas enfocadas en llenar tu agenda y fidelizar a tus clientes en el momento preciso, es la mejor manera de aumentar tus ingresos utilizando lo más valioso que tienes, tu base de clientes."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Charly-8-1.png",
        );

        $features_content[] = [
            'title' => __('NO PIERDAS MÁS CLIENTES'), 
            'sub_title' => __('Recupera clientes perdidos con email automático'), 
            'text' => __('Con Charly podrás configurar un tiempo que consideres necesario para que un cliente vuelva a agendar en tu negocio.'), 
            'text_mark' => __('Fideliza de manera inteligente'), 
            'text_2' => __('Si transcurre la cantidad de tiempo establecida, Charly enviará un correo automático para reenganchar a ese cliente.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Charly-1-8.png',
        ];

        $features_content[] = [
            'title' => __('NO DEJES HORAS LIBRES EN TU AGENDA'), 
            'sub_title' => __('Llena esas horas que quedan libres en tu negocio'), 
            'text' => __('Te ha pasado que cancelan tus citas a último minuto o necesitas llenar los cupos de tu agenda rápidamente.'), 
            'text_mark' => __('Es hora activar campañas relámpago'), 
            'text_2' => __('Con Charly tienes una funcionalidad que te permite enviar una promoción a través del correo electrónico de manera express para que llenes tu agenda en los próximos 1-2 días después de enviado el correo.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Charly-2-8.png',
        ];

        $features_content[] = [
            'title' => __('EVITA LA BAJA DEMANDA'), 
            'sub_title' => __('Incentiva las reservas en las semanas malas'), 
            'text' => __('Viendo tu agenda te das cuenta que en las próximas semanas no tendrás muchas citas para tu negocio, puedes prevenir esta situación de manera inteligente y automática con Charly.'), 
            'text_mark' => __('Adelántate a las semanas que puedes tener pocas reservas'), 
            'text_2' => __('Charly analiza tu factor de ocupación y si detecta que vas a tener un día con pocos clientes enviará una campaña automáticamente para empezar a llenar esos espacios vacíos.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Charly-3-8.png',
        ];

        $features_content[] = [
            'title' => __('SEGUIMIENTO INTELIGENTE'), 
            'sub_title' => __('Recuerda a tus clientes que es hora de asistir a tu negocio'), 
            'text' => __('Una parte fundamental de tu negocio son los clientes recurrentes, una vez los identificas debes buscar la forma de que se fidelicen al máximo. Con Charly puedes ver cuales clientes realizan reservas cada cierto tiempo y una vez se cumpla el ciclo y deban volver se les puede enviar un correo para incentivarlos a asistir a tu negocio.'), 
            'text_mark' => __('Recuerda las sesiones de servicios extensos'), 
            'text_2' => __('De igual manera funciona para los servicios que trabajan con múltiples sesiones. Podrás enviar recordatorios en el tiempo que amerite realizar una sesión.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Charly-4-8.png',
        ];

        $other_features[] = $this->features['sistema-de-inventario'];
        $other_features[] = $this->features['marketing'];
        $other_features[] = $this->features['encuesta-de-satisfaccion'];
        $other_features[] = $this->features['almacenamiento-en-la-nube'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

    public function giftcards($locale)
    {
        $this->seo->title(__('Giftcards') . " - AgendaPro");
        $this->seo->meta('description', __('Vende Giftcards con AgendaPro para aumentar tus ingresos y fidelizar a tus clientes. Haz click aquí y descubre cómo funciona.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Giftcard: Herramienta para fidelizar y atraer clientes"),
            "h1_sub" => __("Un incentivo sencillo y poderoso"),
            "h2" => __("Comienza a ofrecer Giftcards a tus clientes y haz crecer tu negocio"),
            "h2_sub" => __("Las giftcards forman parte fundamental de una estrategia de rebound marketing, ellas pueden cumplir dos objetivos: premiar a tus clientes más fieles ó incentivar el crecimiento de tu negocio a través de amigos referidos."),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Desktop_-Gift-card-8-1.png",
        );

        $features_content[] = [
            'title' => __('PREMIA A TUS CLIENTES'), 
            'sub_title' => __('Entrega Giftcard a tus clientes fieles'), 
            'text' => __('Ofrece giftcards dentro de la estrategia de fidelización de tus clientes, este simple gesto crea un vínculo con ellos que agradecerán por mucho tiempo.'), 
            'text_mark' => __('Crea una relación implícita con tu cliente'), 
            'text_2' => __('Incluso de manera inconsciente crearás un compromiso que los dejará enganchados con tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gift-cards-1-8.png',
        ];

        $features_content[] = [
            'title' => __('GIFTCARD PARA REFERIDOS'), 
            'sub_title' => __('Incentiva los referidos en tu negocio'), 
            'text' => __('Ofrece a tus clientes más fieles la opción de regalar giftcards digitales a sus amigos o familiares más cercanos.'), 
            'text_mark' => __('Otra manera de hacer crecer tu base de clientes'), 
            'text_2' => __('Al permitir a tus clientes regalar giftcards a sus familiares y amigos, aumentarás tu base de datos y tendrás la oportunidad de fidelizar a estos nuevos clientes. Esto es clave para hacer crecer tu negocio.'), 
            'image' => 'https://agendapro.com/wp-content/uploads/2021/04/Gift-cards-2-8.png',
        ];

        $other_features[] = $this->features['reportes-de-gestion'];
        $other_features[] = $this->features['ficha-clinica'];
        $other_features[] = $this->features['aplicacion-movil'];
        $other_features[] = $this->features['reservas-online'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

}

