<?php

namespace App\Models;

use App\Serie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['numero'];


    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function serie(){
        return $this->belongsTo(Serie::class);
    }
}
