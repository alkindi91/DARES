<?php namespace Modules\Subject\Entities;
   
use Illuminate\Database\Eloquent\Model;

class SubjectSubject extends Model {

    protected $fillable = ['name','term_id','hour','code','description','type'];

}