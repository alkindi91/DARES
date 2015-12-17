<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

    protected $fillable = ['id','dep_id','sub_id'];
    protected $table = 'academystructure_subjects';
}