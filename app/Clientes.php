<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
   protected  $fillable=[
   	'apellidos',
	'nombres',
	'nuid',
	'fecha_nacimiento',
	'direccion',
	'ciudad',
	'barrio',
	'telefono',
	'celular']; //
}
