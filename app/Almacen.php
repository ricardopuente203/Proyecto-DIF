<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $fillable=['NombreApoyo','DescripcionApoyo','RequisitosApoyo','NumeroDespensas','PeriodoDuracion'];
}
