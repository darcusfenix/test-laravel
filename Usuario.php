<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

    protected $table = 'usuario';

    protected $fillable = ['nombre','apellido_p', 'apellido_m', 'correo', 'password', 'telefono', 'sexo', 'id_gcm', 'r_token'];

    public $timestamps = false;


}
