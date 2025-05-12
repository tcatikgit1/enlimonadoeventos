<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendInscriptionEmails implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  public array $data;

  public function __construct(array $data)
  {
    $this->data = $data;
  }

  public function handle(): void
  {
    // Email al administrador
    Mail::send('emails.inscript-admin', ['data' => $this->data], function ($m) {
      $m->to(env('APP_MAIL'))->subject("Nuevo usuario Inscrito");
      $m->embed(public_path('assets/img/enlimonado/logo/Log2.png'));
    });

    // Email al usuario
    Mail::send('emails.inscript-user', ['data' => $this->data], function ($m) {
      $m->to($this->data['email'])->subject('Inscripción exitosa');
      $m->embed(public_path('assets/img/enlimonado/logo/Log2.png'));
    });
  }
}
