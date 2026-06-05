<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'organizador', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}