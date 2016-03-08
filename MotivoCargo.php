<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoCargo extends Model {

    protected $table = 'motivo_cargo';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
