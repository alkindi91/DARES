<?php namespace Modules\Questionbank\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	protected $table = 'questionbank_questions';

    protected $fillable = ['question','type','isactive','difficulty','level','lesson_id'];

     public function question()
    {
    	return $this->belongsTo('\Modules\subject\Entities\Lesson', 'lesson_id');
    }

}