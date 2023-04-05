<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images'; // defino la tabla de consultas

    // Relacion One To Many / relacion de 1 a muchos
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }

    // Relacion de muchos a Uno
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}