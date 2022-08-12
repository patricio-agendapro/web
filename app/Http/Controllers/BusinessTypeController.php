<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

class BusinessTypeController extends Controller
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

    public function gimnasio($locale)
    {
        $this->seo->title(__('Agenda Online') . " - AgendaPro");
        $this->seo->meta('description', __('Accede a tu Agenda Online desde cualquier lugar y ordena tus citas de forma fácil e intuitiva con AgendaPro. Click acá y pide tu demo personalizada.'));

        $meta = array(
            "bodyclass" => "features",
        );

        $content = array(
            "h1" => __("Software para gimnasio"),
            "h1_sub" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2" => __("Gestiona tus citas, clientes y ventas en un mismo lugar"),
            "h2_sub" => __("Cambia la forma de gestionar tu gimnasio y preocúpate de lo más importantes ¡Tus Clientes!"),
            "image_header" => "https://agendapro.com/wp-content/uploads/2021/03/Mobile_-Gimnasios@3x-8-1.png",
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

        return view('businesstype', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);

    }

   
}
