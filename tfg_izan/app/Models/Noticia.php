<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'contenido','profe_id',
    ];

    public function escritora(){
        return $this->belongsTo(User::class);
    }
}
