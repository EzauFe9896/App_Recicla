<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactanos extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'contactanos';
	protected $primaryKey = 'id';
  //public $timestamps = false;

    protected $fillable = [
        'name',
        'apellido1',
        'apellido2',
        'distrito',
        'canton',
        'provinca',
        'email',
        'codigo',
    ];
}
