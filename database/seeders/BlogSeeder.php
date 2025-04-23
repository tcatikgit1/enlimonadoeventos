<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
  public function run()
  {
    $blogs = [
      [
        'title' => 'Cómo diseñar una estrategia de lanzamiento efectiva en 2023',
        'excerpt' => 'Descubre las claves para crear una estrategia de lanzamiento que maximice el impacto de tu producto o servicio en el...',
        'content' => 'Contenido completo del artículo de estrategia de lanzamiento...',
        'image' => 'assets/img/enlimonado/blog/blog1.jpg',
        'author' => 'Daniel Trefny',
        'published_at' => Carbon::create(2023, 4, 10),
      ],
      [
        'title' => 'Los 7 errores más comunes en embudos de venta y cómo...',
        'excerpt' => 'Analizamos los fallos que comprometen la efectividad de los embudos de conversión y compartimos soluciones prácticas para...',
        'content' => 'Contenido completo del artículo sobre errores en embudos de venta...',
        'image' => 'assets/img/enlimonado/blog/blog2.jpg',
        'author' => 'Laura Castañeda',
        'published_at' => Carbon::create(2023, 3, 24),
      ],
      [
        'title' => 'Posicionamiento SEO: Estrategias que funcionan en...',
        'excerpt' => 'Guía completa sobre técnicas avanzadas de SEO para destacar en sectores con alta competencia y generar tráfico cualificado.',
        'content' => 'Contenido completo del artículo sobre SEO...',
        'image' => 'assets/img/enlimonado/blog/blog3.jpg',
        'author' => 'Laura Castañeda',
        'published_at' => Carbon::create(2023, 3, 24),
      ],
      [
        'title' => 'Consultoría comercial: Cómo transformar equipos de venta...',
        'excerpt' => 'Metodología paso a paso para modernizar y optimizar equipos comerciales, adaptándolos a las nuevas dinámicas del...',
        'content' => 'Contenido completo del artículo de consultoría comercial...',
        'image' => 'assets/img/enlimonado/blog/blog4.jpg',
        'author' => 'Daniel Trefny',
        'published_at' => Carbon::create(2023, 3, 8),
      ],
      [
        'title' => 'Estrategia omnicanal: Integrando la experiencia...',
        'excerpt' => 'Claves para crear una experiencia de cliente coherente y efectiva a través de múltiples canales de venta y comunicación.',
        'content' => 'Contenido completo del artículo de estrategia omnicanal...',
        'image' => 'assets/img/enlimonado/blog/blog5.jpg',
        'author' => 'Daniel Trefny',
        'published_at' => Carbon::create(2023, 2, 28),
      ],
      [
        'title' => 'El arte de la propuesta comercial: Cómo aumentar la...',
        'excerpt' => 'Análisis de los elementos clave que debe incluir una propuesta comercial efectiva para aumentar significativamente tus...',
        'content' => 'Contenido completo del artículo sobre propuestas comerciales...',
        'image' => 'assets/img/enlimonado/blog/blog6.jpg',
        'author' => 'Daniel Trefny',
        'published_at' => Carbon::create(2023, 2, 15),
      ],
    ];

    foreach ($blogs as $blog) {
      Blog::create($blog);
    }
  }
}
