<?php namespace Modules\Lists\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Region extends Model {

	protected $table='lists_regions';

    protected $fillable = ['name' ,'state_id'];

    public function state() {
    	return $this->belongsTo('\Modules\Lists\Entities\State');
    }

}