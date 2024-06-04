<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'nombre','apellidos','sexo','fechnac','sip','curso','id_tutora','comedor',
    ];

    public function tutora(){
        return $this->belongsTo(User::class);
    }

    public function padres(){
        return $this->belongsToMany(User::class);
    }
}
