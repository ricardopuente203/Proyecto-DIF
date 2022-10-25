<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DifAdmin extends Model
{
    protected $fillable=['Nombre', 'CURP', 'Genero', 'No_Hijos', 'Discap?', 'Nom_Discap', 'Ing_Men', 'Nom_Apoyo', 'Status_Apoyo', 'Folio'];
}
