<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
  //paso 2.1 definir la tabla de la base de datos
    protected $table = 'categoria';
    /*  protected $fillable = [
        'Nombre','Desc_Categoria','img',
     ];
     protected $primaryKey='id';*/
}
