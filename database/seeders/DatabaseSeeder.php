<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run()
  {
    $this->call([
      BlogSeeder::class,
      ServiciosSeeder::class,
      Servicios_has_caracteristicasSeeder::class,
      Servicios_has_para_quienSeeder::class,
      UserSeeder::class
    ]);


  }
}
