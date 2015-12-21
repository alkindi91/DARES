<?php namespace Modules\Subject\Entities;
   
use Illuminate\Database\Eloquent\Model;


class Subject extends Model {

    protected $table = 'subject_subjects';
 
    protected $fillable = ['name','hour','code','description','type','pre_request','dep_id'];

    public function prerequest()
    {
    	return $this->belongsTo('\Modules\Subject\Entities\Subject', "pre_request");
    }

   public function children()
   {
   	return $this->hasMany('\Modules\Subject\Entities\Subject' ,'pre_request');
   }

   public function questions()
   {
      return $this->hasManyThrough('\Modules\Questionbank\Entities\Question',
        '\Modules\Subject\Entities\Lesson','subject_subject_id', 'lesson_id');
   }

   
}