<?php namespace Modules\Subject\Entities;
   
use Illuminate\Database\Eloquent\Model;

class SubjectSubject extends Model {

    protected $fillable = ['name','hour','code','description','type','pre_request'];

    public function prerequest()
    {
    	return $this->belongsTo('\Modules\Subject\Entities\SubjectSubject', "pre_request");
    }

   public function children()
   {
   	return $this->hasMany('\Modules\Subject\Entities\SubjectSubject' ,'pre_request');
   }

   
}