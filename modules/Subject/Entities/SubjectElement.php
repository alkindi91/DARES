<?php namespace Modules\Subject\Entities;
   
use Illuminate\Database\Eloquent\Model;

class SubjectElement extends Model {

    protected $fillable = [ 'title','subject_lesson_id','element_order','state', 'value' , 'type' ];

}