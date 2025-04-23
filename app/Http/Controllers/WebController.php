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
    return view('enlimonado.pages.aboutus.index');
  }

  public function contact()
  {
    return view('enlimonado.pages.contact.index');
  }

  public function services()
  {
    return view('enlimonado.pages.services.index');
  }

  public function blog()
  {
    return view('enlimonado.pages.blog.index');
  }
}
