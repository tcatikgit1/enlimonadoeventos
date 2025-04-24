<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class WebController extends Controller {
  public function index() {
    return view('enlimonado.pages.app');
  }

  public function aboutus() {
    return view('enlimonado.pages.Nosotros.index');
  }

  public function contact() {
    return view('enlimonado.pages.Contacto.index');
  }

  public function successes() {
    return view('enlimonado.pages.exitos.index');
  }

  public function proyectos() {
    return view('enlimonado.pages.Proyectos.index');
  }

  public function proximos() {
    return view('enlimonado.pages.Proximos.index');
  }

  public function proyectoDetalle($slug) {
    $articles = [
      'painting-room' => [
        'img' => 'eve1.webp',
        'tag' => 'Evento',
        'title' => 'Painting room',
        'author' => 'Ayuntamiento de Las Palmas',
        'objetivo' => 'Lanzar un nuevo producto con éxito en el primer trimestre del año.',
        'que_se_hizo' => 'Se realizó una investigación de mercado, planificación estratégica y ejecución de una campaña de marketing multicanal.',
        'twist' => 'Aplicación de storytelling emocional en todos los canales de comunicación, destacando valores de marca.'
      ],
      'primera-rage-room-de-canarias' => [
        'img' => 'eve2.webp',
        'tag' => 'Evento',
        'title' => 'Primera Rage Room de CANARIAS',
        'author' => 'María Gómez',
        'objetivo' => 'Reducir la tasa de abandono en el embudo de ventas.',
        'que_se_hizo' => 'Se rediseñó el embudo, se incorporaron automatizaciones y se realizó A/B testing.',
        'twist' => 'Se utilizó gamificación en la etapa de retención para mantener al cliente interesado.'
      ],
      'evento-21-aniversario' => [
        'img' => 'eve3.webp',
        'tag' => 'Evento',
        'title' => 'Evento 21 aniversario',
        'author' => 'Carlos Torres',
        'objetivo' => 'Aumentar la visibilidad orgánica en motores de búsqueda.',
        'que_se_hizo' => 'Optimización de contenido, mejora en la estructura del sitio y backlinks.',
        'twist' => 'Integración de IA para análisis predictivo de keywords.'
      ],
      'concierto-maikel-delacalle' => [
        'img' => 'eve4.webp',
        'tag' => 'Evento',
        'title' => 'Concierto Maikel Delacalle',
        'author' => 'Carlos Torres',
        'objetivo' => 'Aumentar la visibilidad orgánica en motores de búsqueda.',
        'que_se_hizo' => 'Optimización de contenido, mejora en la estructura del sitio y backlinks.',
        'twist' => 'Integración de IA para análisis predictivo de keywords.'
      ],
      'evento-ioc-2022' => [
        'img' => 'eve5.webp',
        'tag' => 'Evento',
        'title' => 'Evento IOC 2022',
        'author' => 'Carlos Torres',
        'objetivo' => 'Aumentar la visibilidad orgánica en motores de búsqueda.',
        'que_se_hizo' => 'Optimización de contenido, mejora en la estructura del sitio y backlinks.',
        'twist' => 'Integración de IA para análisis predictivo de keywords.'
      ],
      'evento-find-the-rider' => [
        'img' => 'eve6.webp',
        'tag' => 'Evento',
        'title' => 'Evento Find The Rider',
        'author' => 'Carlos Torres',
        'objetivo' => 'Aumentar la visibilidad orgánica en motores de búsqueda.',
        'que_se_hizo' => 'Optimización de contenido, mejora en la estructura del sitio y backlinks.',
        'twist' => 'Integración de IA para análisis predictivo de keywords.'
      ]

    ];

    if (!isset($articles[$slug])) {
      abort(404);
    }

    return view('enlimonado.pages.Proyectos.detalles', ['project' => $articles[$slug]]);
  }
}
