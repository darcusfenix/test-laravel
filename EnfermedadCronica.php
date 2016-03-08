<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EnfermedadCronica extends Model {

    protected $table = 'enfermedad_cronica';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
