<?php namespace Modules\Questionbank\Entities;
   
use Illuminate\Database\Eloquent\Model;

class choice extends Model {
protected $table = 'questionbank_choices';
    protected $fillable = ['choice','question_id','isactive'];

}