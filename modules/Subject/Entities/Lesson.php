<?php namespace Modules\Subject\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

	protected $table = 'subject_lessons';

    protected $fillable = [
    	'name',
        'order',
        'lesson_order',
        'state',
        'subject_subject_id',
        'type'];

    

    public function subject_name()
    {
    	return $this->belongsTo('\Modules\Subject\Entities\Subject', "subject_subject_id");
    }

}