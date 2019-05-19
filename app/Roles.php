<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
	//referancia a la tabla roles
	protected $table = 'roles';

    protected $fillable = ['rolname', 'descripcion'];
    // /para que no se envien datos de tiempo
    public $timestamps=false;

}
