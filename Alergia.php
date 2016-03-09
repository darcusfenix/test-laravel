<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alergia extends Model {

    protected $table = 'alergia';

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function pacientes()
    {
        return $this->hasMany('Paciente');
    }


}
