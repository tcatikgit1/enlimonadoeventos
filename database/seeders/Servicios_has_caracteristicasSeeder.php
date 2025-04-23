<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Servicios_has_caracteristicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        DB::table('servicios_has_caracteristicas')->insert([
            ['caracteristica' => 'Diagnóstico de mercado y análisis competitivo', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 1],
            ['caracteristica' => 'Estrategia de diferenciación y propuesta de valor', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 1],
            ['caracteristica' => 'Selección de canales de entrada (físicos, digitales o mixtos)', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 1],
            ['caracteristica' => 'Plan de acción de 90 a 180 días', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 1],
            ['caracteristica' => 'Estrategia de visibilidad, atracción y conversión', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 1],
            ['caracteristica' => 'Diagnóstico comercial completo (proceso, herramientas, equipo, resultados)', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 2],
            ['caracteristica' => 'Rediseño del sistema de ventas adaptado a tu canal y modelo de negocio', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 2],
            ['caracteristica' => 'Definición de KPIs, CRM, workflow y propuestas comerciales', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 2],
            ['caracteristica' => 'Formación y coaching comercial individual o para equipos', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 2],
            ['caracteristica' => 'Acompañamiento operativo y estratégico', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 2],
            ['caracteristica' => 'Diseño del funnel desde la atracción hasta la conversión', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 3],
            ['caracteristica' => 'Automatización de procesos y segmentación de audiencias', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 3],
            ['caracteristica' => 'Copywriting estratégico y estructuración de ofertas', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 3],
            ['caracteristica' => 'Integración con herramientas (CRM, email marketing, remarketing)', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 3],
            ['caracteristica' => 'Optimización continua basada en métricas', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 3],
            ['caracteristica' => 'Análisis y selección de canales óptimos (online/offline)', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 4],
            ['caracteristica' => 'Estrategia omnicanal: retail, ecommerce, distribuidores, marketplaces', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 4],
            ['caracteristica' => 'Diseño de procesos de captación y conversión por canal', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 4],
            ['caracteristica' => 'Plan de entrada y expansión escalable', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 4],
            ['caracteristica' => 'Acompañamiento en negociaciones comerciales', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 4],
            ['caracteristica' => 'Diagnóstico de posicionamiento actual', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 5],
            ['caracteristica' => 'Definición del arquetipo de marca y narrativa', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 5],
            ['caracteristica' => 'Desarrollo del diferencial competitivo', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 5],
            ['caracteristica' => 'Estrategia de contenido, identidad verbal y tono', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 5],
            ['caracteristica' => 'Alineación entre marketing, ventas y experiencia de cliente', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 5],
            ['caracteristica' => 'Sesiones 1:1 personalizadas', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 6],
            ['caracteristica' => 'Desarrollo de habilidades de venta consultiva', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 6],
            ['caracteristica' => 'Gestión emocional del proceso comercial', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 6],
            ['caracteristica' => 'Revisión de propuestas, discurso y negociaciones', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 6],
            ['caracteristica' => 'Acompañamiento en lanzamientos y procesos clave', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 6],
            ['caracteristica' => 'Acompañamiento en la definición del producto mínimo viable (PMV)', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 7],
            ['caracteristica' => 'Análisis de pricing, rentabilidad y propuesta de valor', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 7],
            ['caracteristica' => 'Validación de mensajes y percepción de marca', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 7],
            ['caracteristica' => 'Test de mercado y feedback estructurado', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 7],
            ['caracteristica' => 'Ajustes estratégicos antes del lanzamiento', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 7],
            ['caracteristica' => 'Definición de audiencias, mensaje y promesa comercial', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 8],
            ['caracteristica' => 'Diseño de campañas en Google Ads, Meta Ads, TikTok, etc.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 8],
            ['caracteristica' => 'A/B testing, segmentación, remarketing y escalado', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 8],
            ['caracteristica' => 'Optimización por costo por adquisición (CPA)', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 8],
            ['caracteristica' => 'Alineación entre tráfico, embudo y propuesta comercial', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 8],
        ]);

    }
}
