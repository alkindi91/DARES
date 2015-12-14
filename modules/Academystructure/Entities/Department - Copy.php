<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Department extends Model {
	
	protected $fillable = [ 'spec_id', 'term_id',  'parent_id'];
	protected $table = 'academystructure_departments';
	
	
    public function scopeMenu($query)
	{
		$query->selectRaw('academystructure_departments.id,parent_id, as.id as sid, af.id as fid, ay.id as yid,at.id as tid,
						   as.code as scode ,as.name as sname ,at.name as tname,ay.name as yname,af.name as fname')
			->join('academystructure_specialties as as', 'as.id', '=', 'academystructure_departments.spec_id')
			->join('academystructure_terms as at', 'at.id', '=', 'academystructure_departments.term_id')
            ->join('academystructure_years as ay' , 'ay.id', '=', 'at.year_id')
            ->join('academystructure_faculties as af', 'af.id', '=', 'ay.faculty_id');
	}
	
	public function parent_department()
	{
		return $this->belongsTo("Modules\Academystructure\Entities\Department", 'parent_id')->menu();
	}
	
	
}