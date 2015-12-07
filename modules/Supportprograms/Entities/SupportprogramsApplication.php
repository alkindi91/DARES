<?php namespace Modules\Supportprograms\Entities;
   
use Illuminate\Database\Eloquent\Model;

class SupportprogramsApplication extends Model {

    protected $fillable = ['name' , 'comment' , 'program_link' , 'guide_link'];

}