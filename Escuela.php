<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model {

    protected $table = 'escuela';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
