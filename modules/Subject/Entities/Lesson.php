<?php namespace Modules\Subject\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model {

	 protected $table = 'subject_lessons';

    protected $fillable = [
    	'name',
        'order',
        'lesson_order',
        'state',
        'subject_subject_id',
        'type'];

}