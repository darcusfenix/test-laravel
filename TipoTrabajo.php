<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTrabajo extends Model {

    protected $table = 'tipo_trabajo';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
