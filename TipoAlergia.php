<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAlergia extends Model {

    protected $table = 'tipo_alergia';

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function alergias() {
        return $this->hasMany('App\Alergia', 'id');
    }
}
