<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class StorePostRequest extends FormRequest
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
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'recaptcha_token' => 'required|string',
        ];
    }

    /**
     * Custom validation logic after base rules are validated.
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $token = $this->input('recaptcha_token');

            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $token,
                'remoteip' => $this->ip(),
            ]);

            $result = $response->json();

            if (
                !isset($result['success']) || $result['success'] !== true ||
                !isset($result['score']) || $result['score'] < 0.5
            ) {
                $validator->errors()->add('recaptcha_token', 'No se pudo verificar que eres humano. Intenta nuevamente.');
            }
        });
    }
}
