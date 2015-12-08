<?php namespace Modules\Academycycle\Entities;
   
use Illuminate\Database\Eloquent\Model;

class AcademycycleYear extends Model {

    protected $fillable = ['start_at', 'finish_at', 'name'];


    public function scopeNotFinished($query)
    {
    	return $query->where('academycycle_years.finish_at', '>=' ,date('Y-m-d'));
    }
}