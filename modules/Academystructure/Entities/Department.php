<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Department extends Model {
	
	protected $fillable = ["name"];
	protected $table = 'academystructure_departments';

}