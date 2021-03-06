<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $fillable = [
      'nombre', 'detalles'
    ];
    public function equipos()
    {
      // code...
      return $this->hasMany(Equipo::class);
    }
}
