<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelAcademico extends Model {

    protected $table = 'nivel_academico';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
