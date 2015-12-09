<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Department extends Model {
	
	protected $fillable = ["name" , 'term_id', 'code', 'parent_id'];
	protected $table = 'academystructure_departments';
	
	
    public function scopeMenu($query)
	{
		$query->selectRaw('academystructure_departments.id as did, af.id as fid, ay.id as yid,at.id as tid,academystructure_departments.name as dname,at.name as tname,ay.name as yname,af.name as fname')->join('academystructure_terms as at', 'at.id', '=', 'academystructure_departments.term_id')
            ->join('academystructure_years as ay' , 'ay.id', '=', 'at.year_id')
            ->join('academystructure_faculties as af', 'af.id', '=', 'ay.faculty_id');
	}
}