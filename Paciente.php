<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model {

    protected $table = 'paciente';

    protected $fillable = ['actual_longitud', 'actual_latitud', 'tarjeta_valida'];

    public $timestamps = false;

}
