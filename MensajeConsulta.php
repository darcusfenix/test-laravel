<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MensajeConsulta extends Model {

    protected $table = 'mensaje_consulta';

    protected $fillable = ['contenido'];

    public $timestamps = false;


}
