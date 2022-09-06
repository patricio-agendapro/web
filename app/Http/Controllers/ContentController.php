<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

class ContentController extends Controller
{
    public function __construct()
    {
        ////se setea el locale para el lenguaje
        set_locale();

        $this->seo = seo();
        $this->seo = app(SeoService::class);
        $this->seo = Seo::make();
        
    }

    public function pricing($locale)
    {
        
        $meta = array(
            "bodyclass" => "pricing",
        );

        return view('pricing', ['locale' => $locale, 'meta' => $meta]);
        
    }

    public function testimonials($locale)
    {
        
        $meta = array(
            "bodyclass" => "testimonials",
        );


        $testimonials = [
            [
                'text' => __('La mejor secretaria virtual. Nuestros clientes están agendando directo sin consultarnos.'), 
                'name' => 'Aldo', 
                'name_2' => 'Instructor & Terapeuta',
            ],
            [
                'text' => __('Siempre me resuelven todas las dudas. Nunca me han dejado de responder.'), 
                'name' => 'Nathalia', 
                'name_2' => 'Pediatra en Colombia',
            ],
            [
                'text' => __('Es mi asistente personal: No más tiempo perdido coordinando horas por Whatsapp con pacientes'), 
                'name' => 'Christiane', 
                'name_2' => 'Dentista en Chile',
            ],
            [
                'text' => __('Agenda Pro es un socio perfecto!'), 
                'name' => 'Marisol', 
                'name_2' => 'Gerente en Chile',
            ],
            [
                'text' => __('Una excelente experiencia en la contratación y la asistencia'), 
                'name' => 'Jorge', 
                'name_2' => 'CO en Chile',
            ],
            [
                'text' => __('Es muy versátil y fácil de usar! nos facilita las tareas y organización de consultorios'), 
                'name' => 'Aixa', 
                'name_2' => 'Administrador en Argentina',
            ],
            [
                'text' => __('Me gusta sobre todo lo intuitivo, versátil y flexible que es. Buen servicio!'), 
                'name' => 'Karem', 
                'name_2' => 'Psicologa en Chile',
            ],
            [
                'text' => __('Me alivió totalmente el estar contestando el teléfono.'), 
                'name' => 'Julie', 
                'name_2' => 'Administrador en Chile',
            ],
        ];

        $testimonials_video = [
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

        return view('testimonials', ['locale' => $locale, 'meta' => $meta, 'testimonials' => $testimonials, 'testimonials_video' => $testimonials_video]);
        
    }

    public function terms($locale)
    {
        
        $meta = array(
            "bodyclass" => "terms",
        );

        return view('terms', ['locale' => $locale, 'meta' => $meta]);
        
    }

}
