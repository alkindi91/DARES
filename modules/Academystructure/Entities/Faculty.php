<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model {

    protected $fillable = ["name"];
	protected $table = 'academystructure_faculties';
	
	public function scopeBreadcrumbs($query)
	{
		
		$query->selectRaw('academystructure_faculties.id as fid, 
													ay.id as yid,
													at.id as tid,
													ad.id as did, 
													as.id as sid,  
													
													academystructure_faculties.name as fname,
													ay.name as yname,
													at.name as tname,
													ad.parent_id,
													as.code as scode ,
													as.name as sname ')
													
						   
            ->leftJoin('academystructure_years as ay' , 'ay.faculty_id', '=', 'academystructure_faculties.id')
			->leftJoin('academystructure_terms as at', 'at.year_id', '=', 'ay.id')
            ->leftJoin('academystructure_departments as ad', 'ad.term_id', '=', 'at.id')
			->leftJoin('academystructure_specialties as as', 'as.id', '=', 'ad.spec_id');
	}
	
	public function years() {
    	return $this->hasMany('\Modules\Academystructure\Entities\Year' ,'faculty_id');
    }
	
}