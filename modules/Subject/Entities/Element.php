<?php namespace Modules\Subject\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Element extends Model {

	 protected $table = 'subject_elements';

    protected $fillable = [ 'title','subject_lesson_id','element_order','state', 'value' , 'type' ];

}