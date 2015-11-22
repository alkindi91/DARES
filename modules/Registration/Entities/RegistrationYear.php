<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;

class RegistrationYear extends Model {

    protected $fillable = ['start_at', 'finish_at', 'name'];

}