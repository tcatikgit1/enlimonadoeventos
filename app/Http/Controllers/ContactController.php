<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function store(Request $request)
  {
    $data = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'company' => 'nullable|string|max:255',
      'phone' => 'nullable|string|max:20',
      'subject' => 'required|string|max:255',
      'message' => 'required|string',
    ]);

    // Enviar email al administrador
    Mail::send('emails.contact-admin', ['data' => $data], function ($m) use ($data) {
      $m->to('info@enlimonadoeventos.com')->subject("{$data['subject']}");
    });

    // Enviar email al usuario
    Mail::send('emails.contact-user', ['data' => $data], function ($m) use ($data) {
      $m->to($data['email'])->subject('Hemos recibido tu mensaje');
    });

    return back()->with('success', '¡Mensaje enviado con éxito!');
  }
}
