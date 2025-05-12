<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactEmails implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  public array $data;

  public function __construct(array $data)
  {
    $this->data = $data;
  }

  public function handle(): void
  {
    // Email al admin
    Mail::send('emails.contact-admin', ['data' => $this->data], function ($m) {
      $m->to(env('APP_MAIL'))->subject($this->data['subject']);
      $m->embed(public_path('assets/img/enlimonado/logo/Logcorreo.png'));
    });

    // Email al usuario
    Mail::send('emails.contact-user', ['data' => $this->data], function ($m) {
      $m->to($this->data['email'])->subject('Hemos recibido tu mensaje');
      $m->embed(public_path('assets/img/enlimonado/logo/Logcorreo.png'));
    });
  }
}
