<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model {

    protected $table = 'dispositivo';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
