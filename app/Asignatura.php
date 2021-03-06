<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

	protected $table = 'asignaturas';
	protected $fillable = ['nombre','descripcion','codigo'];
	protected $guarded = ['id','departamento_id'];
}