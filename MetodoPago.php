<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model {

    protected $table = 'metodo_pago';

    protected $fillable = ['nombre'];

    public $timestamps = false;


}
