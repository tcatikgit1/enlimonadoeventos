<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use Illuminate\Support\Facades\Mail;
class InscriptController extends Controller
{
  public function store(InscriptionRequest $request)
  {
    $data = $request->validated();

    // Enviar email al administrador
    Mail::send('emails.inscript-admin', ['data' => $data], function ($m) use ($data) {
      $m->to( env('APP_MAIL') )->subject("Nuevo usuario Inscrito");
      $m->embed(public_path('assets/img/enlimonado/logo/Log2.webp'));

    });

    // Enviar email al usuario
    Mail::send('emails.inscript-user', ['data' => $data], function ($m) use ($data) {
      $m->to($data['email'])->subject('Inscripción exitosa');
      $m->embed(public_path('assets/img/enlimonado/logo/Log2.webp'));

    });

    return back()->with('success', '¡Mensaje enviado con éxito!');
  }
}
