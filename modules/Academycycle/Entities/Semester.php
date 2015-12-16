<?php namespace Modules\Academycycle\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Semester extends Model {

	protected $fillable = [ 'name', 'start_at',  'finish_at' , 'active' , 'academycycle_year_id'];
	protected $table = 'academycycle_semesters';

    public function year() {
    	return $this->belongsTo('\Modules\Academycycle\Entities\AcademycycleYear' ,'academycycle_year_id');
    }
}