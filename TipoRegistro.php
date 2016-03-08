<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRegistro extends Model {

    protected $table = 'tipo_registro';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
