<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model {

    protected $table = 'institucion';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
