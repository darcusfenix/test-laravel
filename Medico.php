<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model {

    protected $table = 'medico';

    protected $fillable = ['actualLongitud','actualLatitud', 'disponible', 'tarjeta_valida'];

    public $timestamps = false;


}
