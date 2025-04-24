<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar de forma masiva.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'company',
        'phone',
        'subject',
        'message',
    ];
}
