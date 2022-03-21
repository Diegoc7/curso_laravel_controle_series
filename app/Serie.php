<?php

namespace App;

use App\Models\Temporada;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
   
   // protected $table = 'series';
   //se quiser passar o nome da tabela, se não é pego o nome da classe e passado para minusculo e no plural
   
   public $timestamps = false;
   protected $fillable = ['nome'];


   public function temporadas()
   {
      return $this->hasMany(Temporada::class);
   }
}