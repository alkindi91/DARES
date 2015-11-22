<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;

class RegistrationPeriod extends Model {

    protected $fillable = ['name' ,'start_at' ,'finish_at'];

}