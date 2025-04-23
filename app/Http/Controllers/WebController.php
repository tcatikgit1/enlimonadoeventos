<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
  public function index()
  {
    return view('enlimonado.pages.app');
  }

  public function aboutus()
  {
    return view('enlimonado.pages.Nosotros.index');
  }

  public function contact()
  {
    return view('enlimonado.pages.Contacto.index');
  }

  public function services()
  {
    return view('enlimonado.pages.services.index');
  }

  public function blog()
  {
    return view('enlimonado.pages.blog.index');
  }

<<<<<<< HEAD
  public function successes()
  {
    return view('enlimonado.pages.exitos.index');
  }

=======
  public function proyectos() {
    return view('enlimonado.pages.Proyectos.index');
  }

  public function proximos() {
    return view('enlimonado.pages.Proximos.index');
  }
>>>>>>> 1547ed1cdcd58cc484652b340b164826a4677a4f
}
