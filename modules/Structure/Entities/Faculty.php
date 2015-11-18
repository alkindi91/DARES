<?php namespace Modules\Structure\Entities;
   
use Illuminate\Database\Eloquent\Model;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Faculty extends Model implements StaplerableInterface {
	use EloquentTrait;

    protected $fillable = ['photo' ,'file'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('photo', [
            'styles' => [
                'small' => '50x50',
                'medium' => '300x300',
                'thumb' => '100x100'
            ]
        ]);

		 $this->hasAttachedFile('file');

        parent::__construct($attributes);
    }

}