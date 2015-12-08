<?php namespace Modules\Academycycle\Entities;
   
use Illuminate\Database\Eloquent\Model;

class AcademycycleYear extends Model {

    protected $fillable = ['start_at', 'finish_at', 'name'];

}