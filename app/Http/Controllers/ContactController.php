<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function store(StorePostRequest $request)
  {
    $data = $request->validated();

    // Enviar email al administrador
    Mail::send('emails.contact-admin', ['data' => $data], function ($m) use ($data) {
      $m->to(env('APP_MAIL'))->subject("{$data['subject']}");
      $m->embed(public_path('assets/img/enlimonado/logo/Log2.webp'));

    });

    // Enviar email al usuario
    Mail::send('emails.contact-user', ['data' => $data], function ($m) use ($data) {
      $m->to($data['email'])->subject('Hemos recibido tu mensaje');
      $m->embed(public_path('assets/img/enlimonado/logo/Log2.webp'));

    });

    return back()->with('success', '¡Mensaje enviado con éxito!');
  }
}
