<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model {

    protected $table = 'promocion';

        protected $fillable = ['nombre', 'fecha_inicio', 'fecha_fin', 'porcentaje_descuento', 'hora_inico', 'hora_fin'];

    public $timestamps = false;


}
