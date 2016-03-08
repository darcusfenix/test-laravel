<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model {

    protected $table = 'paciente';

    protected $fillable = ['actualLongitud', 'actualLatitud', 'tarjeta_valida'];

    public $timestamps = false;

}
