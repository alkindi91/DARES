<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

	protected $fillable = ["name"];
	protected $table = 'academystructure_subjects';

}