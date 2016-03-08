<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEnfermedadCronica extends Model {

    protected $table = 'tipo_enfermedad_cronica';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
