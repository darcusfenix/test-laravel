<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model {

    protected $table = 'medico';

    protected $fillable = ['actual_longitud','actual_latitud', 'disponible', 'tarjeta_valida'];

    public $timestamps = false;

    public function alergia()
    {
        return $this->belongsTo('Alergia');
    }

}
