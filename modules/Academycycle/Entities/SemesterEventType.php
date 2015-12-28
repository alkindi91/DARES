<?php namespace Modules\Academycycle\Entities;
   
use Illuminate\Database\Eloquent\Model;

class SemesterEventType extends Model {
	
	protected $table = 'academycycle_semesterevent_types';

    protected $fillable = ['name' ,'category' , 'note' , 'show'];

}