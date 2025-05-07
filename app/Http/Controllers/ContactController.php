<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Jobs\SendContactEmails;

class ContactController extends Controller
{
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        SendContactEmails::dispatch($data);

        return back()->with('success', '¡Mensaje enviado con éxito!');
    }
}
