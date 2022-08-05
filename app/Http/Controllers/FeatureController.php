<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this->seo = seo();
        $this->seo = app(SeoService::class);
        $this->seo = Seo::make();

        $this->features = [
            'reservas-online' => [
                'url' => 'reservas-online', 
                'title' => __('Reservas Online'), 
                'text' => __('Permite a tus clientes reservar online'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
            ],
            'gestion-de-clientes' => [
                'url' => 'gestion-de-clientes', 
                'title' => __('Gestión de clientes'), 
                'text' => __('Ten toda la info de tus clientes organizada'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-16.png',
            ],
            'control-de-inventarios' => [
                'url' => 'control-de-inventarios', 
                'title' => __('Control de Inventario'), 
                'text' => __('Controla tu inventario de forma online automática'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-18.png',
            ],
            'agenda-medica' => [
                'url' => 'agenda-medica', 
                'title' => __('Agenda Médica'), 
                'text' => __('Organiza tus reservas online automáticamente'), 
                'image' => 'https://agendapro.com/wp-content/uploads/2020/10/Group-15.png',
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

        $other_features[] = $this->features['reservas-online'];
        $other_features[] = $this->features['gestion-de-clientes'];
        $other_features[] = $this->features['control-de-inventarios'];
        $other_features[] = $this->features['agenda-medica'];

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

        $other_features[] = $this->features['reservas-online'];
        $other_features[] = $this->features['gestion-de-clientes'];
        $other_features[] = $this->features['control-de-inventarios'];
        $other_features[] = $this->features['agenda-medica'];

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

        $other_features[] = $this->features['reservas-online'];
        $other_features[] = $this->features['gestion-de-clientes'];
        $other_features[] = $this->features['control-de-inventarios'];
        $other_features[] = $this->features['agenda-medica'];

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

        $other_features[] = $this->features['reservas-online'];
        $other_features[] = $this->features['gestion-de-clientes'];
        $other_features[] = $this->features['control-de-inventarios'];
        $other_features[] = $this->features['agenda-medica'];

        return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    }

}
