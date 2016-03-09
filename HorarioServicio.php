<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioServicio extends Model {

    protected $table = 'horario_servicio';

    protected $fillable = ['nombre','hora_inicio','hora_fin','costo'];

    public $timestamps = false;


}
