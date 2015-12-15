<?php namespace Modules\Subject\Entities;
   
use Illuminate\Database\Eloquent\Model;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Element extends Model implements StaplerableInterface
{

	use EloquentTrait;
	
	protected $table = 'subject_elements';

    protected $fillable = [ 'file','title','subject_lesson_id','element_order','state', 'value' , 'type' ];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('file');

        parent::__construct($attributes);
    }

    public function lesson_name()
    {
    	return $this->belongsTo('\Modules\Subject\Entities\Lesson', "subject_lesson_id");
    }

}