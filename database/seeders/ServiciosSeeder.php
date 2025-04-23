<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('servicios')->insert([
            'nombre' => 'Estrategia de Lanzamiento al Mercado',
            'descripcion' => 'Creamos la hoja de ruta estratégica para llevar tu producto, marca o servicio al mercado con foco en resultado desde el día uno.',
            'ComoTrabajamos' => '¿Cómo trabajamos?',
            'textCT' => 'Nuestro enfoque es altamente personalizado y adaptado a las necesidades específicas de cada cliente. Trabajamos en fases claras con entregables definidos y seguimiento continuo.',
            'icono' => 'ti ti-rocket-takeoff',
            'iconoColor' => '#3365F3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Consultoría Comercial Estratégica',
            'descripcion' => 'Te ayudamos a construir (o reconstruir) tu sistema de ventas con estructura, foco y rentabilidad.',
            'ComoTrabajamos' => '¿Cómo trabajamos?',
            'textCT' => 'Nuestro enfoque es altamente personalizado y adaptado a las necesidades específicas de cada cliente. Trabajamos en fases claras con entregables definidos y seguimiento continuo.',
            'icono' => 'ti ti-bar-chart-line-fill',
            'iconoColor' => '#3365F3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Diseño de Embudos de Venta (Customer Journey)',
            'descripcion' => 'Transformamos tu tráfico en clientes reales. Creamos procesos de conversión medibles, personalizados y automatizados.',
            'ComoTrabajamos' => '¿Cómo trabajamos?',
            'textCT' => 'Nuestro enfoque es altamente personalizado y adaptado a las necesidades específicas de cada cliente. Trabajamos en fases claras con entregables definidos y seguimiento continuo.',
            'icono' => 'ti ti-vinyl',
            'iconoColor' => '#D65642',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Estrategia de Canales de Venta',
            'descripcion' => 'Definimos dónde y cómo vender tu producto para maximizar impacto y retorno.',
            'ComoTrabajamos' => '¿Cómo trabajamos?',
            'textCT' => 'Nuestro enfoque es altamente personalizado y adaptado a las necesidades específicas de cada cliente. Trabajamos en fases claras con entregables definidos y seguimiento continuo.',
            'icono' => 'ti ti-bag-check',
            'iconoColor' => '#D65642',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Posicionamiento de Marca y Producto',
            'descripcion' => '¿Cómo quieres que te perciban? ¿Qué lugar vas a ocupar en la mente de tu cliente ideal?.',
            'ComoTrabajamos' => '¿Cómo trabajamos?',
            'textCT' => 'Nuestro enfoque es altamente personalizado y adaptado a las necesidades específicas de cada cliente. Trabajamos en fases claras con entregables definidos y seguimiento continuo.',
            'icono' => 'ti ti-globe-europe-africa',
            'iconoColor' => '#3365F3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Coaching Comercial y Mentoría Estratégica',
            'descripcion' => 'Acompañamos líderes, equipos y emprendedores a tomar mejores decisiones, con más foco y estructura comercial.',
            'ComoTrabajamos' => '¿Cómo trabajamos?',
            'textCT' => 'Nuestro enfoque es altamente personalizado y adaptado a las necesidades específicas de cada cliente. Trabajamos en fases claras con entregables definidos y seguimiento continuo.',
            'icono' => 'ti ti-people-fill',
            'iconoColor' => '#D65642',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('servicios')->insert([
            'nombre' => 'Consultoría para el Diseño y Validación de Productos/Servicios',
            'descripcion' => '¿Tu producto o servicio realmente está listo para salir al mercado? ¿Responde a una necesidad real y rentable?',
            'ComoTrabajamos' => '¿Cómo trabajamos?',
            'textCT' => 'Nuestro enfoque es altamente personalizado y adaptado a las necesidades específicas de cada cliente. Trabajamos en fases claras con entregables definidos y seguimiento continuo.',
            'icono' => 'ti ti-book',
            'iconoColor' => '#3365F3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('servicios')->insert([
            'nombre' => 'Estrategias Publicitarias y de Adquisición de Clientes',
            'descripcion' => 'Diseñamos campañas que no solo atraen, sino que convierten. Todo empieza desde la estrategia, no desde el anuncio.',
            'ComoTrabajamos' => '¿Cómo trabajamos?',
            'textCT' => 'Nuestro enfoque es altamente personalizado y adaptado a las necesidades específicas de cada cliente. Trabajamos en fases claras con entregables definidos y seguimiento continuo.',
            'icono' => 'ti ti-chat-left',
            'iconoColor' => '#D65642',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
