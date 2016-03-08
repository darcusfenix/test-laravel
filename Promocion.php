<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model {

    protected $table = 'promocion';

        protected $fillable = ['nombre', 'fechaInicio', 'fechaFin', 'porcentajeDescuento', 'horaInico', 'horaFin'];

    public $timestamps = false;


}
