<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class RegistrationFile extends Model implements StaplerableInterface
{

	use EloquentTrait;

    protected $fillable = ['type', 'file'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('file');

        parent::__construct($attributes);
    }
}
