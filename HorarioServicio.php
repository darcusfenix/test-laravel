<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioServicio extends Model {

    protected $table = 'horario_servicio';

    protected $fillable = ['nombre','horaInicio','horaFin','costo'];

    public $timestamps = false;


}
