<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model {

    protected $table = 'consulta';

    protected $fillable = ['calificacion', 'latitud', 'longitud'];

    public $timestamps = false;


}
