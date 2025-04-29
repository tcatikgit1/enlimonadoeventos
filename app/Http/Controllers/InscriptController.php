<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use App\Jobs\SendInscriptionEmails;

class InscriptController extends Controller
{
  public function store(InscriptionRequest $request)
  {
    $data = $request->validated();

    // Enviar job
    SendInscriptionEmails::dispatch($data);

    return back()->with('success', '¡Inscripción enviada con éxito!');
  }
}
