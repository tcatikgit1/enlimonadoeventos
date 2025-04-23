<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Servicios_has_para_quienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios_has_para_quien')->insert([
            ['titulo' => 'Empresas en crecimiento', 'descripcion' => 'Que necesitan optimizar su estrategia comercial y sistemas de venta para escalar.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 1],
            ['titulo' => 'Negocios consolidados', 'descripcion' => 'Que quieren lanzar nuevas líneas de negocio o expandirse a nuevos mercados.',  'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 1],
            ['titulo' => 'Startups y nuevos proyectos', 'descripcion' => 'Que buscan validar su modelo y definir una estrategia de entrada efectiva al mercado.',  'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 2],
            ['titulo' => 'Equipos comerciales', 'descripcion' => 'Que necesitan mejorar sus procesos, herramientas y habilidades de venta.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 2],
            ['titulo' => 'Empresas en crecimiento', 'descripcion' => 'Que necesitan optimizar su estrategia comercial y sistemas de venta para escalar.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 3],
            ['titulo' => 'Negocios consolidados', 'descripcion' => 'Que quieren lanzar nuevas líneas de negocio o expandirse a nuevos mercados.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 3],
            ['titulo' => 'Startups y nuevos proyectos', 'descripcion' => 'Que buscan validar su modelo y definir una estrategia de entrada efectiva al mercado.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 4],
            ['titulo' => 'Equipos comerciales', 'descripcion' => 'Que necesitan mejorar sus procesos, herramientas y habilidades de venta.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 4],
            ['titulo' => 'Empresas en crecimiento', 'descripcion' => 'Que necesitan optimizar su estrategia comercial y sistemas de venta para escalar.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 5],
            ['titulo' => 'Negocios consolidados', 'descripcion' => 'Que quieren lanzar nuevas líneas de negocio o expandirse a nuevos mercados.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 5],
            ['titulo' => 'Startups y nuevos proyectos', 'descripcion' => 'Que buscan validar su modelo y definir una estrategia de entrada efectiva al mercado.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 6],
            ['titulo' => 'Equipos comerciales', 'descripcion' => 'Que necesitan mejorar sus procesos, herramientas y habilidades de venta.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 6],
            ['titulo' => 'Empresas en crecimiento', 'descripcion' => 'Que necesitan optimizar su estrategia comercial y sistemas de venta para escalar.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 7],
            ['titulo' => 'Negocios consolidados', 'descripcion' => 'Que quieren lanzar nuevas líneas de negocio o expandirse a nuevos mercados.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 7],
            ['titulo' => 'Startups y nuevos proyectos', 'descripcion' => 'Que buscan validar su modelo y definir una estrategia de entrada efectiva al mercado.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 8],
            ['titulo' => 'Equipos comerciales', 'descripcion' => 'Que necesitan mejorar sus procesos, herramientas y habilidades de venta.', 'created_at' => now(), 'updated_at' => now(), 'servicio_id' => 8],
        ]);
    }
}
