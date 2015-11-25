<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Year extends Model {

    protected $fillable = ['name' , 'faculty_id'];
	
	protected $table = 'academystructure_years';
	
	public function terms() {
    	return $this->hasMany('\Modules\Academystructure\Entities\Term' ,'term_id');
    }

}