<?php namespace Modules\Subject\Entities;
   
use Illuminate\Database\Eloquent\Model;

class SubjectLesson extends Model {

    protected $fillable = [
    	'name',
        'order',
        'lesson_order',
        'state',
        'subject_subject_id'];

}