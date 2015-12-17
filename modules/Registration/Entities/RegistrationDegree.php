<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;

class RegistrationDegree extends Model {

	public $timestamps = false;

    protected $fillable = ['degree_name',
    'degree_speciality',
    'degree_institution',
    'degree_graduation_year',
    'degree_score',
    'degree_country_id',
    'degree_country_id'];

    


}