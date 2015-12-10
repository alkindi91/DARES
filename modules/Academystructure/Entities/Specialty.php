<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model {
	
	protected $fillable = ["name" , 'code'];
	protected $table = 'academystructure_specialties';
}