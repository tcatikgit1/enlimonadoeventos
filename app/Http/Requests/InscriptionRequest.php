<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class InscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string|max:255',
            // Agregamos validación para el token de reCAPTCHA
            'recaptcha_token' => 'required|string',
        ];
    }

    /**
     * Verificar el reCAPTCHA con la API de Google.
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $recaptchaToken = $this->input('recaptcha_token');
            $secretKey = env('RECAPTCHA_SECRET_KEY'); // Asegúrate de que tienes tu clave secreta en .env

            // Verificar el token de reCAPTCHA con la API de Google
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $secretKey,
                'response' => $recaptchaToken,
                'remoteip' => $this->ip(),  // Opcional, pero puedes incluir la IP del usuario
            ]);

            $responseBody = $response->json();

            if (empty($responseBody['success']) || !$responseBody['success']) {
                // Si la respuesta de reCAPTCHA es incorrecta, agregar un error de validación
                $validator->errors()->add('recaptcha_token', 'La validación de reCAPTCHA ha fallado.');
            }
        });
    }
}
