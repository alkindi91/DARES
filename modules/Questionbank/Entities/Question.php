<?php namespace Modules\Questionbank\Entities;
   
use Illuminate\Database\Eloquent\Model;

class question extends Model {

	protected $table = 'questionbank_questions';

    protected $fillable = ['question','type','isactive','difficulty','level','lesson_id'];

}