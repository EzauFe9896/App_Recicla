<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroVoluntario extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'registrovoluntario';
	protected $primaryKey = 'id';
    //public $timestamps = false;

    protected $fillable = [
        'id',
        'cedula',
        'name',
        'apellido1',
        'apellido2',
        'distrito',
        'canton',
        'provincia',
        'celular',
        'email',
        'sexo',
        'comentario'
    ];
}
