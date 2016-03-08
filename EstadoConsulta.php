<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoConsulta extends Model {

    protected $table = 'estado_consulta';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
