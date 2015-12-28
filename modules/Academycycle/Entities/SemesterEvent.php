<?php namespace Modules\Academycycle\Entities;
   
use Illuminate\Database\Eloquent\Model;

class SemesterEvent extends Model {
	
	protected $table = 'academycycle_semesterevents';

    protected $fillable = ['type_id', 'start_at', 'finish_at'];

}