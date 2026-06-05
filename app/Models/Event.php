<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Agrega esta propiedad
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'organizador', 
        'category_id'
    ];
}