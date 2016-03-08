<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model {

    protected $table = 'alergia';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
